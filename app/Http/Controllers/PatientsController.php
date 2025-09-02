<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Hospital;

class PatientsController extends Controller
{
    //
    public function index(Request $request){

        $hospitals = Hospital::all();
        $patients = Patient::all();

        return view("patients.index",compact("patients", "hospitals"));
    }

    public function filter(Request $request) {
        $hospitalId = $request->get('hospital_id');
        if($hospitalId) {
            $patients = Patient::with('hospital')
            ->where('hospital_id', $request->hospital_id)
            ->get();
        } else {
            $patients = Patient::with('hospital')->get();
        }
        return response()->json($patients);
    }

    public function create(){
        $hospitals = Hospital::all();
        return view("patients.create", compact('hospitals'));
    }

    public function store(Request $request){
        $request->validate([
            'patient_name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'hospital_id' => 'required',
        ]);
        Patient::create($request->all());
        return redirect()->route('patients.index')->with("success","Pasien berhasil ditambahkan");
    }

    public function edit(Patient $patient){
        $hospitals = Hospital::all();
        return view("patients.edit",compact("patient","hospitals"));
    }

    public function show(Patient $patient){
        $hospitals = Hospital::all();
        return view("patients.show",compact("patient","hospitals"));
    }

    public function update(Request $request, $id){
        $request->validate([
            'patient_name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'hospital_id' => 'required',
        ]);
        $patient = Patient::find($id);
        $patient->update($request->all());
        return redirect()->route('patients.index')->with("success","Pasien berhasil diubah");
    }
    public function destroy(Patient $patient){
        $patient->delete();
        return response()->json(['success' => true]);
    }
}
