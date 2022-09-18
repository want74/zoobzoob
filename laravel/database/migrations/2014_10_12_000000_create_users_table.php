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
            $table->string('city')->nullable();
            $table->string('subscription')->nullable();
            $table->string('language')->nullable();
            $table->integer('role')->nullable();
            $table->string('email')->unique();
            $table->string('date');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('advanced')->default(false);
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
