<?php

namespace App\Http\Controllers;
use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
    //    echo 'ksi';die; // $permission=Permission::get();
        $Register = Register::orderBy('created_at', 'desc')->get();
       return view('masters.register.index',['Registers'=>$Register]);
    }


    public function create()
    {
        return view('masters.register.insert');
    }

    public function store(Request $request)
    {
       
            
        $register_id= 'CMRL'.time().'REG';
        Register::create([
            'register_id'=>$register_id,
            'name'=>$request->name,
           
           
        ]);

        // $incident = incident_register::orderBy('created_at', 'desc')->get();
        // return view('registers.incident.index',['incidents'=>$incident]);

        return redirect('registers')->with('status','Register Created Successfully!');
    }



    public function edit(Register $Register)
    {
        return view('masters.Register.edit',['register'=>$Register]);
    }

    public function update(Request $request)
    {

      
    
        // Retrieve the Register by Register_id from the request
        print_r($Register = Register::where('Register_id', $request->register_id)->first());
    
        if (!$Register) {
            return redirect('registers')->with('status', 'Register not found!');
        }
    
        // Update the Register
        $Register->update([
            'name' => $request->name,
            'phase' => $request->phase,
        ]);
    
        // Redirect back with a success message
        return redirect('registers')->with('status', 'Register Updated Successfully!');
    }
    
    public function destroy($RegisterId)
    {
        $Register= Register::find($RegisterId);
        $Register->delete();
        return redirect('register')->with('status', 'Register Removed Successfully!');
    }
}
