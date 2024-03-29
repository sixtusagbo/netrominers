<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('username')->unique();
            $table->string('secret_question')->nullable();
            $table->string('secret_answer')->nullable();
            $table->string('btc_address')->nullable();
            $table->string('usdt_address')->nullable();
            $table->tinyInteger('type')->default(0);
            $table->timestamp('last_access')->nullable();
            $table->tinyInteger('ip_change')->default(0);
            $table->tinyInteger('browser_change')->default(0);
            // Setting up a self-referencing table for referrals
            $table->unsignedBigInteger('referrer_id')->nullable();
            $table->foreign('referrer_id')->references('id')->on('users');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
