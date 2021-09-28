<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PlaceController extends Controller
{
    public function users()
    {
        $added = DB::select('SELECT * FROM users');
        return $added;
    }

    //public function harij()
    //{
        //$fd = new Flight();
        //$fd->name = 'Bolaka';
        //$fd->airline = 'bd biman';
        //$fd->save();
        //return Flight::get();
    //}

}
