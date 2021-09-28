<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function students()
    {
        $tomi = DB::select('SELECT * FROM students_list');
        return view('studentlist', compact('tomi'));
    }

    public function destroy($id)
    {
        DB::delete('DELETE FROM `students_list` WHERE id ='.$id);
    }

    public function all($id, $name, $Email)
    {
        DB::insert('insert into students_list(id, name, Email) values ( ?, ?, ? )',[$id, $name, $Email]);
    }

    public function forit($id, $name, $Email)
    {
        DB::insert('insert into students_list(id, name, Email) values ( ?, ?, ? )',[$id, $name, $Email]);
    }

    function store(Request $req)
    {
        DB::insert('insert into students_list (id, name, Email) values (?, ?, ?)', [$req->subject, $req->name, $req->mail ]);
        return "successfully store";
    }

    public function tull()
    {
        return view('form');
    }
}
