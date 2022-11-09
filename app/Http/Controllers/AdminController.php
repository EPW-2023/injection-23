<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\RegistrationFee;
use Illuminate\Http\Request;

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
    //show form for editing
    public function regFeeEdit(RegistrationFee $registrationFee)
    {
        return view('admin.edit-registration-fee', [
            'registration_fee' => $registrationFee,
        ]);
    }

    //update method regFee
    public function update(Request $request, $id)
    {
    }
}
