<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentRegistration extends Controller
{
    // Step 1: Validate form and show preview
    public function registration(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'state' => 'required',
            'address' => 'required',
            'class' => 'required',
            'department' => 'required',
            'govt_id_type' => 'required',
            'govt_id_number' => 'required',
            'phone' => 'required',
            'madhyamik_percentage' => 'required|numeric|min:0|max:100',
            'higher_secondary_percentage' => 'required|numeric|min:0|max:100',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Store validated data in session
        session([
            'college_data' => $validated
        ]);

        // Show preview
        return view('college.preview', [
            'college_data' => $validated
        ]);
    }


    // Step 2: Final submit
    
    public function finalSubmit()
{
    // Get data from session
    $college_data = session('college_data');

    // If session expired
    if (!$college_data) {
        return redirect()
            ->back()
            ->with('error', 'Registration session expired. Please register again.');
    }

    // Generate unique student ID
    do {
        $student_id = 'SPC' . str_pad(
            random_int(1, 999),
            3,
            '0',
            STR_PAD_LEFT
        );
    } while (
        DB::table('student_new_registration')
            ->where('student_id', $student_id)
            ->exists()
    );

    // Insert student data
    DB::table('student_new_registration')->insert([
        'student_id'    => $student_id,

        'first_name'    => $college_data['first_name'],
        'surname'       => $college_data['surname'] ?? $college_data['last_name'] ?? '',

        'type'          => 1,

        'gender'        => $college_data['gender'],
        'class'         => $college_data['class'],
        'department'    => $college_data['department'],

        'govt_id_type'  => $college_data['govt_id_type'],

        'phone_no'      => $college_data['phone_no'] ?? $college_data['phone'],

        'mp_percentage' => $college_data['madhyamik_percentage'],
        'hs_percentage' => $college_data['higher_secondary_percentage'],

        'active_status' => 1,

        'created_at'    => now(),
        'updated_at'    => now(),

        'email_id'      => $college_data['email_id'] ?? $college_data['email'],

        'dob'           => $college_data['dob'],
        'address'       => $college_data['address'],
        'state'         => $college_data['state'],

        'pasword'       => bcrypt($college_data['password']),
    ]);

    // Store data required for success page
    $student_name = $college_data['first_name'] . ' ' .
                    ($college_data['surname'] ?? $college_data['last_name'] ?? '');

    // Remove registration session
    session()->forget('college_data');

    // Send student ID and name to success page
    return redirect()
        ->route('student.success')
        ->with([
            'success' => 'Student registration completed successfully!',
            'student_id' => $student_id,
            'student_name' => $student_name,
        ]);
}
}