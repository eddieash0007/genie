<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class FrontEndController extends Controller
{
    public function index(){
       return view ('main'); 
    }

    public function store(Request $request){
       


        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'other_name' => 'required',
            'staff_id' => 'required',
            'employment_status' => 'required',
            'unit' => 'required',
            'dob' => 'required',
            'grade' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'c_p_name' => 'required',
            'c_p_tel' => 'required',
        ]);

        // Create and save the post with validated data
        $data = Registration::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'other_name' => $validatedData['other_name'],
            'staff_id' => $validatedData['staff_id'],
            'employment_status' => $validatedData['employment_status'],
            'unit' => $validatedData['unit'],
            'dob' => $validatedData['dob'],
            'grade' => $validatedData['grade'],
            'contact' => $validatedData['contact'],
            'address' => $validatedData['address'],
            'c_p_name' => $validatedData['c_p_name'],
            'c_p_tel' => $validatedData['c_p_tel'],
            
        ]);

        // Redirect or return a response
        return redirect('/')->with('success', 'Details captured successfully!');
        
        
       
    }
}
