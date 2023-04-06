@extends('layouts.admin')
@section('title', 'Edit User')
@section('main')

    <form action="{{ route('user.update', $user->id) }}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}"
                        placeholder="Input fullName">
                    @error('fullName')
                        <small class="help-block">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" value="{{ $user->email }}" name="email"
                        placeholder="Input email">
                    @error('email')
                        <small class="help-block">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control" value="{{ $user->address }}" name="address"
                        placeholder="Input address">
                    @error('address')
                        <small class="help-block">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="number" class="form-control" value="{{ $user->phoneNumber }}" name="phoneNumber"
                        placeholder="Input phoneNumber">
                    @error('phoneNumber')
                        <small class="help-block">{{ $message }}</small>
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
                    {{-- @if (Auth::check()) --}}
                    <label>
                        <input type="radio" name="status" value="1" checked>
                        Yes
                    </label>
                    {{-- @else --}}
                    <label>
                        <input type="radio" name="status" value="0" checked>
                        No
                    </label>
                    {{-- @endif --}}
                   

        </div>
        <button type="submit" class="btn btn-primary">Save Data</button>
    </form>

@stop();
