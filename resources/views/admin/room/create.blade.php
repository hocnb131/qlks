@extends('layouts.admin')
@section('title', 'Add Room')
@section('main')
    <form action="{{ route('room.store') }}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <div class="row">
            {{-- col-1 --}}
            <div class="col-md-3">
                {{-- name --}}
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Nhập tên phòng" required>
                    @error('name')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                {{-- Adults --}}
                <div class="form-group">
                    <label for="">Adults</label>
                    <input type="number" class="form-control" name="adults" placeholder="Nhập số lượng người lớn">
                    @error('adults')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                {{-- Children --}}
                <div class="form-group">
                    <label for="">Children</label>
                    <input type="number" class="form-control" name="children" placeholder="Nhập số lượng trẻ em">
                    @error('children')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                {{-- Price --}}
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Nhập giá">
                    @error('price')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                {{-- Amount --}}
                <div class="form-group">
                    <label for="">Amount</label>
                    <input type="number" class="form-control" name="amount" placeholder="Nhập số lượng phòng">
                    @error('amount')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                {{-- Calendar --}}
                <div class="form-group">
                    <label for="">Calendar</label>
                    <input type="date" class="form-control" name="calendar" placeholder="Input calendar">
                    @error('calendar')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                {{-- submit --}}
                <button type="submit" class="btn btn-primary">Save Data</button>
            </div>
            {{-- col-2 --}}
            <div class="col-md-6">
                {{-- thumbnail --}}
                <div class="form-group">
                    <label for="">thumbnail</label>
                    <input type="file" class="form-control" name="file_upload" placeholder="Input thumbnail">
                    @error('thumbnail')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                {{-- ThumbnailDescription --}}
                <div class="form-group">
                    <label for="">ThumbnailDescription</label>
                    <input type="text" class="form-control" name="thumbnailDescription" placeholder="Mô tả hình ảnh">
                    @error('ThumbnailDescription')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                {{-- <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" name="slug" placeholder="Slug">
                @error('slug')
                <small class="badge badge-danger">{{$message}}</small>
                @enderror
                </div> --}}
                {{-- Area --}}
                <div class="form-group">
                    <label for="">Area</label>
                    <textarea name="area" class="form-control" id="content" placeholder="Nhập khu vực"></textarea>
                    @error('area')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                {{-- Description --}}
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" id="summernote" placeholder="Mô tả"></textarea>
                    @error('description')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                
            </div>
            {{-- col-3 --}}
            <div class="col-md-3">
                {{-- BedType --}}
                <div class="form-group">
                    <label for="">BedType</label>
                    <input type="text" class="form-control" name="bedType" placeholder="Nhập tên phòng">
                    @error('bedType')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                {{-- Branch_id --}}
                <div class="form-group">
                    <label for="">Branch</label>
                    <select name="branch_id" class="form-control">
                        <option value="">---Chọn chi nhánh---</option>
                        @foreach ($branch as $b)
                            <option value="{{ $b->id }}">{{ $b->name }}</option>
                        @endforeach
                    </select>
                    @error('branch_id')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                {{-- RoomType --}}
                <div class="form-group">
                    <label for="">RoomType</label>
                    <input type="text" class="form-control" name="roomType" placeholder="Nhập tên phòng">
                    @error('roomTypes')
                        <small class="badge badge-danger">{{ $message }}</small>
                    @enderror
                </div>
                {{-- Language --}}
                {{-- <div class="form-group">
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
                </div> --}}
                {{-- Status --}}
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
            </div>
            {{-- end-col-3 --}}
        </div>
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
