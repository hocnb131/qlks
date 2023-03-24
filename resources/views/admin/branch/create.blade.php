@extends('layouts.admin')
@section('title', 'Add Branch')
@section('main')
<form action="{{route('branch.store')}}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Input name" required>
                @error('name')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Input email" required>
                @error('email')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Input address" required>
                @error('address')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">PhoneNumber</label>
                <input type="text" class="form-control" name="phoneNumber" placeholder="Input PhoneNumber" required>
                @error('phoneNumber')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" class="form-control" id="summernote" placeholder="Input description" required></textarea>
                @error('description')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
                <label for="">Province</label>
                
                <select name="province_id" class="form-control" required>
                    <option value="">---SELECT-ONE---</option>
                    @foreach($datab as $d)
                    <option value="{{$d->id}}">{{$d->name}}</option>
                 
                    @endforeach
                    
                </select>
                
                @error('province_id')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">thumbnail</label>
                <input type="file" class="form-control" name="file_upload" placeholder="Input thumbnail" required>
                @error('file_upload')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">ThumbnailDescription</label>
                <input type="text" class="form-control" name="thumbnailDescription" placeholder="Input thumbnailDescription">
                @error('thumbnailDescription')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" name="slug" placeholder="Input address">
                @error('slug')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
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
            </div>
            <div class="form-gourp">
                <label for="">NameEn</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="nameEn" value="1" checked>
                        En
                    </label>
                    <label>
                        <input type="radio" name="nameEn" value="0" checked>
                        Vi
                    </label>
                </div>
            </div>

        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save Data</button>
</form>

<script src="{{url('/css')}}/plugins/summernote/summernote-bs4.min.js"></script>
<script>
    // $(function(){
    //     $('#content').summernote();
    // });
    $('#summernote').summernote({
        placeholder: 'Nhập content',
        tabsize: 2,
        height: 150,
        focus: true ,
      });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@stop();
@section('css')
<link rel="stylesheet" href="{{url('/css')}}/plugins/summernote/summernote-bs4.min.css">
@stop();




