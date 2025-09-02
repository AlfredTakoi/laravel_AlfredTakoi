<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;

class HospitalsController extends Controller
{
    //
    public function index(){
        $hospitals = Hospital::all();
        return view("hospitals.index",compact("hospitals"));
    }

    public function create(){
        return view("hospitals.create");
    }

    public function store(Request $request){
        $request->validate([
            'hospital_name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone_number' => 'required',
        ]);
        Hospital::create($request->all());
        return redirect()->route('hospitals.index')->with("success","Rumah Sakit berhasil ditambahkan");
    }

     public function update(Request $request, $id){
        $request->validate([
            'hospital_name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone_number' => 'required',
        ]);
        $hospital = Hospital::find($id);
        $hospital->update($request->all());
        return redirect()->route('hospitals.index')->with("success","Rumah Sakit berhasil diubah");
    }

    public function edit($id){
        $hospital = Hospital::find($id);
        return view('hospitals.edit', compact('hospital'));
    }

    public function show($id) {
        $hospital = Hospital::find($id);
        return view('hospitals.show', compact('hospital'));
    }

    public function destroy(Hospital $hospital){
        $hospital->delete();
        return response()->json(['success' => true]);
    }
}
