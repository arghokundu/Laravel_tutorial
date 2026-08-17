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
        Schema::create('student_from', function (Blueprint $table) {
            $table->id('student_id_pk');
            $table->String('Name');
            $table->String('Email');
            $table->String('Address');
            $table->integer('pin');
            $table->String('phoneNo',10);
            $table->smallInteger ('state_id_fk');
            $table->smallInteger('district_id_fk');
            $table->smallInteger('subdiv_id_fk');
            $table->foreign('state_id_fk')->references('state_id_pk')->on('gta_dise_location_master_state')
                ->OnDelete('cascade')->OnUpdate('cascade');
            $table->foreign('district_id_fk')->references('district_id_pk')->on('gta_dise_location_master_district')
                 ->OnDelete('cascade')->OnUpdate('cascade');
            $table->foreign('subdiv_id_fk')->references('subdiv_id_pk')->on('gta_dise_location_master_subdiv')
                ->OnDelete('cascade')->OnUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_from');
    }
};
