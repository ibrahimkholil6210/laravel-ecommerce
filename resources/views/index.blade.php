<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Online Shopping in Rajshahi</title>

    <!-- Bootstrap CSS -->
    @include('partials.style')
  </head>
  <body>
    {{-- Navigation --}}
    @include('partials.nav')


    {{-- Navigation End --}}

    {{-- Category --}}
    @include('partials.category')
    {{-- Category End --}}
    
    {{-- Slider --}}
    <div class="main-slider">
      <div class="container">
        <div class="row">
          <div class="col-12 no-pad">

            <div class="slider">
              <div>
                <img src="{{ asset('img/slider1.jpg') }}" />
              </div>
              <div>
                <img src="{{ asset('img/slider2.jpg') }}" />
              </div>
              <div>
                <img src="{{ asset('img/slider3.jpg') }}" />
              </div>
          </div>
        </div>
      </div>
    </div>
    {{-- Slider End --}}

    {{-- Product --}}

    <div class="product-container">
      <div class="container">
        <h2 class="title text-center">All Items</h2>
        <div class="row">
          @foreach($product as $product)
            <div class="col-3">

              <div class="product-image-wrapper">
                <div class="single-products">
                  <div class="productinfo text-center">
                    @foreach($product->image as $image)
                      <img src="{{ asset('product_img/'.$image->product_images) }}" style="height: 200px;width: 100%;" />
                    @endforeach
                    <img src="{{ asset('img/hotdeal.png') }}" class="new" style="width: 40px;">
                    <h2>৳ {{ $product->product_price }}</h2>
                    <p>{{ $product->product_name }}</p>
                    <a href="{{ route('product.details',$product->slug) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Details</a>
                  </div>
                </div>
              </div>
          </div>
        @endforeach
      </div>
      <div class="row">
        <div class="col-md-12">
          <div style="text-align: center; margin-bottom: 50px;">
            <a href="{{ route('product') }}" class="btn btn-default btn-lg get text-center" style="    -webkit-animation: bounce 2s ease infinite;animation: bounce 2s ease infinite;">View All Product</a>
          </div>
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