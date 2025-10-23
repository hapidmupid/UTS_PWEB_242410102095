@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:40px;">
  <div class="card shadow-sm">
    <div class="card-body">
      <div class="row">

        <div class="col-md-4 border-end d-flex flex-column align-items-center py-4">
          <img src="https://i.pinimg.com/736x/6e/a8/02/6ea802b32f53cda0bf7542059d174481.jpg"
               class="rounded-circle mb-3"
               alt="Profile"
               style="width:140px;height:140px;object-fit:cover;">
          <h4 class="mb-0">{{ $username }}</h4>
          <p class="text-muted small mb-3">contoh123@gmail.com</p>
        </div>

        <div class="col-md-8 py-4">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">Profile</h5>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label small text-muted">Username</label>
              <div class="form-control-plaintext">{{ $username }}</div>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label small text-muted">Full Name</label>
              <div class="form-control-plaintext">Nama Lengkap</div>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label small text-muted">Email</label>
              <div class="form-control-plaintext">contoh123@gmail.com</div>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label small text-muted">Phone</label>
              <div class="form-control-plaintext">+62 812-3456-7890</div>
            </div>
          </div>

          <hr>

          <h6 class="mb-2">Location</h6>
          <div class="mb-3">
            <div class="form-control-plaintext">Jakarta, Indonesia</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection