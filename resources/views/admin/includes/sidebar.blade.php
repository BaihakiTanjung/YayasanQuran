<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img
        src="{{asset('assetsadmin/img/AdminLTELogo.png')}}"
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        style="opacity: 0.8;"
      />
      <span class="brand-text font-weight-light">YCQur'an</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img
            src="{{asset('assetsadmin/img/user2-160x160.jpg')}}"
            class="img-circle elevation-2"
            alt="User Image"
          />
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul
          class="nav nav-pills nav-sidebar flex-column"
          data-widget="treeview"
          role="menu"
          data-accordion="false"
        >
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="/admin" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="/admin/slider" class="nav-link">
              <i class="nav-icon fas fa-sliders-h"></i>
              <p>
                Slider
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="/admin/about" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                About
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="/admin/qoutes" class="nav-link">
              <i class="nav-icon fas fa-quote-right"></i>
              <p>
                Qoutes
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="/admin/blog" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                Blog
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="categories.php" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Kategori
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="message.php" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Pesan
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>