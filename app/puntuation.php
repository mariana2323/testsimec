<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puntuation extends Model
{
  public $timestamps = false;
  protected $table = 'puntuation';
  protected $fillable = ['id_puntuatio', 'nick', 'puntuation_sheldon', 'puntuation_master'];
}