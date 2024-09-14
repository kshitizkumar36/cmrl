<?php

namespace App\Http\Controllers;
use App\Models\manual;
use Illuminate\Http\Request;

class ManualController extends Controller
{ 
    //
    public function index()
    {
        // $permission=Permission::get();
        $manual = manual::orderBy('created_at', 'desc')->get();
       return view('masters.manual.index',['manuals'=>$manual]);
    }


    public function create()
    {
        return view('masters.manual.insert');
    }

    public function store(Request $request)
    {
       
            
        $manual_id= 'CMRL'.time().'MAN';
        manual::create([
            'manual_id'=>$manual_id,
            'name'=>$request->name,
           
           
        ]);

        // $incident = incident_register::orderBy('created_at', 'desc')->get();
        // return view('registers.incident.index',['incidents'=>$incident]);

        return redirect('manual')->with('status','Manual Created Successfully!');
    }



    public function edit(manual $manual)
    {
        return view('masters.manual.edit',['manual'=>$manual]);
    }

    public function update(Request $request)
    {

      
    
        // Retrieve the manual by manual_id from the request
        print_r($manual = manual::where('manual_id', $request->manual_id)->first());
    
        if (!$manual) {
            return redirect('manual')->with('status', 'manual not found!');
        }
    
        // Update the manual
        $manual->update([
            'name' => $request->name,
            'phase' => $request->phase,
        ]);
    
        // Redirect back with a success message
        return redirect('manual')->with('status', 'manual Updated Successfully!');
    }
    
    public function destroy($manualId)
    {
        $manual= manual::find($manualId);
        $manual->delete();
        return redirect('manual')->with('status', 'manual Removed Successfully!');
    }
}
