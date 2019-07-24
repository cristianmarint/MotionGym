<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-01 22:03:05
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 13:45:58
 * @ Description:
 */


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',250);
            $table->string('photo', 500)->default(null)->nullable(true);          
            $table->longText('description');
            $table->decimal('precio', 8, 2);

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
        Schema::dropIfExists('service');
    }
}
