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
        Schema::create('users_company', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('users_id')->nullable();
            $table->foreign('users_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('restrict');

            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('company')
                ->onUpdate('cascade')->onDelete('restrict');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_company');
    }
};
