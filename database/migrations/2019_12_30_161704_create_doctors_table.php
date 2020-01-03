<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('dr_regNum');
          $table->date('dr_regDate');
          $table->string('dr_image')->nullable();
          $table->string('dr_specialist');
          $table->string('dr_license');
          $table->string('dr_name');
          $table->string('dr_gender');
          $table->date('dr_dob');
          $table->longText('dr_address');
          $table->string('dr_contact');
          $table->string('dr_email')->unique();
          $table->string('dr_fee');
          $table->time('dr_timeIn');
          $table->time('dr_timeOut');
          $table->string('dr_daysAvail');
          $table->integer('dr_status')->default(1);
          $table->softDeletes();
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
        Schema::dropIfExists('doctors');
    }
}
