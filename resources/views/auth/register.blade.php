@extends('layouts.register')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-xl-5 col-lg-6 col-md-4">
    <div class="card border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Registrasi Account!</h1>
                        </div>
                        <form method="POST" action="{{ route('register') }}" class="user">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user @error('nik') is-invalid @enderror" id="exampleFirstName"
                                    placeholder="NIK" name="nik" value="{{ old('nik') }}" required autocomplete="nik" autofocus>
                                    @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                            <div class="form-group">
                                    <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="exampleFirstName"
                                        placeholder="Nama Lengkap" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleInputEmail"
                                    placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                        id="exampleInputPassword" placeholder="Password" name="password" required autocomplete="new-password">
                                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleRepeatPassword" placeholder="Repeat Password" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 captcha">
                                    <label for="captcha" class="col-md-4 col-form-label text-md-right">Captcha</label>
                                    <span>{!! captcha_img() !!}</span>
                                    <button type="button" class="btn btn-danger" class="reload" id="reload">
                                    &#x21bb;
                                    </button>
                                </div>
                            </div>

                                <div class="form-group row justify-content-center">
                                    <div class="col-md-10">
                                    <input type="text" class="form-control form-control-user @error('captcha') is-invalid @enderror"
                                        id="captcha" placeholder="Enter capthca" name="captcha" required >
                                        @error('captcha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            <button type="submit" class="btn btn-secondary btn-user btn-block">
                                {{ __('Daftar') }}
                            </button>
                           
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small text-success" href="{{ route('login') }}">Sudah punya account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>
@endsection