@extends('layouts.admin')
@section('title', 'RoomDetail List')
@section('main')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
<form action="" class="row align-items-start">
    
    <div class="col-auto">
        {{-- <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search By Name..." value="{{$key}}" name="key">
            <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
          </div> --}}
    </div>
    <div class="col"></div>
    <div class="col-auto">
           <a  href="{{ route('roomdetail.create') }}" class="btn btn-primary btnAdd">Add RoomDetail</a>
    </div>
</form>
<hr>
    <table class="table table-hover" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Room</th>
                {{-- <th>Name</th> --}}
                {{-- <th>Thumbnail</th> --}}
                {{-- <th>Price</th> --}}
                {{-- <th>Size</th> --}}
                {{-- <th>Capacity</th> --}}
                {{-- <th>Bed Type</th> --}}
                {{-- <th>Services</th> --}}
                {{-- <th>Description</th> --}}
                <th>Ngày đặt</th>
                <th>Ngày trả</th>
                <th>Giá</th>
                <th>Status</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            
            @foreach ($data as $index => $d)
                <tr>
                <td>{{ $index +1 }}</td>
                <td>{{$d->room_id}}</td>
                    {{-- <td>{{ $d->name }}</td> --}}
                    {{-- <td><img src="{{ url('/uploads') }}/{{ $d->thumbnail }}" width="50" alt=""></td> --}}
                    {{-- <td>{{number_format($d->price)}}</td> --}}
                    {{-- <td>{{ $d->size }}</td> --}}
                    {{-- <td>{{ $d->capacity }}</td> --}}
                    {{-- <td>{{ $d->bed }}</td> --}}
                    {{-- <td style="width:100px">{{$d->services}}</td> --}}
                    {{-- <td style="width:100px">{!!nl2br($d->description)!!}</td> --}}
                    
                    {{-- <!-- <td>{{ $d->thumbnail }}</td> --> --}}
                    {{-- <td>{{$d->ngaytao}}</td> --}}
                    <td>{{\Carbon\Carbon::parse($d->ngaydat)->Format('d-m-Y')}}</td>
                    <td>{{\Carbon\Carbon::parse($d->ngaytra)->Format('d-m-Y')}}</td>
                    {{-- <td>{{$tong}}</td> --}}
                    <td>
                        @if ($d->status == 0)
                            <span class="badge badge-danger">Private</span>
                        @else
                            <span class="badge badge-success">Publish</span>
                        @endif
                    </td>
                    {{-- <td>{{$d->ngaytra}}</td> --}}
                    <td>
                            <a href="{{ route('room.edit', $d->id) }}" class="btn btn-sm btn-success">
                                <i class="fas fa-edit"></i>
                            </a>                           
                            <a onclick="return confirm('Bạn có chắc muốn xóa không? ')"
                                href="{{ route('room.destroy', $d->id) }}" class="btn btn-sm btn-danger btndelete">
                                <i class="fas fa-trash"></i>
                        </a>                       
                    </td>
                    <!-- <td><img src="{{ url('/uploads') }}/{{ $d->thumbnail }}" width="50" alt=""></td> -->
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <div class="">
        {{-- {{$data->appends(request()->all())->links()}} --}}
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
