<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sheldongame extends Model
{
  public $timestamps = false;
  protected $table = 'sheldongame';
  protected $fillable = ['id_sheldongame', 'opcion', 'image', 'gana'];
}