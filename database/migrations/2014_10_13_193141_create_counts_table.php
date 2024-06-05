<?php

use App\Models\Count;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counts', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->text('description');
            $table->text('observation')->nullable();
            $table->enum('status',[Count::CERRADO, Count::ABIERTO,  Count::REVISION, Count::APROBADO, Count::RECHAZADO, Count::ANULADO,])->default(Count::ABIERTO);
            // $table->foreignId('user_id')->nullable();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('warehouse_id')->nullable()->constrained();
            $table->foreignId('line_id')->nullable()->constrained();
            $table->date('closing_date')->nullable();
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
        Schema::dropIfExists('counts');
    }
}
