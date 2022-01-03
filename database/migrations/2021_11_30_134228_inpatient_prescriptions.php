<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InpatientPrescriptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inpatient_prescriptions', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('pres_disease');
            $table->bigInteger('patient_id');
            $table->bigInteger('doctor_id');
            $table->bigInteger('department_id');
            $table->string('weeks');
            $table->date('from_date');
            $table->date('till_date');
            $table->bigInteger('dosage');
            $table->string('patient_cat');
            $table->longText('description');
            $table->foreignId('medicines')->constrained('medicines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
