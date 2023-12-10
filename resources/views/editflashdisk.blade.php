@extends('master4')
@section('judulhalaman','Database Flashdisk')


@section('konten')

	<h3>Edit Flashdisk</h3>

    <a href="/flashdisk" class="btn btn-success"> <- Kembali </a>

	<br/>
	<br/>

	@foreach($flashdisk as $fd)

	<form action="/flashdisk/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class="form-group row">
            <label for="merkflashdisk" class="col-xl-1 col-form-label mr-2">Merk</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="merkflashdisk" name="merkflashdisk" value="{{$fd->merkflashdisk}}">
            </div>
            </div>
         <div class="form-group row">
                <label for="stockflashdisk" class="col-xl-1 col-form-label mr-2">Stock</label>
                <div class="col-xs-9">
                <input type="text" class="form-control" id="stockflashdisk" name="stockflashdisk" value="{{$fd->stockflashdisk}}">
                </div>
                </div>
         <div class="form-group row">
            <label for="tersedia" class="col-xl-1 col-form-label mr-2">Tersedia</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="tersedia" name="ummur" value="{{$fd->tersedia}}">
            </div>
            </div>
        </br>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	</form>
	@endforeach
@endsection















