@extends('layouts.guestsapp')

@section('content')
        <div class="content text-light">
                <div class="jumbotron jumbotron-fluid medicine-page full-height">
                        <div class="title m-b-md">
                                Medicine
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
                                        <th scope="col">ID</th>
                                        {{-- <th scope="col">CPR number</th>
                                        <th scope="col">DR number</th> --}}
                                        <th scope="col">Generic</th>
                                        <th scope="col">Brand</th>
                                        <th scope="col">Strength</th>
                                        <th scope="col">Form</th>
                                        {{-- <th scope="col">Manufacturer</th>
                                        <th scope="col">Country</th> --}}
                                        <th scope="col">Trader</th>
                                        <th scope="col">Importer</th>
                                        <th scope="col">Distrbutor</th>
                                        {{-- <th scope="col">Price</th> --}}
                                      </tr>
                                    </thead>
                                    <tbody>
                                            @if(count($drugs) > 0)
                                            @foreach($drugs as $drug)
                                                <tr>
                                                        <th scope="col">{{$drug->id}}</th>
                                                        {{-- <td scope="col">{{$drug->cpr_number}}</td>
                                                        <td scope="col">{{$drug->dr_number}}</td> --}}
                                                        <td scope="col">{{$drug->generic}}</td>
                                                        <td scope="col">{{$drug->brand}}</td>
                                                        <td scope="col">{{$drug->strength}}</td>
                                                        <td scope="col">{{$drug->form}}</td>
                                                        {{-- <td scope="col">{{$drug->manufacturer}}</td>
                                                        <td scope="col">{{$drug->country_of_origin}}</td> --}}
                                                        <td scope="col">{{$drug->trader}}</td>
                                                        <td scope="col">{{$drug->importer}}</td>
                                                        <td scope="col">{{$drug->distributor}}</td>
                                                        {{-- <td scope="col">{{$drug->price}}</td> --}}
                                                </tr>
                                            @endforeach
                                            {{-- {{$drugs->links()}} --}}
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
