<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 10:46:33
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 21:19:11
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
            $table->text('description')->nullable();
            $table->tinyInteger('percentage',false,false)->nullable()->default(0);
            
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
