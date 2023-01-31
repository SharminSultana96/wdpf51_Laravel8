@extends('layouts.app')

@section('title', 'Register Page')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-6">
    <br>
     {{-- showing errors --}}
        @if($errors->any())
        <div class="">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {{-- showing errors --}}

        <h1 style="margin-top: 5px; padding-top: 50px;" >Register Form</h1>
        <form method="post" action="{{route('register')}}">
            @csrf
            <!-- Name input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" />
                
            </div>
            {{-- Email input --}}
            <div class="form-outline mb-4">
                <label class="form-label" for="email">Email address</label>
                <input type="email" name="email" id="email" class="form-control" />
                @error('email')
                <div class="alert alert-danger">{{message}}</div>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" />
                
            </div>
            {{-- confirm Password --}}
            <div class="form-outline mb-4">
                <label class="form-label" for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" />
                
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                {{-- <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                            checked />
                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                </div> --}}

                <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="#!">Register</a></p>
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                </button>
            </div>
        </form>

    </div>
</div>

@endsection
