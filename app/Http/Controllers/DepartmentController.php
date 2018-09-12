<?php

namespace App\Http\Controllers;
use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
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
       
       public function store(Request $request)

    {

        request()->validate([

            'dept_name' => 'required',
            'dept_desc' => 'required',
        ]);

        Department::create($request->all());

        return redirect()->route('users.index')

        ->with('success','Department created successfully.');

    }

}
