<?php

namespace App\Http\Controllers;
use App\Models\User;
class userController extends Controller 
{
    public function show_user(){
        $user = User::all();
        return view('admin.showUser',compact('user'));
    }
public function delete_user($id){
    $data = User::find($id);

    $data->delete();

    return redirect()->back()->with('message','تم الحذف بنجاح');
}
  
}
