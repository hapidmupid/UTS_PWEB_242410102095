@extends('layouts.app')

@section('content')
<h3 class="fw-bold mb-3">Selamat datang, {{ $username ?? 'User' }}</h3>

<div class="row g-4">
  @foreach ($products as $item)
  <div class="col-md-3">
    <div class="card shadow-sm h-100">
      <img src="{{ $item['image'] }}" class="card-img-top" alt="{{ $item['name'] }}">
      <div class="card-body text-center">
        <h5 class="card-title">{{ $item['name'] }}</h5>
        <p class="text-danger fw-bold mb-3">Rp {{ number_format($item['price'], 0, ',', '.') }}</p>
        <button class="btn btn-outline-danger btn-sm w-100">Order Now</button>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection