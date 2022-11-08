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
        Schema::create('order_product_addons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_product_id');
            $table->foreign('order_product_id')->references('id')->on('order_products')->onDelete('cascade');
            $table->unsignedBigInteger('product_addon_group_addon_id');
            $table->foreign('product_addon_group_addon_id')->references('id')->on('product_addon_group_addons')->onDelete('cascade');
            $table->double('price', 10, 4);
            $table->double('cost', 10, 4);
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
        Schema::dropIfExists('order_product_addons');
    }
};
