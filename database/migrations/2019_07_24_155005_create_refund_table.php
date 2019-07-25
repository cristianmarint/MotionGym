<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 10:50:05
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 15:59:21
 * @ Description:
*/


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refund', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reason',250);
            $table->longText('description')->nullable();
            $table->integer('amount')->nullable();
            $table->date('date')->nullable(false);

            $table->unsignedInteger('detail_id')->nullable();
            $table->foreign('detail_id')->references('id')->on('detail')
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
        Schema::dropIfExists('refund');
    }
}
