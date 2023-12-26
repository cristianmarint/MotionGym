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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
            $table->timestamps();
            $table->json('client_details');
            $table->date('invoice_date')->default(now());
            $table->decimal('total_amount', 10, 2)->nullable(false);
            $table->decimal('general_discount', 5, 2)->default(0.0);
            $table->json('product_details');
            $table->unsignedBigInteger('invoice_status_id');
            $table->foreign('invoice_status_id')->references('id')->on('invoice_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
