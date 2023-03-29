@extends('layouts.admin')
@section('title', 'Edit Branch')
@section('main')
    <form action="{{ route('branch.update', $branch->id) }}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" value="{{ $branch->name }}" name="name"
                        placeholder="Input name">
                    @error('name')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" value="{{ $branch->email }}" name="email"
                        placeholder="Input email">
                    @error('email')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control" value="{{ $branch->address }}" name="address"
                        placeholder="Input address">
                    @error('ddress')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">PhoneNumber</label>
                    <input type="text" class="form-control" value="{{ $branch->phoneNumber }}" name="phoneNumber"
                        placeholder="Input PhoneNumber">
                    @error('phoneNumber')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" value="{!!nl2br(e($branch->description))!!}" id="summernote" placeholder="Nhập nội dung mô tả"></textarea>
                    @error('description')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Province</label>

                    <select name="province_id" class="form-control">
                        <option value="">---SELECT-ONE---</option>
                        @foreach ($province as $p)
                            <option value="{{ $p->id }}">{{ $p->name }}</option>
                        @endforeach
                    </select>

                    @error('province_id')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">thumbnail</label>
                    <input type="file" class="form-control" name="file_upload" placeholder="Input thumbnail">
                    @error('file_upload')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">ThumbnailDescription</label>
                    <input type="text" class="form-control" value="{{ $branch->thumbnailDescription }}"
                        name="thumbnailDescription" placeholder="Input thumbnailDescription">
                    @error('ThumbnailDescription')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                {{-- <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" value="{{ $branch->slug }}" name="slug"
                        placeholder="Input address">
                    @error('slug')
                        <small class="badge badge-danger">{{ $message }}</small>
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
    <script>
        $('#summernote').summernote({
            placeholder: 'Sửa content',
            tabsize: 2,
            height: 150,
            focus: true,
        });
    </script>
@stop();
<!-- @section('css')
    <link rel="stylesheet" href="{{ url('/css') }}/plugins/summernote/summernote-bs4.min.css">
@stop();
@section('js')
    <script src="{{ url('/css') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function() {
            $('#content').summernote();
        });
        // alert(212);
    </script>
@stop(); -->
