<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pichant;
use App\speshalty;
use App\hospital;
class reportscontroller extends Controller
{
    public function allpichant(){
 $pichant = pichant::all();
 

return view('hospitals.reports.allpichant')->with('pichants',$pichant);
    }
    public function allspishaltes(){
        $speshalty = speshalty::all();

        return view('hospitals.reports.allspishaltes')->with('speshaltys',$speshalty);
    }
    public function allhospitals(){
        $hospital = hospital::all();

        return view('hospitals.reports.allhospitals')->with('hospitals',$hospital);
    }
}
