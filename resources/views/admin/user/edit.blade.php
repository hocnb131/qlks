@extends('layouts.admin')
@section('title', 'Edit User')
@section('main')

<form action="{{route('user.update',$user->id)}}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
@method('PUT')
    <div class="row">
        <div class="col-md-7">
            <div class="form-group">
                <label for="">Full Name</label>
                <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Input fullName">
                @error('fullName')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" value="{{$user->email}}" name="email" placeholder="Input email">
                @error('email')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control" value="{{$user->address}}" name="address" placeholder="Input address">
                @error('address')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
        </div>    
        <div class="col-md-5">    
            
            <div class="form-group">
                <label for="">Phone</label>
                <input type="number" class="form-control" value="{{$user->phoneNumber}}" name="phoneNumber" placeholder="Input phoneNumber">
                @error('phoneNumber')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" value="{{$user->password}}" name="password"
                    placeholder="Input password">
                @error('password')
                    <small class="badge badge-danger">{{ $message }}</small>
                @enderror
            </div>           
            <div class="form-gourp">
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
            </div>
            <div class="form-gourp">
                <label for="">Status</label>
                <div class="radio">
                    @if (Auth::check())
                    <label>
                        <input type="radio" name="status" value="1" checked>
                        No
                    </label>
                    @else
                    <label>
                        <input type="radio" name="status" value="0" checked>
                        No
                    </label>
                    @endif
                    {{-- <label>
                        <input type="radio" name="status" value="0" checked>
                        Yes
                    </label>
                    <label>
                        <input type="radio" name="status" value="1" checked>
                        No
                    </label> --}}
                </div>
            </div>   
        </div>
        </div>
    <button type="submit" class="btn btn-primary">Save Data</button>
</form>
<script>
    // $(function(){
    //     $('#content').summernote();
    // });
    $('#summernote').summernote({
        placeholder: 'Nhập mô tả',
        tabsize: 2,
        height: 150,
        focus: true ,
      });
    </script>
    @push('scripts')
    {{-- <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    
    @endpush
    @push('styles')
    {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    @endpush
    @stop();