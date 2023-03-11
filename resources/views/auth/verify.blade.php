@extends('layouts.app')

@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-8 col-lg-6 col-xl-6">
            <div class="card">
                {{-- <div class="card-header">{{ __('Verify Your Email Address') }}</div> --}}

                <div class="card-body">
                    <div class="text-center py-3">
                        <div class="mb-4 mb-md-5">
                            <div class="avatar-lg mx-auto">
                                <div class="avatar-title bg-light text-primary display-5 rounded-circle">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                        </div>
                        <div class="text-muted">
                            <h4 class="">{{ __('Verify Your Email Address') }}</h4>
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            <br/>

                        </div>
                        
                        <div class="mt-3 text-center text-muted">
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-info w-100">{{ __('If you did not receive the email, click here to request another') }}</button>.
                            </form>
                        </div>
                        <p>Have you complete Verification ? <a href="{{ route('login') }}"
                                class="fw-medium text-decoration-underline"> {{ __('Login') }} </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center text-muted p-4">
                <p class="mb-0">&copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script> All Rights Reserved <i class="fa fa-heart text-danger"></i> Allcodex</p>
            </div>
        </div>
    </div>
@endsection
