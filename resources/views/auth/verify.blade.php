@extends('layouts.app')

@section('content')

@include('inc.header')

@include('inc.headcss')

<div class="breadcrumb-area pt-205 pb-10">
    <div class="container">
        <div class="text-center">
            <h1>Verify Your Email Address</h1>                  
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="breadcrumb-area pt-205 pb-500">
    DIU
</div>

@include('inc.footer')

@endsection
