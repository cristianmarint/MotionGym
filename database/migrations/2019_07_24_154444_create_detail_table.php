<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 10:36:58
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 13:51:39
 * @ Description:
 */


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('discount_id')->nullable();
            $table->unsignedInteger('product_id')->nullable();
            $table->unsignedInteger('invoice_id')->nullable();
            $table->unsignedInteger('amount');

            
            $table->foreign('discount_id')->references('id')->on('discount')
            ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('product_id')->references('id')->on('product')
            ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_id')->references('id')->on('invoice')
            ->onUpdate('cascade')->onDelete('restrict');
            
            $table->softDeletes();
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
        Schema::dropIfExists('detail');
    }
}
