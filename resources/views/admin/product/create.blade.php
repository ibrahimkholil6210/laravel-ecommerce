@extends('admin.master')
@section('title','Create Product')
@section('content')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <h1><i class="fa fa-clipboard"></i> Add Product <small>Add new product</small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active">Add Product</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Add Product</h3>

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
              		<div class="col-md-3"></div>
              		<div class="col-md-6">
              			@include('flash')
              			<form action="/adminpanel/product/store" method="POST">
              				{{ csrf_field() }}
              				<div class="form-group">
              					<label for="product_title">Name Of Product*</label>
              					<input type="text" id="product_title" name="product_title" placeholder="Name of your product" class="form-control">
              				</div>
              				<div class="form-group">
              					<label for="product_description">Description Of Product*</label>
              					<textarea name="product_description" id="product_description" class="form-control"></textarea>
              				</div>
              				<div class="form-group">
              					<label for="product_category">Category Of Product*</label>
              					<select name="product_category" id="product_category" class="form-control">
              						<option value="1">Phone</option>
              						<option value="2">Electric</option>
              					</select>
              				</div>
              				<div class="form-group">
              					<label for="product_quantity">Quantity Of Product*</label>
              					<input type="number" id="product_quantity" name="product_quantity" placeholder="50" class="form-control">
              				</div>
              				<div class="form-group">
              					<label for="product_price">Price Of Product*</label>
              					<input type="number" id="product_price" name="product_price" placeholder="50" class="form-control">
              				</div>

              				<button type="submit" name="submit" class="btn btn-success btn-block">Submit</button>

              			</form>
              		</div>
              		<div class="col-md-3"></div>
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
	