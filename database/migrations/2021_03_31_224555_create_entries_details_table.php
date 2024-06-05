<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries_details', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');

            $table->unsignedBigInteger('batch_entry_id')->nullable();
            $table->unsignedBigInteger('article_id')->nullable();
             

            $table->foreign('batch_entry_id')->references('id')->on('batch_entries')->onDelete('set null');
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('set null');
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
        Schema::dropIfExists('entries_details');
    }
}
