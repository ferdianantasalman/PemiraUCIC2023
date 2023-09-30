@extends('layouts.main')

@section('content')

  <!-- Start Breadcrumbs Section -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
          <div class="breadcrumbs-content">
            <h1 class="page-title">Login</h1>
            <ul class="breadcrumb-nav">
              <li><a href="/">Home</a></li>
              <li>Login</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumbs Section  -->


  <!-- Start Login Section -->
  <div class="account-login section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
          <form class="card login-form inner-content" method="post">
            <div class="card-body">
              <div class="title">
                <h3>Mahasiswa</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
              </div>
              <div class="input-head">
                <div class="form-group input-group">
                  <label><i class="lni lni-user"></i></label>
                  <input class="form-control" type="text" id="reg-email" placeholder="Enter your username" required />
                </div>
                <div class="form-group input-group">
                  <label><i class="lni lni-lock-alt"></i></label>
                  <input class="form-control" type="password" id="reg-pass" placeholder="Enter your password" required />
                </div>
              </div>
              <div class="d-flex flex-wrap justify-content-between bottom-content">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1" />
                  <label class="form-check-label remember-me">Remember me</label>
                </div>
                <a class="lost-pass" href="reset-password.html">Forgot password?</a>
              </div>
              <div class="button">
                <button class="btn" type="submit">Login</button>
              </div>

              <h4 class="create-account">Don't have an account? <a href="signup.html">Sign Up Here</a></h4>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Login Section  -->
@endsection