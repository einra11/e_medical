@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                  <div class="py-5 row px-5">
                    <div class="col-md-8 order-md-1">
                        <div >
                            <h2>Patient form</h2>
                        </div>
                      <form method="POST" action="{{action('PatientsController@update', $patient_information->id)}}" class="needs-validation">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH"/>
                        <div class="row">
                          <div class="col-md-8 mb-3">
                            <label for="firstName">First name</label>
                          <input type="text" class="form-control" name="firstName" placeholder="" value="{{$patient_information->firstname}}" required>
                          </div>
                          <div class="col-md-8 mb-3">
                            <label for="lastName">Last name</label>
                          <input type="text" class="form-control" name="lastName" placeholder="" value="{{$patient_information->lastname}}" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="lastName">Middle name</label>
                          <input type="text" class="form-control" name="middlename" placeholder="" value="{{$patient_information->middlename}}" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="lastName">Birth date</label>
                          <input type="text" class="form-control" name="birth_date" placeholder="" value="{{$patient_information->birth_date}}" required>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="email">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" name="email" placeholder="you@example.com" value="{{$patient_information->email_address}}">
                        </div>

                        <div class="mb-3">
                          <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="1234 Main St" value="{{$patient_information->address}}" required>
                        </div>
                        <div class="row">
                                <div class="col-md-2 mb-3">
                                        <label for="lastName">Age</label>
                                      <input type="text" class="form-control" name="age" placeholder="" value="{{$patient_information->age}}" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="lastName">Sex Male-Female</label>
                                  <input type="text" class="form-control" name="sex" placeholder="" value="{{$patient_information->sex}}" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="lastName">Phone number</label>
                              <input type="text" class="form-control" name="phone_number" placeholder="" value="{{$patient_information->phone_number}}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Occupation</label>
                          <input type="text" class="form-control" name="occupation" placeholder="" value="{{$patient_information->occupation}}" required>
                    </div>
                        </div>
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>
                      </form>
                      <hr>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                            <h3 class="py-3">Medical history</h3>
                            <div class="table-responsive">
                                <table id="example2" class="table table-hover compact">
                                        <thead>
                                          <tr>
                                            <th scope="col">Disease</th>
                                            <th scope="col">Hospital</th>
                                            <th scope="col">Date diagnosed</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                                @if(count($patient_medical_history) > 0)
                                                @foreach($patient_medical_history as $history)
                                                    <tr>
                                                            <td scope="col">{{$history->disease}}</td>
                                                            <td scope="col">{{$history->hospital}}</td>
                                                            <td scope="col">{{$history->date_admitted}}</td>
                                                    </tr>
                                                @endforeach
                                                {{-- {{$prescriptions->links()}} --}}
                                            @else
                                                <p>No post found!</p>
                                            @endif
                                        </tbody>
                                      </table>
                        </div>
                          </div>
                    </div>
                      <div class="card text-white bg-info mb-3 px-5 py-5">
                      <form method="POST" action="{{action('MedicalHistoryController@store')}}">
                        @csrf
                      <input type="hidden" name="patient_id" value="{{$patient_information->id}}"/>
                        <div class="card-title"><h3 class="py-3">Add Medical history</h3><button class="btn btn-primary btn-lg" type="submit">Add</button></div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="disease">Disease</label>
                              <input type="text" class="form-control" name="disease">
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="hospital">Hospital</label>
                              <input type="text" class="form-control" name="hospital">
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="date">Date diagnosed</label>
                                <input class="form-control" type="date" name="date" placeholder="MM/DD/YYYY">
                              </div>
                        </div>
                    </form>
                      </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <h3 class="py-3">Patient's prescription</h3>
                            <div class="table-responsive">
                                <table id="example1" class="table table-hover compact">
                                        <thead>
                                          <tr>
                                            <th scope="col">Generic</th>
                                            <th scope="col">Brand</th>
                                            <th scope="col">Strength</th>
                                            <th scope="col">Form</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                                @if(count($patient_prescriptions) > 0)
                                                @foreach($patient_prescriptions as $prescription)
                                                    <tr>
                                                            <td scope="col">{{$prescription->generic}}</td>
                                                            <td scope="col">{{$prescription->brand}}</td>
                                                            <td scope="col">{{$prescription->strength}}</td>
                                                            <td scope="col">{{$prescription->form}}</td>
                                                    </tr>
                                                @endforeach
                                                {{-- {{$prescriptions->links()}} --}}
                                            @else
                                                <p>No post found!</p>
                                            @endif
                                        </tbody>
                                      </table>
                        </div>
                          </div>
                    </div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                            <h3 class="py-3">Patient's prescription</h3>
                            <div class="table-responsive">
                                <table id="example1" class="table table-hover compact">
                                        <thead>
                                          <tr>
                                            <th scope="col">Generic</th>
                                            <th scope="col">Brand</th>
                                            <th scope="col">Strength</th>
                                            <th scope="col">Form</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                                @if(count($patient_prescriptions) > 0)
                                                @foreach($patient_prescriptions as $prescription)
                                                    <tr>
                                                            <td scope="col">{{$prescription->generic}}</td>
                                                            <td scope="col">{{$prescription->brand}}</td>
                                                            <td scope="col">{{$prescription->strength}}</td>
                                                            <td scope="col">{{$prescription->form}}</td>
                                                    </tr>
                                                @endforeach
                                                {{-- {{$prescriptions->links()}} --}}
                                            @else
                                                <p>No post found!</p>
                                            @endif
                                        </tbody>
                                      </table>
                        </div>
                          </div>
                    </div>
                      <div class="row">
                        <div class="card text-white bg-info mb-3 px-5 py-5">
                      <form method="POST" action="{{action('PrescriptionController@store')}}">
                        @csrf
                        <div class="card-title"><h3 class="py-3">Add prescription</h3><button class="btn btn-primary btn-lg" type="submit">Add</button></div>
                        <div class="row">
                        <div class="col-md-4 mb-3">
                                <label for="patient_id">Patient ID</label>
                              <input type="text" class="form-control" name="patient_id" value="{{$patient_information->id}}"/>
                        </div>
                            <div class="col-md-4 mb-3">
                                <label for="generic">Generic name</label>
                              <input type="text" class="form-control" name="generic" id="addhere1">
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="brand">Brand name</label>
                              <input type="text" class="form-control" name="brand" id="addhere2">
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="strength">Strength</label>
                              <input type="text" class="form-control" name="strength" id="addhere3">
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="form">Form</label>
                              <input type="text" class="form-control" name="form" id="addhere4">
                              </div>
                        </div>
                    </form>
                        </div>
                      </div>
                      <div class="row">
                            <div class="col-md-12 mb-3">
                                    <h3 class="py-3">Drugs list</h3>
                                </div>
                      </div>
                    <div class="table-responsive">
                        <table id="example" class="table table-hover compact">
                                <thead>
                                  <tr>
                                    <th scope="col">Generic</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">Strength</th>
                                    <th scope="col">Form</th>
                                  </tr>
                                </thead>
                                <tbody>
                                        @if(count($drugs) > 0)
                                        @foreach($drugs as $drug)
                                            <tr>
                                                    <td name="generic" scope="col">{{$drug->generic}}</td>
                                                    <td name="brand" scope="col">{{$drug->brand}}</td>
                                                    <td name="strength" scope="col">{{$drug->strength}}</td>
                                                    <td name="form" scope="col">{{$drug->form}}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <p>No post found!</p>
                                    @endif
                                </tbody>
                              </table>
                </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
