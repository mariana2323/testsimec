<?php

namespace App\Http\Controllers;

use App\sheldongame;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class sheldongameController extends BaseController
{
  public function index(){

    $resultado = sheldongame::all();
    return view ('sheldongame',['data' => $resultado]);
  }
  public function playSheldonGame(Request $request)
  {
    //Gets the choice of the player 1
    $player1 = $request->input('sheloption');
    //Gets the choice of the pc player
    $player2 = random_int(1, 5);
    $pc = DB::table('sheldongame')->select('image')->where('id_sheldongame', '=',$player2)->get();
    if ($player1 == $player2)
    {
      return view('message', ['message' => 'IT IS A TIE', 'success' => 'tie','pc'=> $pc]);
    }
    else
    {
      //Get the loosers according to the option choose
      $losers1 = $this->getLoserOptions($player1);
      if (in_array($player2, $losers1))
      {
        return view('message', ['message' => 'YOU WIN! You beat Sheldon(:','success'=>true, 'pc'=> $pc]);
      }
      else
      {
        $losers2 = $this->getLoserOptions($player2);
        if (in_array($player1, $losers2))
        {
          return view('message', ['message' => 'YOU LOSE AGAINST Sheldon :(','success'=> false, 'pc'=> $pc]);
        }
      }

    }
  }
  public function getLoserOptions($player)
  {
    $res = array();
    $resultado  = DB::table('sheldongame')->where('id_sheldongame', '=', $player)->get();
    if (!empty($resultado))
    {
      $res = explode("~", $resultado[0]->gana);
    }
    return $res;
  }
}
