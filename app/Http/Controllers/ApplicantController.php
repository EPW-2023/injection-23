<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApplicantController extends Controller
{
    public function index()
    {
        //display the registration page
        return view('epc.registration');
    }

    public function store(Request $request)
    {
        $applicantsData = $request->validate([
            'namatim' => ['required', 'max:15'],
            'username' => ['required', 'unique:applicants', 'unique:users'],
            'password' => ['required'],
            'asalsekolah' => ['required'],
            'kota' => ['required'],
            'nama_ketua' => ['required'],
            'nisn_ketua' => ['required'],
            'nohp_ketua' => ['required'],
            'email_ketua' => ['required'],
            'nama_anggota1' => ['required'],
            'nisn_anggota1' => ['required'],
            'foto_ketua' => ['required', 'mimes:jpg,jpeg,png'], //file
            'foto_anggota1' => ['required', 'mimes:jpg,jpeg,png'], //file
            'kartu_pelajar_ketua' => ['required', 'mimes:jpg,jpeg,png'], //file
            'kartu_pelajar_anggota1' => ['required', 'mimes:jpg,jpeg,png'], //file
            'nama_pemilik_rekening' => ['required'],
            'bukti_pembayaran' => ['required', 'mimes:jpg,jpeg,png'], //file
        ]);

        //per file an duniawi

        //foto ketua
        $foto_ketua = $request->file('foto_ketua');
        $nama_foto_ketua =
            time() . ' ' . $applicantsData['namatim'] . ' ' . 'foto ketua';
        $tujuan_foto_ketua = 'files/foto ketua';
        $foto_ketua->move($tujuan_foto_ketua, $nama_foto_ketua);

        //foto anggota 1
        $foto_anggota1 = $request->file('foto_anggota1');
        $nama_foto_anggota1 =
            time() . ' ' . $applicantsData['namatim'] . ' ' . 'foto anggota1';
        $tujuan_foto_anggota1 = 'files/foto anggota1';
        $foto_anggota1->move($tujuan_foto_anggota1, $nama_foto_anggota1);

        //kartu pelajar ketua
        $kartu_pelajar_ketua = $request->file('kartu_pelajar_ketua');
        $nama_kartu_pelajar_ketua =
            time() .
            ' ' .
            $applicantsData['namatim'] .
            ' ' .
            'kartu pelajar ketua';
        $tujuan_kartu_pelajar_ketua = 'files/kartu pelajar ketua';
        $kartu_pelajar_ketua->move(
            $tujuan_kartu_pelajar_ketua,
            $nama_kartu_pelajar_ketua
        );

        //kartu pelajar anggota 1
        $kartu_pelajar_anggota1 = $request->file('kartu_pelajar_anggota1');
        $nama_kartu_pelajar_anggota1 =
            time() .
            ' ' .
            $applicantsData['namatim'] .
            ' ' .
            'kartu pelajar anggota1';
        $tujuan_kartu_pelajar_anggota1 = 'files/kartu pelajar anggota1';
        $kartu_pelajar_anggota1->move(
            $tujuan_kartu_pelajar_anggota1,
            $nama_kartu_pelajar_anggota1
        );

        $bukti_pembayaran = $request->file('bukti_pembayaran');
        $nama_bukti_pembayaran =
            time() .
            ' ' .
            $applicantsData['namatim'] .
            ' ' .
            'bukti pembayaran';
        $tujuan_bukti_pembayaran = 'files/bukti pembayaran';
        $bukti_pembayaran->move(
            $tujuan_bukti_pembayaran,
            $nama_bukti_pembayaran
        );

        $applicantsData['password'] = Hash::make($applicantsData['password']);
        $applicantsData = [
            'foto_ketua' => $nama_foto_ketua,
            'foto_anggota1' => $nama_foto_anggota1,
            'kartu_pelajar_ketua' => $nama_kartu_pelajar_ketua,
            'kartu_pelajar_anggota' => $nama_kartu_pelajar_anggota1,
            'bukti_pembayaran' => $nama_bukti_pembayaran,
        ];

        // dd($applicantsData);

        Applicant::create($applicantsData);
        return redirect('/success');
    }
}
