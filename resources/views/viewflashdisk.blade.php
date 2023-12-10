@extends('master4')
@section('judulhalaman','Database Flashdisk')


@section('konten')
	<h3>Informasi Flashdisk</h3>

    <a href="/flashdisk" class="btn btn-success"> <- Kembali </a>

	<br/>
	<br/>

    <div class="row">
        <div class="col-6 border">
        </div>
    <div class="col-6">
	@foreach($flashdisk as $fd)
    <fieldset disabled>
	<form action="/flashdisk/update" method="post" class="form-horizontal" role="form">
		{{ csrf_field() }}
        <input type="hidden" name="kodeflashdisk" value="{{ $fd->kodeflashdisk}}">
		<div class="form-group row">
            <label for="merkflashdisk" class="col-xl-2 col-form-label mr-2">Merk</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="merkflashdisk" name="merkflashdisk" value="{{$fd->merkflashdisk}}">
            </div>
            </div>
         <div class="form-group row">
                <label for="stockflashdisk" class="col-xl-2 col-form-label mr-2">Stock</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="stockflashdisk" name="stockflashdisk" value="{{$fd->stockflashdisk}}">
                </div>
                </div>
         <div class="form-group row">
            <label for="tersedia" class="col-xl-2 col-form-label mr-2">Tersedia</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="tersedia" name="tersedia" value="{{$fd->tersedia}}">
            </div>
            </div>
        </form>
    </fieldset>
        <div class="text-center">
		<a href="/flashdisk" class="btn btn-primary">OK</a>
        </div>
	@endforeach
    </div>
    </div>
@endsection















