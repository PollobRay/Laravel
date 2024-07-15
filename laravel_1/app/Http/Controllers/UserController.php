<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show() // let create
    {
        //return view('about');

        $users = DB::table('student')->get();
        //$users = DB::table('student')->select('name','city')->where('city','=','Bogura')->get();
        // whereBetween()
        // whereIn()
        // whereNull()
        // whereMonth()

        return view('about',['data'=>$users]);
    }

    public function my_query(int $id)
    {
        $users = DB::table('student')->where('id',$id)->get();

        return view('about',['data'=>$users]);
    }

    public function add_student(Request $req)
    {
        $user=DB::table('student')->insert([
            'name'=>$req->name ,
            'city'=>$req->city,
            'city_id'=>$req->city_id
        ]);

        if($user)
        {
            return redirect()->route('show_student');
        }
    }
}
