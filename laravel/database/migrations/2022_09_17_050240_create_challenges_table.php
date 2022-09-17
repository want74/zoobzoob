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
        Schema::create('challenges', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('am')->default(false);
            $table->boolean('pm')->default(false);
            $table->integer('water')->default(0);
            $table->integer('gum')->default(0);
            $table->integer('brush')->default(0);
            $table->integer('tongue')->default(0);
            $table->date('day');
            $table->integer('userId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('challenges');
    }
};
