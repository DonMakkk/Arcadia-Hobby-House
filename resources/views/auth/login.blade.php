@extends('auth.authentication')
@section('main')
   <!-- ================= for log in ================= -->
<div class="split-container">

  <!-- LEFT SIDE -->
  <div class="left-panel">
    <img src="{{ asset('images/logo.png') }}?v=2" class="logo-login">
    <div class="left-content">
      <h2>Arcadia Hobby House</h2>
      <h1>Where Every<br>Hobby Begins</h1>
      <p>
        Welcome to Arcadia Hobby House — your destination for board games,
        collectibles, LEGO, and creative hobbies.
      </p>
      <ul>
        <li><i class="bi bi-check-circle-fill"></i> Discover trending hobbies</li>
        <li><i class="bi bi-check-circle-fill"></i> Explore collections</li>
        <li><i class="bi bi-check-circle-fill"></i> Join hobby communities</li>
      </ul>
    </div>
  </div>

  <!-- RIGHT SIDE (LOGIN FORM) -->
  <div class="right-panel">
    <div class="form-box">
      <div class="text-center mb-4">
        <h3 class="mt-2">Welcome Back!</h3>
        <p class="text-muted small">Sign in to your account</p>
      </div>
      <div class="card login-card p-4">
@if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="loginForm" method="POST" action="{{route('login.submit')}}">
          @csrf
          <label class="fw-semibold">Email Address</label>
          <input id="email" class="form-control input-custom mb-3" placeholder="you@example.com" name="email" value="{{ old('email') }}">
          <div class="d-flex justify-content-between">
            <label class="fw-semibold" >Password</label>
            <a href="forgotpassword.html" class="text-primary fw-semibold">Forgot Password?</a>
          </div>
          <div class="input-group mb-3">
            <input id="password" type="password" class="form-control input-custom" name="password">
            <button type="button" class="btn btn-outline-secondary" onclick="togglePassword()">👁</button>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox">
            <label>Remember me</label>
          </div>
          <button class="btn btn-primary w-100" type="submit">Sign In</button>
          <p class="text-center mt-3 small">
            Don't have an account?
            {{-- SEND ROUTE --}}
            <a href="{{route('signup')}}" class="text-primary fw-semibold">Create one</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
function togglePassword() {
  const pw = document.getElementById("password");
  pw.type = pw.type === "password" ? "text" : "password";
}
</script>
@endsection