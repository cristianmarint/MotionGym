<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 11:51:10
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-25 22:34:12
 * @ Description:
 */


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentMethodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_method', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',250);
            $table->text('description');
            
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
        Schema::dropIfExists('payment_method');
    }
}
