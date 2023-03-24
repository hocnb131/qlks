@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cấp quyền user : {{$user_name}}</div>
                    <form action="" method="POST">
                        @csrf 
                        <p>Vai trò hiện tại: {{$name->role}}</p>
                        @foreach($role as key => $r)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="role" id="{{$r->id}}" value="{{$r->name}}" {{$r->id==$all_column_role->id ? 'checked' : ''}}>
                            <label class="form-check-label" for="{{$r->id}}">{{$r->name}}</label>
                        </div>
                        @endforeach
                        <br>
                        <input type="submit" value="Cấp quyền cho user" name="insertroles" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection