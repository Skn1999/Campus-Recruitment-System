<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->smallIncrements('job_id');
            $table->smallInteger('company_id');
            $table->foreign('company_id')->references('company_id')->on('companies');
            $table->smallInteger('college_id');
            $table->foreign('college_id')->references('college_id')->on('institutes');
            $table->multiLineString('job_position');
            $table->string('eligibilty');
            $table->tinyInteger('no_of_vacancies')->default(0);
            $table->string('location')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
