<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/styleCustomer.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap/css/bootstrap.min.css')}}">
	<title>Document</title>
</head>
<body>
	<div style=" display : flex;justify-content: center;">
		<div style="padding: 50px 100px; text-align: center; border: 1px solid black;">
				<h5>No Meja: {{$no_table}}</h5>
				<h5>No Pesanan: {{$no_pesanan}}</h5>
				<h5>Nama Pemesan: {{$nama_pemesan}}</h5>
				<hr>

				<table class = "table table-bordered">
					<tr>
						<th>No</th>
						<th>Nama Masakan</th>
						<th>Quantity</th>
						<th>Total Harga</th>
					</tr>
					@php $no = 1; @endphp
					@foreach ($pesanan as $p)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$p['name']}}</td>
							<td>{{$p['count']}}</td>
							<td>Rp. {{$p['price']}}</td>
						</tr>
					@endforeach
					
				</table>
				<h5>Total Keseluruhan : Rp. {{$total}}</h5>

				<form action="{{route('order.store')}}" method="POST">
					@csrf
					{{-- <input type="hidden" name="no_table" value="{{$no_table}}">
					<input type="hidden" name="no_pesanan" value="{{$no_pesanan}}">
					<input type="hidden" name="nama_pemesan" value="{{$nama_pemesan}}">
					<input type="hidden" name="total" id="total" value="{{$total}}">
					<input type="hidden" name="order-list" id="order-list" value="{{$pesananRaw}}" > --}}
					<input type="Sumbit" class= "btn btn-primary" value="Gas Pesan">
				</form>

		</div>
		

	</div>
</body>
</html>