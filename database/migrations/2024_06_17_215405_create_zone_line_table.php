<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZoneLineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zone_line', function (Blueprint $table) {
            $table->id();
          
         
            $table->unsignedBigInteger('zone_id');
            $table->unsignedBigInteger('line_id');
            
            $table->timestamps();

            // Foreign keys
            $table->foreign('zone_id')->references('id')->on('zones')->onDelete('cascade');
            $table->foreign('line_id')->references('id')->on('lines')->onDelete('cascade');

            // Unique combination to prevent duplicates
            $table->unique(['zone_id', 'line_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zone_line');
    }
}
