@extends('auth.authentication')
@section('main')
   <main class="main-content">
  <div class="container d-flex justify-content-center">
    <div class="register-wrapper">

      <!-- HEADER -->
      <div class="text-center mb-4">
        <img src="https://copilot.microsoft.com/th/id/BCO.31897df1-b7a9-45f9-9065-898d6b504fcd.png" class="logo-login">
        <h3 class="fw-bold">Join Arcadia!</h3>
        <p class="text-muted small">Create your free account</p>
      </div>

      <!-- CARD -->
      <div class="card register-card p-4">
        <form id="registerForm" method="POST" action="{{route('register')}}">
          @csrf
          <!-- NAME -->
          <div class="row g-2">
            <div class="col-6">
              <label class="form-label">First Name</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" id="firstName" class="form-control input-custom" placeholder="John" name="first_name" required>
              </div>
              <small class="text-danger" id="errorFirst"></small>
            </div>

            <div class="col-6">
              <label class="form-label">Last Name</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" id="lastName" class="form-control input-custom" placeholder="Doe" name="last_name" required>
              </div>
              <small class="text-danger" id="errorLast"></small>
            </div>
          </div>

          <!-- EMAIL -->
          <div class="mt-3">
            <label class="form-label">Email</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              <input type="email" id="email" class="form-control input-custom" placeholder="you@example.com" name="email" required>
            </div>
            <small class="text-danger" id="errorEmail"></small>
          </div>

          <!-- PHONE -->
          <div class="mt-3">
            <label class="form-label">Phone (optional)</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-phone"></i></span>
              <input type="text" id="phone" class="form-control input-custom" placeholder="(555) 000-0000" name="phone_num" required>
            </div>
            <small class="text-danger" id="errorPhone"></small>
          </div>

          <!-- PASSWORD -->
          <div class="mt-3">
            <label class="form-label">Password</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
              <input type="password" id="password" class="form-control input-custom" placeholder="At least 6 characters" name="password" required>
              <button type="button" class="btn eye-btn" onclick="togglePassword()">
                <i class="fas fa-eye"></i>
              </button>
            </div>
            <small class="text-danger" id="errorPassword"></small>
          </div>

          <!-- CONFIRM PASSWORD -->
          <div class="mt-3">
            <label class="form-label">Confirm Password</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
              <input type="password" id="confirmPassword" class="form-control input-custom" placeholder="At least 6 characters" name="password_confirmation" required>
              <button type="button" class="btn eye-btn" onclick="toggleConfirmPassword()">
                <i class="fas fa-eye"></i>
              </button>
            </div>
            <small class="text-danger" id="errorConfirm"></small>
          </div>

          <!-- TERMS -->
          <div class="form-check mt-3">
            <input class="form-check-input" type="checkbox" id="agree">
            <label class="form-check-label small">
              I agree to
              <a href="#">Terms</a> and
              <a href="#">Privacy</a>
            </label>
          </div>
          <small class="text-danger" id="errorAgree"></small>

          <!-- BUTTON -->
          <button class="btn register-btn w-100 mt-3" id="registerBtn" type="submit">
            Create Account
          </button>

          <!-- LINK -->
          <p class="text-center small mt-3">
            Already have an account?
            <a href="{{route('login')}}" class="fw-semibold">Sign In</a>
          </p>

        </form>
      </div>

    </div>
  </div>
</main>
<script>
  //register
function togglePassword() {
  const pw = document.getElementById("password");
  pw.type = pw.type === "password" ? "text" : "password";
}
function toggleConfirmPassword() {
  const pw = document.getElementById("confirmPassword");
  pw.type = pw.type === "password" ? "text" : "password";
}

// Phone validation - accept only numeric values
document.getElementById("phone").addEventListener("input", function(e) {
  this.value = this.value.replace(/[^0-9]/g, "");
});

document.getElementById("registerForm").addEventListener("submit", function(){
 

  let valid = true;

  const first = document.getElementById("firstName").value;
  const last = document.getElementById("lastName").value;
  const email = document.getElementById("email").value;
  const phone = document.getElementById("phone").value;
  const pw = document.getElementById("password").value;
  const confirm = document.getElementById("confirmPassword").value;
  const agree = document.getElementById("agree").checked;

  // Reset errors
  document.querySelectorAll(".text-danger").forEach(el => el.textContent = "");

  if(!first){
    document.getElementById("errorFirst").textContent = "First name required";
    valid = false;
  }

  if(!last){
    document.getElementById("errorLast").textContent = "Last name required";
    valid = false;
  }

  if(!email || !email.includes("@")){
    document.getElementById("errorEmail").textContent = "Valid email required";
    valid = false;
  }
  if(phone && !/^\d+$/.test(phone)){
    document.getElementById("errorPhone").textContent = "Phone must contain only numbers";
    valid = false;
  }

  if(pw.length < 6){
    document.getElementById("errorPassword").textContent = "Minimum 6 characters";
    valid = false;
  }

  if(pw !== confirm){
    document.getElementById("errorConfirm").textContent = "Passwords do not match";
    valid = false;
  }

  if(!agree){
    document.getElementById("errorAgree").textContent = "You must agree first";
    valid = false;
  }

  if(!valid) return;

  const btn = document.getElementById("registerBtn");
  btn.textContent = "Creating Account...";
  btn.disabled = true;

});
</script>
@include('components.footer')
@endsection