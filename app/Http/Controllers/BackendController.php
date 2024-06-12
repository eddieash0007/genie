<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BackendController extends Controller
{
    public function dashboardIndex()
    {
        //staff categorizations
        $staff = Registration::count();
        $contractStaff = Registration::where('employment_status', 'Contract')->count();
        $nsp = Registration::where('employment_status', 'National Service')->count();
        $permanent = Registration::where('employment_status', 'Permanent')->count();

        //unit counts
        $loans = Registration::where('unit', 'Loans')->count();
        $ao = Registration::where('unit', 'Account Opening / Maintenance')->count();
        $qa = Registration::where('unit', 'Quality Assurance')->count();
        $ms = Registration::where('unit', 'Monitoring and Support')->count();
        $p = Registration::where('unit', 'Payments')->count();
        $c = Registration::where('unit', 'Clearing')->count();
        $csd = Registration::where('unit', 'CSD - Account Opening / Maintenance')->count();
        $co = Registration::where('unit', 'Custody Operations')->count();
        return view('backend.dashboard')->with('staff', $staff)
                                        ->with('contractStaff', $contractStaff)
                                        ->with('permanent', $permanent)
                                        ->with('nsp', $nsp)
                                        ->with('loans', $loans)
                                        ->with('ao', $ao)
                                        ->with('qa', $qa)
                                        ->with('ms', $ms)
                                        ->with('p', $p)
                                        ->with('c', $c)
                                        ->with('csd', $csd)
                                        ->with('co', $co);
    }

    public function registrationIndex()
    {
        $registrations = Registration::paginate(10);
        return view('backend.registrations')->with('registrations', $registrations); 
    }

    public function userIndex()
    {
        $users = User::paginate(10);
        return view('backend.users', compact('users'));
    }

    public function edit($id)
    {
        $registrations = Registration::find($id);

        return view('backend.edit')->with('registrations', $registrations);
    }

    public function update(Request $request, $id)
    {
        $registrations = Registration::findOrFail($id);
 


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

        
        $registrations->update([
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

        return redirect()->route('admin.registrations')->with('success', 'Details updated successfully.');
    }


    public function PasswordReset($id) {
        
        
        $passMod =  User::find($id);
        $passMod->password = Hash::make('Password123');
        $passMod->save();
        return redirect()->back()->with('success', 'Password reset successfully');
    }

    

    public function userSearch(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('name', 'LIKE', "%{$query}%")->paginate(10);
        return view('backend.userResults', compact('users', 'query'));
    }

    public function registrationSearch(Request $request)
    {
        $query = $request->input('query');
        $registrations = Registration::where('first_name', 'LIKE', "%{$query}%")->orWhere('last_name', 'LIKE', "%{$query}%")->paginate(10);
        return view('backend.registrationResults', compact('registrations', 'query'));
    }

    public function profile()
    {
        $id = Auth::user()->id;
        return view('backend.profile')->with('id', $id);
    }

    
    public function selfPasswordReset(Request $request,$id) {
        $this->validate($request,[
            'password' => 'required_with:password_confirmation|same:password_confirmation|min:8',
            'password_confirmation' => 'min:8',
        ]);

        $id = Auth::id();
        $passMod =  User::find($id);
        $passMod->password = Hash::make($request->password);
        $passMod->save();
        return redirect()->back()->with('success', 'Password updated successfully');
    }

    public function trash($id)
    {
        $registration = Registration::find($id);

        $registration->delete(); 

        return redirect()->back()->with('success', 'Records trashed successfully');
    }

    public function trashed()
    {
        $registration = Registration::onlyTrashed()->paginate(10);

        return view ('backend.trashed')->with('registrations', $registration);
    }

    public function restore($id)
    {
        $registration = Registration::withTrashed()->find($id);
        $registration->restore();
        return redirect()->back()->with('success', 'Records restored successfully');
    }

    public function destroy($id)
    {
        $registration = Registration::withTrashed()->find($id);
        $registration->forceDelete();
        return redirect()->back()->with('success', 'Records deleted permanently');
    }

    public function trashedSearch(Request $request)
    {
        $query = $request->input('query');
        $registrations = Registration::onlyTrashed()
                        ->where('staff_id', 'LIKE', "%{$query}%")
                        // ->orWhere('last_name', 'LIKE', "%{$query}%")
                        ->paginate(10);
        return view('backend.trashedResults', compact('registrations', 'query'));
    }
   
}
