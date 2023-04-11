<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\RoomDetail;
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
        // $room = Room::whereIn('id',[1,2,3,4,5,6,7])->get();
        // $r = Room::with('roomdetail')->get();
        // $r = Room::with('roomdetail')->find(2);
        // $r = RoomDetail::find(1)->room;
        // dd($r);
        $room = Room::whereIn('id',[1,2,3,4,5])->get();
        return view('trangchu',['room'=>$room]);
    }
    public function room()
    { 
        $room = Room::paginate(4);
        return view('room',['room'=>$room]);
    }
    public function roomdetail($id){
        $roomdetail = Room::where('id',$id)->first();
        // $room = RoomDetail::with('room')->first()->room; 
        $room = RoomDetail::all(); 
        // foreach ($room as $index => $r) {
        //     dd($r->room->name);
        // }
        // dd($r);

        return view('roomdetail',['roomdetail'=>$roomdetail,'room'=>$room]);
    }
    
}
