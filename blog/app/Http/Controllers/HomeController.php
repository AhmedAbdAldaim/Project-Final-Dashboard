<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\doctor;
use App\hospital;
use App\interview;
use Carbon\carbon;
use Carbon\carbon as time;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $time = time::today()->format('y-m-d');
        if (Auth()->user()->isDoctor()){
            $doctor =  doctor::all();
            $interview = DB::table('interviews')->where([
                ['doctor_id','=',Auth()->user()->doctor()->pluck('doctors.id')],
                ['state','=','notstarted'],['date','=',$time],
            ])->get();
            
           
            return view('doctors.dashbord')->with('doctors',$doctor)->with('interviews',$interview );
        }
        else
      //  elseif(Auth()->user()->isSuperadmin())
    {
            $hospitals = hospital::all();
            $doctors = doctor::all();
            // $hospitalw[]='';
            // $countDoctor[]=0;
          
            return view('home')->with('hospitals',$hospitals)->with('doctors',$doctors);
        }
        
    }
}
