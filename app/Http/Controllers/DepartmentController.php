<?php

namespace App\Http\Controllers;
use App\Models\department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //
    public function index()
    {
        // $permission=Permission::get();
        $department = department::orderBy('created_at', 'desc')->get();
       return view('masters.department.index',['departments'=>$department]);
    }


    public function create()
    {
        return view('masters.department.insert');
    }

    public function store(Request $request)
    {
       
            
        $department_id= 'CMRL'.time().'DEP';
        department::create([
            'department_id'=>$department_id,
            'name'=>$request->department_name,
           
        ]);

        // $incident = incident_register::orderBy('created_at', 'desc')->get();
        // return view('registers.incident.index',['incidents'=>$incident]);

        return redirect('department')->with('status','Department Created Successfully!');
    }



    public function edit(department $department)
    {
        return view('masters.department.edit',['department'=>$department]);
    }

    public function update(Request $request)
    {

      
    
        // Retrieve the department by department_id from the request
        print_r($department = department::where('department_id', $request->department_id)->first());
    
        if (!$department) {
            return redirect('department')->with('status', 'department not found!');
        }
    
        // Update the department
        $department->update([
            'name' => $request->name,
            'phase' => $request->phase,
        ]);
    
        // Redirect back with a success message
        return redirect('department')->with('status', 'department Updated Successfully!');
    }
    
    public function destroy($departmentId)
    {
        $department= department::find($departmentId);
        $department->delete();
        return redirect('department')->with('status', 'department Removed Successfully!');
    }
}
