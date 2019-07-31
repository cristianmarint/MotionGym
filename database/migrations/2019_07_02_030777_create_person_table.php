<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-01 22:06:07
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-31 16:14:04
 * @ Description:
 */


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status',50)->nullable(true);
            $table->string('identification', 50)->nullable(false);
            $table->string('identification_type', 50)->nullable();
            $table->string('photo', 500)->default(null)->nullable();          
            $table->string('name',250)->nullable();
            $table->string('middle_name',250)->nullable();
            $table->string('first_surname',250)->nullable();
            $table->string('second_surname',250)->nullable();
            $table->char('blood_group_rh',3)->nullable();
            $table->unsignedInteger('insurance_company_id')->nullable();
            $table->unsignedInteger('city_birth_id')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('address',250)->nullable();
            $table->string('email',250)->nullable();
            $table->string('phone',50)->nullable();
            $table->string('gender',50)->nullable();


            $table->softDeletes();
            $table->timestamps();
            
            
            $table->foreign('insurance_company_id')->references('id')->on('insurance_company')
            ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('city_birth_id')->references('id')->on('city')
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
        Schema::dropIfExists('person');
    }
}
