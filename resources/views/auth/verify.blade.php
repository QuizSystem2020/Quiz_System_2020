@extends('layouts.app')

@section('content')
<div class="container">
<<<<<<< HEAD
                    

                    
                    <form class="d-inline mt-3 w-100" method="POST" action="{{ route('verification.resend') }}">
                        @if (session('resent'))
=======
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
>>>>>>> c67004209b3bf2903d93f354d6732a17ece5c48d
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
<<<<<<< HEAD
                    {{ __('Davam etməzdən əvvəl e-poçtunuzu doğrulama bağlantısı üçün yoxlayın..') }}    
                    {{ __('E-poçt almamısınızsa') }},
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Testiq linkini yeniden gonder') }}</button>.
=======

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
>>>>>>> c67004209b3bf2903d93f354d6732a17ece5c48d
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
