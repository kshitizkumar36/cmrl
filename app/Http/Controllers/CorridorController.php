<?php

namespace App\Http\Controllers;
use App\Models\corridor;

use Illuminate\Http\Request;

class CorridorController extends Controller
{
    //
    public function index()
    {
        // $permission=Permission::get();
        $corridor = corridor::orderBy('created_at', 'desc')->get();
       return view('masters.corridor.index',['corridors'=>$corridor]);
    }


    public function create()
    {
        return view('masters.corridor.insert');
    }

    public function store(Request $request)
    {
       
            
        $corridor_id= 'CMRL'.time().'COR';
        corridor::create([
            'corridor_id'=>$corridor_id,
            'name'=>$request->corridor_name,
            'phase'=>$request->corridor_phase,
           
        ]);

        // $incident = incident_register::orderBy('created_at', 'desc')->get();
        // return view('registers.incident.index',['incidents'=>$incident]);

        return redirect('corridor')->with('status','Corridor Created Successfully!');
    }



    public function edit(corridor $corridor)
    {
        return view('masters.corridor.edit',['corridor'=>$corridor]);
    }

    public function update(Request $request)
    {

      
    
        // Retrieve the corridor by corridor_id from the request
        print_r($corridor = corridor::where('corridor_id', $request->corridor_id)->first());
    
        if (!$corridor) {
            return redirect('corridor')->with('status', 'Corridor not found!');
        }
    
        // Update the corridor
        $corridor->update([
            'name' => $request->name,
            'phase' => $request->phase,
        ]);
    
        // Redirect back with a success message
        return redirect('corridor')->with('status', 'Corridor Updated Successfully!');
    }
    
    public function destroy($corridorId)
    {
        $corridor= corridor::find($corridorId);
        $corridor->delete();
        return redirect('corridor')->with('status', 'Corridor Removed Successfully!');
    }

}
