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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->date('date')->nullable();
            $table->string('training_name')->nullable();
            $table->double('training_weight')->nullable();
            $table->integer('time')->nullable();
            $table->integer('set')->nullable();
            $table->string('part_name')->nullable();
            $table->double('weight')->nullable();
            $table->time('run_time')->nullable();
            $table->double('run_distance')->nullable();
            $table->double('diet')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
};
