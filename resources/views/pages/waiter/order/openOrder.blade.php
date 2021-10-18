@extends("layouts.template")


@section('title')
<h5 class = "mb-3">Daftar Pesanan</h5>
@endsection
@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3 class="mb-3" style="font-weight: bold; color: rgb(106, 89, 255)">Daftar Pesanan </h3>
				<p>Berikut adalah daftar pesanan yang <b>masih diproses</b></p>
			</div>
		</div>
	</div>
	
	@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
	@endif
	{{-- <button onClick="notif_me()"> tes </button> --}}
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
			<td>{{$ord->no_meja}}</td>
			<td>{{$ord->id}}</td>
			<td>{{$ord->nama}}</td>
			<td>{{$ord->tanggal}}</td>
			<td>
			 <div id="status{{$ord->status_order }}" style="justify-content: space-around; display:flex">
				<center>
					@if($ord->status_order == 0)
					<div
						style="background-color: rgb(253, 217, 188) !important; color:rgb(165, 115, 6); border-radius:50px; padding: 5px; min-width: 100px; font-weight: bold">
						di proses</div>
					@else
					<div
						style="background-color: rgb(202, 250, 195) !important; color:rgb(45, 161, 35); border-radius:50px; padding: 5px; min-width: 100px; font-weight: bold">
						Selesai</div>
					@endif
				</center>
				<a type="button" class="btn" href=""
					onclick="$('#editStatus{{$ord->status_order}}').show(); $('#status{{$ord->status_order}}').hide(); return false;">
					<i class="ti-marker-alt"></i></a>
			</div>
			<form id="editStatus{{$ord->status_order}}" action="{{route('updateStatus', $ord->id)}}"
				style="display: none">
				<select name="status">
					<option value="0">Diproses</option>
					<option value="1">Selesai</option>
				</select>
				<button type="submit" class="btn btn-sm btn-primary">done</button>
				<a type="button" class="btn" href=""
					onclick="$('#editStatus{{$ord->status_order}}').hide(); $('#status{{$ord->status_order}}').show(); return false; ">&times;</a>
			</form>
			</td>
			<td>{{$ord->harga}}</td>
			<th><a href="{{url('waiter/detailorder/'.$ord->id)}}" class = "btn btn-primary">Lihat detail</a></th>
		</tr>
		@endforeach
	</table>
@endsection