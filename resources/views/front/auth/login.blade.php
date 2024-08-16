@extends('front.layouts.guest')

@section('content')
<section class="login">
    <div class="container">
        <div class="title">
            <h2>Login <span class="alt-text">Account</span></h2>
        </div>
        <div>

        </div>
        <div class="flex tab-cards">
            <div>
                @if (session()->has('error'))
                <div class="alert alert-success error">
                    {{ session('error') }}
                </div>
                @endif
            </div>
            <form action="{{ route('login.post') }}" class="login-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="inline">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="adv-input">
                            <i class="fa fa-envelope"></i><input type="email" id="email" name="email" class="form-input  @error('email') is-invalid @enderror" placeholder="Email">
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="inline">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="adv-input">
                            <i class="fa fa-eye-slash"></i><input type="password" id="password" name="password" class="form-input @error('password') is-invalid @enderror" placeholder="Password">
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group checkbox inline">
                    <label>
                        <input type="checkbox" name="remember" value="1" class="form-input ">Remember Me
                    </label>
                    <a href="#">Forget Password?</a>
                </div>
                <div class="form-group form-submit">
                    <input type="submit" class="button" value="Login">
                </div>
                <p class="inline-text">Don’t have an account? <a href="{{ route('register') }}">Sign Up</a> Here</p>
                <p class="inline-text"><a href="#" class="google-btns"><img src="{{ asset('assets/images/google.png') }}">Continue with Google</a></p>
            </form>
        </div>
    </div>
</section>
@endsection
