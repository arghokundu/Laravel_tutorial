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
        Schema::create('employee_company_dtl', function (Blueprint $table) {
            $table->id('company_id_pk');
            $table->string('department');
            $table->string('name');
            $table->string('title');

            $table->unsignedBigInteger('company_address_fk');
            $table->foreign('company_address_fk')->references('company_address_pk')->on('employee_company_dtl_address')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_company_dtl');
    }
};
