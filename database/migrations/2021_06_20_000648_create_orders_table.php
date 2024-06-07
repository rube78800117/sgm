<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Order;
class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('Users');

            $table->string('ot');
            $table->string('equipment');
            $table->text('observation');
            $table->text('reason');
            $table->json('content');

            $table->unsignedBigInteger('destiny_mov_warehouse_id')->nullable();
            $table->foreign('destiny_mov_warehouse_id')->references('id')->on('Warehouses');

            $table->enum('movement_type',[Order::SALIDA, Order::MOVIMIENTO_ENTRE_ALMACENES])->default(Order::SALIDA);
            $table->enum('status',[Order::PENDIENTE, Order::ENVIADO,  Order::REVISION, Order::APROBADO, Order::RECHAZADO, Order::ANULADO,])->default(Order::PENDIENTE);

            $table->unsignedBigInteger('approved_user_id');
            $table->foreign('approved_user_id')->references('id')->on('Users');

            $table->date('items_out_date');       
           
           
            // $table->json('equipmentDescription');
            
            // $table->string('lineofdestiny');
            // $table->string('typeofmaintenance');
            // $table->string('msystem');
            // $table->string('subsystem');
            // $table->string('equipment');
            // $table->integer('vehiculo');
            // $table->integer('torre');
            // $table->string('estacion');

            // $table->enum('operation_type',[1,2,3]); //1= INGRESO, 2 = SALIDA, 3 =TRANSFERENCIA
            // 
            // $table->json('destination');


     
          
           



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
