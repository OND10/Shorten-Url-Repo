<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="FreshCart is a beautiful eCommerce HTML template specially designed for multipurpose shops & online stores selling products. Most Loved by Developers to build a store website easily.">
<meta content="Codescandy" name="author" />


<!-- Favicon icon-->
<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico">
  
  
<!-- Libs CSS -->
<link href="{{asset('dashboard')}}/assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="{{asset('dashboard')}}/assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet">
<link href="{{asset('dashboard')}}/assets/libs/slick-carousel/slick/slick.css" rel="stylesheet">
<link href="{{asset('dashboard')}}/assets/libs/slick-carousel/slick/slick-theme.css" rel="stylesheet">
<link href="{{asset('dashboard')}}/assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">
<link href="{{asset('dashboard')}}/assets/libs/nouislider/dist/nouislider.min.css" rel="stylesheet">
<link href="{{asset('dashboard')}}/assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
<link href="{{asset('dashboard')}}/assets/libs/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
<link href="{{asset('dashboard')}}/assets/libs/prismjs/themes/prism-okaidia.min.css" rel="stylesheet">

<!-- Theme CSS -->
<link rel="stylesheet" href="{{asset('dashborad')}}/assets/css/theme.min.css">
 <title>Documentation</title>

</head>

<body class="bg-white">
  <!-- Main wrapper -->
  @include('dashboard.layouts.layout');
 <main class="docs-main-wrapper">
    <!-- Docs header -->

    <!-- Wrapper  -->
    <div class="docs-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="offset-xxl-2 col-xxl-6 offset-xl-1 col-xl-7 col-md-12 col-sm-12 col-12 ">
            <!-- Content -->
            <div class="docs-content mx-xxl-9">
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="mb-8" id="intro">
                    <h1 class="mb-2 fw-bold display-3">Introduction</h1>
                    <p class="mb-6 lead text-muted">
                      Short-Url app to shorten the length urls to make it more shorter. Expertly crafted components UI kit for
                      building a high-quality website and web apps using web technologies —
                      HTML, CSS, Bootstrap and Blade  — with integrations of the world’s most
                      popular framework <a href="https://laravel.com/" target="_blank" rel="nofollow">Laravel</a>.
                     </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 col-12">
                  <div class="mb-8">
                    <div class="my-6">
                      <div class="alert alert-info" role="alert">
                        Note: I highly recommend to check out The AllUrl<sub>s</sub> abbreviations by OND.
                      </div>
                    </div>
                    </div>
                    <div class="mb-8" id="setting-up">
                      <h2 class="fw-semi-bold">Setting up local development</h2>
                      <p class="mb-0">ShortUrl is built using modern development toolset. Setting up local development Laravel framework, Blade, Elequent ORM &
                        Bootstrap. <a href="environment-setup.html">Check it on Github</a></p>
                    </div>
                    <div class="mb-8" id="customize-theme">
                      <div class="mb-4">
                        <div class="row">
                          <div class="col-lg-6 col-12">
                            <div class="card border shadow-none mb-4 mb-lg-0">
                              <div class="card-body p-6">
                              <div class=" mb-4">
                                <img src="{{asset('dashborad')}}/assets/images/docs/laravel.png" alt="" class="avatar-lg">

                              </div>
                              <h3 class="fw-semi-bold">Working with Eloquent</h3>
                              <p>Working with the Database directly and converting app models to database records which makes it easier to add, update, get and delete. Plus it makes migration</p>
                                <a href="https://laravel.com/docs/10.x/eloquent" class="btn-link">Start with Eloquent</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-12">
                            <div class="card border shadow-none mb-4 mb-lg-0">
                              <div class="card-body p-6">
                              <div class=" mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="60" fill="gold" class="bi bi-file-lock2-fill" viewBox="0 0 16 16">
                                  <path d="M7 6a1 1 0 0 1 2 0v1H7z"/>
                                  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0"/>
                                </svg>
                              </div>
                              <h3 class="fw-semi-bold">Working with Laravel/Ui Auth
                              </h3>
                              <p>Simply attach the authentication and authorization to your app. You can signin, signup, reset password and email as well as you can integrate it with which one of Js frameworks react or view.</p>
                                <a href="https://github.com/laravel/ui" class="btn-link">Start with Auth Ui</a>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12  d-none d-xl-block position-fixed end-0">
            <!-- Sidebar nav fixed -->
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Scripts -->
  <!-- Libs JS -->
<script src="{{asset('dashboard')}}/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="{{asset('dashboard')}}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('dashboard')}}/assets/libs/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="{{asset('dashboard')}}/assets/libs/slick-carousel/slick/slick.min.js"></script>
<script src="{{asset('dashboard')}}/assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="{{asset('dashboard')}}/assets/libs/nouislider/dist/nouislider.min.js"></script>
<script src="{{asset('dashboard')}}/assets/libs/wnumb/wNumb.min.js"></script>
<script src="{{asset('dashboard')}}/assets/libs/rater-js/index.js"></script>
<script src="{{asset('dashboard')}}/assets/libs/prismjs/prism.js"></script>
<script src="{{asset('dashboard')}}/assets/libs/prismjs/components/prism-scss.min.js"></script>
<script src="{{asset('dashboard')}}/assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
<script src="{{asset('dashboard')}}/assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
<script src="{{asset('dashboard')}}/assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
<script src="{{asset('dashboard')}}/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="{{asset('dashboard')}}/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
<script src="{{asset('dashboard')}}/assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
<!-- Theme JS -->
<script src="{{asset('dashboard')}}/assets/js/theme.min.js"></script>
</body>

</html>