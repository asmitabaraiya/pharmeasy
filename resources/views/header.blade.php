@php 

  $route = Route::current()->getName();

@endphp



@include('login_model')
@include('singin_model')
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pharmative &mdash; Colorlib Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets')}}/fonts/icomoon/style.css">

  <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('assets')}}/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.css">
  <link rel="stylesheet" href="{{asset('assets')}}/css/jquery-ui.css">
  <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css">


  <link rel="stylesheet" href="{{asset('assets')}}/css/aos.css">

  <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
  <style>
      .newClass{
        color: #75b239;
        position: relative;
      }
  </style>

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="{{route('home')}}" class="js-logo-clone"><strong class="text-primary">Pharma</strong>tive</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="{{ ($route == 'home') ? 'active' : '' }}" ><a href="{{route('home')}}">Home</a></li> 
                <li  class="{{ ($route == 'shop') ? 'active' : '' }}" ><a href="{{route('shop')}}">Store</a></li>
                <li class="has-children">
                  <a href="#">Products</a>
                  <ul class="dropdown">
                    <li><a href="#">Supplements</a></li>
                    <li class="has-children">
                      <a href="#">Vitamins</a>
                      <ul class="dropdown">
                        <li><a href="#">Supplements</a></li>
                        <li><a href="#">Vitamins</a></li>
                        <li><a href="#">Diet &amp; Nutrition</a></li>
                        <li><a href="#">Tea &amp; Coffee</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Diet &amp; Nutrition</a></li>
                    <li><a href="#">Tea &amp; Coffee</a></li>
                    
                  </ul>
                </li>
                <li  class="{{ ($route == 'about') ? 'active' : '' }}" ><a href="{{route('about')}}">About</a></li>
                <li  class="{{ ($route == 'contact') ? 'active' : '' }}" ><a href="{{route('contact')}}">Contact</a></li>
                <li>
                     <a href="" data-bs-toggle="modal" data-bs-target="#StaticBackdrop">
                      Login
                    </a>
                </li>
                <li>      
                    <a onclick="myFunction()" href="" id="signlink" data-bs-toggle="modal" data-bs-target="#singinStaticBackdrop">
                      Sing in
                    </a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="{{route('cart')}}" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
function myFunction() {
  document.getElementById("signlink").color = "red";
}
</script>

