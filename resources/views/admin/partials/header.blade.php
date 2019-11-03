  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/adminpanel" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Admin</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <li class="dropdown user user-menu">
            <a href="/"><i class="fa fa-home"></i>Go To Home</a>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
                

                <img src="{{ asset('admin/assets/dist/img/avatar5.png') }}" class="user-image" alt="User Image">
                  

              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Name</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                

                <img src="{{ asset('admin/assets/dist/img/avatar5.png') }}" class="img-circle" alt="User Image">
                 
                <p>
                  Name
                  <small>Joining Date : <?php echo date('y:m:d') ?></small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="signout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>


          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>