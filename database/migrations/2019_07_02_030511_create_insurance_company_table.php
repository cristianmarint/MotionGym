<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-01 22:05:11
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 13:46:05
 * @ Description:
 */


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsuranceCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurance_company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('identification', 20)->nullable(true);
            $table->string('type',50)->nullable(true);

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
        Schema::dropIfExists('insurance_company');
    }
}
