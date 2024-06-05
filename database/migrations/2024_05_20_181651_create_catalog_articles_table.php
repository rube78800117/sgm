<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_articles', function (Blueprint $table) {
            $table->id();


 
                $table->string('id_zona');
                $table->string('id_dopp');
                $table->string('id_eetc');
                $table->text('name');
                $table->text('description');
                $table->integer('stock_min')->default(4);
                $table->string('slug');
    
                //STAR TABLAS AGREGADAS DE TABLA CATALOGO
                $table->string('grupo');
                $table->string('subgrupo');
                $table->string('unidad');
                $table->string('proveedor');
                $table->string('partida_presupuestaria');
                $table->decimal('precio_unitario', 10, 2);
                $table->decimal('precio_historico', 10, 2);
                $table->decimal('precio_usd', 10, 2);
                $table->string('plano');
                $table->string('posicion_plano');
                $table->string('id_plano');
                $table->string('trabajo');
                $table->string('ubicacion');
    
                //END TABLAS AGREGADAS DE CATALOGO
    
                $table->unsignedBigInteger('trademark_id')->nullable();
                $table->unsignedBigInteger('unit_id')->nullable();
                $table->unsignedBigInteger('category_id')->nullable();
                $table->unsignedBigInteger('department_id')->nullable();
                //$table->unsignedBigInteger('stock_id')->nullable();
                $table->unsignedBigInteger('user_id')->nullable();
                $table->unsignedBigInteger('type_id')->nullable();
    
                $table->foreign('trademark_id')->references('id')->on('trademarks')->onDelete('set null');
                $table->foreign('unit_id')->references('id')->on('units')->onDelete('set null');
                $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
                $table->foreign('department_id')->references('id')->on('departments')->onDelete('set null');
                //$table->foreign('stock_id')->references('id')->on('stocks')->onDelete('set null');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
                $table->foreign('type_id')->references('id')->on('types')->onDelete('set null');
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
        Schema::dropIfExists('catalog_articles');
    }
}
