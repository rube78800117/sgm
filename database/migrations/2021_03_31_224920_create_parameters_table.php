<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameters', function (Blueprint $table) {
           
          
          
            $table->id();
            $table->string('name');
            $table->string('type'); // 'grupo', 'subgrupo', 'task', 'partida_presupuestaria'
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('code_item')->nullable(); // Campo opcional para 'partida_presupuestaria'
            $table->foreign('parent_id')->references('id')->on('parameters')->onDelete('cascade');
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
        Schema::dropIfExists('parameters');
    }
}
