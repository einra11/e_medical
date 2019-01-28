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
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
