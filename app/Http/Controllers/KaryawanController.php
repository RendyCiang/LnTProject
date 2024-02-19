<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function viewKaryawan(Request $request)
    {
        $request->validate([
            'nama_karyawan' => ['required','min:5', 'max:20'],
            'umur_karyawan' =>['required', 'min:20','numeric'],
            'alamat_karyawan' => ['required','min:10', 'max:40'],
            'nomor_karyawan' => ['required', 'starts_with:08']
        ]);

        Karyawan::create([
            'nama_karyawan' => $request->nama_karyawan,
            'umur_karyawan' => $request->umur_karyawan,
            'alamat_karyawan' => $request->alamat_karyawan,
            'nomor_karyawan' =>$request->nomor_karyawan,
        ]);
        return redirect('/view');
    }
    public function showKaryawan(){
        $KaryawanData = Karyawan::all();
        return view('view_karyawan',[
            "KaryawanData" =>$KaryawanData
        ]);
    }

    public function deleteKaryawan($data){
        $KaryawanData = Karyawan::find($data);
        Karyawan::destroy($data);
        return redirect('/view');
    }

    public function editKaryawan($data){
        $karyawanData = Karyawan::findOrFail($data);
        return view('edit_karyawan', compact('karyawanData'));
    }

    public function KaryawanDataUpdate(Request $request, $data){
        $request->validate([
            'nama_karyawan' => ['required','min:5', 'max:20'],
            'umur_karyawan' =>['required', 'min:20','numeric'],
            'alamat_karyawan' => ['required','min:10', 'max:40'],
            'nomor_karyawan' => ['required', 'starts_with:08']
        ]);

        Karyawan::find($data)->update([
            'nama_karyawan' => $request->nama_karyawan,
            'umur_karyawan' => $request->umur_karyawan,
            'alamat_karyawan' => $request->alamat_karyawan,
            'nomor_karyawan' =>$request->nomor_karyawan,
        ]);
        return redirect('/view');
    }

}
