<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-31 19:46:27
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-08-03 12:25:42
 * @ Description:
 */


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('person_id')->nullable();
            $table->unsignedInteger('invoice_id')->nullable();
            $table->unsignedInteger('extra_id')->nullable();
            $table->date('month')->default(null)->nullable(true);
            $table->float('price')->default('100')->nullable();

            
            $table->foreign('extra_id')->references('id')->on('extra')
            ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('person_id')->references('id')->on('person')
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
        Schema::dropIfExists('membership');
    }
}
