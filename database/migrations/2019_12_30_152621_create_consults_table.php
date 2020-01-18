<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consults', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('patients_name');
          $table->string('doctor_name');
          $table->date('con_dateSxStart');
          $table->string('con_height')->nullable();
          $table->string('con_weight')->nullable();
          $table->string('con_bp')->nullable();
          $table->longText('con_symptom');
          $table->longText('con_diagnosis');
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
        Schema::dropIfExists('consults');
    }
}
