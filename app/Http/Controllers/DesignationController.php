<?php

namespace App\Http\Controllers;
use App\Models\designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    //
    
    public function index()
    {
        // $permission=Permission::get();
        $designation = designation::orderBy('created_at', 'desc')->get();
       return view('masters.designation.index',['designations'=>$designation]);
    }
 

    public function create()
    {
        return view('masters.designation.insert');
    }

    public function store(Request $request)
    {
       
            
        $designation_id= 'CMRL'.time().'DSG';
        designation::create([
            'designation_id'=>$designation_id,
            'name'=>$request->designation_name,
           
           
        ]);

        // $incident = incident_register::orderBy('created_at', 'desc')->get();
        // return view('registers.incident.index',['incidents'=>$incident]);

        return redirect('designation')->with('status','Designation Created Successfully!');
    }



    public function edit(designation $designation)
    {
        return view('masters.designation.edit',['designation'=>$designation]);
    }

    public function update(Request $request)
    {

      
    
        // Retrieve the designation by designation_id from the request
        print_r($designation = designation::where('designation_id', $request->designation_id)->first());
    
        if (!$designation) {
            return redirect('designation')->with('status', 'designation not found!');
        }
    
        // Update the designation
        $designation->update([
            'name' => $request->name,
            'phase' => $request->phase,
        ]);
    
        // Redirect back with a success message
        return redirect('designation')->with('status', 'designation Updated Successfully!');
    }
    
    public function destroy($designationId)
    {
        $designation= designation::find($designationId);
        $designation->delete();
        return redirect('designation')->with('status', 'designation Removed Successfully!');
    }
}
