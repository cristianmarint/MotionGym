<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-01 22:00:16
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 13:46:09
 * @ Description:
 */


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->unsignedInteger('state_id');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('state_id')->references('id')->on('state')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city');
    }
}