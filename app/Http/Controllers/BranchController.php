<?php

namespace App\Http\Controllers;
use App\Models\Branch;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BranchRequest;
class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Branch::orderBy('id','desc')->paginate(5);
        $key=request()->key;
        if($key = request()->key){
        $data = Branch::orderBy('id','desc')->where('name','like','%'.$key.'%')->paginate(10);
        }
        // $branchs = Province::find(2);
        // $province = Province::with('branchs')->get();

        // dd($province);
        // $province = Province::find(1)->branchs;
        // dd($province);
        return view('admin.branch.index',['data'=>$data,'key'=>$key]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $province = Province::get();
        $province = Province::with('branchs')->get();
        $data = Branch::orderBy('name','asc')->select('id','name')->get();
        return view('admin.branch.create',['data'=>$data,'province'=>$province]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BranchRequest $request)
    {
        if($request->has('file_upload')){
            $file = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = time().'-'.'branch.'.$ext;
            $file->move(public_path('uploads'),$file_name);
        }else{
            $file_name = $request->thumbnail;
        }
        $request->merge(['thumbnail'=> $file_name]);
        $branch = new Branch;
        $branch->name = $request->name;
        $branch->email = $request->email;
        $branch->address = $request->address;
        $branch->phoneNumber = $request->phoneNumber;
        $branch->description = $request->description;
        $branch->thumbnail = $request->thumbnail;
        $branch->thumbnailDescription = $request->thumbnailDescription;
        $branch->status = $request->status;
        $branch->province_id = $request->province_id;
        $branch->save();
        return redirect()->route('branch.index')
        ->with('success','Tạo thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branch $branch)
    {
        $province = Province::with('branchs')->get();
        return view('admin.branch.edit',['branch'=>$branch,'province'=>$province]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BranchRequest $request, Branch $branch)
    {
        if($request->has('file_upload')){
            $file = $request->file_upload;
            $ext = $request->file_upload->extension();
            $file_name = time().'-'.'branch.'.$ext;
            $file->move(public_path('uploads'),$file_name);
        }else{
            $file_name = $branch->thumbnail;
        }
        $request->merge(['thumbnail'=> $file_name]);
        $data = $request->except(['_token','_method']);
        $branch->update($data);

        return redirect()->route('branch.index')
        ->with('success','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();
        return redirect()->back()
->with('success','Đã xóa');
    }
}
