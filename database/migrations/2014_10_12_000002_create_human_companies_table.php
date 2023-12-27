<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('human_company', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('restrict');

            $table->unsignedBigInteger('human_id')->nullable();
            $table->foreign('human_id')->references('id')->on('human')
                ->onUpdate('cascade')->onDelete('restrict');

            $table->string('status',50)->nullable()->default('active');
            $table->string('identification', 50)->unique()->nullable();
            $table->string('identification_type', 50)->nullable();
            $table->string('photo', 500)->default(null)->nullable();
            $table->string('name',250)->nullable();
            $table->string('middle_name',250)->nullable();
            $table->string('first_surname',250)->nullable();
            $table->string('second_surname',250)->nullable();
            $table->char('blood_group_rh',3)->nullable();
            $table->unsignedBigInteger('insurance_company_id')->nullable();
            $table->unsignedBigInteger('city_birth_id')->nullable();
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

            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('company')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('human_company');
    }
};
