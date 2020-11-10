@extends('head')
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>Admin</b>LOGIN</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <div class="input-group mb-3">
          <input type="username" class="form-control" placeholder="Username" name="username" id="username">
          <div class="input-group-append input-group-text">
              <span class="fas fa-user"></span>
          </div>
          @error('username')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append input-group-text">
              <span class="fas fa-lock"></span>
          </div>
        </div>
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>