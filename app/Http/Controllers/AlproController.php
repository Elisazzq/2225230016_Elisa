<?php

namespace App\Http\Controllers;

use App\Models\Alpro;
use Illuminate\Http\Request;

class AlproController extends Controller
{
    public function index(){
        $alpro = Alpro::all();
        return view('alpro.index',compact(['alpro']));
    }
            
    public function create()
    {
        return view('alpro.create');
    }

    public function store (Request $request)
    { 
       // dd (request->except)(['_token','submit']));
       Alpro::create($request->except(['_token','submit']));
       return redirect('/alpro');
    }

    public function edit($id)
    {
        $alpro = Alpro::find($id);
        return view('alpro.edit',compact(['alpro']));
    }

    public function update($id, Request $request)
    {
        $alpro = Alpro::find($id);
        $alpro->update($request->except(['token','submit']));
        return redirect('/alpro');
    }

    public function destroy($id)
    {
        $alpro = Alpro::find($id);
        $alpro->delete();
        return redirect('/alpro');
    }
} 

 