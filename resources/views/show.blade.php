<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
      @foreach($product as $p)
        {{ $p->product_name }}
      @endforeach
    </title>
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
            <h2 class="title text-center">
              @foreach($product as $p)
                {{ $p->product_name }}
              @endforeach
            </h2>
          </div>
        </div>

        <div class="row">
            <div class="col-5">
              <div class="view-product">
                @foreach($product as $p)
                  @foreach($p->image as $image)
                    <img src="{{ asset('product_img/'.$image->product_images) }}" style="height: 200px;width: 100%;" />
                  @endforeach
                @endforeach
                
              </div>

            </div>
            <div class="col-7">
              @foreach($product as $p)
                <div class="product-information"><!--/product-information-->
                  <img src="{{ asset('img/hotdeal.png') }}" class="new" style="width: 40px;">
                  <h2>{{ $p->product_name }}</h2>
                  <p>Web ID: </p>
                  <span>
                    <span>৳ </span>
                    <label>Quantity:</label>
                      
                    <form action="" method="post" class="pull-right">

                      <input type="text" name="quantity" value="1" />
                      <button type="submit" name="add_to_cart" class="btn btn-fefault cart">
                        <i class="fa fa-shopping-cart"></i>
                        Add to cart
                      </button>
                    </form>

                  </span>
                  <p><b>Availability:</b> In Stock</p>
                  <p><b>Condition:</b> New</p>
                  <p><b>Brand:</b> Non-Brand</p>
                </div><!--/product-information-->

            </div>
            @endforeach
        </div>
            <div class="col-12">
              <ul class="nav nav-tabs">
                <li class="nav-item active"><a href="#details" class="nav-link" data-toggle="tab">Details</a></li>
                <li class="nav-item"><a href="#tag" class="nav-link" data-toggle="tab">Tag</a></li>
              </ul>
            </div>
            <div class="tab-content">
              <div class="tab-pane fade active in" id="details" >
                <div class="col-12">
                  <div class="single-products" style="padding: 15px;">
                    <div class="productinfo text-justify">
                      {{ $p->product_description }}
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="tab-pane fade" id="tag" >
                
                <div class="col-12">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      
                    </div>
                  </div>
                </div>
                
              </div>
              
            </div>
        </div>
    </div>


    {{-- Product End --}}
    {{-- Footer --}}

    @include('partials.footer')
    {{-- Footer End --}}
  </body>
</html>