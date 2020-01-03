<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('pay_regNumber');
          $table->date('pay_regDate');
          $table->string('pay_name');
          $table->longText('pay_address')->nullable();
          $table->string('pay_admission')->nullable();
          $table->string('pay_consultation')->nullable();
          $table->string('pay_lab')->nullable();
          $table->string('pay_others')->nullable();
          $table->string('pay_subtotal');
          $table->string('pay_vat');
          $table->string('pay_total');
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
        Schema::dropIfExists('payments');
    }
}
