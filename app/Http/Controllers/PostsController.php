<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function posts()
    {
        $main = DB::select('SELECT * FROM posts');
        return $main;
    }

}
