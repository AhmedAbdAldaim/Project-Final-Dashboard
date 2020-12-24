<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\hospital;

class hospitalscontroller extends Controller
{
    public function index()
    {
        $hospitals = hospital::all();
        return view('hospitals.index',compact('hospitals'));
    }
    public function create()
    {
        return view('hospitals.create'); 
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:hospitals',
            'location' => 'required' ,
            'email' => 'required|unique:users',
            'password' => 'required',
            
          
           ]);
           $hospital = new hospital();
           $hospital->name =  $request->name;
           $hospital->location =  $request->location;
           $hospital->phone_number =  $request->phone_number;
           $hospital->save();

        $user =  new User();
    
        $user->name =  $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'hosptaladmin';
         $user->save();
        
            $user->hospitals()->attach($hospital->id);
        return redirect('/hospitals');
    }
    public function edit(hospital $hospital)
    {
        return view('hospitals.edit')->with('hospital', $hospital);
    }
    public function update(Request $request,hospital  $hospital)
    {
        $hospital->name = $request->name;
        $hospital->update();
        return redirect('/hospitals');
    }
    public function destroy($id){
    $hospital = hospital::withTrashed()->where('id',$id)->first();
        if($hospital->trashed()){
            Storage::disk('public')->delete($hospital->image);
            $hospital->forceDelete();
        }
        else{
         $hospital->delete();   
        }

        return redirect('/hospitals');

    }
}
