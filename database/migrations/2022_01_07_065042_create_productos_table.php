<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('imagen');
            $table->string('id_grupo');
            $table->string('usa_inventarios');
            $table->string('stock');
            $table->string('precio_compra');
            $table->string('fecha_vencimiento');
            $table->string('precio_venta');
            $table->string('codigo');
            $table->string('se_vende_a');
            $table->string('impuesto');
            $table->string('stock_minimo');
            $table->string('precio_mayoreo');
            $table->string('sub_total_pv');
            $table->string('sub_total_pm');
            $table->string('a_partir_de');
            $table->timestamps();
            id_droducto1, , imagen, id_grupo, usa_inventarios, stock, precio_compra, fecha_vencimiento, precio_venta, codigo, se_vende_a, impuesto, stock_minimo, precio_mayoreo, sub_total_pv, sub_total_pm, a_partir_de
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
