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
        Schema::create('employee_company_dtl_address', function (Blueprint $table) {
            $table->id('company_address_pk');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('stateCode');
            $table->integer('postalCode');
            $table->string('country');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_company_dtl_address');
    }
};
