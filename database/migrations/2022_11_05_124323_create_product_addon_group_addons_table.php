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
        Schema::create('product_addon_group_addons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_addon_group_id');
            $table->foreign('product_addon_group_id')->references('id')->on('product_addon_groups')->onDelete('cascade');
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
        Schema::dropIfExists('product_addon_group_addons');
    }
};
