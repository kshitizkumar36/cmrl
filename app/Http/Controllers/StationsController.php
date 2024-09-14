<?php

namespace App\Http\Controllers;
use App\Models\corridor;
use App\Models\stations;
use Illuminate\Http\Request;

class StationsController extends Controller
{
    //
    public function index()
    {
        // $permission=Permission::get();
        $stations = stations::orderBy('created_at', 'desc')->get();
       return view('masters.station.index',['stations'=>$stations]);
    }


    public function create()
    {
        $corridor = corridor::orderBy('created_at', 'desc')->get();
        return view('masters.station.insert',['corridors'=>$corridor]);
    }

    public function store(Request $request)
    {
       
            
        $stations_id= 'CMRL'.time().'STN';
        stations::create([
            'station_id'=>$stations_id,
            'name'=>$request->station_name,
            'corridor'=>$request->corridor,
            'address'=>$request->address,
           
        ]);

        // $incident = incident_register::orderBy('created_at', 'desc')->get();
        // return view('registers.incident.index',['incidents'=>$incident]);

        return redirect('station')->with('status','stations Created Successfully!');
    }



    public function edit(stations $stations)
    {
        return view('masters.station.edit',['stations'=>$stations]);
    }

    public function update(Request $request)
    {

      
    
        // Retrieve the stations by stations_id from the request
        print_r($stations = stations::where('stations_id', $request->stations_id)->first());
    
        if (!$stations) {
            return redirect('station')->with('status', 'stations not found!');
        }
    
        // Update the stations
        $stations->update([
            'name' => $request->name,
            'phase' => $request->phase,
        ]);
    
        // Redirect back with a success message
        return redirect('station')->with('status', 'stations Updated Successfully!');
    }
    
    public function destroy($stationsId)
    {
        $stations= stations::find($stationsId);
        $stations->delete();
        return redirect('station')->with('status', 'Stations Removed Successfully!');
    }
}
