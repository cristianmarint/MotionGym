<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('human', function (Blueprint $table) {
            $table->unsignedBigInteger('insurance_company_id')->nullable();
            $table->unsignedBigInteger('company_creator_id')->nullable();

            $table->foreign('insurance_company_id')->references('id')->on('company')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('company_creator_id')->references('id')->on('company')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        if (Schema::hasColumn('human', 'insurance_company_id')) {
            Schema::table('human', function ($table) {
                $table->dropForeign('human_insurance_company_id_foreign');
            });
        }
        if (Schema::hasColumn('users', 'company_creator_id')) {
            Schema::table('users', function ($table) {
                $table->dropForeign('human_company_creator_id_foreign');
            });
        }
    }
};
