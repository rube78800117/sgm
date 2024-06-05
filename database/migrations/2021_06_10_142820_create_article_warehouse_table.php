<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleWarehouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_warehouse', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->integer('accumulated_request');
            $table->unsignedBigInteger('article_id')->nullable();
            $table->foreign('article_id')-> references ('id')->on('articles')-> onDelete('set null');
           
            $table->foreignId('location_id')->constrained()->nullable(); // Localización específica dentro del almacén
           
            $table->unsignedBigInteger('warehouse_id')->nullable();
            $table->foreign('warehouse_id')-> references ('id')->on('warehouses')-> onDelete('set null');
            $table->unsignedBigInteger('user_control')->nullable();
            $table->foreign('user_control')-> references ('id')->on('users')-> onDelete('set null');
            $table->date('control_date');


           
            



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
        Schema::dropIfExists('article_warehouse');
    }
}
