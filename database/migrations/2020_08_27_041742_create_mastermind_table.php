<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMastermindTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mastermind', function (Blueprint $table) {
          $table->increments('id_mastermind');
          $table->string('color');
          $table->string('image');
          $table->timestamps();
        });
      DB::table('sheldongame')->insert(
        array(
          'id_mastermind'    => 1,
          'color' => 'Yellow',
          'image' => 'img/yellow.png'
        ),
        array(
          'id_mastermind'    => 2,
          'color' => 'Pink',
          'image' => 'img/pink.jpg'
        ),
        array(
          'id_mastermind'    => 3,
          'color' => 'Blue',
          'image' => 'img/blue.png'
        ),
        array(
          'id_mastermind'    => 4,
          'color' => 'Green',
          'image' => 'img/green.jpg'
        )
      );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mastermind');
    }
}
