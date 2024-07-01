<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purchase_id')->nullable()->constrained();
            $table->foreignId('article_id')->nullable()->constrained();
            $table->string('article_name');
            $table->decimal('quantity', 10, 2);
            $table->date('due_date')->nullable();
            $table->string('max_storage_time')->nullable();
            $table->foreignId('warehouse_id')->nullable()->constrained();
            $table->string('warehouse_name');
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
        Schema::dropIfExists('purchase_details');
    }
}
