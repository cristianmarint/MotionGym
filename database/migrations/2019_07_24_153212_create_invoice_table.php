<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 10:32:12
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-30 09:34:43
 * @ Description:
 */


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('client_person_id')->nullable();
            $table->unsignedInteger('seller_user_id')->nullable();
            $table->unsignedInteger('payment_method_id')->nullable();
            $table->string('status',50)->nullable(true);
            $table->float('total', 9, 5)->default('0')->nullable();

            
            $table->foreign('client_person_id')->references('id')->on('person')
            ->onUpdate('cascade')->onDelete('restrict');
            
            $table->foreign('seller_user_id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('restrict');
            
            $table->foreign('payment_method_id')->references('id')->on('payment_method')
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
        Schema::dropIfExists('invoice');
    }
}
