<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $category->category_name }}</title>
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

    {{-- Product --}}

    <div class="product-container">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="title text-center">All Items</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="alert alert-primary" role="alert">
              Showing {{ count($category->product) }} Items
            </div>
          </div>
          @if($category->product->count() > 0)
            @foreach($category->product as $product)
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
          @else
          <div class="col-12">
              <div class="alert alert-warning" role="alert">
                No Product Found
              </div>
          </div>
          @endif
        </div>
      </div>
    </div>


    {{-- Product End --}}
    {{-- Footer --}}

    @include('partials.footer')
    {{-- Footer End --}}
  </body>
</html>