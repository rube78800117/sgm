<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExistencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('existences', function (Blueprint $table) {
            $table->id();
            $table ->integer('quantity');

            $table->unsignedBigInteger('warehouse_id')->nullable();
            $table->foreign('warehouse_id')-> references ('id')->on('warehouses')-> onDelete('set null');
           
            $table->unsignedBigInteger('article_id')->nullable();
            $table->foreign('article_id')-> references ('id')->on('articles')-> onDelete('set null');

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
        Schema::dropIfExists('existences');
    }
}
