<!DOCTYPE html>
<html>
<head>
  <title>@yield('title') || E-commerce</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Favicon and touch icons -->
  <!-- CSS -->

  @include('admin.partials.style')
  

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">

    @include('admin.partials.header')
    @include('admin.partials.left_sidebar')

    
    @yield('content')


    @include('admin.partials.footer')
    @include('admin.partials.right_sidebar')


  </div>
  <!-- ./wrapper -->


  <!-- REQUIRED JS SCRIPTS -->
    @include('admin.partials.script')
  

</body>
</html>