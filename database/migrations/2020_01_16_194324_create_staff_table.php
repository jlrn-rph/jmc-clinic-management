<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('stf_regNum');
            $table->date('stf_regDate');
            $table->string('stf_emType');
            $table->string('stf_department');
            $table->string('stf_image')->nullable();
            $table->string('stf_name');
            $table->string('stf_gender');
            $table->string('stf_dob');
            $table->string('stf_Address');
            $table->string('stf_contact');
            $table->string('stf_email')->unique();
            $table->string('stf_status')->default('active');
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
        Schema::dropIfExists('staff');
    }
}
