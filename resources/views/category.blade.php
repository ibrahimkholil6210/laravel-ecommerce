<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Categories | BestDeals</title>
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
            <h2 class="title text-center">All Categories</h2>
          </div>
        </div>
        <div class="row">
           @foreach($categories as $category)
              <div class="col-2">
                <a href="javascript:void(0)" class="cat-hyper">
                  <div class="category-box">
                      <div class="cat-img">
                        <img src="{{ asset('category_img/'.$category->category_image) }}" class="card-img-top" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">#{{ $category->category_name }}</h5>
                      </div>
                  </div>
                </a>
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