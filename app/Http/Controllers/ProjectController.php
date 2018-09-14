<?php

namespace App\Http\Controllers;
use App\Users;
use App\Project;
use App\PCategory;
use App\Clients;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
        //  $this->middleware('permission:project-list');

        //  $users = Users::all()->givePermissionTo('project-list');
        //  $this->middleware('permission:project-create', ['only' => ['create','store']]);

        //  $this->middleware('permission:project-edit', ['only' => ['edit','update']]);

        //  $this->middleware('permission:project-delete', ['only' => ['destroy']]);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        
        $projects = Project::latest()
        ->select('projects.id', 'projects.name', 'description', 'p_owner','p_category', 'client', 'start_date', 'end_date', 'filename','users.name as uname','projects.created_at','projects.updated_at')
        ->join('users', 'users.id', '=', 'projects.p_owner')->get();
        $category = PCategory::all();
        $client = Clients::all();

        return view('admin.projects.index',compact('users','projects','category','client'));

    } 

   public function create()
    {
        $users = Users::all();
        $projects = Project::all();
        $category = PCategory::all();
        $client = Clients::all();
        // ->select('id','name', 'email', 'password', 'remember_token', 'phone', 'role', 'status', 'department', 'users.created_at', 'users.updated_at','dept_name','color')->where('users.department', $id)
        // ->join('department', 'department.dept_id', '=', 'users.department')->paginate(5);
    //   ??  dd($users);
        return view('admin.projects.create',compact('users','projects','category','client'));
    }

    public function store(Request $request)

    {
        request()->validate([
            'name' => 'required',
            'description' => 'required',
            'p_category' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'client' => 'required',
            'p_owner' => 'required',
        ]);
        $data =  new Project;
        $data->name= $request->name;
        $data->client= $request->client;
        $data->start_date= $request->start_date;
        $data->end_date= $request->end_date;
        $data->description= $request->description;
        $data->p_owner= $request->p_owner;
        // print_r($request->p_category);exit;
        $data->p_category = implode(",", $request->p_category);
        // echo($data);
        // exit;
        $data->save();
        // Project::create($request->all());

        return redirect()->route('projects.index')
               ->with('success','Project created successfully!');
    }

    public function projectdetail($id)
    {

        // dd($id);
        $users = Users::all();
        $projects = Project::latest()
        ->select('projects.id', 'projects.name', 'description', 'p_owner','p_category', 'client',
         'start_date', 'end_date', 'filename','users.name as uname','projects.created_at','projects.updated_at')
         ->where('projects.id',$id)
        ->join('users', 'users.id', '=', 'projects.p_owner')->get();
        $category = PCategory::all();
        $client = Clients::all();


        return view('admin.projects.projectdetails',compact('users','projects','category','client'));
    }

   
   
   
   
   
   
   
   
   
    public function edit(Project $project)
    {
        return view('projects.edit',compact('project'));
    }

    public function update(Request $request, Project $project)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        $project->update($request->all());

        return redirect()->route('products.index')
                ->with('success','Product updated successfully');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')
            ->with('success','Product deleted successfully');
    }



}
