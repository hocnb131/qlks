<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('province')->orderBy('id','desc')->paginate(5);
        $key=request()->key;
        if($key = request()->key){
        $data = DB::table('province')->orderBy('id','desc')->where('name','like','%'.$key.'%')->paginate(10);
        }
        return view('admin.province.index',['data'=>$data,'key'=>$key]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = DB::table('province')->orderBy('name','asc')->select('id','name')->get();
        return view('admin.province.create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->has('file_upload')){
            $file = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = time().'-'.'harmoney.'.$ext;
            $file->move(public_path('uploads'),$file_name);
        }else{
            $file_name = $request->thumbnail;
        }
        $request->merge(['thumbnail'=> $file_name]);
        $province = new Province;
        $province->name = $request->name;
        $province->status = $request->status;
        $province->thumbnail = $request->thumbnail;
        // $province->thumbnailDescription = $request->thumbnailDescription;
        // $province->description = $request->description;
        $province->save();
        return redirect()->route('province.index')
        ->with('success','Tạo thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Province $province)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Province $province)
    {
            // $data = DB::table('province')->get();
            // $data->except([
            //     'thumbnailDescription',
            //     'description',
            //     'created_at'
            // ]);
            // dd($data);
            // $data = collect([
            //     // $province->id,
            //     $province->name,
            //     $province->status,
            //     $province->thumbnail,
            //     $province->updated_at
            // ]);
            // dd($province);
            return view('admin.province.edit',['province'=>$province]);
            
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Province $province)
    {
        // dd($province->thumbnail);
        if($request->has('file_upload')){
            $file = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = time().'-'.'province.'.$ext;
            $file->move(public_path('uploads'),$file_name);
        }else{
            $file_name = $province->thumbnail;
        }
        $request->merge(['thumbnail'=> $file_name]);
        $data = $request->except(['_token','_method']);
        $province->update($data);
        
        return redirect()->route('province.index')
        ->with('success','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Province $province)
    {
        $province->delete();
        return redirect()->back()
->with('success','Đã xóa');
    }
    public function restore(Request $request){
        
        $request->restore();
        dd($request);
        return redirect()->back();
    }
}
