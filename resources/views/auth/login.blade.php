@extends('auth.authentication')
@section('main')
     <div>
    <div class="container-fluid p-0">
    <div class="d-flex rounded-5 border border-gray bg-white text-center overflow-hidden p-1 w-lg-25 mx-auto mw-100">
        <a class="text-decoration-none text-black btn rounded-5 bg-light p-1 flex-grow-1" href="{{route('login')}}"><b>Login</b></a>
        <a class="text-decoration-none text-black btn rounded-5 p-1 flex-grow-1" href="{{route('signup')}}"><b>Sign Up</b></a>
    </div>
</div>
        <div class="signup card p-5 mt-3">
            <h3>Login to Your Account</h3>
            <p class="text-secondary">Enter your credentials to access your account</p>
            <form action="/login" action="POST" class="form d-flex flex-column gap-2 bg-white">
                @csrf
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" required> 
                <input type="submit" class="mt-3 text-light btn w-100 bg-primary" value="Login">
            </form>
        </div>
        </div>
@endsection