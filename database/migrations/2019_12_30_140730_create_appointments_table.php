<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('ap_pxName');
          $table->date('ap_regDate');
          $table->string('ap_contact');
          $table->string('ap_doctor')->nullable();
          $table->string('ap_specialist')->nullable();
          $table->longText('ap_reason');
          $table->string('ap_status')->default(1);
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
        Schema::dropIfExists('appointments');
    }
}
