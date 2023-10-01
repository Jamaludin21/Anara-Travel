<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->integer('group_code');
            $table->string('chairman_name');
            $table->date('regist_date');
            $table->integer('phone_number');
            $table->integer('invoice_number');
            $table->integer('participant_number');
            $table->string('customer');
            $table->string('start_from');
            $table->string('type_tour');
            $table->date('date_departure');
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
        Schema::dropIfExists('groups');
    }
}