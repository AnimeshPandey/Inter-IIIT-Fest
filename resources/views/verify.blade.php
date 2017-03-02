@extends('layouts.app')

@section('content')
        <h2>Verify Your Email Address</h2>

        <div>
            Thanks for creating an account with the verification demo app.
            Please follow the link below to verify your email address
            {{ URL::to('register/verify/' . $code) }}.<br/>

        </div>
@endsection