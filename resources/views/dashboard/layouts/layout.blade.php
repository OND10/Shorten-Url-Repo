<html lang="en"><head>

    <title>ShortUrl</title>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="FreshCart is a beautiful eCommerce HTML template specially designed for multipurpose shops &amp; online stores selling products. Most Loved by Developers to build a store website easily.">
  <meta content="Codescandy" name="author">
  
  
  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico">
  
  <link rel="stylesheet" href="{{asset('dashborad')}}/assets/css/theme.min.css">
</head>
  
  <body>
  
  <header>
    <div class="bg-light py-1">
      <div class="container">
        <div class="row">
          
          <div class="col-6 text-end d-none d-md-block">
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-light py-lg-4 pt-3 px-0 pb-0">
      <div class="container">
        <div class="row w-100 align-items-center g-lg-2 g-0">
          <div class="col-xxl-2 col-lg-3">
            <a class="navbar-brand float-lg-start bold" href="#">
              ShortUrl
            </a>
            <div class="d-flex justify-content-between w-100 d-lg-none">
              <div class="d-flex align-items-center lh-1">
  
                <div class="list-inline me-2">
                  <div class="list-inline-item">
  
                    <a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                      </svg>
                    </a>
                  </div>
                  <div class="list-inline-item">
  
                    <a class="text-muted position-relative " data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                      href="#offcanvasExample" role="button" aria-controls="offcanvasRight">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                      </svg>
                      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                        1
                        <span class="visually-hidden">unread messages</span>
                      </span>
                    </a>
                  </div>
  
                </div>
                <!-- Button -->
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas"
                  data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="icon-bar top-bar mt-0"></span>
                  <span class="icon-bar middle-bar"></span>
                  <span class="icon-bar bottom-bar"></span>
                </button>
  
              </div>
            </div>
  
          </div>
          <div class="col-xxl-6 col-lg-5 d-none d-lg-block">
            <form action="#">
              <div class="input-group ">
                <input class="form-control rounded-3" type="search" value="Search for products" id="searchInput">
                <span class="input-group-append">
                  <button class="btn bg-white border border-start-0 ms-n10" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-search">
                      <circle cx="11" cy="11" r="8"></circle>
                      <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                  </button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>
  
  <div class="border-bottom pb-lg-4 pb-3">
    <nav class="navbar navbar-expand-lg navbar-light navbar-default pt-0 pb-0">
      <div class="container px-0 px-md-3">
  
        <div class="dropdown me-3 d-none d-lg-block">
          <button class="btn btn-primary px-6 " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false">
            <span class="me-1">
              </span> <a style="color:white" href="{{route('dashboard.urls.index')}}">All Urls</a> 
          </button>
        </div>
  
        <div class="offcanvas offcanvas-start p-4 p-lg-0" id="navbar-default">
  
          <div class="d-flex justify-content-between align-items-center mb-2 d-block d-lg-none">
            <a href="./index.html"><img src="./assets/images/logo/freshcart-logo.svg"
                alt="eCommerce HTML Template"></a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
  
          <div class="d-block d-lg-none mb-2 pt-2">
            <a class="btn btn-primary w-100 d-flex justify-content-center align-items-center" data-bs-toggle="collapse"
              href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              <span class="me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                  fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-grid">
                  <rect x="3" y="3" width="7" height="7"></rect>
                  <rect x="14" y="3" width="7" height="7"></rect>
                  <rect x="14" y="14" width="7" height="7"></rect>
                  <rect x="3" y="14" width="7" height="7"></rect>
                </svg></span> All Departments
            </a>
            <div class="collapse mt-2" id="collapseExample">
              <div class="card card-body">
                
              </div>
            </div>
          </div>
  
          <div class="d-lg-none d-block mb-3">
            <button type="button" class="btn  btn-outline-gray-400 text-muted w-100 " data-bs-toggle="modal"
              data-bs-target="#locationModal">
              <i class="feather-icon icon-map-pin me-2"></i>Pick Location
            </button>
          </div>
          <div class="d-none d-lg-block">
            <ul class="navbar-nav ">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Account
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('login')}}">Signin</a></li>
                  <li><a class="dropdown-item" href="{{route('register')}}">Signup</a></li>
                  <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                      @csrf
                      <button class="dropdown-item" type="submit">Signout</button>
                  </form>
                  </li>
                </ul>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{route('docs')}}">
                  Docs
                </a>
              </li>
              <li class="nav-item ">
                
              </li>
            </ul>
          </div>
          <div class="d-block d-lg-none">
            <ul class="navbar-nav ">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Home
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="./index.html">Home 1</a></li>
                  <li><a class="dropdown-item" href="./pages/index-2.html">Home 2</a></li>
                  <li><a class="dropdown-item" href="./pages/index-3.html">Home 3</a></li>
  
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Shop
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="./pages/shop-grid.html">Shop Grid - Filter</a></li>
                  <li><a class="dropdown-item" href="./pages/shop-grid-3-column.html">Shop Grid - 3 column</a>
                  </li>
                  <li><a class="dropdown-item" href="./pages/shop-list.html">Shop List - Filter</a></li>
                  <li><a class="dropdown-item" href="./pages/shop-filter.html">Shop - Filter</a></li>
                  <li><a class="dropdown-item" href="./pages/shop-fullwidth.html">Shop Wide</a></li>
                  <li><a class="dropdown-item" href="./pages/shop-single.html">Shop Single</a></li>
                  <li><a class="dropdown-item" href="./pages/shop-wishlist.html">Shop Wishlist</a></li>
                  <li><a class="dropdown-item" href="./pages/shop-cart.html">Shop Cart</a></li>
                  <li><a class="dropdown-item" href="./pages/shop-checkout.html">Shop Checkout</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Stores
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="./pages/store-list.html">Store List</a></li>
                  <li><a class="dropdown-item" href="./pages/store-grid.html">Store Grid</a></li>
                  <li><a class="dropdown-item" href="./pages/store-single.html">Store Single</a></li>
  
                </ul>
              </li>
  
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Mega Menu
                </a>
                <ul class="dropdown-menu">
  
                  <li class="dropdown-submenu ">
                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                      Dairy, Bread & Eggs
                    </a>
                    <ul class="dropdown-menu">
  
  
                      <li><a class="dropdown-item" href="./pages/shop-grid.html">Milk Drinks</a></li>
                      <li><a class="dropdown-item" href="./pages/shop-grid.html">Curd & Yogurt</a></li>
                      <li> <a class="dropdown-item" href="./pages/shop-grid.html">Eggs</a></li>
                      <li><a class="dropdown-item" href="./pages/shop-grid.html">Buns & Bakery</a></li>
                      <li><a class="dropdown-item" href="./pages/shop-grid.html">Cheese</a></li>
                      <li> <a class="dropdown-item" href="./pages/shop-grid.html">Condensed Milk</a></li>
                      <li><a class="dropdown-item" href="./pages/shop-grid.html">Dairy Products</a></li>
  
  
                    </ul>
                  </li>
                  <li class="dropdown-submenu ">
                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                      Vegetables & Fruits
                    </a>
                    <ul class="dropdown-menu">
  
  
                      <li><a class="dropdown-item" href="./pages/shop-grid.html">Vegetables</a></li>
                      <li><a class="dropdown-item" href="./pages/shop-grid.html">Fruits</a></li>
                      <li> <a class="dropdown-item" href="./pages/shop-grid.html">Exotics & Premium</a></li>
                      <li><a class="dropdown-item" href="./pages/shop-grid.html">Fresh Sprouts</a></li>
                      <li><a class="dropdown-item" href="./pages/shop-grid.html">Frozen Veg</a></li>
  
  
  
                    </ul>
                  </li>
                  <li class="dropdown-submenu ">
                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                      Cold Drinks & Juices
                    </a>
                    <ul class="dropdown-menu">
  
  
                      <li><a class="dropdown-item" href="./pages/shop-grid.html">Soft Drinks</a></li>
                      <li><a class="dropdown-item" href="./pages/shop-grid.html">Fruit Juices</a></li>
                      <li> <a class="dropdown-item" href="./pages/shop-grid.html">Coldpress</a></li>
                      <li><a class="dropdown-item" href="./pages/shop-grid.html">Soda & Mixers</a></li>
                      <li><a class="dropdown-item" href="./pages/shop-grid.html">Milk Drinks</a></li>
                      <li><a class="dropdown-item" href="./pages/shop-grid.html">Health Drinks</a></li>
                      <li><a class="dropdown-item" href="./pages/shop-grid.html">Herbal Drinks</a></li>
  
  
  
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Pages
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="./pages/blog.html">Blog</a></li>
                  <li><a class="dropdown-item" href="./pages/blog-single.html">Blog Single</a></li>
                  <li><a class="dropdown-item" href="./pages/blog-category.html">Blog Category</a></li>
                  <li><a class="dropdown-item" href="./pages/about.html">About us</a></li>
                  <li><a class="dropdown-item" href="./pages/404error.html">404 Error</a></li>
                  <li><a class="dropdown-item" href="./pages/contact.html">Contact</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Account
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="./pages/signin.html">Sign in</a></li>
                  <li><a class="dropdown-item" href="./pages/signup.html">Signup</a></li>
                  <li><a class="dropdown-item" href="./pages/forgot-password.html">Forgot Password</a></li>
                  <li class="dropdown-submenu dropend">
                    <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                      My Account
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="./pages/account-orders.html">Orders</a></li>
                      <li><a class="dropdown-item" href="./pages/account-settings.html">Settings</a></li>
                      <li><a class="dropdown-item" href="./pages/account-address.html">Address</a></li>
                      <li><a class="dropdown-item" href="./pages/account-payment-method.html">Payment Method</a>
                      </li>
                      <li><a class="dropdown-item" href="./pages/account-notification.html">Notification</a></li>
  
  
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="./docs/index.html">
                  Docs
                </a>
  
              </li>
            </ul>
          </div>
  
  
        </div>
      </div>
  
    </nav>
  </div>


    <!-- Javascript-->
    <!-- Libs JS -->
  <!-- <script src="./assets/libs/jquery/dist/jquery.min.js"></script> -->
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="./assets/libs/jquery-countdown/dist/jquery.countdown.min.js"></script> -->
  <!-- <script src="./assets/libs/slick-carousel/slick/slick.min.js"></script>
  <script src="./assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="./assets/libs/nouislider/dist/nouislider.min.js"></script>
  <script src="./assets/libs/wnumb/wNumb.min.js"></script>
  <script src="./assets/libs/rater-js/index.js"></script>
  <script src="./assets/libs/prismjs/prism.js"></script>
  <script src="./assets/libs/prismjs/components/prism-scss.min.js"></script>
  <script src="./assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
  <script src="./assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
  <script src="./assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
  <script src="./assets/libs/dropzone/dist/min/dropzone.min.js"></script>
  <script src="./assets/libs/flatpickr/dist/flatpickr.min.js"></script>
  <script src="./assets/libs/inputmask/dist/jquery.inputmask.min.js"></script> -->
  <!-- Theme JS -->
  <!-- <script src="./assets/js/theme.min.js"></script> -->
  
  
  
  
  
  
  </body></html>