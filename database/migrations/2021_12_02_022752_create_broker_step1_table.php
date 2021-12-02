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
            $table->string('name')->nullable();
            $table->string('country')->nullable();
            $table->string('countrycode')->nullable();
            $table->string('mobileno')->nullable();
            $table->string('email')->nullable()->unique();
            $table->longText('address')->nullable();
            $table->string('logo')->nullable();
            $table->string('youtubevideo1')->nullable();
            $table->string('youtubevideo2')->nullable();
            $table->string('youtubevideo3')->nullable();
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
