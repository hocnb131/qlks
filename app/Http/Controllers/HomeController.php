<?php

namespace App\Http\Controllers;
use App\Models\Room;
// use App\Models\RoomDetail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $room = Room::whereIn('id',[1,2,3,4,5,6,7])->get();
        return view('trangchu',['room'=>$room]);
    }
    public function room()
    { 
        $room = Room::paginate(4);
        return view('room',['room'=>$room]);
    }
    public function roomdetail($id){
        $roomdetail = Room::where('id',$id)->first();
        // dd($roomdetail);
        return view('roomdetail',['roomdetail'=>$roomdetail]);
    }
}
