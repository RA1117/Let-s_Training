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
        Schema::create('music_user', function (Blueprint $table) {
            //$table->id();
            $table->foreignId('music_id')->constrained('musics');
            $table->foreignId('user_id')->constrained('users');
            $table->primary(['music_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('music_user');
    }
};
