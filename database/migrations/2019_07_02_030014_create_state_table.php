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
            $table->string('name',250);
            $table->softDeletes();
            $table->timestamps();
            $table->bigInteger('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('country')
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
