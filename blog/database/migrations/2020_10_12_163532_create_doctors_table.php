<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jop_number')->nullable();
            $table->string('carear')->nullable();
            $table->unsignedInteger('diagnosis_prise')->nullable();
            $table->string('address')->nullable();
            $table->string('image')->nullable();
            $table->string('fellowship')->nullable();
            $table->text('qualifications')->nullable();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('speshalty_id');
            $table->foreign('speshalty_id')->references('id')->on('speshalties');
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
        Schema::dropIfExists('doctors');
    }
}
