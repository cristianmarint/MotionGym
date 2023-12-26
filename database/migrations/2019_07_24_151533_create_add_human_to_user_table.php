<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 10:15:33
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 10:29:57
 * @ Description:
 */


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddHumanToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('human_id')->nullable();
            $table->foreign('human_id')->references('id')->on('human')
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['human_id']);
            $table->dropColumn('human_id');
        });
    }
}
