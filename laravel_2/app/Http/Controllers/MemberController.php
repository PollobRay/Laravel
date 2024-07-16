<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    // show all member
    public function index()
    {
        $members = Member::all();
        
        return view('index',['members'=>$members]);
    }

    // show detail of member
    public function show()
    {

    }

    // create member
    public function create()
    {
        return view('add_member');
    }

    // store member
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required | max:255 | string',
            'description'=>'required | max:255 | string',
            'image'=> 'required | mimes:png,jpg,jpeg'
        ]);

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $file_name = time().'.'.$extension;
        $path = 'uploads/member/';
        $file->move($path, $file_name);

        Member::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $path.$file_name
        ]);

        return redirect()->route('add')->with('status','User Added Successfully');
    }

    //edit member detail
    public function edit()
    {

    }

    // update member
    public function update()
    {

    }

    // delete member
    public function destroy()
    {

    }

}
