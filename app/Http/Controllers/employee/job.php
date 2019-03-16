<?php

namespace App\Http\Controllers\employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\best_meal;
use DB;
class job extends Controller
{
    public function Addbestmeal(Request $o)
    {
        $validatedData = $o->validate([
            'food_id' => 'required',
            'food_name' => 'required|regex:/(^([a-zA-z]+)?$)/',
            'imag'=>'required',
         
        ]);
/*إضافة إلى رقم مبايل الزبون وعدد الاشخاص */
            $t=new best_meals();
            $t->food_id=$o->food_id;
            $t->food_name=$o->food_name;
            $t->imag=$o->imag;
          
        $t->save();
        return back()->withErrors('creatsuccful');

    }
}
