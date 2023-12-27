<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-01 22:00:16
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-25 22:15:02
 * @ Description:
 */


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('city', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
            $table->timestamps();

            $table->string('name', 255)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->unsignedBigInteger('state_id');
            $table->string('state_code', 255)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->unsignedBigInteger('country_id');
            $table->char('country_code', 2)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            $table->tinyInteger('flag')->default(1);
            $table->string('wikiDataId', 255)
                ->charset('utf8mb4')->collation('utf8mb4_unicode_ci')
                ->nullable()->comment('Rapid API GeoDB Cities');
            $table->index('state_id', 'cities_test_ibfk_1');
            $table->index('country_id', 'cities_test_ibfk_2');
            $table->foreign('state_id', 'cities_ibfk_1')->references('id')->on('state');
            $table->foreign('country_id', 'cities_ibfk_2')->references('id')->on('country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city');
    }
}
