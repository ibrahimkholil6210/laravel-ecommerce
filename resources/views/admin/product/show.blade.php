@extends('admin.master')
@section('title', $product->product_name)
@section('content')


<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <h1><i class="fa fa-clipboard"></i> View Product <small>View {{ $product->product_name }}</small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active">View Product</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Product</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="container-fluid">
              	<div class="row">
                  @include('flash')
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                      <!-- Add the bg color to the header using any of the bg-* classes -->
                      <div class="widget-user-header bg-blue">
                        <div class="widget-user-image">
                          @foreach($product->image as $image)
                          <img class="img-circle" src="{{ asset('product_img/'.$image->product_images) }}" alt="User Avatar">
                          @endforeach
                        </div>
                        <!-- /.widget-user-image -->
                        <h3 class="widget-user-username">{{ $product->product_name }}</h3>
                        <h5 class="widget-user-desc">Phone</h5>
                      </div>
                      <div class="box-footer no-padding">
                        <ul class="nav nav-stacked">
                          <li><a href="#">Price <span class="pull-right badge bg-blue">{{ $product->product_price }}</span></a></li>
                          <li><a href="#">Quantity <span class="pull-right badge bg-blue">{{ $product->product_quantity }}</span></a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- /.widget-user -->
                  </div>
                  <div class="col-md-4"></div>
              	</div>
              </div>
            
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @endsection
	