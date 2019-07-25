<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_category', function (Blueprint $table) {
            $table->bigIncrements('id');

            
            $table->unsignedInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('product')
            ->onUpdate('cascade')->onDelete('restrict');

            $table->unsignedInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('category')
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
        Schema::dropIfExists('product_category');
    }
}
