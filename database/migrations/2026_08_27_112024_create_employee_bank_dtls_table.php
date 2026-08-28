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
        Schema::create('employee_bank_dtls', function (Blueprint $table) {
            $table->id('emp_bank_id_pk');
            $table->string('cardExpire',5);
            $table->bigInteger('cardNumber');
            $table->String('cardType');
            $table->string('currency');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_bank_dtls');
    }
};
