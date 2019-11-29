@extends('admin.master')
@section('title','Create Category')
@section('content')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <h1><i class="fa fa-clipboard"></i> Add Category <small>Add new Category</small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active">Add Category</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Add Category</h3>

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
              			<form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
              				{{ csrf_field() }}
              				<div class="form-group">
              					<label for="category_title">Name Of Category*</label>
              					<input type="text" id="category_title" name="category_title" placeholder="Name of Category" class="form-control">
              				</div>
              				<div class="form-group">
              					<label for="category_parent">Parent Of Category*</label>
              					<select name="category_parent" id="category_parent" class="form-control">
              						<option value="">Select</option>
                          @foreach($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                          @endforeach
              					</select>
              				</div>
              				<div class="form-group">
              					<label for="category_image">Image Of Category*</label>
              					<input type="file" id="category_image" name="category_image" class="form-control">
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
	