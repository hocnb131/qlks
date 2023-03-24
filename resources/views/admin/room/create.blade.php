@extends('layouts.admin')
@section('title', 'Add Room')
@section('main')
<form action="{{route('room.store')}}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập tên phòng">
                @error('name')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Adults</label>
                <input type="number" class="form-control" name="adults" placeholder="Nhập số lượng người lớn">
                @error('adults')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Children</label>
                <input type="number" class="form-control" name="children" placeholder="Nhập số lượng trẻ em">
                @error('children')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" class="form-control" name="price" placeholder="Nhập giá">
                @error('price')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Amount</label>
                <input type="number" class="form-control" name="amount" placeholder="Nhập số lượng phòng">
                @error('amount')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
           
            <div class="form-group">
                <label for="">Calendar</label>
                <input type="date" class="form-control" name="calendar" placeholder="Input calendar">
                @error('calendar')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">thumbnail</label>
                <input type="file" class="form-control" name="file_upload" placeholder="Input thumbnail">
                @error('thumbnail')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="">ThumbnailDescription</label>
                <input type="text" class="form-control" name="thumbnailDescription" placeholder="Mô tả hình ảnh">
                @error('ThumbnailDescription')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
           
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" name="slug" placeholder="Slug">
                @error('slug')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>


            <div class="form-group">
                <label for="">Description</label>
                
                <textarea name="description" class="form-control" id="content" placeholder="Mô tả"></textarea>
                
                @error('description')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
       
            <div class="form-group">
                <label for="">Area</label>
                
                <textarea name="area" class="form-control" id="content" placeholder="Nhập khu vực"></textarea>
                
                @error('area')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
    
            
            
            <div class="form-group">
                <label for="">BedType</label>
                <input type="text" class="form-control" name="bedType" placeholder="Nhập tên phòng">
                @error('bedType')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div> 
            <div class="form-group">
                <label for="">Branch_ID</label>
                
                <select name="branch_id" class="form-control">
                    <option value="">---Chọn chi nhánh---</option>
                    @foreach($branch as $b)
                    <option value="{{$b->id}}">{{$b->name}}</option>
                    @endforeach
                </select>
                
                @error('room')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div> 
            
            
            <div class="form-group">
                <label for="">RoomType</label>
                <input type="text" class="form-control" name="roomType" placeholder="Nhập tên phòng">
                @error('roomTypes')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div> 
            <div class="form-group">
                <label for="">Ngôn ngữ</label>
            <div class="radio">
                <label>
                    <input type="radio" name="nameEn" value="1" checked>
                    EN
                </label>
                <label>
                    <input type="radio" name="nameEn" value="0" checked>
                    VI
                </label>
            </div>

            </div>
            <div class="form-gourp">
                <label for="">Status</label>

                <div class="radio">
                    <label>
                        <input type="radio" name="status" value="1" checked>
                        Public
                    </label>
                    <label>
                        <input type="radio" name="status" value="0" checked>
                        Private
                    </label>
                </div>
                <!-- <div class="form-group">
                    <label for="">Prioty</label>
                    <input type="number" class="form-control" name="prioty" placeholder="Nhập số lượng">
                    @error('prioty')
                    <small class="badge badge-danger">{{message}}</small>
                    @enderror
                </div> -->
            </div>
        </div>
  
        
    </div>
    <button type="submit" class="btn btn-primary">Save Data</button>
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