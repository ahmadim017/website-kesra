@extends('layouts.login')

@section('content')

          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Login Here</h1>
                </div>
                @if (session('status'))
                <div class="alert alert-warning">
                    {{session('status')}}
                </div>
                @endif
<form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
@csrf
<div class="form-group">
<label for="email" class="col-sm-12 colform-label pl-0">{{ __('E-Mail Address') }}</label>
<br>
<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>@if ($errors->has('email'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('email') }}</strong>
</span>
@endif
</div>
<div class="form-group">
<label for="password" class="col-md-4 col-form-label text-md-left pl-0">{{ __('Password') }}</label>
<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
@if ($errors->has('password'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('password') }}</strong>
</span>
@endif
</div>
<div class="form-group captcha">
  
      <label for="captcha" class="col-md-4 col-form-label text-md-left pl-0">Captcha</label>
      <span>{!! captcha_img() !!}</span>
      <button type="button" class="btn btn-danger" class="reload" id="reload">
      &#x21bb;
      </button>
  
</div>

  <div class="form-group"> 
      <input type="text" class="form-control form-control-user @error('captcha') is-invalid @enderror"
          id="captcha" placeholder="Enter capthca" name="captcha" required >
          @error('captcha')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
          @enderror
  </div>
<div class="form-group">
<button type="submit" class="btn-block btn btn-secondary">{{ __('Login') }}</button>
<br>
<hr>
<div class="text-center">
<a class="btn btn-link pl-0 small text-success" href="{{route('register') }}">belum punya akun?</a>
</div>
<div class="text-center">
<a class="btn btn-link pl-0 small text-success" href="{{route('welcome') }}">Kembali</a>
</div>
</div>
</form>
</div>
</div>
@endsection
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha-login',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>
@endsection
