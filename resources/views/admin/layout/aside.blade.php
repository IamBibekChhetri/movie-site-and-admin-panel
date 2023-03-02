<!-- .app-aside -->
<aside class="app-aside app-aside-expand-md app-aside-light">
  <!-- .aside-content -->
  <div class="aside-content">
    <!-- .aside-header -->
    <header class="aside-header d-block d-md-none">
      <!-- .btn-account -->
      <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button> <!-- /.btn-account -->
      <!-- .dropdown-aside -->
      <div id="dropdown-aside" class="dropdown-aside collapse">
        <!-- dropdown-items -->
        <div class="pb-3">
          <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
          <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Help Center</a> <a class="dropdown-item" href="#">Ask Forum</a> <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
        </div><!-- /dropdown-items -->
      </div><!-- /.dropdown-aside -->
    </header><!-- /.aside-header -->
    <!-- .aside-menu -->
    <div class="aside-menu overflow-hidden">
      <!-- .stacked-menu -->
      <nav id="stacked-menu" class="stacked-menu">
        <!-- .menu -->
        <ul class="menu">
          <!-- .Dashboard -->
          <li class="menu-item has-active">
            <a href="{{url('admin/dashboard')}}" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
          </li>

          <!-- .Company Information -->
          <li class="menu-item">
            <a href="{{asset('admin/companyInfo')}}" class="menu-link"><span class="menu-icon fas fa-building text-success"></span> <span class="menu-text text-success">Company Information</span></a>
          </li><!-- /.Company Information -->

          <!-- Movies Management  -->
          <li class="menu-item has-child">
            <a href="#" class="menu-link"><span class="menu-icon fa fa-film text-danger"></span> <span class="menu-text text-danger">Movies Management</span></a> <!-- child menu -->
            <ul class="menu">
              <li class="menu-item">
                <a href="{{asset('admin/category')}}" class="menu-link">Category</a>
              </li>
              <li class="menu-item">
                <a href="{{asset('admin/comingMovie')}}" class="menu-link">Upcoming Movies</a>
              </li>
              <li class="menu-item">
                <a href="{{asset('admin/trailor')}}" class="menu-link">Trailors</a>
              </li>
              <li class="menu-item">
                <a href="{{asset('admin/releaseMovie')}}" class="menu-link">Released Movie</a>
              </li>
            </ul>
          </li>
          <!-- User Management Panel -->
          <li class="menu-item has-child">
            <a href="#" class="menu-link"><span class="menu-icon oi oi-person text-warning"></span> <span class="menu-text text-warning">User Settings</span></a> <!-- child menu -->
            <ul class="menu">
              <li class="menu-item">
                <a href="{{asset('admin/userRole')}}" class="menu-link">User Type</a>
              </li>
              <li class="menu-item">
                <a href="{{asset('admin/user')}}" class="menu-link"> Users </a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link disabled"> Branches </a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link disabled"> Countries </a>
              </li>
            </ul>
          </li>

          <!-- Site Management  -->
          <li class="menu-item has-child">
            <a href="#" class="menu-link"><span class="menu-icon fa fa-globe text-success"></span> <span class="menu-text text-success">Site Management</span></a> <!-- child menu -->
            <ul class="menu">
              <li class="menu-item">
                <a href="#" class="menu-link disabled">Article Type</a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link disabled">Articles</a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link disabled">testimonials</a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link disabled">Contact Us</a>
              </li>
              <li class="menu-item">
                <a href="#" class="menu-link disabled">FAQ</a>
              </li>
            </ul>
          </li>

        </ul><!-- /.menu -->
      </nav><!-- /.stacked-menu -->
    </div><!-- /.aside-menu -->
    <!-- Skin changer -->
    <footer class="aside-footer border-top p-2">
      <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
    </footer><!-- /Skin changer -->
  </div><!-- /.aside-content -->
</aside><!-- /.app-aside -->