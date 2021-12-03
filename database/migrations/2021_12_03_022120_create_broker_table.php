<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrokerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('broker', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('logo')->nullable();
            $table->string('youtubevideo1')->nullable();
            $table->string('youtubevideo2')->nullable();
            $table->string('youtubevideo3')->nullable();
            $table->string('tradable_assets')->nullable();
            $table->string('minimum_initial_deposit')->nullable();
            $table->string('regulations')->nullable();
            $table->string('regulated_by')->nullable();
            $table->string('spreads')->nullable();
            $table->string('minimum_lot')->nullable();
            $table->string('copy_trading')->nullable();
            $table->string('broker_type')->nullable();
            $table->string('trading_plateform')->nullable();
            $table->string('accountcurrencies')->nullable();
            $table->string('paymenymethods')->nullable();
            $table->string('leverage')->nullable();
            $table->string('mobile_trading')->nullable();
            $table->string('web_based_trading')->nullable();
            $table->string('hedging_allowed')->nullable();
            $table->string('scaling_allowed')->nullable();
            $table->string('website_url')->nullable();
            $table->longText('description')->nullable();
            $table->longText('regulated_body_security')->nullable();
            $table->longText('trading_conditions_fees')->nullable();
            $table->longText('acount_type')->nullable();
            $table->longText('deposits_withdrawal')->nullable();
            $table->longText('trading_platrform')->nullable();
            $table->longText('customer_support')->nullable();
            $table->longText('education')->nullable();
            $table->longText('awards')->nullable();
            $table->longText('conclusion')->nullable();
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
        Schema::dropIfExists('broker');
    }
}
