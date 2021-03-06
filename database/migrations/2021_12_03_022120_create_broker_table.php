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
            $table->foreignId('user_id');
            $table->string('name',100);
            $table->string('email',150);
            $table->string('city',100);
            $table->string('country',100);
            $table->string('country_code',50);
            $table->string('mobileno',100);
            $table->longText('address');
            $table->string('gender',50);
            $table->string('dob',100);
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
            $table->string('whatsappno')->nullable();
            $table->string('telegramlink')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('instagram_id')->nullable();
            $table->string('linkedin_id')->nullable();
            $table->string('priority')->nullable();
            $table->string('foundyear')->nullable();
            $table->string('mindeposit')->nullable();
            $table->string('headquarters')->nullable();
            $table->string('maxleverage')->nullable();
            $table->string('minimumtradevalume')->nullable();
            $table->string('commission')->nullable();
            $table->string('ea')->nullable();
            $table->string('islamicaccound')->nullable();
            $table->string('tradingconditionandfees')->nullable();
            $table->string('depositmethodname')->nullable();
            $table->string('depositlogo')->nullable();
            $table->string('depositcommission')->nullable();
            $table->string('depositprocessingtime')->nullable();
            $table->string('withdrawalmethod')->nullable();
            $table->string('withdrawallogo')->nullable();
            $table->string('withdrawalcomission')->nullable();
            $table->string('withdrawalprocessiongtime')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
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
