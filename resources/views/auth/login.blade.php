@extends('layouts.app')
@section('content')

<div class="container-fluid">
  <div class="row min-vh-100 flex-center g-0">
    <div class="col-lg-8 col-xxl-5 py-3 position-relative"><img class="bg-auth-circle-shape" src="../../../assets/img/icons/spot-illustrations/bg-shape.png" alt="" width="250"><img class="bg-auth-circle-shape-2" src="../../../assets/img/icons/spot-illustrations/shape-1.png" alt="" width="150">
      <div class="card overflow-hidden z-index-1">
        <div class="card-body p-0">
          <div class="row g-0 h-100">
            <div class="col-md-5 text-center bg-card-gradient">
              <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                <div class="bg-holder bg-auth-card-shape" style="background-image:url(../../../assets/img/icons/spot-illustrations/half-circle.png);"></div>
                <!--/.bg-holder-->
                <div class="z-index-1 position-relative"><a class="link-light mb-4 font-sans-serif fs-4 d-inline-block fw-bolder" href="../../../index.html">Sample Title</a>
                  <p class="opacity-75 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ipsum nostrum blanditiis veritatis aliquam a laborum quasi quas, qui fugiat, quam quo modi odit! Deleniti.</p>
                </div>
              </div>
              <div class="mt-3 mb-4 mt-md-4 mb-md-5 light">
                <p class="text-white">Don't have an account?<br><a class="text-decoration-underline link-light" href="{{ route('register') }}">Get started!</a></p>
                <p class="mb-0 mt-4 mt-md-5 fs--1 fw-semi-bold text-white opacity-75">Read our <a class="text-decoration-underline text-white" href="#!">terms</a> and <a class="text-decoration-underline text-white" href="#!">conditions </a></p>
              </div>
            </div>
            <div class="col-md-7 d-flex flex-center">
              <div class="p-4 p-md-5 flex-grow-1">
                <div class="row flex-between-center">
                  <div class="col-auto">
                    <h3>Account Login</h3>
                  </div>
                </div>

                <form method="post" action="{{ route('login') }}">
                  @csrf

                  <div class="mb-3">
                    <label class="form-label" for="card-email">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"/>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="card-password">Password</label>
                    <input type="password" class="form-control" class="form-control @error('password') is-invalid @enderror" id="card-password"  name="password" value="{{ old('password') }}" />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="row flex-between-center">
                    <div class="col-auto">
                      <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="card-checkbox" checked="checked" /><label class="form-check-label mb-0" for="card-checkbox">Remember me</label></div>
                    </div>
                    <div class="col-auto"><a class="fs--1" href="../../../pages/authentication/card/forgot-password.html">Forgot Password?</a></div>
                  </div>

                  <div class="mb-3">
                    <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Log in</button>
                  </div>

                </form>
                <div class="position-relative mt-4">
                  <hr class="bg-300" />
                  <div class="divider-content-center">or log in with</div>
                </div>
                <div class="row g-2 mt-2">
                  <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                  <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- <div class="container mt-5">
    <div class="row py-5">
      <div class="col-lg-4 col-md-8 col-12 mx-auto">
        <div class="card z-index-0 fadeIn3 fadeInBottom">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-info shadow-info border-radius-lg py-3 pe-1">
              <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
              <div class="row mt-3">
                <div class="col-2 text-center ms-auto">
                  <a class="btn btn-link px-3" href="javascript:;">
                    <i class="fa fa-facebook text-white text-lg"></i>
                  </a>
                </div>
                <div class="col-2 text-center px-1">
                  <a class="btn btn-link px-3" href="javascript:;">
                    <i class="fa fa-github text-white text-lg"></i>
                  </a>
                </div>
                <div class="col-2 text-center me-auto">
                  <a class="btn btn-link px-3" href="javascript:;">
                    <i class="fa fa-google text-white text-lg"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form role="form" class="text-start" method="post" action="{{ route('login') }}">
                @csrf
                @if (session('message'))
                <center>
                  <div class="alert alert-info alert-dismissible fade show w-50" role="alert">
                      {{ session('message') }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                </center>
                @endif
              <div class="input-group input-group-outline my-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" >
                @error('password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-check form-switch d-flex align-items-center mb-3">
                <input class="form-check-input" type="checkbox" id="rememberMe">
                <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Sign in</button>
              </div>
              <p class="mt-4 text-sm text-center">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-info text-gradient font-weight-bold">Sign up</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
@endsection
