@extends('admin.master')
@section('title','Dashboard')
@section('content')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <h1><i class="fa fa-clipboard"></i> Dashboard <small>Quick recap of your business</small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active">index</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Recap Report</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="container-fluid">
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
