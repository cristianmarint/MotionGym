<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-01 22:01:35
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-25 22:15:07
 * @ Description:
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('state', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
            $table->timestamps();

            $table->string('name', 255)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->unsignedBigInteger('country_id');
            $table->char('country_code', 2)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('fips_code', 255)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('iso2', 255)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('type', 191)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->tinyInteger('flag')->default(1);
            $table->string('wikiDataId', 255)
                ->charset('utf8mb4')->collation('utf8mb4_unicode_ci')
                ->nullable()->comment('Rapid API GeoDB Cities');
            $table->index('country_id', 'country_region');
            $table->foreign('country_id', 'country_region_final')->references('id')->on('country')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('state');
    }
}
