<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    
    public function index()
    {
        //return 'Rooms';

        $data = Room::all();
        return view('room.index',['rooms'=>$data]);
    }
}
