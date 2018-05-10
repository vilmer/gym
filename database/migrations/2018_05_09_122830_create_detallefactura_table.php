<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallefacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallaFactura', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('cantidad');
            $table->decimal('precio',9,2);

            $table->unsignedInteger('factura_id');
            $table->unsignedInteger('producto_id');

            $table->foreign('factura_id')->references('id')->on('factura')->onDelete('cascade');
            $table->foreign('producto_id')->references('id')->on('producto')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallaFactura');
    }
}
