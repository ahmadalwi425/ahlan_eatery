@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    now you are on table {{$no_table}}
                    <br>
                    Your order number will be {{$no_pesanan}}
                    <form method="POST" action="{{url('pesan')}}">
                        @csrf
                        <input type="hidden" name="no_table" value="{{$no_table}}">
                        <input type="hidden" name="no_pesanan" value="{{$no_pesanan}}">
                        <label for="">Masukkan Nama</label>
                        <input type="text" name="nama_pemesan">
                        <button type = "Submit">Lanjut Pesan</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
