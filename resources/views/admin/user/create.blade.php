@extends('layouts.admin')
@section('title', 'Add User')
@section('main')
    <form action="{{ route('user.store') }}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input type="text" class="form-control" value="{{ old('fullName') }}" name="fullName"
                        placeholder="Input fullName">
                    @error('fullName')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" value="{{ old('email') }}" name="email"
                        placeholder="Input email">
                    @error('email')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" value="{{ old('password') }}" name="password"
                        placeholder="Input password">
                    @error('password')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="number" class="form-control" value="{{ old('phoneNumber') }}" name="phoneNumber"
                        placeholder="Input phoneNumber">
                    @error('phoneNumber')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control" value="{{ old('address') }}" name="address"
                        placeholder="Input address">
                    @error('address')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                {{-- <div class="form-gourp">
                    <label for="">Role</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="role" value="1" checked>
                            Admin
                        </label>
                        <label>
                            <input type="radio" name="role" value="0" checked>
                            User
                        </label>
                    </div>
                </div> --}}
                <div class="form-gourp">
                    <label for="">Status</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="status" value="0" checked>
                            On
                        </label>
                        <label>
                            <input type="radio" name="status" value="1" checked>
                            Off
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save Data</button>
        </div>
    </form>
@stop();
{{-- @section('css')
<link rel="stylesheet" href="{{url('/css')}}/plugins/summernote/summernote-bs4.min.css">
@stop();
@section('js')
<script src="{{url('/css')}}/plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $(function(){
        $('#content').summernote();
    });
    // alert(212);
</script>
@stop(); --}}
