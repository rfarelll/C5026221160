@extends('master2')
@section('judulhalaman','Data Pegawai')


@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Informasi Pegawai</h3>

    <a href="/pegawai" class="btn btn-success"> <- Kembali </a>

	<br/>
	<br/>

    <div class="row">
        <div class="col-6 border">
        </div>
    <div class="col-6">
	@foreach($pegawai as $p)
    <fieldset disabled>
	<form action="/pegawai/update" method="post" class="form-horizontal" role="form">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id}}">
		<div class="form-group row">
            <label for="nama" class="col-xl-2 col-form-label mr-2">Nama</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="nama" name="nama" value="{{$p->pegawai_nama}}">
            </div>
            </div>
         <div class="form-group row">
                <label for="jabatan" class="col-xl-2 col-form-label mr-2">Jabatan</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{$p->pegawai_jabatan}}">
                </div>
                </div>
         <div class="form-group row">
            <label for="umur" class="col-xl-2 col-form-label mr-2">Umur</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="umur" name="ummur" value="{{$p->pegawai_umur}}">
            </div>
            </div>
        <div class="form-group row">
            <label for="alamat" class="col-xl-2 col-form-label mr-2">Alamat</label>
            <div class="col-sm-8">
            <textarea type="text-box" class="form-control" required="required" name="alamat" >{{$p->pegawai_alamat}}</textarea>
            </div>
            </div>
        </form>
    </fieldset>
        <div class="text-center">
		<a href="/pegawai" class="btn btn-primary">OK</a>
        </div>
	@endforeach
    </div>
    </div>
@endsection















