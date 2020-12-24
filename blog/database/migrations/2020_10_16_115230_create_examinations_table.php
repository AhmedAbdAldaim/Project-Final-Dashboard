<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examinations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->nullable();
            $table->string('image')->nullable();
            $table->string('name');
            $table->text('result')->nullable();
            $table->unsignedInteger('interview_id');
            $table->foreign('interview_id')->references('id')->on('interviews');
            $table->unsignedInteger('hospital_id');
            $table->foreign('hospital_id')->references('id')->on('hospitals');
            $table->enum('state',['finised','notfinised'])->default('notfinised');
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
        Schema::dropIfExists('examinations');
    }
}
