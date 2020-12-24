<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\pichant;
use App\interview;
use App\examination;
class recordcontroller extends Controller
{
    public function record($id){
        $pichant = pichant::find($id);
      $interview = DB::table('interviews')->where('pichant_id', $pichant->id)->get();

    return view('record.show')->with('interviews', $interview)->with('pichant', $pichant);
    }
     public function interviews($id){
        $pichant = pichant::find($id);
      $interview = DB::table('interviews')->where('pichant_id', $pichant->id)->get();

    return view('record.interviews')->with('interviews', $interview)->with('pichant', $pichant);
    }
    

    public function examination($id){
      $interview = interview::find($id);
      return view('record.examinations')->with('interview', $interview);
    }
    public function medicine($id){
      $interview = interview::find($id);
      return view('record.medicines')->with('interview', $interview);
    }
}
