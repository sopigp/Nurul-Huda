@extends('admin.header')
@extends('admin.footer')
@extends('admin.sidebar')
@extends('admin.nav_header')
@extends('admin.profile')
@section('content')
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Create - Data Guru</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form action="{{url('/administratorx_guru/store')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" >Nama Lengkap
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="nama_lengkap" placeholder="" required="required" value="{{ old('nama_lengkap') }}">
                                                    </div>
                                                </div>
                                                 <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">Tempat Lahir <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="tempat_lahir" placeholder="" required="required" value="{{ old('tempat_lahir') }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">Tanggal Lahir <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="date" class="form-control" name="dob" placeholder="" required="required" value="{{ old('dob') }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">Jenis Kelamin <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="jenis_kelamin" placeholder="" required="required" value="{{ old('jenis_kelamin') }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">NIK <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control"  name="nik" placeholder="" required="required" value="{{ old('nik') }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">Nomor Kartu Keluarga
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control" name="no_kk" placeholder="" required="required" value="{{ old('no_kk') }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">Nomor NPWP <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control" name="no_npwp" placeholder="" required="required" value="{{ old('no_npwp') }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">Pendidikan <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control"  name="pendidikan" placeholder="" required="required" value="{{ old('pendidikan') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" >Tanggal Masuk Kerja
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="date" class="form-control"  name="tgl_masuk_kerja" placeholder="" required="required" value="{{ old('tgl_masuk_kerja') }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">Alamat
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="alamat" placeholder="" required="required" value="{{ old('alamat') }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">File Kartu Keluarga
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="file" class="form-control" name="file_kk" placeholder="" required="required" value="{{ old('file_kk') }}">
                                                    </div>
                                                </div>
                                               <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="file_ktp">File KTP <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="file" class="form-control" id="file_ktp" name="file_ktp" placeholder="" required="required" value="{{ old('file_ktp') }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">File NPWP <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="file" class="form-control" name="file_npwp" placeholder="" required="required" value="{{ old('file_npwp') }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">File TTD
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="file" class="form-control" name="file_ttd" placeholder="" required="required" value="{{ old('file_ttd') }}">
                                                    </div>
                                                </div>
                                                  <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label">Note
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="note" placeholder="" required="required" value="{{ old('note') }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type='submit' value="Upload" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection