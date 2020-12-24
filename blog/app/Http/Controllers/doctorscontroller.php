<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\hospital;
use App\speshalty;
use App\doctor;
use App\doctorhospital;
use App\worktime;
use App\interview;
class doctorscontroller extends Controller
{
    public function doctorsall(){
        $doctors = doctor::all();
        return view('doctors.all')->with('doctors',$doctors);
    }



    public function index()
    {
        $id = Auth()->user()->hospitals()->pluck('hospitals.id');
        foreach($id as $hospitalId)
        $hospital = hospital::find($hospitalId);
        return view('doctors.index')->with('hospital',$hospital);

        //,compact('doctors'));
    }
    public function create()
    {
       
        return view('doctors.create')->with('spesialties', speshalty::all());
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:hospitals',
            'fellowship' => 'required|string' ,
            'email' => 'required|unique:users',
            'password' => 'required',
            'speshaltyId' => 'required',

          
           ]);
        $user =  new User();
    
        $user->name =  $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'doctor';
         $user->save();
        $doctor = new doctor();
        $doctor->user_id = $user->id;
        $doctor->fellowship = $request->fellowship;
        $doctor->speshalty_id = $request->speshaltyId;
        $doctor->diagnosis_prise = $request->diagnosis_prise;
        $doctor->save();
        
        $ahmed = Auth()->user()->hospitals()->pluck('hospitals.id');
        $doctor->hospitals()->attach($ahmed);
      
           
        return redirect('/workday');
    }
    public function createworktime(){


        return view('doctors.workday');

    }
    public function workday(Request $request)
    {
        $request->validate([
            'day' => 'required|string' ,
            'from' =>  'required',
            'to' => 'required',
         
          
           ]);

        $doctorhoital = DB::table('doctor_hospital')->latest('created_at')->first();
        $workday =  new worktime();
        $workday->doctorhospital_id = $doctorhoital->id;
        $workday->day = $request->day;
        $workday->from = $request->from;
        $workday->to = $request->to;
        $workday->save();
        
        return redirect('/home');


    }
    public function edit(User $user){

        $doctor = $user->doctor;
        return view('doctors.edit', ['user'=> $user,'doctor'=> $doctor])->with('spesialties', speshalty::all());
    }
    public function update(User $user,Request $request){
        $doctor = $user->doctor;
   
         $doctor->fellowship = $request->fellowship;
        
        $doctor->carear =  $request->carear;
        $doctor->qualifications = $request->qualifications;
        if( $request->hasfile('image')){
            $file = $request->file('image');
            
            $ext = $file->getClientOriginalExtension() ;
            $filename = 'image' . '_' . time() . '.' . $ext ;
            $file->storeAs('public/image' ,$filename); 
            $doctor->image= $filename;
        }        
        
        $doctor->update();
           return redirect('/home');
      }
}
