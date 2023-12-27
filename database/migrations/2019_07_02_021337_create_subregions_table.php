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
        Schema::create('subregion', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
            $table->timestamps();
            $table->string('name', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->text('translations')->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->unsignedBigInteger('region_id');
            $table->tinyInteger('flag')->default(1);
            $table->string('wikiDataId', 255)
                ->charset('utf8mb4')->collation('utf8mb4_unicode_ci')
                ->nullable()->comment('Rapid API GeoDB Cities');
            $table->index('region_id', 'subregion_continent');
            $table->foreign('region_id', 'subregion_continent_final')->references('id')->on('region');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subregion');
    }
};
