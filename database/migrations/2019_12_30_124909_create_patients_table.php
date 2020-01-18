<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('px_regNumber');
          $table->date('px_regDate');
          $table->string('px_image')->nullable();
          $table->string('px_name');
          $table->longText('px_address');
          $table->date('px_dob');
          $table->string('px_gender');
          $table->string('px_contact');
          $table->string('px_email')->unique();
          $table->string('px_doctor');
          $table->string('px_status')->default('active');
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
        Schema::dropIfExists('patients');
    }
}
