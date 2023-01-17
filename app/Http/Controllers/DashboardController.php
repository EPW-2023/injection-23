<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboardIndex()
    {
        return view('injection.dashboard', [
            'title' => 'INJECTION Dashboard',
        ]);
    }
    public function submissionIndex()
    {
        return view('injection.paper-submission', [
            'title' => 'INJECTION Submission Paper',
        ]);
    }
    public function submissionSuccess()
    {
        $title = 'SUCCESS';
        return view('injection.success-submission', compact('title'));
    }
    public function submissionPost(Request $request)
    {
        $submission_user = Auth::user()->username;
        $validatedData = $request->validate([
            'submission_paper' => 'required',
        ]);

        //upload file handler
        $file_paper = $request->file('submission_paper');
        $nama_file_paper =
            $submission_user .
            ' ' .
            'paper' .
            '.' .
            $file_paper->getClientOriginalExtension();
        $tujuan_file_paper = 'storage/submission paper/' . $submission_user;
        $file_paper->move($tujuan_file_paper, $nama_file_paper);

        $validatedData['submission_user'] = $submission_user;
        $validatedData['submission_paper'] = $nama_file_paper;

        Submission::create($validatedData);
        return redirect('/dashboard');
    }
}
