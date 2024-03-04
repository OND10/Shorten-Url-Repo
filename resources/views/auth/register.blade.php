@extends('auth.layouts.app')

@section('content')




    <main>
    <!-- section -->
    
    <section class="my-lg-14 my-8">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
            <!-- img -->
            <img src="../assets/images/svg-graphics/signup-g.svg" alt="" class="img-fluid">
          </div>
          <!-- col -->
          <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
            <div class="mb-lg-9 mb-5">
              <p>Welcome to ShotenUrl! SignUp to get started.</p>
            </div>
            <!-- form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf
              <div class="row g-3">
                <!-- col -->
                <div class="col">
                    <input placeholder="Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <input  placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <input placeholder="ConfirmationPassword" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            
                </div>
                <!-- btn -->
                <div class="col-12 d-grid"> <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    </main>

</body></html>

@endsection
