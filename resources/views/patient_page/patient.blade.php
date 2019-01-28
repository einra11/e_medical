@extends('layouts.guestsapp')

@section('content')
        <div class="content">
                <div class="jumbotron jumbotron-fluid patient-page full-height">
                        <div class="title m-b-md">
                                Patients
                        </div>
                        <div class="links py-5">
                                <a href="/">Home</a>
                                <a href="/appointment">Appointment</a>
                                <a href="/medicine">Medicine list</a>
                                <a href="/patient">Patient list</a>
                                <a href="/contact">Contact</a>
                                <a href="/about">About</a>
                            </div>
                </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                            <table id="example" class="table table-hover compact">
                                    <thead>
                                      <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">First name</th>
                                        <th scope="col">Last name</th>
                                        <th scope="col">Middle name</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Sex</th>
                                        <th scope="col">Phone number</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Occupation</th>
                                        <th scope="col">Birth Date</th>
                                        {{-- <th scope="col">Test</th> --}}
                                      </tr>
                                    </thead>
                                    <tbody>
                                            @if(count($patients) > 0)
                                            @foreach($patients as $patient)
                                                <tr>
                                                        <th scope="col">{{$patient->id}}</th>
                                                        <td scope="col"><a href="/patient/{{$patient->id}}">{{$patient->firstname}}</a></td>
                                                        <td scope="col">{{$patient->lastname}}</td>
                                                        <td scope="col">{{$patient->middlename}}</td>
                                                        <td scope="col">{{$patient->age}}</td>
                                                        <td scope="col">{{$patient->sex}}</td>
                                                        <td scope="col">{{$patient->phone_number}}</td>
                                                        <td scope="col">{{$patient->address}}</td>
                                                        <td scope="col">{{$patient->email_address}}</td>
                                                        <td scope="col">{{$patient->occupation}}</td>
                                                        <td scope="col">{{$patient->birth_date}}</td>
                                                        {{-- <td scope="col">{{$patient->prescriptions}}</td> --}}
                                                </tr>
                                            @endforeach
                                            {{-- {{$patients->links()}} --}}
                                        @else
                                            <p>No post found!</p>
                                        @endif
                                    </tbody>
                                  </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
