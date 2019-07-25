<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 10:39:47
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 21:19:32
 * @ Description:
 */


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',250);
            $table->text('description')->nullable();
            $table->float('purchase_price', 6,3)->nullable();
            $table->float('sale_price', 6,3);
            $table->integer('amount')->nullable();

            
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
        Schema::dropIfExists('product');
    }
}
