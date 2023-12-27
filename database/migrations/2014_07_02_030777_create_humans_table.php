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

class CreateHumansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('humans', function (Blueprint $table) {
            $table->id();
            $table->string('status',50)->nullable(true)->default('active');
            $table->string('identification', 50)->unique()->nullable(false);
            $table->string('identification_type', 50)->nullable();
            $table->string('photo', 500)->default(null)->nullable();
            $table->string('name',250)->nullable();
            $table->string('middle_name',250)->nullable();
            $table->string('first_surname',250)->nullable();
            $table->string('second_surname',250)->nullable();
            $table->char('blood_group_rh',3)->nullable();
            $table->unsignedBigInteger('city_birth_id')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('address',250)->nullable();
            $table->string('email',250)->nullable();
            $table->string('phone',50)->nullable();
            $table->string('gender',50)->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('city_birth_id')->references('id')->on('city')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('humans');
    }
}
