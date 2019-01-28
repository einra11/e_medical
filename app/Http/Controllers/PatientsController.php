<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Drugs;

class PatientsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patients = Patient::orderBy('id')->get();
        // dd($patient);
        return view('patient_page.patient')->with('patients',$patients);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    //     $this->validate($request,[
    //         'firstName' => 'required',
    //         'lastName' => 'required',
    //         'middlename' => 'required',  //required|digits:11
    //         'email' => 'email',
    //         'address' => 'required',
    //     ]);

    // $patient = new Patient;
    //    $patient ->firstname = $request->input('firstName');
    //    $patient ->lastname = $request->input('lastName');
    //    $patient ->middlename = $request->input('middlename');
    //    $patient ->email_address = $request->input('email');
    //    $patient ->address = $request->input('address');
    // $patient->save();

    //     return redirect('/patient')->with('success', 'Message Sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $patient = Patient::find($id);
        $drugs= Drugs::orderBy('generic')->get();
        // dd($patient);
        $data = array(
            'patient_prescriptions' => $patient->prescriptions,
            'patient_information' => $patient,
            'patient_medical_history' => $patient->medicalHistory,
            'drugs' => $drugs
        );

        // dd($data);
        return view('patient_page.patientProfile')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'firstName' => 'required',
            'lastName' => 'required',
            'middlename' => 'required',  //required|digits:11
            'email' => 'email',
            'address' => 'required',
            'sex' => 'required',
            'phone_number' => 'required|digits:11',
            'occupation' => 'required',
            'birth_date' => 'required',
            'age' => 'required',
        ]);

        $patient = Patient::find($id);
           $patient ->firstname = $request->input('firstName');
           $patient ->lastname = $request->input('lastName');
           $patient ->middlename = $request->input('middlename');
           $patient ->email_address = $request->input('email');
           $patient ->address = $request->input('address');
           $patient ->sex = $request->input('sex');
           $patient ->age = $request->input('age');
           $patient ->phone_number = $request->input('phone_number');
           $patient ->occupation = $request->input('occupation');
           $patient ->birth_date = $request->input('birth_date');
        $patient->save();

        // $patient->prescriptions()->create([
        //     'generic' => 'Default',
        //     'brand' => 'Default'
        //    ]);
            return redirect('/patient')->with('success', 'Message Sent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
