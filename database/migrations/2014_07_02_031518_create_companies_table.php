<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
            $table->timestamps();

            $table->string('name');
            $table->string('identification', 20)->unique();
            $table->string('identification_type', 50)->nullable();
            $table->string('address')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email')->nullable();
            $table->string('industry')->nullable();

            $table->foreign('city_id')->references('id')->on('city')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('human', 'company_creator_id')) {
            Schema::table('human', function ($table) {
                $table->dropForeign('human_company_creator_id_foreign');
            });
        }
        Schema::dropIfExists('company');
    }
};
