<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteerApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vacancy_id')->nullable()->constrained('vacancies')->onDelete('set null');
            $table->string('applicant_name');
            $table->string('applicant_email')->nullable();
            $table->text('cover_letter')->nullable();
            $table->text('questions')->nullable();
            $table->string('resume')->nullable();
            $table->dateTime('read_at')->nullable();
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
        Schema::dropIfExists('volunteer_applications');
    }
}
