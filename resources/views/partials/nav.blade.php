<div class="navigation">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
              <a class="navbar-brand" href="{{ route('home') }}">KichuKini</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}"><i class="fa fa-home "></i> Home</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('product') }}"><i class="fa  fa-delicious "></i> Product</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fa fa-shopping-cart "></i> Cart</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fa fa-eye"></i> Auth</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>