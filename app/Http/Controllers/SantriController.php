<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\santri;
use Auth;
use Redirect;
use File;
use SweetAlert;

class SantriController extends Controller
{
    
    public function index()
    {
       $santri = santri::all();

       return view('/admin/santri/santri',['santri' => $santri]);

    }

      public function detil($id_santri)
   {

       $santri= DB::table('santri')->select('*')->where('id_santri',$id_santri)->first();

       return view('/admin/santri/detil_santri')->with(compact('santri'));

   }

    public function create()
    {
       $santri = santri::all();

       return view('/admin/santri/create_santri',['santri' => $santri]);

    }

      public function store(Request $request)
    {

    $rules = [
      'file_kk' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
      'file_ktp' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000'
    ];

    $this->validate($request, $rules);
 

    // KARTU KELUARGA

    $files1 = $request->file('file_kk');
    
    $nama_file1 = time()."_".$files1->getClientOriginalName();
    // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload1 = 'santri/file_kk';
    $files1->move($tujuan_upload1,$nama_file1);
    $lokasifileskr1 = '/santri/file_kk/'.$nama_file1;

    // KTP
    $files2 = $request->file('file_ktp');
    
    $nama_file2 = time()."_".$files2->getClientOriginalName();
    // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload2 = 'santri/file_ktp';
    $files2->move($tujuan_upload2,$nama_file2);
    $lokasifileskr2 = '/santri/file_ktp/'.$nama_file2;
    
    // insert data ke table
    DB::table('santri')->insert([

       'nama_lengkap'=>$request->nama_lengkap,
       'tempat_lahir'=>$request->tempat_lahir,
       'dob'=>$request->dob,
       'jenis_kelamin'=>$request->jenis_kelamin,
       'nik'=>$request->nik,
       'no_kk'=>$request->no_kk,
       'nama_ibu'=>$request->nama_ibu,
       'nama_ayah'=>$request->nama_ayah,
       'anak_ke'=>$request->anak_ke,
       'jumlah_anak'=>$request->jumlah_anak,
       'alamat'=>$request->alamat,
       'file_path_kk'=>$lokasifileskr1,
       'file_name_kk'=>$nama_file1,
       'file_path_ktp'=>$lokasifileskr2,
       'file_name_ktp'=>$nama_file2,
    
    ]);
     return redirect('/administratorx_santri');
    }

    public function edit($id_santri)
   {

    $santri= DB::table('santri')->select('*')->where('id_santri',$id_santri)->first();

    return view('/admin/santri/edit_santri')->with(compact('santri'));

   }

    public function update(Request $request)
    {

    $rules = [
      'file_kk' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
      'file_ktp' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000'
    ];

    $this->validate($request, $rules);
 
     if ($request->hasfile('file'))
    {

    // KARTU KELUARGA
    $files1 = $request->file('file_kk');
    
    $nama_file1 = time()."_".$files1->getClientOriginalName();
    // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload1 = 'santri/file_kk';
    $files1->move($tujuan_upload1,$nama_file1);
    $lokasifileskr1 = '/santri/file_kk/'.$nama_file1;

    // KTP
    $files2 = $request->file('file_ktp');
    
    $nama_file2 = time()."_".$files2->getClientOriginalName();
    // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload2 = 'santri/file_ktp';
    $files2->move($tujuan_upload2,$nama_file2);
    $lokasifileskr2 = '/santri/file_ktp/'.$nama_file2;

     $delete_file= DB::table('santri')->where('id_santri',$request->id)->first();
     // fungsi delete tinggal panggil colomn table yg mau didelete 
   
     File::delete('santri/file_kk/'.$delete_file->file_name_kk);
     File::delete('santri/file_ktp/'.$delete_file->file_name_ktp);

    
    // insert data ke table
    DB::table('santri')->where('id_santri',$request->id)->update([

       'nama_lengkap'=>$request->nama_lengkap,
       'tempat_lahir'=>$request->tempat_lahir,
       'dob'=>$request->dob,
       'jenis_kelamin'=>$request->jenis_kelamin,
       'nik'=>$request->nik,
       'no_kk'=>$request->no_kk,
       'nama_ibu'=>$request->nama_ibu,
       'nama_ayah'=>$request->nama_ayah,
       'anak_ke'=>$request->anak_ke,
       'jumlah_anak'=>$request->jumlah_anak,
       'alamat'=>$request->alamat,
       'file_path_kk'=>$lokasifileskr1,
       'file_name_kk'=>$nama_file1,
       'file_path_ktp'=>$lokasifileskr2,
       'file_name_ktp'=>$nama_file2
    
    ]);
     }else{
      DB::table('santri')->where('id_santri',$request->id)->update([

       'nama_lengkap'=>$request->nama_lengkap,
       'tempat_lahir'=>$request->tempat_lahir,
       'dob'=>$request->dob,
       'jenis_kelamin'=>$request->jenis_kelamin,
       'nik'=>$request->nik,
       'no_kk'=>$request->no_kk,
       'nama_ibu'=>$request->nama_ibu,
       'nama_ayah'=>$request->nama_ayah,
       'anak_ke'=>$request->anak_ke,
       'jumlah_anak'=>$request->jumlah_anak,
       'alamat'=>$request->alamat
      ]);
    }
    
    return redirect('/administratorx_santri');
    }


     public function delete($id_santri)
   {
      $santri = santri::find($id_santri)->get();
      File::delete('santri/file_kk/'.$santri[0]->file_name_kk);
      File::delete('santri/file_ktp/'.$santri[0]->file_name_ktp);

      santri::where('id_santri',$id_santri)->delete();
     
      return redirect('/administratorx_santri');
   }
}
