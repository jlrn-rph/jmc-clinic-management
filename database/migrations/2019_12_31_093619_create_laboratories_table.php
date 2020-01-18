<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lab_regNumber');
            $table->date('lab_regDate');
            $table->string('lab_name');
            $table->longText('lab_address');
            $table->date('lab_dob');
            $table->string('lab_gender');
            $table->string('lab_contact');
            $table->string('lab_email')->unique();
            $table->string('lab_doctor');
            $table->string('lab_test');
            $table->string('lab_status')->default('pending');
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
        Schema::dropIfExists('laboratories');
    }
}
