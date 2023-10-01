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
           $table->id();
            $table->integer('group_code');
            $table->string('chairman_name');
            $table->date('date_departure');
            $table->string('start_from');
            $table->string('type_tour');
            $table->string('customer');
            $table->date('regist_date');
            $table->integer('tour_fee');
            $table->integer('exclude');
            $table->integer('extra_ticket');
            $table->integer('extra_baggage');
            $table->integer('down_payment');
            $table->date('dp_date');
            $table->integer('payment1');
            $table->date('p1_date');
            $table->integer('payment2');
            $table->date('p2_date');
            $table->integer('payment3');
            $table->date('p3_date');
            $table->integer('outstanding');
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