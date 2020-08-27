<?php

namespace App\Http\Controllers;

use App\mastermind;
use App\puntuation;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

session_start();

class mastermindController extends BaseController
{
  public function generateCode(Request $request)
  {
    $resultado = $this->getColors();
    session_destroy();
    session_start();
    $arr = array(1, 2, 3, 4);
    $code = array();
    $keys = array_keys($arr);
    shuffle($keys);
    foreach ($keys as $key)
      $code[$key] = $arr[$key];
    $_SESSION["alias"] = $request->input('alias');
    $_SESSION["code"] = implode(",", $code);
    $_SESSION["attempts"] = 8;
    return view('playmastermind', ['data' => $resultado, 'attempt' => $_SESSION["attempts"]]);
  }

  public function getColors()
  {
    return mastermind::all();
  }

  public function playMastermind(Request $request)
  {
    $result = array();
    $attempts = (int)($_SESSION["attempts"]);
    $code = $_SESSION["code"];
    $attempt[0] = $request->input('masteroption1');
    $attempt[1] = $request->input('masteroption2');
    $attempt[2] = $request->input('masteroption3');
    $attempt[3] = $request->input('masteroption4');
    $attemptstr = implode(",", $attempt);
    //if ($attempts = 1)
    if ($attempts > 1)
    {
      //Compare two codes to check if the user decoded the code.
      if ($code == $attemptstr)
      {
        $code = explode(",", $code);
        for ($i= 0; $i<count($code);$i++)
        {
          $res = DB::table('mastermind')->where('id_mastermind', '=', $code[$i])->get();
          $resultado[$i]=$res[0]->image;
        }
        $this->saveMastermindPuntuation();
        session_destroy();
        return view('messagemaster', ['success' => true, 'message' => 'You solve it! You won 30 pts', 'data' => $resultado]);
      }
      else
      {
        //The user could not solve de code
        $code = explode(",", $code);
        $blacks = array_uintersect_uassoc($code, $attempt, "strcasecmp", "strcasecmp");
        $keys = array_keys($blacks);
        for ($i = 0; $i < count($code); $i++)
        {
          $result[$i] = 'img/whitedot.jpg';
          foreach ($keys as $key)
          {
            if ($i == $key)
            {
              $result[$i] = 'img/blackdot.png';
            }
          }
        }
        $_SESSION["attempts"] = $attempts -1;
        return view('playmastermind', ['data' => $this->getColors(), 'attempt' => $attempts - 1, 'result'=>$result]);
      }
    }
    else
    {
      //The user lose and session data flush
      $code = explode(",", $code);
      $resultado = DB::table('mastermind')->whereIn('id_mastermind', $code)->get();
      session_destroy();
      return view('messagemaster', ['success' => true, 'message' => 'You failed!', 'data' => $resultado]);
    }
  }
  public function saveMastermindPuntuation()
  {
    $resultado = DB::table('puntuation')->where('nick', '=', $_SESSION["alias"])->get();

    if (isset($resultado[0]))//needs an update
    {
      DB::table('puntuation')
        ->where('id_puntuation', $resultado[0]->id_puntuation)
        ->update(['puntuation_master' => (int)($resultado[0]->puntuation_master)+30]);
    }
    else//needs to insert
    {
      $newScore = new puntuation;
      $newScore->nick = $_SESSION["alias"];
      $newScore->puntuation_master = 30;
      $newScore->save();
    }
  }
}
