<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\MeetingRoom;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use App\Session\DatabaseSessionHandler;
class CalendarController extends Controller
{
       public function index()
            {
                $events = [];
                $data = Event::all();
                $meetingRoom = MeetingRoom::latest()->paginate(5);
                if($data->count()) {
                    foreach ($data as $key => $value) {
                        $events[] = Calendar::event(
                            $value->title,
                            false,
                            new \DateTime($value->start_date),
                            new \DateTime($value->end_date.' +0 day'),
                            null,
                            // Add color and link on event
                         [
                             'color' => '  #caa8ac  ',
                             'url' => 'pass here url and any route',
                            //  'url' => $url,
                            // 'color' => $color,
                            // 'textColor' => $textColor,
                            // 'description' => $description,
                         ]
                        );
                    }
                }
                $session_id = collect(session()->getDrivers())->first()->getId();
                // dd($session_id);
                $calendar = Calendar::addEvents($events);
                return view('booking.calendar', compact('calendar','meetingRoom'));
            }


   public function approval()
    {

        $event = Event::latest()->where('status',0)->paginate(5);
        return view('booking.approve',compact( 'event'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }


              public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'date' => 'required',
        ]);
        

        $session_id=session()->getId();

        $event = new Event;
        $event->title = $request->title;
        $event->start_date = $request->date.' '.$request->start_time;
        $event->end_date = $request->date.' '.$request->end_time;
        $event->room_id = $request->room_id;
        $event->capacity = $request->capacity;
        $event->client = $request->client;
        $event->status = 0;
        $event->user_id = $session_id;
        

        $event->save();

                         return redirect()->route('events.index')->
                        with('success','successfully Inserted');
    }


      


}