<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\guru;
use Auth;
use Redirect;
use File;
use SweetAlert;

class GuruController extends Controller
{
    public function index()
    {
       $guru = guru::all();

       return view('/admin/guru/guru',['guru' => $guru]);

    }

       public function detil($id_guru)
   {

       $guru= DB::table('guru')->select('*')->where('id_guru',$id_guru)->first();

       return view('/admin/guru/detil_guru')->with(compact('guru'));

   }

   public function create()
   {
      $guru = guru::all();

       return view('/admin/guru/create_guru',['guru' => $guru]);
   }

    public function store(Request $request)
    {

    $rules = [
      'file_kk' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
      'file_ktp' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
      'file_npwp' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
      'file_ttd' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000'
    ];

    $this->validate($request, $rules);
 

    // KARTU KELUARGA

    $files1 = $request->file('file_kk');
    
    $nama_file1 = time()."_".$files1->getClientOriginalName();
    // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload1 = 'guru/file_kk';
    $files1->move($tujuan_upload1,$nama_file1);
    $lokasifileskr1 = '/guru/file_kk/'.$nama_file1;

    // KTP
    $files2 = $request->file('file_ktp');
    
    $nama_file2 = time()."_".$files2->getClientOriginalName();
    // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload2 = 'guru/file_ktp';
    $files2->move($tujuan_upload2,$nama_file2);
    $lokasifileskr2 = '/guru/file_ktp/'.$nama_file2;

    // NPWP
    $files3 = $request->file('file_npwp');
    
    $nama_file3 = time()."_".$files3->getClientOriginalName();
    // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload3 = 'guru/file_npwp';
    $files3->move($tujuan_upload3,$nama_file3);
    $lokasifileskr3 = '/guru/file_npwp/'.$nama_file3;

    // TTD
    $files4 = $request->file('file_ttd');
    
    $nama_file4 = time()."_".$files4->getClientOriginalName();
    // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload4 = 'guru/file_ttd';
    $files4->move($tujuan_upload4,$nama_file4);
    $lokasifileskr4 = '/guru/file_ttd/'.$nama_file4;

    
    // insert data ke table
    DB::table('guru')->insert([

       'nama_lengkap'=>$request->nama_lengkap,
       'tempat_lahir'=>$request->tempat_lahir,
       'dob'=>$request->dob,
       'jenis_kelamin'=>$request->jenis_kelamin,
       'nik'=>$request->nik,
       'no_kk'=>$request->no_kk,
       'no_npwp'=>$request->no_npwp,
       'pendidikan'=>$request->pendidikan,
       'tgl_masuk_kerja'=>$request->tgl_masuk_kerja,
       'alamat'=>$request->alamat,
       'note'=>$request->note,
       'file_path_kk'=>$lokasifileskr1,
       'file_name_kk'=>$nama_file1,
       'file_path_ktp'=>$lokasifileskr2,
       'file_name_ktp'=>$nama_file2,
       'file_path_npwp'=>$lokasifileskr3,
       'file_name_npwp'=>$nama_file3,
       'file_path_ttd'=>$lokasifileskr4,
       'file_name_ttd'=>$nama_file4,

    ]);
     return redirect('/administratorx_guru');
    }

     public function edit($id_guru)
   {

    $guru= DB::table('guru')->select('*')->where('id_guru',$id_guru)->first();

    return view('/admin/guru/edit_guru')->with(compact('guru'));

   }

