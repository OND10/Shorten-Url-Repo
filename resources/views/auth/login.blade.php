@extends('auth.layouts.app')

@section('content')

{{-- This is from the login-derived --}}

  
     
    <main>
    <!-- section -->
    <section class="my-lg-14 my-8">
      <div class="container">
        <!-- row -->
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
            <!-- img -->
            <img src="../assets/images/svg-graphics/signin-g.svg" alt="" class="img-fluid">
          </div>
          <!-- col -->
          <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
            <div class="mb-lg-9 mb-5">
              <h1 class="mb-1 h2 fw-bold">Sign in to ShortenUrls</h1>
            </div>


            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="row g-3">
                <!-- row -->
  
                <div class="col-12">
                  <!-- input -->
                  <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="col-12">
                  <!-- input -->
                  <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="d-flex justify-content-between">
                  <!-- form check -->
                  
                </div>
                <!-- btn -->
                <div class="col-12 d-grid"> 
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </div>
                <!-- link -->
                <div>Don’t have an account? <a class="btn btn-link" href="{{ route('register') }}"> Sign Up</a></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  
  </main>
  
    <!-- choose one -->
  </body></html>


  {{-- This is the original one of login --}}


@endsection
