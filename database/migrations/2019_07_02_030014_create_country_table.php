<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-01 22:01:35
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-25 22:15:07
 * @ Description:
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
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
            $table->string('name',250);
            $table->softDeletes();
            $table->timestamps();
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
