
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<head>
    <meta charset="UTF-8">
    <title>BADRI - Login</title>

    <meta http-equiv="X-UA-Compatible" content=="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" type="text/css" href="{{asset('admin/libs/bootstrap/css/bootstrap.min.css')}}" />
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/libs/bootstrap/css/bootstrap-rtl.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/fonts/line-awesome/css/line-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/fonts/open-sans/styles.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/fonts/dinnext/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/libs/tether/css/tether.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/styles/common.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/styles/pages/auth-login.min.css')}}" />
    <style>
        .input-icon.icon-right input {
            padding-left: 38px;
        }
        .custom-control.custom-checkbox {
            padding-right: 1.5rem;
            margin-right: 1rem;
            padding-left: 0;
            margin-left: 0;
        }
        .custom-checkbox .custom-control-description {
            margin-left: 25px;
        }
    </style>
</head>
<body>

<div class="ks-page">

    <div class="ks-body">
        <div class="ks-logo">BRAND - SHOP</div>

        <div class="card panel panel-default ks-light ks-panel ks-login">
            <div class="card-block">
                <form class="form-container" action="{{ route('login') }}" novalidate="" method="post" >
                    @csrf
                    <h4 class="ks-header">{{ __('Login') }}</h4>
                    <div class="form-group @error('email') has-error @enderror">
                        <div class="input-icon icon-left icon-lg icon-color-primary">
                            <input type="text" class="form-control  @error('email') error @enderror" @error('email') style="border-color: rgb(185, 74, 72);"@enderror name="email" value="{{ old('email') }}" class="form-control input-lg" id="user-name" placeholder="{{ __('E-Mail Address') }}" tabindex="1" required="" data-validation-required-message="{{ __('Please enter an email') }}"  />
                            <span class="icon-addon">
                                <span class="la la-at">
                                </span>
                            </span>


                        </div>
                        @error('email')
                        <span class="help-block form-error" role="alert">
                        {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group @error('password') has-error @enderror">
                        <div class="input-icon icon-left icon-lg icon-color-primary">
                            <input id="password" type="password" class="form-control @error('password') error @enderror" @error('password') style="border-color: rgb(185, 74, 72);"@enderror name="password" placeholder="{{__('Password')}}" required autocomplete="current-password">
                            <span class="icon-addon">
                                <span class="la la-key"></span>
                            </span>

                        </div>
                        @error('password')
                        <span class="help-block form-error" role="alert">
                        {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">{{ __('Remember Me') }}</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                    </div>

                    {{--<div class="ks-text-center">--}}
                        {{--@if (Route::has('password.request'))--}}
                            {{--<a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>--}}
                        {{--@endif--}}

                    {{--</div>--}}


                </form>
            </div>
        </div>
    </div>

</div>

<script src="{{asset('admin/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/libs/tether/js/tether.min.js')}}"></script>
<script src="{{asset('admin/libs/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>