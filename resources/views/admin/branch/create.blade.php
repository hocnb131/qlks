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
                <textarea name="description" class="form-control" id="summernote"  placeholder="Input description" required></textarea>
                @error('description')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
                <label for="">Province</label>

                <select name="province_id" class="form-control">
                    <option value="">---SELECT-PROVINCE---</option>
                    @foreach($province as $p)
                    <option value="{{$p->id}}">{{$p->name}}</option>

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
            {{-- <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" name="slug" placeholder="Input address">
                @error('slug')
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
            </div>
            {{-- <div class="form-gourp">
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
            </div> --}}

        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save Data</button>
</form>



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






