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
            <td>
                <a href="/flashdisk/view/{{ $fd->kodeflashdisk }}" class="btn btn-success">View</a>
                |
				<a href="/flashdisk/edit/{{ $fd->kodeflashdisk }}" class="btn btn-warning">Edit</a>
				|
				<a href="/flashdisk/hapus/{{ $fd->kodeflashdisk }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
