@extends('admin.master')
@section('title','Create Product')
@section('content')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <h1><i class="fa fa-clipboard"></i> All Product <small>All new product</small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active">All Product</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">All Product</h3>

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
                  <table class="table display" id="datatable">
                    <thead>
                      <tr>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Product Status</th>
                        <th>View</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    @foreach ($products as $product)
                    <tbody>
                      <tr>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ str_limit($product->product_description, $limit = 50, $end = '...') }}</td>
                        <td>{{ $product->product_price }}</td>
                        <td>{{ $product->product_quantity }}</td>
                        <td>
                            @if($product->product_status === 1)
                              <a href="#">Make Featured</a>
                            @else
                            <a href="#">Remove Featured</a>
                            @endif
                      </td>
                        {{-- <td><a href="{{ route('product.edit',$product->id) }}">Edit</a></td> --}}
                        <td><a href="{{ route('product.show',$product->id) }}">View</a></td>
                        <td>
                          <a href="{{ $product->id }}/edit" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                          <form action="{{ $product->id }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                          </form>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
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
	