<?php
/**
 * Created by PhpStorm.
 * User: mariana23
 * Date: 8/27/2020
 * Time: 10:07 AM
 */

namespace App\Http\Controllers;
use App\puntuation;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class puntuationController extends BaseController
{
  public function index()
  {
    $resultado = puntuation::all();
    return view('score', ['data' => $resultado]);
  }
}