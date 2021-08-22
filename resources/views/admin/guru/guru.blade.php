@extends('admin.header')
@extends('admin.footer')
@extends('admin.sidebar')
@extends('admin.nav_header')
@extends('admin.profile')
@section('content')
<style type="text/css">
blockquote {
  max-width: 1200px;
  margin: 0;
  width: 100%;
  padding: 20px 100px;
  background: #dbf66a;
    color: #243170; 
  position: relative;
}
blockquote::before,
blockquote::after {
  font-size: 350%;
  font-family: arial;
  display:block;
  position: absolute;
}
blockquote::before {
  content: open-quote;
  left: 30px;
    line-height: 40px;
}
blockquote::after {
  content: close-quote;
  right: 30px;
    line-height: 30px;
}
</style>

<div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Guru Nurul Huda</h4>
                              <div class="form-group row">
                                <div class="col-lg-12">
                                  <a class="btn btn-primary btn-sm" href="{{url('/administratorx_guru/create')}}">
                                    <span class="glyphicon glyphicon-plus"></span>Tambah Data Guru
                                  </a>
                                </div>
                             </div>
                            </div>
                            <blockquote>
                              Perhatian! Mohon untuk Tidak Meng-upload Data yang Bersifat Krusial.
                            </blockquote>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Start Working</th>
                                                <th>Education</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                         <?php $no = 0;?>
                        @foreach($guru as $gu)
                        <?php $no++ ;?>
                            <tr>
                          <td>{{ $no }}</td>
                          <td>{{ $gu->nama_lengkap }}</td>
                          <td>{{ $gu->jenis_kelamin }}</td>
                          <td>{{ $gu->tgl_masuk_kerja }}</td>
                          <td>{{ $gu->pendidikan }}</td>
                          <td>{{ $gu->alamat }}</td>
                          <td>{{ $gu->status }}</td>
                          <td>
                            <a class="btn btn-info btn-sm" href="{{url('/administratorx_guru/edit')}}/{{$gu->id_guru}}">Edit
                              <span class="glyphicon glyphicon-edit"></span>
                            </a>
                              <a class="btn btn-dark btn-sm" href="{{url('/administratorx_guru/detil')}}/{{$gu->id_guru}}">View
                              <span class="glyphicon glyphicon-eye-open"></span>
                            </a>
	                        <a class="btn btn-danger button-delete btn-sm" href="{{url('/administratorx_guru/delete')}}/{{$gu->id_guru}}">Delete
	                            <span class="glyphicon glyphicon-trash"></span>
	                        </a>
                          </td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>

    @endsection