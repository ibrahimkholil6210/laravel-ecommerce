<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    @include('partials.style')

    <title>E-commerce::Ibrahim</title>
  </head>
  <body>
    {{-- Navigation --}}
    @include('partials.nav')


    {{-- Navigation End --}}

    {{-- Category --}}
    <div class="category">
      <div class="container">
        <div class="gutter">
          <div class="cat-con">
            <div class="card">
              <a href="#">
                <img src="{{ asset('img/2.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Watch</h5>
                </div>
              </a>
            </div>
          </div>
          <div class="cat-con">
            <div class="card">
              <a href="#">
                <img src="{{ asset('img/7.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Watch</h5>
                </div>
              </a>
            </div>
          </div>
          <div class="cat-con">
            <div class="card">
              <a href="#">
                <img src="{{ asset('img/3.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Watch</h5>
                </div>
              </a>
            </div>
          </div>
          <div class="cat-con">
            <div class="card">
              <a href="#">
                <img src="{{ asset('img/4.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Watch</h5>
                </div>
              </a>
            </div>
          </div>
          <div class="cat-con">
            <div class="card">
              <a href="#">
                <img src="{{ asset('img/5.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Watch</h5>
                </div>
              </a>
            </div>
          </div>
          <div class="cat-con">
            <div class="card">
              <a href="#">
                <img src="{{ asset('img/6.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Watch</h5>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- Category End --}}
    
    {{-- Slider --}}
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('img/1.jpeg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('img/1.jpeg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('img/1.jpeg') }}" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- Slider End --}}

    {{-- Product --}}

    <div class="product-container">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2><i class="fa fa-shopping-bag"></i> Featured Product</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            <div class="card">
              <a href="#">
                <img src="{{ asset('img/10.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Watch</h5>
                  <span style="top: 8px; position: relative;"><b>৳500</b></span><span><a href="demo" class="btn btn-warning pull-right"><i class="fa fa-shopping-cart"></i></a></span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-3">
            <div class="card">
              <a href="#">
                <img src="{{ asset('img/10.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Watch</h5>
                  <span style="top: 8px; position: relative;"><b>৳500</b></span><span><a href="demo" class="btn btn-warning pull-right"><i class="fa fa-shopping-cart"></i></a></span>
                </div>
              </a>
            </div>
          </div><div class="col-3">
            <div class="card">
              <a href="#">
                <img src="{{ asset('img/10.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Watch</h5>
                  <span style="top: 8px; position: relative;"><b>৳500</b></span><span><a href="demo" class="btn btn-warning pull-right"><i class="fa fa-shopping-cart"></i></a></span>
                </div>
              </a>
            </div>
          </div><div class="col-3">
            <div class="card">
              <a href="#">
                <img src="{{ asset('img/10.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Power Bank</h5>
                  <span style="top: 8px; position: relative;"><b>৳500</b></span><span><a href="demo" class="btn btn-warning pull-right"><i class="fa fa-shopping-cart"></i></a></span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>


    {{-- Product ENd --}}
    {{-- Footer --}}

    @include('partials.footer')
    {{-- Footer End --}}
  </body>
</html>