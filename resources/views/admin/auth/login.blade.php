@extends('admin.layouts.plain')

@section('content')
<p class="login-eyebrow">Cure<span>Desk</span> workspace</p>
<h1>Welcome back</h1>
<p class="account-subtitle">Sign in to continue to your dashboard</p>
@if (session('login_error'))
<x-alerts.danger :error="session('login_error')" />
@endif
<!-- Form -->
<form action="{{route('login')}}" method="post">
	@csrf
	<div class="form-group">
		<label for="login-email">Email address</label>
		<input id="login-email" class="form-control" name="email" type="email" placeholder="you@example.com" autocomplete="email">
	</div>
	<div class="form-group">
		<label for="login-password">Password</label>
		<input id="login-password" class="form-control" name="password" type="password" placeholder="Enter your password" autocomplete="current-password">
	</div>
	<div class="form-group">
		<button class="btn btn-primary btn-block" type="submit">Login</button>
	</div>
</form>
<!-- /Form -->

<div class="text-center forgotpass"><a href="{{route('password.request')}}">Forgot Password?</a></div>
<div class="text-center dont-have">Don’t have an account? <a href="{{route('register')}}">Register</a></div>
@endsection