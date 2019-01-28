@extends('layouts.guestsapp')

@section('content')
        <div class="content">
                <div class="jumbotron jumbotron-fluid main-page full-height-main">
                        <div class="title m-b-md m-b-sm">
                                E-MED
                        </div>
                        @auth
                        <div class="links py-5">
                                <a href="/">Home</a>
                                <a href="/appointment">Appointment</a>
                                <a href="/medicine">Medicine list</a>
                                <a href="/patient">Patient list</a>
                                <a href="/contact">Contact</a>
                                <a href="/about">About</a>
                        </div>
                        <queue-app></queue-app>
                        @else
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-7">
                                        <div class="card">
                                            <div class="card-header">{{ __('Login') }}</div>
                                            <div class="card-body">
                                                <form class="form-signin"method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                                        <div class="col-md-6">
                                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email Address" required autofocus>

                                                            @if ($errors->has('email'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                                            @if ($errors->has('password'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('password') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-8">
                                                        <div class="col-md-6 offset-md-4">
                                                            <button type="submit" class="btn btn-lg btn-primary btn-block">
                                                                {{ __('Login') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endauth
                </div>
        </div>
@endsection
