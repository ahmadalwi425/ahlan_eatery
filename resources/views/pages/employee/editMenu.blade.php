@extends("layouts.template")


@section('title')
<h4>Edit Menu</h4>
@endsection
@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Menu Data
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('masakan.update', $masakan->id) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="id">Id</label>

                        <input type="text" name="id" class="form-control" id="id" value="{{ $masakan->id }}" aria- describedby="id">

                    </div>
                    <div class="form-group">
                        <label for="nama_masakan">Nama Masakan</label>
                        <input type="text" name="nama_masakan" class="form-control" id="nama_masakan" value="{{ $masakan->nama_masakan }}" aria-describedby="nama_masakan">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="harga" name="harga" class="form-control" id="harga" value="{{ $masakan->harga }}" aria-describedby="harga">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="status" name="status" class="form-control" id="status" value="{{ $masakan->status }}" aria-describedby="status">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection