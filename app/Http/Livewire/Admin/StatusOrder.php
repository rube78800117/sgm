<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\DB;

class StatusOrder extends Component
{



    public $order, $status, $val, $approved, $mov, $movement_type;
    public function mount()
    {
        if ($this->order->status <= 2) {
            $this->order->status = 3;
            $this->order->save();
        }

        $this->status = $this->order->status;
    }


    public function render()
    {
        $items = json_decode($this->order->content);
        
        // dd($items);
        return view('livewire.admin.status-order', compact("items"));
    }
    public function update()
    {
        $this->order->status = $this->status;
        $this->order->save();
    }

    








    public function status_save($val) {
        try {
            DB ::transaction(function () use ($val) {
                if ($val == 6) {
                    $items = json_decode($this->order->content);
    
                    foreach ($items as $item) {
                        income_ajust($item);
                    }
                } elseif ($val == 4) {
                    $items = json_decode($this->order->content);
    
                    foreach ($items as $item) {
                        $detalle = array(
                            "order_id" => $this->order->id,
                            "article_id" => $item->options->id_art,
                            "article_name" => $item->name,
                            "warehouse_id" => $item->id,
                            "warehouse_name" => $item->options->warehouse,
                            "quantity" => $item->qty,
                            "created_at" => now(),
                            "updated_at" => now()
                        );
    
                        OrderDetail::insert($detalle);
                    }
                }
    
                $this->order->approved_user_id = auth()->user()->id;
                $this->order->status = $val; // anulado o aprobado
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
