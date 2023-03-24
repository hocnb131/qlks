@extends('layouts.admin')
@section('title', 'Add Province')
@section('main')
<form action="{{route('province.store')}}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập tỉnh thành">
                @error('name')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
            <!-- <div class="form-group">
                <label for="">Creat_At</label>
                <input type="text" class="form-control" name="create_at" placeholder="Input create_at">
                @error('creat_at')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div> -->
            {{-- <div class="form-group">
                <label for="">Description</label>
                
                <textarea name="description" class="form-control" id="content" placeholder="Mô tả"></textarea>
                
                @error('description')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div> --}}
        </div>
        <div class="col-md-4">
        <!-- <div class="form-group">
                <label for="">Province</label>
                
                <select name="province_id" class="form-control">
                    <option value="">---SELECT-ONE---</option>
                    @foreach($data as $d)
                    <option value="{{$d->id}}">{{$d->name}}</option>
                    @endforeach
                </select>
                
                @error('province')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div> -->
            <div class="form-group">
                <label for="">thumbnail</label>
                <input type="file" class="form-control" name="file_upload" placeholder="Input thumbnail">
                @error('file_upload')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
            {{-- <div class="form-group">
                <label for="">ThumbnailDescription</label>
                <input type="text" class="form-control" name="thumbnailDescription" placeholder="Mô tả hình ảnh">
                @error('ThumbnailDescription')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div> --}}
            
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
                    <small class="badge badge-danger">{{$message}}</small>
                    @enderror
                </div> -->
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save Data</button>
</form>
@stop();


