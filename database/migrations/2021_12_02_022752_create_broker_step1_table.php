<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrokerStep1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('broker_step1', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('country');
            $table->string('countrycode');
            $table->string('mobileno');
            $table->string('email')->unique();
            $table->longText('address');
            $table->string('logo');
            $table->string('youtubevideo1');
            $table->string('youtubevideo2');
            $table->string('youtubevideo3');
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
        Schema::dropIfExists('broker_step1');
    }
}
