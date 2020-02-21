@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('E-poçt adresinizi təstiqləyin') }}</div>
                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Təsdiqləmə linki e-poçt hesabınıza göndərildi') }}
                            </div>
                        @endif
                        {{ __('Davam etməzdən əvvəl e-poçtunuzu doğrulama bağlantısı üçün yoxlayın..') }}    
                        {{ __('E-poçt almamısınızsa') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Təstiq linkini yenidən göndər') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
