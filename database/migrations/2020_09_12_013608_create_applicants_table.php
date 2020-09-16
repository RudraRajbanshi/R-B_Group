<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('middle_name')->nullable();
            $table->string('surname');
            $table->string('gender');
            $table->string('dob');
            $table->string('place_of_birth');
            $table->string('suburb')->nullable();
            $table->string('state')->nullable();
            $table->string('country');
            $table->string('street')->nullable();
            $table->string('suburb2');
            $table->string('state2');
            $table->string('postcode');
            $table->string('phone');
            $table->string('email');

            $table->string('driver_licence')->nullable();
            $table->string('driver_state')->nullable();
            $table->string('firearms_licence')->nullable();
            $table->string('firearms_state')->nullable();
            $table->string('passport');
            $table->string('passport_country');

            $table->string('visa_type');
            $table->string('visa_issued_date');
            $table->string('visa_expiry_date');
            $table->string('work_permit');

            $table->string('academic_start_year')->nullable();
            $table->string('academic_end_year')->nullable();
            $table->string('course')->nullable();
            $table->string('college')->nullable();
            $table->string('course_type')->nullable();

            $table->string('image')->nullable();
            $table->string('cover_letter')->nullable();
            $table->string('resume');

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
        Schema::dropIfExists('applicants');
    }
}
