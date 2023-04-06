<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::orderBy('id','desc')->paginate(5);
        $key=request()->key;
        if($key = request()->key){
        $data = User::orderBy('id','desc')->where('name','like','%'.$key.'%')->paginate(10);
        }
        return view('admin.user.index',['data'=>$data,'key'=>$key]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = User::orderBy('name','asc')->select('id','name')->get();
        return view('admin.user.create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        // if($request->has('file_upload')){
        //     $file = $request->file_upload;
        //     $ext = $request->file_upload->extension();
        //     $file_name = time().'-'.'user.'.$ext;
        //     $file->move(public_path('uploads'),$file_name);
        // }else{
        //     $file_name = $request->thumbnail;
        // }
        // $request->merge(['thumbnail'=> $file_name]);
        $user = new User;
        $user->name = $request->name;
        // $user->thumbnail = $request->thumbnail;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phoneNumber = $request->phoneNumber;
        $user->password = Hash::make($request['password']);;
        // $user->status = $request->status;
        $user->save();
        // dd($user);
        return redirect()->route('user.index')
        ->with('success','Tạo thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        // dd($user);
        return view('admin.user.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        // if($request->has('file_upload')){
        //     $file = $request->file_upload;
        //     $ext = $request->file_upload->extension();
        //     $file_name = time().'-'.'room.'.$ext;
        //     $file->move(public_path('uploads'),$file_name);
        // }else{
        //     $file_name = $user->thumbnail;
        // }
        // $request->merge(['thumbnail'=> $file_name]);
        // dd($user);
        $data = $request->except(['_token','_method']);
        $user->update($data);
        
        return redirect()->route('user.index')
        ->with('success','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()
->with('success','Đã xóa');
    }
}
