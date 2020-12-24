<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePichantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pichants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patriot_number');
            $table->enum('gender',['male','female']);
            $table->date('birthday');
            $table->string('address')->nullable();
            $table->string('image')->nullable();
            $table->string('blood_type')->nullable();
            $table->text('sensitivity')->nullable();
            $table->text('genetic_diseases')->nullable();
            $table->enum('social_status',['married','single','divorced'])->nullable();
            $table->text('bad_habit')->nullable();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('pichants');
    }
}
