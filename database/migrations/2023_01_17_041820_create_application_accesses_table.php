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
        Schema::create('application_accesses', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('deltas')->default(0);
            $table->boolean('app2')->default(0);
            $table->boolean('app3')->default(0);
            $table->boolean('app4')->default(0);
            $table->boolean('app5')->default(0);
            $table->boolean('app6')->default(0);
            $table->boolean('app7')->default(0);
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
        Schema::dropIfExists('application_accesses');
    }
};
