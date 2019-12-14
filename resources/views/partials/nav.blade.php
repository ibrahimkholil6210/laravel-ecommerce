  <header id="header"><!--header-->
    
    <div class="header-middle"><!--header-middle-->
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="logo pull-left" style="overflow: hidden;">
              <button class="main btn btn-custom"></button>

              <ul class="child">
                @foreach($categories as $category)
                  @if($category->parent_id == NULL)
                    <li>
                      <a href="{{ route('category.find',$category->id) }}">{{ $category->category_name }}@if(count($category->subCats)) <i class="fa fa-arrow-right"></i>@endif </a>
                        @if(count($category->subCats))
                          <ul class="multi-child">
                            @foreach($category->subCats as $sub)
                              <li><a href="{{ route('category.find',$sub->id)  }}">{{ $sub->category_name }}</a></li>
                            @endforeach
                          </ul>
                        @endif
                    </li>  
                  @endif
                @endforeach
              </ul>
              <a href="/" class="logo-text"><img src="{{ asset('img/logo.png') }}" alt=""></a>
            </div>
          </div>
          <div class="col-md-6">
            <div>
              <form action="{{ route('search') }}" method="GET">
                <input type="text" class="form-control search-box" name="term" placeholder="" required style="width: 85%;float: left;" >
                <button type="submit" class="form-control btn btn-default"  style="width: 15%;position: relative;left: -5px;border: 0; background-color: #fe980f; color: #fff; border-radius: 0 5px 5px 0"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <div class="shop-menu">
              <ul class="shop-menu-ul">

                  <li><a href="/"><i class="fa fa-home"></i></a></li>
                  <li><a href="{{ route('product') }}"><i class="fa fa-shopping-basket"></i></a></li>
                  <li><a href="{{ route('category') }}"><i class="fa fa-list-ol"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-shopping-cart"></i> 
                  </a></li>

                  @guest
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-sign-in"></i></a>
                      </li>
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a href="{{route('dashboard')}}">Dashboard</a>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  <i class="fa fa-sign-out"></i>
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest

                  
                

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header-middle-->
  
  </header><!--/header-->