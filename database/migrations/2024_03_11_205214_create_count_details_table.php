<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('count_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('count_id')->nullable()->constrained();
            $table->foreignId('article_id')->nullable()->constrained();
            $table->string('article_name');
            $table->integer('quantity');
            $table->foreignId('warehouse_id')->nullable()->constrained();
            $table->string('warehouse_name');
            // $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('count_details');
    }
}
