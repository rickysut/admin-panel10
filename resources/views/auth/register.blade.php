@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">{{ __('Register Account') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- display name --}}
                        <div class="input-group mb-3"  >   
                            <div class="input-group-prepend" >
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
    
                            <input id="name" name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required autocomplete="name" autofocus placeholder="{{ __('Display Name') }}" value="{{ old('name', null) }}">
    
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>

                        {{-- email --}}
                        <div class="input-group mb-3" >   
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </div>
    
                            <input id="email" name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autocomplete="email" autofocus placeholder="{{ __('Email Address') }}" value="{{ old('email', null) }}">
    
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        {{-- telegram --}}
                        <div class="input-group mb-3" >   
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fab fa-telegram"></i>
                                </span>
                            </div>
    
                            <input id="telegram" name="telegram" type="text" class="form-control{{ $errors->has('telegram') ? ' is-invalid' : '' }}"  autocomplete="telegram" autofocus placeholder="{{ __('Telegram') }}" value="{{ old('telegram', null) }}">
    
                            @if($errors->has('telegram'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('telegram') }}
                                </div>
                            @endif
                        </div>

                        {{-- country --}}
                        <div class="input-group mb-3" >   
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-globe-europe"></i>
                                </span>
                            </div>
    
                            <input id ="country" name="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}"  autocomplete="country" autofocus placeholder="{{ __('Country') }}" value="{{ old('country', null) }}">
    
                            @if($errors->has('country'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('country') }}
                                </div>
                            @endif
                        </div>

                        {{-- phone --}}
                        <div class="input-group mb-3" >   
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-phone-square"></i>
                                </span>
                            </div>
    
                            <input id ="phone" name="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"   autofocus placeholder="{{ __('Phone') }}" value="{{ old('phone', null) }}" autocomplete="phone">
    
                            @if($errors->has('phone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                        </div>

                        {{-- password --}}
                        <div class="input-group mb-3" >
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
    
                            <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ __('Password') }}" autocomplete="new-password">
    
                            @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>

                        {{-- confirm password --}}
                        <div class="input-group mb-3" >
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
    
                            <input id="password_confirmation" name="password_confirmation" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" required placeholder="{{ __('Confirm Password') }}" autocomplete="new-password">
    
                            @if($errors->has('password_confirmation'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password_confirmation') }}
                                </div>
                            @endif
                        </div>
                        
                        <div class="mt-3">
                            <button class="btn btn-primary w-100" type="submit">{{ __('Register') }}</button>
                        </div>
                        
                    </form>
                    <div class="mt-4 text-center">
                        <p>Already have an account ? <a href="{{ route('login') }}"
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
</div>
@endsection
