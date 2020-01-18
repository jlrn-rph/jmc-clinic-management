<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('px_name');
          $table->string('doctor_name');
          $table->string('rx_generic')->nullable();
          $table->string('rx_brand')->nullable();
          $table->string('rx_freq')->nullable();
          $table->string('rx_days')->nullable();
          $table->longText('rx_instruct')->nullable();
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
        Schema::dropIfExists('prescriptions');
    }
}
