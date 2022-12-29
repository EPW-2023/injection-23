<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\RegistrationFee;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function teamIndex()
    {
        return view('admin.team', [
            'teams' => Applicant::all(),
        ]);
    }

    public function userIndex()
    {
        return view('admin.user');
    }
    public function newAdminPost(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = 'Admin';
        User::create($validatedData);
        return redirect(route('admin-user'));
    }
    public function applicantIndex()
    {
        return view('admin.applicant', [
            'applicants' => Applicant::all(),
        ]);
    }

    public function regFeeIndex()
    {
        return view('admin.registration-fee', [
            'regfee' => RegistrationFee::all(),
        ]);
    }
    public function submissionIndex()
    {
        return view('admin.submission', [
            'submissions' => Submission::all(),
        ]);
    }

    //VERIFICATION CONTROLLERS
    public function verificationIndex()
    {
        return view('admin.verification', [
            'users' => User::all(),
        ]);
    }

    public function verifyPage(User $user)
    {
        return view('admin.edit-verification', [
            'verification' => $user,
        ]);
    }

    public function verifyUser(Request $request, User $user)
    {
        $rules = [
            'verified' => ['required'],
        ];
        $validatedData = $request->validate($rules);
        $validatedData['verified'] = 'true';
        User::where('id', $user->id)->update($validatedData);
        return redirect('/admin/verification');
    }
}
