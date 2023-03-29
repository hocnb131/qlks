<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Branch;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Room::orderBy('id','desc')->paginate(5);
        $key=request()->key;
        if($key = request()->key){
        $data = Room::orderBy('id','desc')->where('name','like','%'.$key.'%')->paginate(10);
        }
        return view('admin.room.index',['data'=>$data,'key'=>$key]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branch = Branch::with('rooms')->get();
        $data = Room::orderBy('name','asc')->select('id','name')->get();
        return view('admin.room.create',['data'=>$data,'branch'=>$branch]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->has('file_upload')){
            $file = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = time().'-'.'room.'.$ext;
            $file->move(public_path('uploads'),$file_name);
        }else{
            $file_name = $request->thumbnail;
        }
        $request->merge(['thumbnail'=> $file_name]);
        $branch = new Room;
        $branch->name = $request->name;
        $branch->adults = $request->adults;
        $branch->children = $request->children;
        $branch->description = $request->description;
        $branch->calendar = $request->calendar;
        $branch->thumbnail = $request->thumbnail;
        $branch->thumbnailDescription = $request->thumbnailDescription;
        $branch->price = $request->price;
        $branch->bedType = $request->bedType;
        $branch->area = $request->area;
        $branch->status = $request->status;
        $branch->roomType = $request->roomType;
        $branch->amount = $request->amount;
        $branch->branch_id = $request->branch_id;
        $branch->save();
        return redirect()->route('room.index')
        ->with('success','Tạo thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        $branch = Branch::with('branchs')->get();
        return view('admin.room.edit',['room'=>$room,'branch'=>$branch]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        if($request->has('file_upload')){
            $file = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = time().'-'.'room.'.$ext;
            $file->move(public_path('uploads'),$file_name);
        }else{
            $file_name = $room->thumbnail;
        }
        $request->merge(['thumbnail'=> $file_name]);
        $data = $request->except(['_token','_method']);
        $room->update($data);

        return redirect()->route('room.index')
        ->with('success','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->back()
->with('success','Đã xóa');
    }
}
