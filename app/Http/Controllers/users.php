<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class users extends Controller
{
    //

    function operations()
    {
//        return DB::table('members')->sum('id');
//        return DB::table('members')->min('id');
// return DB::table('members')->max('id');
// return DB::table('members')->avg('id');
 return DB::table('members')->min('id');
 return DB::table('members')->max('id');



    }
}
