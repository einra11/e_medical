@extends('layouts.guestsapp')

@section('content')
        <div class="content">
                <div class="jumbotron jumbotron-fluid appointment-page full-height">
                        <div class="title m-b-md">
                                Appointment
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
        <div class="container text-light">
            <div class="py-5 text-center">
                <h2>Patient form</h2>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-8 order-md-1">
                  <h4 class="mb-3">Register basic patient information</h4>
                  <form method="POST" action="{{route('appointment.store')}}" class="needs-validation">
                    @csrf
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" name="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                          Valid first name is required.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" name="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                          Valid last name is required.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="lastName">Middle name</label>
                        <input type="text" class="form-control" name="middlename" placeholder="" value="" required>
                        <div class="invalid-feedback">
                          Valid last name is required.
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="email">Email <span class="text-muted">(Optional)</span></label>
                      <input type="email" class="form-control" name="email" placeholder="you@example.com">
                      <div class="invalid-feedback">
                        Please enter a valid email address.
                      </div>
                    </div>

                    <div class="mb-3">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" name="address" placeholder="1234 Main St" required>
                      <div class="invalid-feedback">
                        Please enter your shipping address.
                      </div>
                    </div>


                    <button class="btn btn-primary btn-lg btn-block" type="submit">Register patient</button>
                  </form>
                </div>
              </div>
              <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">&copy; 2017-2018 Company Name</p>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#">Privacy</a></li>
                  <li class="list-inline-item"><a href="#">Terms</a></li>
                  <li class="list-inline-item"><a href="#">Support</a></li>
                </ul>
              </footer>
        </div>

    @endsection
