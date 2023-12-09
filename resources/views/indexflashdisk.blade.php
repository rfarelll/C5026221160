@extends('master4')
@section('judulhalaman','Database Flashdisk')


@section('konten')
	<h3>Database Flashdisk</h3>

	<a href="/flashdisk/tambah" class="btn btn-primary"> + Tambah Data</a>

	<table class= "table table-striped table-hover">
		<tr>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
		</tr>
		@foreach($flashdisk as $fd)
		<tr>
			<td>{{ $fd->merkflashdisk }}</td>
			<td>{{ $fd->stockflashdisk }}</td>
			<td>{{ $fd->tersedia }}</td>
		</tr>
		@endforeach
	</table>
@endsection
