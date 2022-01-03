<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Patients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('pat_fname');
            $table->string('pat_lname');
            $table->bigInteger('pat_phone');
            $table->date('pat_admission_date');
            $table->string('pat_gender');
            $table->string('pat_category');
            $table->string('pat_email');
            $table->string('pat_address');
            $table->string('pat_date_of_birth');
            $table->foreignId('doctor')->constrained('doctors')->onDelete('cascade');
            $table->foreignId('department')->constrained('departments')->onDelete('cascade');
            $table->string('status');
            $table->timestamps();
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
