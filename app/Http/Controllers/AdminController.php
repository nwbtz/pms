<?php

namespace App\Http\Controllers;
use App\Event;
use App\Users;

use Illuminate\Http\Request;

class AdminController extends Controller
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
         $countevents = Event::latest()->whereRaw('Date(start_date) = CURDATE()')->count();
         $countusers = Users::latest()->count();
         $countpending = Event::latest()->where('status',0)->count();

         $event = Event::latest()->whereRaw('Date(start_date) = CURDATE()')->paginate(100);
         $pending = Event::latest()->where('status',0)->paginate(100);
         return view('admin.home',compact( 'event','pending'))->with('countevents',$countevents)
            ->with('countusers',$countusers)
            ->with('countpending',$countpending)
            ->with('i', (request()->input('page', 1) - 1) * 100);

    }
}
