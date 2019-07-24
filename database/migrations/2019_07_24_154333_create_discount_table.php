<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 10:46:33
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 13:56:44
 * @ Description:
 */


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discount', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',250);
            $table->longText('description')->nullable();
            $table->unsignedInteger('percentage')->nullable();
            
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
        Schema::dropIfExists('discount');
    }
}
