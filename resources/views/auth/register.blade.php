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
                  <p class="opacity-75 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ratione aut dolore, sit temporibus sed.</p>
                </div>
              </div>
              <div class="mt-3 mb-4 mt-md-4 mb-md-5 light">
                <p class="pt-3 text-white">Have an account?<br><a class="btn btn-outline-light mt-2 px-4" href="{{ route('login') }}">Log In</a></p>
              </div>
            </div>
            <div class="col-md-7 d-flex flex-center">
              <div class="p-4 p-md-5 flex-grow-1">
                <h3>Register Account</h3> <br>
                <form action="{{ route('register') }}" method="post">
                  @csrf

                  <div class="mb-3">
                    <label class="form-label" for="card-email">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"/>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="card-email">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"/>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="row gx-2">
                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="card-password">Password</label>
                      <input type="password" class="form-control" class="form-control @error('password') is-invalid @enderror" name="password"/>
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="card-password">Confirm Password</label>
                      <input type="password" class="form-control" class="form-control" name="password_confirmation"/>
                    </div>

                  </div>
                  <div class="form-check"><input class="form-check-input" type="checkbox" id="card-register-checkbox" /><label class="form-label" for="card-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label></div>
                  <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button></div>
                </form>
                <div class="position-relative mt-4">
                  <hr class="bg-300" />
                  <div class="divider-content-center">or register with</div>
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

{{-- <div class="container">
    <div class="row py-5">
      <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
        </div>
      </div>
      <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5 py-5">
        <div class="card card-plain" >
          <div class="card-header" style="background: rgb(241, 244, 249) !important">
            <h4 class="font-weight-bolder">Sign Up</h4>
            <p class="mb-0">Enter your email and password to register</p>
          </div>
          <div class="card-body">
            <form role="form" method="POST" action="{{ route('register') }}">
                @csrf

              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required>
              </div>

              <div class="form-check form-check-info text-start ps-0">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                <label class="form-check-label" for="flexCheckDefault">
                  I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                </label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button>
              </div>
            </form>
          </div>
          <div class="card-footer text-center pt-0 px-lg-2 px-1">
            <p class="mb-2 text-sm mx-auto">
              Already have an account?
              <a href="{{ route('login') }}" class="text-primary text-gradient font-weight-bold">Sign in</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
@endsection
