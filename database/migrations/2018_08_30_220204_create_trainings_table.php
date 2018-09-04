<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('typeTraining');
            $table->string('nameTraining');
            $table->string('cityTraining');
            $table->date('dateTraining');
            $table->time('timeTraining');
            $table->string('addressTraining');
            $table->string('numberAddressTraining');
            $table->string('obsTraining');
            $table->integer('vacancies');
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
        Schema::dropIfExists('trainings');
    }
}
