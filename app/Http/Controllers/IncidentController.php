<?php

namespace App\Http\Controllers;
use App\Models\incident_register;
use App\Models\incident_register_entries;

use Illuminate\Http\Request;

class IncidentController extends Controller
{
    //
    public function index()
    {
        // $permission=Permission::get();
        $incident = incident_register::orderBy('created_at', 'desc')->get();
       return view('registers.incident.index',['incidents'=>$incident]);
    }

    public function create()
    {
        return view('registers.incident.create');
    }


    public function store(Request $request)
    {
        // $request->validate([
        //     'rev' => [
        //         'required',
        //         'string',
        //         'unique:permissions,name', 
        //     ],
        //     'station' => [
        //         'required',
        //         'string',
        //         'unique:permissions,name', 
        //     ],
        //     'incident_no' => [
        //         'required',
        //         'string',
        //         'unique:permissions,name', 
        //     ],
        //     'incident_date' => [
        //         'required',
        //         'string',
        //         'unique:permissions,name', 
        //     ],
        //     'incident_time' => [
        //         'required',
        //         'string',
        //         'unique:permissions,name', 
        //     ],
        //     'incident_class' => [
        //         'required',
        //         'string',
        //         'unique:permissions,name', 
        //     ],
        //     'incident_level' => [
        //         'required',
        //         'string',
        //         'unique:permissions,name', 
        //     ],
        //     'incident_subject' => [
        //         'required',
        //         'string',
        //         'unique:permissions,name', 
        //     ],
        // ]);
            
        $incident_id= 'CMR'.time().'INC';
        incident_register::create([
            'incident_id'=>$incident_id,
            'rev'=>$request->rev,
            'station'=>$request->station,
            'incident_no'=>$request->incident_no,
            'incident_date'=>$request->incident_date,
            'incident_time'=>$request->incident_time,
            'incident_class'=>$request->incident_class,
            'incident_level'=>$request->incident_level,
            'incident_subject'=>$request->incident_subject,
           
        ]);

        // $incident = incident_register::orderBy('created_at', 'desc')->get();
        // return view('registers.incident.index',['incidents'=>$incident]);

        return redirect('incident')->with('status','Register Created Successfully!');
    }


    public function insert($userId)
    {
        $incident = incident_register_entries::where('incident_id', $userId)->get();

        return view('registers.incident.incident.index',['incidents'=>$incident]);
    }


    
    public function insert_entries($userId)
    {
        $incident = incident_register_entries::where('incident_id', $userId)->get();
        return view('registers.incident.incident.index',['incident_id'=>$userId,'incidents'=>$incident]);
    }


    public function add_incident($userId)
    {
        return view('registers.incident.incident.insert',['user_id'=>$userId]);
    }



}
   