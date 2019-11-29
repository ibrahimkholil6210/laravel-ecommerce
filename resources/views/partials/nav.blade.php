  <header id="header"><!--header-->
    
    <div class="header-middle"><!--header-middle-->
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="logo pull-left" style="overflow: hidden;">
              <a href="javascript:void(0)" class="btn btn-warning dropdown">&#8595;
                
              </a>
              <ul class="dropdown-main">
                  @foreach($categories as $category)
                    @if($category->parent_id == NULL)
                      <li><a href="javascript:void(0)">{{ $category->category_name }}</a></li>
                      <ul class="dropdown-child">
                      @foreach($category->subCats as $sub_category)
                        <li><a href="javascript:void(0)">{!! $sub_category->category_name !!}</a></li>
                      @endforeach
                      </ul>
                    @endif
                  @endforeach 
                </ul>
              <a href="/" class="logo-text">BestDeals</a>
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
            <div class="shop-menu pull-right">
              <ul>

                  <li><a href="/"><i class="fa fa-home"></i></a></li>
                  <li><a href="{{ route('product') }}"><i class="fa fa-shopping-basket"></i></a></li>
                  <li><a href="{{ route('category') }}"><i class="fa fa-list-ol"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-shopping-cart"></i> 
                  </a></li>

                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{-- <img src="dashboard/uploads/profile/" style="height: 40px;width:40px;margin-top: -10px;border-radius: 22px; padding: 2px;border:1px solid #e1e1e1;"> --}} <i class="fa fa-user-secret"></i></a>
                        <ul class="dropdown-menu pull-right">
                          <li style="display: block;"><a href="dashboard">My Account</a></li>
                          <li style="display: block;"><a href="dashboard/profile.php">Profile</a></li>
                          <li style="display: block;" role="separator" class="divider"></li>
                          <li style="display: block;"><a href="dashboard/logout.php">Log out</a></li>
                        </ul>
                      </li>
                

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header-middle-->
  
  </header><!--/header-->