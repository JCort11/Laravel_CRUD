<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string('vendedor');
            $table->integer('cantidad');
            $table->integer('total');
            
            $table->foreignId('articulo_id')
            ->nullable()
            ->constrained('articulos')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();

            //$table->time('HoraVenta');
            $table->string('status');
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
        Schema::dropIfExists('ventas');
    }
};
