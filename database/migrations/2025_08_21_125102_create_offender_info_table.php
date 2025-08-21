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
        Schema::create('offender_info', function (Blueprint $table) {
            $table->id();

            //ФИО в разных склонениях
            $table->string('offender_name_nominative');
            $table->string('offender_name_genitive');
            $table->string('offender_name_dative');
            $table->string('offender_name_accusative');
            $table->string('offender_name_creative');
            $table->string('offender_name_prepositional');

            //Фамилия в разных склонениях
            $table->string('offender_surname_nominative');
            $table->string('offender_surname_genitive');
            $table->string('offender_surname_dative');
            $table->string('offender_surname_accusative');
            $table->string('offender_surname_creative');
            $table->string('offender_surname_prepositional');

            //Инициалы
            $table->string('offender_initials');

            //Гражданство в разных склонениях
            $table->string('citizenship_nominative');
            $table->string('citizenship_genitive');
            $table->string('citizenship_dative');
            $table->string('citizenship_accusative');
            $table->string('citizenship_creative');
            $table->string('citizenship_prepositional');

            //Перелеты
            $table->string('departure_country');
            $table->string('arrival_country');
            $table->string('to_arrival_country_ticket');
            $table->string('transit_country_1');
            $table->string('to_transit_country_1_ticket');
            $table->string('transit_country_2');
            $table->string('to_transit_country_2_ticket');
            $table->string('transit_country_3');
            $table->string('to_transit_country_3_ticket');

            $table->string('job')->default("сведения не предоставлены");
            $table->string('sex')->default("сведения не предоставлены");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offender_info');
    }
};
