@extends('auth.authmaster')

@section('content')

    <div class="col-12 col-sm-12 col-md-8 col-lg-8 login-sidebar animated fadeInRightBig">
        <div class="login-container">
            <h2 class="text-center text-upper">Register To Hospitali EHR</h2>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ ('Name') }}</label>

                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="">
                    <label for="facility_name" class="col-md-4 col-form-label text-md-right">Facility Name</label>
                    <select class="form-control {{ $errors->has('facility_name') ? ' is-invalid' : '' }}" name="facility_name" id="facility_name"  required autofocus>
                        <option value="name">Name</option>
                        <option value="option">option</option>
                    </select>
                    {{--<input id="facility_name" type="text" class="form-control{{ $errors->has('facility_name') ? ' is-invalid' : '' }}" name="facility_name" value="{{ old('facility_name') }}" required autofocus>--}}

                @if ($errors->has('facility_name'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('facility_name') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="">
                    <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ ('Telephone') }}</label>

                    <input id="telephone" type="number" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ old('telephone') }}" required autofocus>

                    @if ($errors->has('telephone'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('telephone') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ ('E-Mail Address') }}</label>

                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="user_type" class="col-md-4 col-form-label text-md-right">User Type</label>

                    <div class="col-md-6">
                        <select class="form-control" name="user_type" id="user_type">
                            <option value="">--Choose User Type--</option>
                            <option value="0">Administrator</option>
                            <option value="1">Patient</option>
                            <option value="2">Hospital</option>
                        </select>
                    </div>
                </div>


                <div class="">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ ('Password') }}</label>

                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ ('Confirm Password') }}</label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                </div>
                <br>

                <div class="form-group">
                    <div class="flexbox align-items-center">
                        <input type="submit" class="btn gredient-bg" value="register">
                        <p>If You Are a Existing User <a href="{{route('login')}}" data-toggle="tooltip" class="gredient-cl" data-original-title="Log In">Login Here.</a></p>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
