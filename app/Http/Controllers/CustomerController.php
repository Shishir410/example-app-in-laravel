<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
     public function customers()
     {
         $bd = DB::select('SELECT * FROM lists');
         return view('customerlist', compact('bd'));
     }

     public function destory($list)
     {
         DB::select('DELETE FROM `lists` WHERE list =' .$list);
     }

     public function input($list, $first_name, $last_name, $order_code, $date, $order_tk)
     {
         DB::insert('insert into lists (list, first_name, last_name, order_code, date, order_tk) values (?, ?, ?, ?, ?, ? )', [$list, $first_name, $last_name, $order_code, $date, $order_tk]);
     }

     function store(Request $req)
     {
        DB::insert('insert into lists (list, first_name, last_name, order_code, date, order_tk) values (?, ?, ?, ?, ?, ? )', [$req->subject, $req->fname, $req->lname, $req->order, $req->date, $req->taka]);
        return "successfully store";
     }

     public function chili()
     {
         return view('customerform');
     }
}
