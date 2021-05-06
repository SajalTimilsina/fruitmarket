<?php

namespace App\Http\Controllers;
use App\Timetable;
use App\Department;

use Illuminate\Http\Request;

class TimetabelController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
	
	
    public function index()
    {
      
      $departments = Department::all();
      foreach($departments as $department){
        $timetables[$department->name] = Timetable::where('department_id',$department->name)->get();
      }    
    return view('timetable.main',["timetables"=>$timetables]);
    }

    public function create()
    {
      
      $departments = Department::all();
      foreach($departments as $department){
        $timetables[$department->name] = Timetable::where('department_id',$department->name)->get();
      }    
    return view('timetable.create',["timetables"=>$timetables]);
    }

    
    public function store(Request $request)
    {
		dd($request);
    }

   
    public function show($slug)
    {
        
    }

  
    public function edit($id)
    {
        
    }

 
   
    public function update(Request $request, $id)
    {
		$role = Role::find($id);
		
		
    }

  
    public function destroy($id)
    {
        
    }
}
