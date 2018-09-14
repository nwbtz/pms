<?php

namespace App\Http\Controllers;
use App\Department;
use App\Users;

use Illuminate\Http\Request;

class UserController extends Controller
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

            $department = Department::latest()->select( 'dept_id', 'dept_name', 'color','department.dept_id')
            // ->join('users', 'users.department', '=', 'users.department')
            ->paginate(5);
            $users = Users::latest()->select('id','name', 'email', 'password', 'remember_token', 'phone', 'role', 'status', 'department', 'users.created_at', 'users.updated_at','dept_name','color')->join('department', 'department.dept_id', '=', 'users.department')->paginate(5);
            return view('users.index',compact('department', 'users'))

                ->with('i', (request()->input('page', 1) - 1) * 5);

        }

     public function users($id)
        {

            $department = Department::latest()->select( 'dept_id', 'dept_name', 'color','department.dept_id')
            ->paginate(5);
            $users = Users::latest()->select('id','name', 'email', 'password', 'remember_token', 'phone', 'role', 'status', 'department', 'users.created_at', 'users.updated_at','dept_name','color')->where('users.department', $id)->join('department', 'department.dept_id', '=', 'users.department')->paginate(5);
            return view('users.index',compact('department', 'users'))

                ->with('i', (request()->input('page', 1) - 1) * 5);

        }
    public function create()
        {

            $roles = Role::pluck('name','name')->all();

            return view('users.create',compact('roles'));

        }

     public function store(Request $request)
        {
            request()->validate([

                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'status' => 'required',
                'role' => 'required',
            ]);

            Users::create($request->all());

            return redirect()->route('users.index')

            ->with('success','Users created successfully.');

        }

        /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Users  $row

     * @return \Illuminate\Http\Response

     */


    public function destroy(Users $user)
    {

        $user->delete();
        return redirect()->route('users.index')
       ->with('success','Users deleted successfully');

    }

}
