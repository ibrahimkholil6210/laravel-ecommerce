@extends('admin.master')
@section('title','Categories')
@section('content')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <h1><i class="fa fa-clipboard"></i> All Category <small>All new Category</small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active">All Category</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">All Category</h3>

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
                        <th>Category Name</th>
                        <th>Parent Category</th>
                        <th>Category Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    @foreach ($categories as $category)
                    <tbody>
                      <tr>
                        <td>{{ $category->category_name }}</td>
                        <td>
                          @if ($category->parent_id == NULL)
                            Base Category
                          @else
                          {{ $category->parent->category_name }}
                          @endif
                        </td>
                        <td><img src="{{ asset('category_img/'.$category->category_image) }}" style="width: 50px;" alt=""></td>
                        <td>
                          <a href="{{ route('category.edit',$category->id ) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                          <form action="{{ route('category.delete',$category->id ) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure?');">
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
	