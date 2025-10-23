@extends('layouts.guest')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Donutlicious</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(120deg, #f8f9fa, #e9ecef);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 20px;
    }

    .login-container {
      width: 1000px;
      max-width: 100%;
      height: 500px;
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      overflow: hidden;
      display: flex;
      margin: auto;
    }

    .login-image {
      flex: 1;
      background: url('https://i.pinimg.com/736x/09/eb/0f/09eb0f4ff0a8d54cba457da2f1050860.jpg') center/cover no-repeat;
      color: white;
      display: flex;
      align-items: flex-end;
      padding: 40px;
      border-top-left-radius: 20px;
      border-bottom-left-radius: 20px;
    }

    .login-image h2 {
      font-size: 1.5rem;
      font-weight: 600;
    }

    .login-form {
      flex: 1;
      padding: 60px 50px;
    }

    .login-form h3 {
      font-weight: 700;
      margin-bottom: 10px;
    }

    .login-form p {
      color: #777;
      font-size: 14px;
      margin-bottom: 30px;
    }

    .form-control {
      border-radius: 10px;
      padding: 10px 15px;
    }

    .btn-login {
      background: #F9AFBC;
      color: #fff;
      font-weight: 600;
      border-radius: 10px;
      padding: 10px;
      width: 100%;
      transition: 0.3s;
    }

    .btn-login:hover {
      background: #D46F81;
    }

    @media (max-width: 768px) {
      .login-container {
        flex-direction: column;
      }

      .login-image {
        height: 250px;
        border-radius: 0;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
      }

      .login-form {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="login-image">
      <div>
<h2>Dapatkan donat lezatmu hari ini!</h2>
<p>Temukan donat terenak di kota ini.</p>
      </div>
    </div>
    <div class="login-form">
      <h3>Welcome Back</h3>
      <p>Login to continue to your donut dashboard</p>

      @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
      @endif

      <form method="POST" action="{{ route('doLogin') }}">
        @csrf
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="btn btn-login">Login</button>
      </form>
    </div>
  </div>
</body>
</html>
@endsection