    public function update(Request $request)
    {

    $rules = [
      'file_kk' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
      'file_ktp' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
      'file_npwp' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
      'file_ttd' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000'
    ];

    $this->validate($request, $rules);
 
      if ($request->hasfile('file'))
    {

   // KARTU KELUARGA
    $files1 = $request->file('file_kk');
    
    $nama_file1 = time()."_".$files1->getClientOriginalName();
    // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload1 = 'guru/file_kk';
    $files1->move($tujuan_upload1,$nama_file1);
    $lokasifileskr1 = '/guru/file_kk/'.$nama_file1;

    // KTP
    $files2 = $request->file('file_ktp');
    
    $nama_file2 = time()."_".$files2->getClientOriginalName();
    // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload2 = 'guru/file_ktp';
    $files2->move($tujuan_upload2,$nama_file2);
    $lokasifileskr2 = '/guru/file_ktp/'.$nama_file2;

    // NPWP
    $files3 = $request->file('file_npwp');
    
    $nama_file3 = time()."_".$files3->getClientOriginalName();
    // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload3 = 'guru/file_npwp';
    $files3->move($tujuan_upload3,$nama_file3);
    $lokasifileskr3 = '/guru/file_npwp/'.$nama_file3;

    // TTD
    $files4 = $request->file('file_ttd');
    
    $nama_file4 = time()."_".$files4->getClientOriginalName();
    // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload4 = 'guru/file_ttd';
    $files4->move($tujuan_upload4,$nama_file4);
    $lokasifileskr4 = '/guru/file_ttd/'.$nama_file4;

     // fungsi delete data -> ambil data berdasarkan id
    $delete_file= DB::table('guru')->where('id_guru',$request->id)->first();
     // fungsi delete tinggal panggil colomn table yg mau didelete 
   
      File::delete('guru/file_kk/'.$delete_file->file_name_kk);
      File::delete('guru/file_ktp/'.$delete_file->file_name_ktp);
      File::delete('guru/file_npwp/'.$delete_file->file_name_npwp);
      File::delete('guru/file_ttd/'.$delete_file->file_name_ttd);

    // insert data ke table
     DB::table('guru')->where('id_guru',$request->id)->update([

       'nama_lengkap'=>$request->nama_lengkap,
       'tempat_lahir'=>$request->tempat_lahir,
       'dob'=>$request->dob,
       'jenis_kelamin'=>$request->jenis_kelamin,
       'nik'=>$request->nik,
       'no_kk'=>$request->no_kk,
       'no_npwp'=>$request->no_npwp,
       'pendidikan'=>$request->pendidikan,
       'tgl_masuk_kerja'=>$request->tgl_masuk_kerja,
       'alamat'=>$request->alamat,
       'note'=>$request->note,
       'file_path_kk'=>$lokasifileskr1,
       'file_name_kk'=>$nama_file1,
       'file_path_ktp'=>$lokasifileskr2,
       'file_name_ktp'=>$nama_file2,
       'file_path_npwp'=>$lokasifileskr3,
       'file_name_npwp'=>$nama_file3,
       'file_path_ttd'=>$lokasifileskr4,
       'file_name_ttd'=>$nama_file4,

    ]);
      }else{
      DB::table('guru')->where('id_guru',$request->id)->update([

       'nama_lengkap'=>$request->nama_lengkap,
       'tempat_lahir'=>$request->tempat_lahir,
       'dob'=>$request->dob,
       'jenis_kelamin'=>$request->jenis_kelamin,
       'nik'=>$request->nik,
       'no_kk'=>$request->no_kk,
       'no_npwp'=>$request->no_npwp,
       'pendidikan'=>$request->pendidikan,
       'tgl_masuk_kerja'=>$request->tgl_masuk_kerja,
       'alamat'=>$request->alamat,
       'note'=>$request->note
      ]);
    }
    
    return redirect('/administratorx_guru');
    }
    

     public function delete($id_guru)
   {
      $guru = guru::find($id_guru)->get();
      File::delete('guru/file_kk/'.$guru[0]->file_name_kk);
      File::delete('guru/file_ktp/'.$guru[0]->file_name_ktp);
      File::delete('guru/file_npwp/'.$guru[0]->file_name_npwp);
      File::delete('guru/file_ttd/'.$guru[0]->file_name_ttd);
   
      guru::where('id_guru',$id_guru)->delete();
     
      return redirect('/administratorx_guru');
   }


}
