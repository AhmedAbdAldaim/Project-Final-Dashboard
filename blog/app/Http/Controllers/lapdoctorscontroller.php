<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\hospital;
use App\labdoctor;
use App\examination;
use Illuminate\Http\Request;

class lapdoctorscontroller extends Controller
{
    public function examination(){
        $user = Auth::user();
          $id = $user->labdoctor()->pluck('labdoctors.hospital_id');
         $examinations = examination::where('hospital_id', $id)->where('state','notfinised')->get();
      
         return view('lapdoctors.lapdoctorsdashbord')->with('examinations',$examinations);
        
    }



    public function index(){
        $id = Auth()->user()->hospitals()->pluck('hospitals.id');
        foreach($id as $hospitalId)
        $hospital = hospital::find($hospitalId);

        return view('lapdoctors.index')->with('hospital',$hospital);
    }
    public function create(){
        return view('lapdoctors.create');
    }
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|string',
           
            'email' => 'required|unique:users',
            'password' => 'required',
            ]);
        $user =  new User();
        $user->name =  $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'lapdoctor';
         $user->save();
       
         $labdoctor =  new labdoctor();
         $labdoctor->user_id = $user->id;
         $ahmed = Auth()->user()->hospitals()->pluck('hospitals.id');
         foreach($ahmed as $hospitalId)
         $labdoctor->hospital_id = $hospitalId;
    
         $labdoctor->save();
         

          return redirect('/lapdoctors');
}
public function show(examination $examination){
return view('lapdoctors.examinations')->with('examination',$examination);
}
public function update(examination $examination, Request $request){
    $examination->result = $request->result;
    $examination->date = $request->date;
    $examination->state = 'finised';
    $examination->save();
     return redirect('/lapdoctors/dahsbord');
}

}
