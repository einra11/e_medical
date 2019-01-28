<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use Illuminate\Support\Facades\PDF;

class PatientProfilePDFController extends Controller
{
    //
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::find($id);
        // dd($patient);
        $data = array(
            'patient_prescriptions' => $patient->prescriptions,
            'patient_information' => $patient,
            'patient_medical_history' => $patient->medicalHistory,
        );

        // dd($data->patient->id);
        $pdf = PDF::loadView('patient_page.patientProfilePDF', $data);
        return $pdf->download('Patient.pdf');

        // return view('patient_page.patientProfilePDF')->with($data);
    }
}
