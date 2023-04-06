@extends('layouts.admin')
@section('title', 'User List')
@section('main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<form action="" class="row align-items-start">
    
    <div class="col-auto">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search By Name..." value="{{$key}}" name="key">
            <button id="submit-key" class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
          </div>
    </div>
    <div class="col"></div>
    <div class="col-auto">
           <a  href="{{ route('user.create') }}" class="btn btn-primary btnAdd">Add User</a>
    </div>
</form>
<hr>
<table class="table table-hover responsive">
    <thead>
        <tr> 
            {{-- <th>Select</th> --}}
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <!-- <th>Password</th> -->
            <th>Role</th>
            <!-- <th>Permission</th> -->
            <th>Status</th>
            <th>Action</th>
            <th>Created_At</th>
            <th>Updated_At</th>
            {{-- <th>Permission</th>
            <th>Manager</th> --}}
        </tr>
    </thead>
    <tbody>
        <form action="" method="post">
            @foreach($data as $d)
            <tr>
                {{-- <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="user[]" value="{{$d->id}}"
                            id="form-delete">
                    </div>
                </td> --}}
            <td>{{$d->id}}</td>
            <td>{{$d->fullname}}</td>
            <td>{{$d->email}}</td>
            <td>{{$d->address}}</td>
            <td>{{$d->phoneNumber}}</td>
            <!-- <td style="max-width: 5cm;">{{$d->password}}</td> -->
            <td>
                @if($d->role == 0)
                <span class="badge badge-danger">User</span>
                @else
                <span class="badge badge-success">Admin</span>
                @endif
            </td>
            {{-- <td>
                @if(Auth::check())
                <span class="badge badge-success">On</span>
                @else
                <span class="badge badge-danger">Off</span>
                @endif
            </td> --}}
            <td>          
        
                <a href="{{ route('user.edit',$d->id) }}" class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="{{route('user.destroy',$d->id)}}" class="btn btn-sm btn-danger btndelete">
                    <i class="fas fa-trash"></i>
                </a> 
            </td>
            <td>{{\Carbon\Carbon::create($d->created_at)->format('d-m-Y')}}</td>
            <td>{{\Carbon\Carbon::parse($d->updated_at)->locale('vi')->diffForHumans()}}</td>
            </td>
            {{-- <td>
                <a href="{{ route('phanquyen',$d->id) }}" class="btn btn-sm btn-success">
                    <i class="fas fa-user">Phân Quyền</i>
                </a>
                <a href="{{ route('phanquyen',$d->id) }}" class="btn btn-sm btn-primary">
                    <i class="fas fa-user">Chuyển Quyền</i>
                </a> 
            </td> --}}
        </tr>
        @endforeach
       
    </form>
    </tbody>
</table>
@csrf @method('DELETE')
<form action="" method="POST" id="form-delete">
    @csrf @method('DELETE')
</form>
<form action="" method="POST" id="form-deleteall">
    @csrf @method('DELETE')
</form>
<form action="" method="GET" id="form-add">
    @csrf 
</form>
<hr>
<div class="">
    {{$data->appends(request()->all())->links()}}
</div>
<form action="" method="POST" id="form-delete">
    @csrf @method('DELETE')
</form>
<form action="" method="GET" id="form-add">
    @csrf
</form>
<script>
$('.btndelete').click(function(ev) {
    ev.preventDefault();
    var _href = $(this).attr('href');
    // alert(_href);
    $('form#form-delete').attr('action', _href);
    if (confirm('Bạn có chắc chắn muốn xóa nó không?')) {
        $('form#form-delete').submit();
    }
})
</script>
@stop();