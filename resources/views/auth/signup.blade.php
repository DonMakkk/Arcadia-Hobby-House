@extends('auth.authentication')
@section('main')
     <div class="pb-2">
    <div class="container-fluid p-0">
    <div class="d-flex rounded-5 border border-gray bg-white text-center overflow-hidden p-1 w-lg-25 mx-auto mw-100">
        <a class="text-decoration-none text-black btn rounded-5 p-1 flex-grow-1" href="{{route('login')}}"><b>Login</b></a>
        <a class="text-decoration-none text-black btn rounded-5 p-1 flex-grow-1 bg-light" href="{{route('signup')}}"><b>Sign Up</b></a>
    </div>
</div>
     <form action="/" method="POST" class="form d-flex flex-column gap-2 bg-white">
         @csrf
        <div class="signup card p-5  mt-3 d-flex flex-column gap-1">
            <h3>Create New Account</h3>
            <p class="text-secondary">Choose your account type and fill your details</p>
            <p>Account Type</p>
            <div class="d-flex flex-column gap-3">
                <input type="radio" name="account-type" id="user-account" autocomplete="off" checked hidden value="user-account" required>
            <label for="user-account" class="container d-flex flex-column align-items-center justify-content-center card pt-3 AccTypeBtn" >
                <h6>Customer Account</h6>
                <p>Browse and purchase your hobbies</p>
            </label>
              <input type="radio" name="account-type" id="admin-account" autocomplete="off" hidden value="admin-account">
             <label for="admin-account" class="card container d-flex flex-column align-items-center justify-content-center pt-3 AccTypeBtn" >
                <h6>Admin Account</h6>
                <p>Manage products and store</p>
            </label>
</div>
                <label for="username">Username</label>
                <input type="username" class="form-control" name="username" id="username" required>
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" required> 
                <input type="submit" class="mt-3 text-light btn w-100 bg-primary" value="Sign Up">
            </form>
            <script>
                document.addEventListener('DOMContentLoaded', function(){
                    const btns = document.querySelectorAll('.AccTypeBtn');
                    btns.forEach(btn => {
                        btn.addEventListener('click', function(){
                            btns.forEach(element => element.classList.remove('active'));
                             btn.classList.add('active');
                        })
                    });
                })
            </script>
<style>
.AccTypeBtn {
    border: 2px solid #dee2e6;
    transition: all 0.3s ease;
}
.AccTypeBtn:hover {
    border-color: #0d6efd;
}
.AccTypeBtn.active {
    background-color: #0d6efd !important;
    color: white;
    border-color: #0d6efd;
}
</style>
@endsection