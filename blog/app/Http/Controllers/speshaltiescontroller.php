<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\speshalty;
class speshaltiescontroller extends Controller
{

    public function index()
    {
        return view('spesialties.index')->with('spesialties', speshalty::all());
    }
    public function create()
    {
        return view('spesialties.create'); 
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:speshalties',
           
          
           ]);
        speshalty::create($request->all());

        return redirect('/spesialties');
    }
    public function edit(speshalty $speshalty)
    {
        return view('spesialties.edit')->with('speshalty', $speshalty );
    }
    public function update(Request $request,speshalty  $speshalty)
    {
        $speshalty->name = $request->get('name');
        $speshalty->save();
        return redirect('/spesialties');
    }
    public function destroy(speshalty $speshalty)
    {
        $speshalty->delete();
        return redirect('/spesialties');
    }

}
