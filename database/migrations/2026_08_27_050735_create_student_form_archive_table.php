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
        Schema::create('student_form_archive', function (Blueprint $table) {
            $table->id('archive_id_pk');
            // Original ID from student_from table
            $table->unsignedBigInteger('student_id_pk');
            $table->String('Name');
            $table->String('Email');
            $table->String('Address');
            $table->integer('pin');
            $table->String('phoneNo',10);
            $table->smallInteger ('state_id_fk');
            $table->smallInteger('district_id_fk');
            $table->smallInteger('subdiv_id_fk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_form_archive');
    }
};
