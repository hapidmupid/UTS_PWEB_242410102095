@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 40px;">
  <!-- Info Cards -->
  <div class="row mb-4">
    <div class="col-md-3">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <p class="text-muted mb-0">Total Produk</p>
              <h4 class="fw-bold mb-0">24</h4>
            </div>
            <i class="fas fa-box fa-2x" style="color: #F9AFBC;"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <p class="text-muted mb-0">Produk Terjual</p>
              <h4 class="fw-bold mb-0">156</h4>
            </div>
            <i class="fas fa-shopping-cart fa-2x" style="color: #F9AFBC;"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <p class="text-muted mb-0">Pelanggan</p>
              <h4 class="fw-bold mb-0">45</h4>
            </div>
            <i class="fas fa-users fa-2x" style="color: #F9AFBC;"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <p class="text-muted mb-0">Pendapatan</p>
              <h4 class="fw-bold mb-0">Rp 2.5M</h4>
            </div>
            <i class="fas fa-money-bill-wave fa-2x" style="color: #F9AFBC;"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card shadow-sm">
    <div class="card-body">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold mb-0">Pengelolaan Produk Donat</h3>
        <button class="btn btn-sm" style="background-color: #F9AFBC; color: white;">
          <i class="fas fa-plus"></i> Tambah Produk
        </button>
      </div>

      <div class="row mb-4">
        <div class="col-md-4">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari produk...">
            <button class="btn" style="background-color: #F9AFBC; color: white;">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table">
          <thead style="background-color: #FFF5F7;">
            <tr>
              <th scope="col" class="text-muted">Nama Donat</th>
              <th scope="col" class="text-muted">Harga</th>
              <th scope="col" class="text-muted">Stok</th>
              <th scope="col" class="text-muted">Status</th>
              <th scope="col" class="text-muted">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $p)
            <tr>
              <td>{{ $p['nama'] }}</td>
              <td>Rp {{ number_format($p['harga'], 0, ',', '.') }}</td>
              <td>{{ $p['stok'] }}</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
              <td>
                <button class="btn btn-sm text-white" style="background-color: #3B82F6;">
                  <i class="fas fa-edit"></i> Edit
                </button>
                <button class="btn btn-sm text-white" style="background-color: #EF4444;">
                  <i class="fas fa-trash"></i> Delete
                </button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection