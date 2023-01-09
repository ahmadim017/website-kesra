@extends('layouts.sbadmin')


@section('content')
<div class="col-md-8">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Ganti Password</h6>
      </div>
      
      <div class="card-body">
    
      @if(session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
        @endif 
    
      <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('user.gantipassword')}}" method="POST">
          @method('patch')
          @csrf
          <label for="password">Password</label>
          <input class="form-control {{$errors->first('password') ? "is-invalid" : ""}}" placeholder="password" type="password" name="password" id="password"/>
          <div class="invalid-feedbeck">
            {{$errors->first('password')}}
          </div>
          <br>
          <label for="password_confirmation">Password Confirmation</label>
          <input class="form-control {{$errors->first('password_confirmation') ? "is-invalid" : ""}}" placeholder="password confirmation" type="password" name="password_confirmation" id="password_confirmation"/>
          <div class="invalid-feedbeck">
            {{$errors->first('password_confrimation')}}
          </div>
          <br>
          <button class="btn btn-info btn-sm" type="submit" value="Save"><i class="fa fa-save fa-sm"></i> Simpan</button>
        </form>
      </div>
      </div>
    </div>
@endsection