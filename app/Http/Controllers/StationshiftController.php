<?php

namespace App\Http\Controllers;
use App\Models\Stationshift;
use App\Models\Stations;
use App\Models\designation;
use Illuminate\Http\Request;

class StationshiftController extends Controller
{
    //
    public function index()
    {
        // $permission=Permission::get();
        $Stationshift = Stationshift::orderBy('created_at', 'desc')->get();
       
       return view('registers.station_shift.index',['stationshifts'=>$Stationshift]);
    }


    public function create()
    {
        $Stationshift = Stationshift::orderBy('created_at', 'desc')->get();
        $stations = Stations::orderBy('created_at', 'desc')->get();
        $designations = designation::orderBy('created_at', 'desc')->get();
        return view('registers.station_shift.insert',['stationshifts'=>$Stationshift,'stations'=>$stations,'designations'=>$designations]);
    }

    public function store(Request $request)
    {
       
            
       
        Stationshift::create([
            'station_name'=>$request->station,
            'shift'=>$request->shift,
            'designation'=>$request->designation,
            'from_'=>$request->from,
            'to_'=>$request->to,
           
        ]);

        // $incident = incident_register::orderBy('created_at', 'desc')->get();
        // return view('registers.incident.index',['incidents'=>$incident]);

        return redirect('stationshift')->with('status','Stationshift Inserted Successfully!');
    }



    public function edit(Stationshift $Stationshift)
    {
        $stations = Stations::orderBy('created_at', 'desc')->get();
        $designations = designation::orderBy('created_at', 'desc')->get();
        return view('registers.station_shift.edit',['stationshifts'=>$Stationshift,'stations'=>$stations,'designations'=>$designations]);
    }

    public function update(Request $request)
    {

      
    
        // Retrieve the Stationshift by Stationshift_id from the request
        print_r($Stationshift = Stationshift::where('id', $request->station_shift_id)->first());
    
        if (!$Stationshift) {
            return redirect('stationshift')->with('status', 'Stationshift not found!');
        }
    



        $from_date=$request->from;
        $from_time=$request->from_time;


        $to_date=$request->to;
        $to_time=$request->to_time;

        // Update the Stationshift
        $Stationshift->update([
            'station_name'=>$request->station,
            'shift'=>$request->shift,
            'designation'=>$request->designation,
            'from_'=>$from_date.$from_time,
            'to_'=>$to_date.$to_time,

        ]);
    
        // Redirect back with a success message
        return redirect('stationshift')->with('status', 'Stationshift Updated Successfully!');
    }
    
    public function destroy($StationshiftId)
    {
        $Stationshift= Stationshift::find($StationshiftId);
        $Stationshift->delete();
        return redirect('station')->with('status', 'Stationshift Removed Successfully!');
    }
}
