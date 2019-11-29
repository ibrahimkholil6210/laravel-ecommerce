<section class="category">
      <div class="container">
        <div class="row slider-cat">
          @foreach($categories as $category)
          <div class="cat-box">
            <a href="#">
              <div class="cat-img">
                <img src="{{ asset('category_img/'.$category->category_image) }}" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title">{{ $category->category_name }}</h5>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>