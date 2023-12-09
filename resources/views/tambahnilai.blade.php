@extends('master3')
@section('judulhalaman','Tambah Nilai')


@section('konten')

	<h3>Tambah Data</h3>

    <a href="/nilaikuliah" class="btn btn-success"> <- Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="NRP" class="col-xl-1 col-form-label mr-2">NRP</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="NRP" name="NRP">
            </div>
            </div>
         <div class="form-group row">
                <label for="NilaiAngka" class="col-xl-1 col-form-label mr-2">Nilai Angka</label>
                <div class="col-xs-9">
                <input type="text" class="form-control" id="NilaiAngka" name="NilaiAngka">
                </div>
                </div>
         <div class="form-group row">
            <label for="sks" class="col-xl-1 col-form-label mr-2">SKS</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="SKS" name="SKS">
            </div>
            </div>
        </br>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection
