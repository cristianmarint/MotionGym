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

class CreateCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('country', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
            $table->timestamps();
            $table->string('name', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->char('iso3', 3)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->char('numeric_code', 3)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->char('iso2', 2)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('phonecode')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('capital')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('currency')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('currency_name')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('currency_symbol')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('tld')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('native')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('region')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->unsignedBigInteger('region_id')->nullable();
            $table->string('subregion')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->unsignedBigInteger('subregion_id')->nullable();
            $table->string('nationality')->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->text('timezones')->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->text('translations')->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->string('emoji', 191)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->string('emojiU', 191)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->tinyInteger('flag')->default(1);
            $table->string('wikiDataId', 255)
                ->charset('utf8mb4')->collation('utf8mb4_unicode_ci')
                ->nullable()->comment('Rapid API GeoDB Cities');
            $table->index('region_id', 'country_continent');
            $table->index('subregion_id', 'country_subregion');
            $table->foreign('region_id', 'country_continent_final')->references('id')->on('region');
            $table->foreign('subregion_id', 'country_subregion_final')->references('id')->on('subregion');
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
