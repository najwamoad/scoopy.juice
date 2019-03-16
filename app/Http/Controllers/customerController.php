<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tables;
use App\problem;
use DB;
class customerController extends Controller
{
    
    public function Addtabel(Request $r)
    {
        $validatedData = $r->validate([
            'start_date' => 'required|max:255',
            'end_date' => 'required|max:255',
            'number_people'=>'required|max:11',
            'mobile_customer'=>'required|min:11|max:11'
        ]);
/*إضافة إلى رقم مبايل الزبون وعدد الاشخاص */
            $t=new tables();
            $t->start_date=$r->start_date;
            $t->end_date=$r->end_date;
            $t->number_people=$r->number_people;
            $t->mobile_customer=$r->mobile_customer;
        $t->save();
        return back()->withErrors('creatsuccful');

    }
    public function Addstabel(Request $v)
    {
        $validatedData = $v->validate([
            "first_name" => "required|regex:/(^([a-zA-z]+)?$)/",
            'last_name' => 'required|regex:/(^([a-zA-z]+)?$)/',
            'email'=>'required|regex:/^.+@.+$/i',
            'subject'=>'required',
            'text_problems'=>'required'
        ]);
 
            $t=new problem();
            $t->first_name=$v->first_name;
            $t->last_name=$v->last_name;
            $t->email=$v->email;
            $t->subject=$v->subject;
            $t->text_problems=$v->text_problems;
        $t->save();
        return back()->withErrors('creatsuccful');

    }
    public function ff()
    {
        $t=DB::table('foods')->get();
        $e=DB::table('best_meals')->get();
        $o=DB::table('advertisements')->get();
        $l=DB::table('offers')->get();
        $categories=DB::table('categories')->get();
        return view('HomePage',compact('t','e','o','l','categories'));
    }
    public function withdetcat($CatId)
    {
        $t=DB::table('foods')->where('cetegoria_id',$CatId)->get();
        $e=DB::table('best_meals')->get();   
        $l=DB::table('offers')->get();
        $o=DB::table('advertisements')->get();
        $categories=DB::table('categories')->get();
        return view('HomePage',compact('t','e','l','o','categories'));
    }

    public function f()
    {
       
        $w=DB::table('news')->get();
        return view('News',compact('w'));
    }
    public function n()
    {
       
        $u=DB::table('imags')->get();
        return view('gallery',compact('u'));
    }
     
      

    
}
