@extends('layouts.sbadmin')


@section('content')
<div class="col-md-8">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">Tambah User</h6>
      </div>
      
      <div class="card-body">
    
      @if(session('status'))
          <div class="alert alert-success">
            {{session('status')}}
          </div>
        @endif 
    
      <form enctype="multipart/form-data" action="{{route('user.update',[$user->id])}}" method="POST">
    
          @csrf
          @method('PUT')
          <label for="nik">NIK</label>
      <input class="form-control {{$errors->first('nik') ? "is-invalid" : ""}}" value="{{$user->nik}}" placeholder="Full Name" type="text" name="nik" id="nik" disabled/>
        <div class="invalid-feedbeck">
        {{$errors->first('name')}}</div>  
        <br>
        <label for="name">Name</label>
      <input class="form-control {{$errors->first('name') ? "is-invalid" : ""}}" value="{{$user->name}}" placeholder="Full Name" type="text" name="name" id="name"/>
        <div class="invalid-feedbeck">
        {{$errors->first('name')}}</div>  
        <br>
       
          <label for="email">Email</label>
          <input class="form-control {{$errors->first('email') ? "is-invalid" : ""}}" value="{{$user->email}}" placeholder="user@mail.com" type="text" name="email" id="email" disabled/>
          <div class="invalid-feedbeck">
            {{$errors->first('email')}}
          </div><br>

          <label for="">Role User</label>
                <select name="role" class="form-control {{$errors->first('role') ? "is-invalid" : ""}}">
                    <option @if($user->role == "Verifikator") selected @endif value="Verifikator">Verifikator</option>
                    <option @if($user->role == "Creator") selected @endif value="Creator">Creator</option>
                    <option @if($user->role == "ADMIN") selected @endif value="ADMIN">ADMIN</option>
                    <option @if($user->role == "USER") selected @endif value="USER">USER</option>
                </select>
                <div class="invalid-feedbeck">
                  {{$errors->first('role')}}
                </div>
          <br>
          <label for="status">Status</label>
          <select name="status" class="form-control {{$errors->first('status') ? "is-invalid" : ""}}">
            <option @if($user->status == "ACTIVE") selected @endif value="ACTIVE">ACTIVE</option>
            <option @if($user->status == "INACTIVE") selected @endif value="INACTIVE">INACTIVE</option>
          </select>
          <div class="invalid-feedbeck">
            {{$errors->first('status')}}
          </div>
          <br>
          <button class="btn btn-info btn-sm" type="submit" value="Save"><i class="fa fa-save fa-sm"></i> Simpan</button> 
          <a href="{{route('user.index')}}" class="btn btn-dark btn-sm"><i class="fa fa-arrow-circle-left fa-fw fa-sm"></i>Kembali</a>
        </form><br>
        <form action="{{route('update',[$user->id])}}" class="d-inline" method="post">
          @csrf
         
           <button class="btn btn-warning btn-sm" type="submit">reset-password</button>
         </form>
      </div>
      </div>
    </div>
@endsection