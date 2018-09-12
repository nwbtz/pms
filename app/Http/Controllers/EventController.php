<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use App\Session\DatabaseSessionHandler;
class EventController extends Controller
{
       public function index()
            {
                $events = [];

                $data = Event::all();
                if($data->count()) {
                    foreach ($data as $key => $value) {
                        $color = $value->color;
                        $events[] = Calendar::event(
                            $value->title,
                            false,
                            new \DateTime($value->start_date),
                            new \DateTime($value->end_date.' +0 day'),
                            null,
                            // Add color and link on event
                         [
                             'color' => $color,
                             'url' => 'pass here url and any route',
                            //  'url' => $url,
                            // 'color' => $color,
                            // 'textColor' => $textColor,
                            // 'description' => $description,
                         ]
                        );
                    }
                }
                $calendar = Calendar::addEvents($events);
                return view('calendar.index', compact('calendar'));
            }



      


}