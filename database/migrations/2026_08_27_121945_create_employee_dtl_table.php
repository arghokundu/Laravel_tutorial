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
        Schema::create('employee_dtl', function (Blueprint $table) {
            $table->id('emp_id_pk');
            $table->string('firstName');
            $table->string('maidenName')->nullable();
            $table->string('lastName');
            $table->integer('age');
            $table->string('gender');
            $table->string('email');
            $table->string('phone',30);
            $table->string('username');
            $table->date('birthday');
            $table->string('bloodGroup');
            $table->double('height',4,3);
            $table->double('weight',4,3);
            $table->string('eyeColor');
            $table->string('university');
            $table->unsignedBigInteger('emp_hair_id_fk');
            $table->unsignedBigInteger('emp_address_id_fk');
            $table->unsignedBigInteger('emp_bank_id_fk');
            $table->unsignedBigInteger('company_id_fk');

            $table->foreign('emp_hair_id_fk')->references('emp_hair_id_pk')->on('employee_hair')
                ->OnDelete('cascade')->OnUpdate('cascade');
            $table->foreign('emp_address_id_fk')->references('emp_address_id_pk')->on('employee_address')
                ->OnDelete('cascade')->OnUpdate('cascade');
            $table->foreign('emp_bank_id_fk')->references('emp_bank_id_pk')->on('employee_bank_dtls')
                ->OnDelete('cascade')->OnUpdate('cascade');
            $table->foreign('company_id_fk')->references('company_id_pk')->on('employee_company_dtl')
                ->OnDelete('cascade')->OnUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_dtl');
    }
};
