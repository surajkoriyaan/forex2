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
