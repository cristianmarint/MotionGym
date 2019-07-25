<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 10:43:23
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 21:19:38
 * @ Description:
 */


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',250);
            $table->text('description')->nullable();

            $table->unsignedInteger('parent_category_id')->nullable();
            $table->foreign('parent_category_id')->references('id')->on('category')
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
        Schema::dropIfExists('category');
    }
}
