@extends('master4')
@section('judulhalaman','Tambah Flashdisk')


@section('konten')

	<h3>Tambah Data</h3>

    <a href="/flashdisk" class="btn btn-success"> <- Kembali</a>

	<br/>
	<br/>

	<form action="/flashdisk/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merkflashdisk" class="col-xl-1 col-form-label mr-2">Merk</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="merkflashdisk" name="merkflashdisk">
            </div>
            </div>
         <div class="form-group row">
                <label for="stockflashdisk" class="col-xl-1 col-form-label mr-2">Stock</label>
                <div class="col-xs-9">
                <input type="text" class="form-control" id="stockflashdisk" name="stockflashdisk">
                </div>
                </div>
         <div class="form-group row">
            <label for="tersedia" class="col-xl-1 col-form-label mr-2">Tersedia</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="tersedia" name="tersedia">
            </div>
            </div>
        </br>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection
