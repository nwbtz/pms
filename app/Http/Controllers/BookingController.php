<?php

namespace App\Http\Controllers;
use App\MeetingRoom;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $meetingRoom = MeetingRoom::latest()->paginate(5);
        return view('booking.index',compact( 'meetingRoom'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

      
        


    }

     public function approval()
    {

         $meetingRoom = MeetingRoom::latest()->paginate(5);
        return view('booking.index',compact( 'meetingRoom'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

      
        

    }

     public function store(Request $request)

    {

        request()->validate([

            'room_name' => 'required',
            'capacity' => 'required',
        ]);

        MeetingRoom::create($request->all());

        return redirect()->route('rooms.index')

        ->with('success','Room created successfully.');

    }

        /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Users  $row

     * @return \Illuminate\Http\Response

     */


    public function destroy(MeetingRoom $meetingRoom)
    {

        $meetingRoom->delete();
        return redirect()->route('rooms.index')
       ->with('success','Room deleted successfully');

    }

}
