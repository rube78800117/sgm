<?php

namespace App\Http\Livewire\Admin;

use App\Models\Line;
use Livewire\Component;
use App\Models\User;
use App\Models\OrderDetail;
use App\Models\Warehouse;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class StatusOrder extends Component
{
    public $order, $line_origin_color, $status, $val, $approved, $line_destiny_color, $observation, $observation_destiny, $mov, $movement_type, $articleOutStock;
    public function mount()
    {
        if ($this->order->status <= 2) {
            $this->order->status = 3;
            $this->order->save();
        }
      
        $this->status = $this->order->status;
        $this->orLineColor($this->order->origin_line_id);
        $this->destinyLineColor($this->order->destiny_mov_warehouse_id);
    }

    public function render()
    {
        $destination = Warehouse::find($this->order->destiny_mov_warehouse_id);
        
        $user = User::find($this->order->user_id);
        // dd( $destination->station->line->name);
        $items = json_decode($this->order->content);

        // dd($items);
        return view('livewire.admin.status-order', compact('items', 'destination', 'user'));
    }
    public function update()
    {
        $this->order->status = $this->status;
        $this->order->save();
    }

    public function orLineColor($id){

        $line = Line::find($id);
        $this->line_origin_color=$line->color;

    }


    public function destinyLineColor($id){

        $warehouse = Warehouse::find($id);
        $this->line_destiny_color=$warehouse->station->line->color;

    }

    public function statusMovementSave($val)
    {
        $this->validate([
            'observation_destiny' => 'required',
        ]);

        try {
            DB::transaction(function () use ($val) {
                // if ($val == 6) {
                //     $items = json_decode($this->order->content);

                //     foreach ($items as $item) {
                //         income_ajust($item, $this->order->movement_type, $this->order->destiny_mov_warehouse_id);
                //     }
                // }

                $this->order->destiny_aprov_user_id = auth()->user()->id;
                $this->order->status = $val; // anulado o aprobado
                $this->order->observation_destiny = $this->observation_destiny; // observacion de rcepcion por parte del administrador de la linea de  destino
                $this->order->destiny_aprov_date = Carbon::now(); //fecha de aprovacion o recepcion en destino
                $this->order->save();
            });
        } catch (Exception $e) {
            // Manejo de errores
            return back()->withError('An error occurred while processing the status update.');
        }
    }

    public function status_save($val)
    {
        $this->validate([
            'observation' => 'required',
        ]);
        // dd($this->observation);

        try {
            DB::transaction(function () use ($val) {
                if ($val == 6) {
                    $items = json_decode($this->order->content);

                    foreach ($items as $item) {
                        income_ajust($item, $this->order->movement_type, $this->order->destiny_mov_warehouse_id);
                    }
                } elseif ($val == 4) {
                    $items = json_decode($this->order->content);

                    foreach ($items as $item) {
                        $detalle = [
                            'order_id' => $this->order->id,
                            'article_id' => $item->options->id_art,
                            'article_name' => $item->name,
                            'warehouse_id' => $item->id,
                            'warehouse_name' => $item->options->warehouse,
                            'quantity' => $item->qty,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];

                        OrderDetail::insert($detalle);
                    }
                }

                $this->order->approved_user_id = auth()->user()->id;
                $this->order->status = $val; // anulado o aprobado
                $this->order->observation_origin = $this->observation; // observacion por parte del administrador que aprueba o anula el pedido
                $this->order->save();
            });
        } catch (Exception $e) {
            // Manejo de errores
            return back()->withError('An error occurred while processing the status update.');
        }
    }

    // public function status_save($val)
    // {

    //     if ($val == 6) {

    //         $items = json_decode($this->order->content);

    //         foreach ($items as $key => $item) {

    //              income_ajust($item);

    //         }
    //     } else {

    //         if ($val == 4) {

    //             $items = json_decode($this->order->content);

    //             foreach ($items as $key => $item) {

    //             $detalle = array(

    //                         "order_id" => $this->order->id,
    //                         "article_id" => $item->options->id_art,
    //                         "article_name" => $item->name,
    //                         "warehouse_id" => $item->id,
    //                         "warehouse_name" => $item->options->warehouse,
    //                         "quantity" => $item->qty,
    //                         "created_at" => now(),
    //                         "updated_at" => now()
    //                         );

    //              OrderDetail::insert($detalle);

    //             }

    //         }

    //     }

    //     $this->order->approved_user_id = auth()->user()->id;
    //     $this->order->status = $val; //anulado ó aprobado
    //     $this->order->save();
    // }
}
