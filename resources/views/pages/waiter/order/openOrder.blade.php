@extends("layouts.template")


@section('title')
<h4>Daftar Pesanan</h4>
@endsection
@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h2>Daftar Pesanan</h2>
			</div>
		</div>
	</div>
	
	@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
	@endif
	<button onClick="notif_me()"> tes </button>
	<table class="table table-bordered">
		<tr>
			<th>No Meja</th>
			<th>No Pemesanan</th>
			<th>Nama Pemesan</th>
			<th>Tanggal</th>
			<th>Status Order</th>
			<th>Harga</th>
			<th>Aksi</th>
		</tr>
		@php $no = 1; @endphp
		@foreach ($order as $ord)
		<tr>
			<td>{{$ord->$no_meja}}</td>
			<td>{{$ord->$id}}</td>
			<td>{{$ord->tanggal}}</td>
			<td>{{$ord->status_order }}</td>
			<td>{{$ord->harga}}</td>
			<th><button>Lihat Detail</button></th>
		</tr>
		@endforeach
	</table>
@endsection