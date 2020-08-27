<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mastermind extends Model
{
  public $timestamps = false;
  protected $table = 'mastermind';
  protected $fillable = ['id_mastermind', 'color', 'image'];
}