<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\interview;
use App\examination;
use App\medicine;
use App\hospital;
use Illuminate\Http\Request;

class interviewscontroller extends Controller
{
    public function index(){

        return view('interviews.index')->with('interviews', interview::all());
}
    public function create()
{
   
    return view('interviews.create');

}
public function store(Request $request)
    {
       
        $interview =  new interview();
    
        $interview->notes =  $request->notes;
        $interview->pichant_id = 1;
        $interview->doctor_id= 1;
        $interview->save();
       
      
           
        return redirect('/interviews');
    }
    public function show(interview $interview){
        $hospitals = hospital::all();
        return view ('interviews.show')->with('interview', $interview)->with('hospitals', $hospitals);
     
    }
    public function update(Request $request,interview $interview)
    {
        if($request->name){
           $examination = new examination();
           $examination->name = $request->name;
           $examination->result = $request->result;
           $examination->hospital_id =  $request->hospitalId;
           $examination->interview_id = $interview->id;
           $examination->save();
        }
        $interview->symptoms = $request->symptoms;
        $interview->the_diagnosis = $request->the_diagnosis;
        $interview->notes = $request->notes;
        $interview->save();
      
        if($request->medicinename){
            $medicine = new medicine();
            $medicine->name = $request->medicinename;
            $medicine->description = $request->description;
            $medicine->duration_of_use = $request->durationofuse;
            $medicine->interview_id  = $interview->id;
            $medicine->save();
        }
        return redirect('/home');
    }
    public function pindeinginterviews(){
    
        $interview = DB::table('interviews')->where([
            ['doctor_id','=',Auth()->user()->doctor()->pluck('doctors.id')],
            ['state','=','pinding'],
        ])->get();
        
        return view ('interviews.pindingintervews')->with('interviews', $interview);
    }
    public function addeamintaons($id){
        $hospitals = hospital::all();
        $interview = interview::find($id);
        return view('interviews.createexam')->with('interview', $interview)->with('hospitals', $hospitals);
    }
    public function storeexamintaons(Request $request,interview $interview){
        $request->validate([
            'name' => 'required|string',
            'hospitalId' => 'required|' ,
           ]);

        $examination = new examination();
        $examination->name = $request->name;
        $examination->hospital_id =  $request->hospitalId;
        $examination->interview_id = $interview->id;
        $examination->save();
        $interview->state = 'pinding';
        $interview->save();
        return redirect()->back();
    }
    public function addmedcine($id){
        $interview = interview::find($id);
        return view('interviews.medicinecreate')->with('interview', $interview);
    }

public function storemedicine(Request $request,interview $interview){


    $request->validate([
        'medicinename' => 'required|string',
        'durationofuse' => 'required|string' ,
        'description' => 'required|string',
       ]);
       $medicine = new medicine();
    $medicine->name = $request->medicinename;
    $medicine->description = $request->description;
    $medicine->duration_of_use = $request->durationofuse;
    $medicine->interview_id  = $interview->id;
    $medicine->save();
    return redirect()->back();
}

}