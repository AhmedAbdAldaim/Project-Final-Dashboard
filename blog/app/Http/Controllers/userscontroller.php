<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
class userscontroller extends Controller
{
    public function index(){
        $user = User::where('role','admin')->get();
        return view('admin.index')->with('users',$user);
    }


    public function addAmin(){
        return view('admin.create');
    }
    public function store(Request $request)
    {
       
        $user =  new User();
    
        $user->name =  $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'admin';
         $user->save();
        return redirect('/admins');
    }
    public function edit(User $user)
    {
        return view('admin.edit')->with('user', $user );
    }
    public function update(Request $request,User $user)
    {
        $user->name = $request->get('name');
        $user->email  = $request->get('email');
        $user->password = Hash::make($request->password);
        $user->update();
        return redirect('/admins');
    }
    public function destroy(User $user)
    {
         $user->delete();
        return redirect('/admins');
    }

}
