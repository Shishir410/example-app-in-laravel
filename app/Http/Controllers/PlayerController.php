<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayerController extends Controller
{
     public function player()
     {
         $hot = DB::select('SELECT * FROM lists');
         return view('playerlist', compact('hot'));
     }

     public function destory($id)
     {
         DB::select('DELETE FROM `lists` WHERE id =' . $id);
     }

     public function input($id, $name, $jersey_number, $team_name, $player_description)
     {
        DB::insert('insert into lists (id, name, jersey_number, team_name, player_description) values (?, ?, ?, ?, ? )', [$id, $name, $jersey_number, $team_name, $player_description]);
     }

     function store(Request $req)
     {
        DB::insert('insert into lists (id, name, jersey_number, team_name, player_description) values (?, ?, ?, ?, ? )', [$req->subject, $req->name, $req->jen, $req->order, $req->dib]);
        return "Successfully store";
     }

     public function team()
     {
         return view('playerform');
     }

     public function info($id)
     {
         $dfdfd = DB::select('Select FROM `lists` WHERE id =' . $id);
         return view('addview', compact('dfdfd'));
     }


}
