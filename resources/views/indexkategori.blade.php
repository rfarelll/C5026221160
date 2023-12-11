@extends('masterCC')
@section('judulhalaman','Kategori')


@section('konten')
	<h3>Pilih Kategori</h3>

    <div class="col-8">
        <form action="/kategori/hasil" method="post" class="form-horizontal">
            {{ csrf_field() }}
        <label for="kategori"></label>
        <select name="kategori" id="kategori" size="1" style="width: 300px;">            >
            @foreach($kategori as $k)
                <option value="{{ $k->ID }}">{{ $k->Nama }}</option>
            @endforeach
        </select>
    <br>
        <button type="submit" class="btn btn-primary" style="margin-top: 10px;">KIRIM</button>
    </form>
@endsection
