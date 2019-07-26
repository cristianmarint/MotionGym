<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 10:46:33
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-26 09:05:19
 * @ Description:
 */


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra', function (Blueprint $table) {
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
        Schema::dropIfExists('extra');
    }
}
