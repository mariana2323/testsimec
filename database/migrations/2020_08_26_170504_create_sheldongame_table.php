<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSheldongameTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('sheldongame', function (Blueprint $table)
    {
      $table->increments('id_sheldongame');
      $table->string('opcion');
      $table->string('image');
      $table->string('gana');
      $table->timestamps();
    });

    DB::table('sheldongame')->insert(
      array(
        'id_sheldongame'    => 1,
        'opcion' => 'Scissor',
        'image' => 'img/scissor.svg',
        'gana' => '2~4'
      ),
      array(
        'id_sheldongame'    => 2,
        'opcion' => 'Paper',
        'image' => 'img/paper.svg',
        'gana' => '3~5'
      ),
      array(
        'id_sheldongame'    => 3,
        'opcion' => 'Rock',
        'image' => 'img/rock.svg',
        'gana' => '4~1'
      ),
      array(
        'id_sheldongame'    => 4,
        'opcion' => 'Lizard',
        'image' => 'img/lizard.svg',
        'gana' => '5~2'
      ),
      array(
        'id_sheldongame'    => 5,
        'opcion' => 'Spock',
        'image' => 'img/spock.svg',
        'gana' => '1~3'
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
    Schema::dropIfExists('sheldongame');
  }
}
