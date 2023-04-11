<?php

namespace App\Http\Controllers;

use App\Models\RoomDetail;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = RoomDetail::with('room')->get();
        // dd($data);
        return view('admin.roomdetail.index',['data'=>$data]);
        // return view('admin.room.index',['data'=>$data,'key'=>$key]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $data = RoomDetail::orderBy('name','asc')->select('id','name')->get();
        $room = Room::get();
        
        return view('admin.roomdetail.create',['room'=>$room]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // if($request->has('file_upload')){
        //     $file = $request->file_upload;
        //     $ext = $request->file_upload->extension();
        //     $file_name = time().'-'.'room.'.$ext;
        //     $file->move(public_path('uploads'),$file_name);
        // }else{
        //     $file_name = $request->thumbnail;
        // }
        // $request->merge(['thumbnail'=> $file_name]);
        $roomdetail = new RoomDetail;
        // $roomdetail->name = $request->name;
        // $roomdetail->description = $request->description;
        // $roomdetail->price = $request->price;
        // $roomdetail->thumbnail = $request->thumbnail;
        // $roomdetail->size = $request->size;
        // $roomdetail->capacity = $request->capacity;
        // $roomdetail->bed = $request->bed;
        // $roomdetail->services = $request->services;
        $roomdetail->ngaydat = $request->ngaydat;
        $roomdetail->ngaytra = $request->ngaytra;
        $roomdetail->status = $request->status;
        $roomdetail->room_id = $request->room_id;
        $roomdetail->save();
        return redirect()->route('roomdetail.index')
        ->with('success','Tạo thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(RoomDetail $roomDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RoomDetail $roomDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RoomDetail $roomDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoomDetail $roomDetail)
    {
        //
    }
}
