@extends('front.layout.app')

@section('title', 'Home')

@section('content')

<div class="container-cus">
    <div class="pb-4">
        <h4 class="gray-g">Welcome to Rekomendasi Film</h4>
    </div>
    <div class="row">
        @foreach ($take as $value => $key)
        <div class="col-md-3 mb-4">
            <div class="card card-s">
                <img class="card-img-top card-top-cus" src="{{ asset('admin/images/big/img6.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $key[0]->nama_film }}</h5>
                    <p class="card-text">{{ $key[0]->deskripsi_film }}</p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection