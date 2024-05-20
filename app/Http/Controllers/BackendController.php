<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    public function dashboardIndex()
    {
        $staff = Registration::count();
        $contractStaff = Registration::where('employment_status', 'Contract')->count();
        $nsp = Registration::where('employment_status', 'National Service')->count();
        $permanent = Registration::where('employment_status', 'Permanent')->count();
        return view('backend.dashboard')->with('staff', $staff)->with('contractStaff', $contractStaff)->with('nsp', $nsp)->with('permanent', $permanent);
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


    public function PasswordReset(Request $request,$id) {
        $this->validate($request,[
            'password' => 'required_with:password_confirmation|same:password_confirmation|min:8',
            'password_confirmation' => 'min:8',
        ]);
        $id = Auth::id();
        $passMod =  User::find($id);
        $passMod->password = bcrypt($request->password);
        $passMod->save();
        return redirect()->back()->with('success', 'Password reset successfully');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
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
}
