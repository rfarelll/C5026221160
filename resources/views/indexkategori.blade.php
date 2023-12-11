@extends('masterCC')
@section('judulhalaman','Kategori')


@section('konten')
	<h3>Pilih Kategori</h3>

    <div class="col-8">
        <form action="/kategori/hasil" method="post" class="form-horizontal">
            {{ csrf_field() }}

        <label for="Nama"></label>
        <select name="Nama" id="Nama" size="1" style="width: 300px;">            >
            @foreach($kategori as $kategori)
                <option value="{{ $kategori->ID }}">{{ $kategori->Nama }}</option>
            @endforeach
        </select>
    <br>

        <button type="submit" class="btn btn-primary" style="margin-top: 10px;">KIRIM</button>
    </form>
@endsection
