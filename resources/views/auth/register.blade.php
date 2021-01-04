@extends('layouts.login-template')

@section('content')
 <div class="row vh-100">
    <div class="col-lg-12 pr-0 align-self-center">
        <div class="row">
            <div class="col-lg-3 mx-auto">
                <div class="card auth-card shadow-lg">
                    <div class="card-body">
                        <div class="px-3">
                            <div class="auth-logo-box">
                                <a href="https://mannatthemes.com/metrica/dark/analytics/analytics-index.html" class="logo logo-admin"><img src="./front/images/logo-sm.png" height="55" alt="logo" class="auth-logo"></a>
                            </div>
                            <!--end auth-logo-box-->
                            <div class="text-center auth-logo-text">
                                <h4 class="mt-0 mb-3 mt-5">Free Register for Metrica</h4>
                                <p class="text-muted mb-0">Get your free Metrica account now.</p>
                            </div>
                            <!--end auth-logo-text-->
                            <form class="form-horizontal auth-form my-4" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Rol</label>
                                    <div class="input-group mb-3"><span class="auth-form-icon"><i class="dripicons-user-id"></i> </span>
                                        <select class="form-control form-control-lg mb-4 @error('roles_id') is-invalid @enderror" name="roles_id" value="{{ old('roles_id') }}" required utocomplete="roles_id" autofocus >
                                            <option value="1">Admin</option>
                                            <option value="2">Proveedor de servicio</option>
                                            <option value="3">CLiente</option>
                                        </select>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username">Nombres</label>
                                    <div class="input-group mb-3"><span class="auth-form-icon"><i class="dripicons-user"></i> </span>
                                        <input type="text" 
                                        id="username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter username">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="useremail">Email</label>
                                    <div class="input-group mb-3"><span class="auth-form-icon"><i class="dripicons-mail"></i> </span>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  id="useremail" placeholder="Enter Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <div class="input-group mb-3"><span class="auth-form-icon"><i class="dripicons-lock"></i> </span>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="userpassword" placeholder="Enter password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="conf_password">Confirm Password</label>
                                    <div class="input-group mb-3"><span class="auth-form-icon"><i class="dripicons-lock-open"></i> </span>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"required autocomplete="new-password" placeholder="Enter Confirm Password">
                                    </div>
                                    <!--<div class="form-group">
                                        <label for="mo_number">Mobile Number</label>
                                        <div class="input-group mb-3"><span class="auth-form-icon"><i class="dripicons-phone"></i> </span>
                                            <input type="text" class="form-control" id="mo_number" placeholder="Enter Mobile Number">
                                        </div>
                                    </div>-->
                                    <!--end form-group-->
                                </div>
                                <!--end form-group-->
                                <div class="form-group row mt-4">
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-switch switch-success">
                                            <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                            <label class="custom-control-label text-muted" for="customSwitchSuccess">Al registrarte estás de acuerdo con los<a href="#" class="text-primary">Terminos y condiciones</a></label>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end form-group-->
                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-primary btn-round btn-block waves-effect waves-light" type="submit"> {{ __('Registrar') }} <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end form-group-->
                            </form>
                            <!--end form-->
                        </div>
                        <!--end /div-->
                        <div class="m-3 text-center text-muted">
                            <p class="">¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-primary ml-2">Logear</a></p>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end col-->
</div>
@endsection