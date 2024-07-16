<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\File;


class MemberController extends Controller
{
    // show all member
    public function index()
    {
        $members = Member::all();
        
        return view('index',['members'=>$members]);
    }

    // show detail of member
    public function show(int $id)
    {
        $member = Member::find($id);

        return view('view_member',['member'=>$member]); 
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
    public function edit(int $id)
    {
        $member = Member::find($id);

        return view('update_member',['member'=>$member]);
    }

    // update member
    public function update(Request $request,int $id)
    {
        $request->validate([
            'name'=>'required | max:255 | string',
            'description'=>'required | max:255 | string',
            'image'=> 'nullable | mimes:png,jpg,jpeg'
        ]);

        // To delete previous image from storage
        $member = Member::find($id);
        $image = $member->image;
        if($request->has('image'))
        {
            if(File::exists($member->image))
            {
                File::delete($member->image); //delete image from storage
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $file_name = time().'.'.$extension;
            $path = 'uploads/member/';
            $file->move($path, $file_name);
            $image = $path.$file_name;
        }

        Member::where('id',$id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image
        ]);

        return redirect()->route('update',$id)->with('status','User Information Updated Successfully');
        
    }

    // delete member
    public function destroy()
    {

    }

}
