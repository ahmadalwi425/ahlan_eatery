@extends("layouts.template")


@section('title')
<h4>Menu</h4>
<p class = "mt-1">Daftar menu makanan dan minuman restoran Ahlan Eatery & Beverage</p>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Daftar Menu Ahlan Eatery & Beverage</h2>
        </div>
        <div class="float-left my-3">
            <a class="btn btn-primary" href="{{ route('masakan.create') }}"> + Tambah Data</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Nama Masakan</th>
        <th>Harga</th>
        <th>Status</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($masakan as $msk)
    <tr>
        <td>{{ $msk->id }}</td>
        <td>{{ $msk->nama_masakan }}</td>
        <td>{{ $msk->harga }}</td>
        <td>{{ $msk->status }}</td>
        <td>
            <form action="{{ route('masakan.destroy',['masakan'=>$msk->id]) }}" method="POST">
                <a class="btn btn-primary" href=" {{route('masakan.edit',$msk->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection