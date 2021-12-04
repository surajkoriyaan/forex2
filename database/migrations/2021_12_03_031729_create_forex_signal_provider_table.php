<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForexSignalProviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forex_signal_provider', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('city',100);
            $table->string('country',100);
            $table->string('country_code',50);
            $table->string('mobileno',100);
            $table->longText('address');
            $table->string('gender',50);
            $table->string('dob',100);
            $table->string('company_name')->nullable();
            $table->longText('description')->nullable();
            $table->string('price')->nullable();
            $table->string('signal_frequency')->nullable();
            $table->string('signal_provider_via')->nullable();
            $table->longText('trading_strategy')->nullable();
            $table->string('services')->nullable();
            $table->string('video_gallery')->nullable();
            $table->string('image_gallery')->nullable();
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('forex_signal_provider');
    }
}
