<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_manager', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',50);
            $table->string('city',100);
            $table->string('country',100);
            $table->string('country_code',50);
            $table->string('mobileno',100);
            $table->longText('address');
            $table->string('gender',50);
            $table->string('dob',100);
            $table->string('company_name')->nullable();
            $table->longText('description')->nullable();
            $table->string('website_url')->nullable();
            $table->string('minimum_equity')->nullable();
            $table->string('profit_sharing')->nullable();
            $table->string('currency_pairs')->nullable();
            $table->string('trading_plateform')->nullable();
            $table->string('tradable_assets')->nullable();
            $table->string('minimum_deposit')->nullable();
            $table->string('forex_broker')->nullable();
            $table->string('service')->nullable();
            $table->string('investor_id')->nullable();
            $table->string('investor_password')->nullable();
            $table->string('video_gallery')->nullable();
            $table->string('image_gallery')->nullable();
            $table->string('whatsappno')->nullable();
            $table->string('telegramlink')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('instagram_id')->nullable();
            $table->string('linkedin_id')->nullable();
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
        Schema::dropIfExists('account_manager');
    }
}
