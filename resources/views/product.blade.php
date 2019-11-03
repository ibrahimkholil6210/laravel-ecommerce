<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    @include('partials.style')

    <title>Product::E-commerce</title>
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

    {{-- Product --}}

    <div class="product-container">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2><i class="fa fa-shopping-bag"></i> Product</h2>
          </div>
        </div>
        <div class="row">
          @foreach($product as $product)
          <div class="col-3">
            <div class="card">
              <a href="#">
                @foreach($product->image as $image)
                <img src="{{ asset('product/'.$image->product_images) }}" class="card-img-top" alt="...">
                @endforeach
                <div class="card-body">
                  <h5 class="card-title">{{ $product->product_name }}</h5>
                  <span style="top: 8px; position: relative;"><b>৳{{ $product->product_price }}</b></span><span><a href="demo" class="btn btn-warning pull-right"><i class="fa fa-shopping-cart"></i></a></span>
                </div>
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>


    {{-- Product End --}}
    {{-- Footer --}}

    @include('partials.footer')
    {{-- Footer End --}}
  </body>
</html>