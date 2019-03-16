<?php

namespace App\Http\Controllers\employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class tableemployee extends Controller
{
    public function nn()
    {
       
        $k=DB::table('tables')->get();
        return view('AdminAndManger.AddCatbyEmployee',compact('k'));
    }
}
