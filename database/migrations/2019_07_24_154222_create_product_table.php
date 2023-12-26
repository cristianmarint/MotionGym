<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 10:39:47
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 21:19:32
 * @ Description:
 */


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('sku', 250)->nullable();
            $table->string('name', 250);
            $table->text('image')->nullable();
            $table->text('description')->nullable();
            $table->float('purchase_price', 6, 3)->nullable();
            $table->float('sale_price', 6, 3);
            $table->integer('amount')->default(0)->nullable();
            $table->integer('discount')->default(0)->nullable();


            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
}
