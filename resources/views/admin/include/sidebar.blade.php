<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">نظام الاشعارات</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      
              <li class="nav-item">
                <a href="{{ url('/dashboard') }}" class="nav-link">
                  <i class="fa fa-chart-bar"></i>
                  <p>لوحة التحكم</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/ChoseEmail') }}" class="nav-link">
                  <i class=" fa fa-envelope"></i>
                  <p>  ايميل تلقي الاشعارات</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/view_job')}}" class="nav-link">
                  <i class="far fa-circle fa fa-tasks"></i>
                  <p>الوظائف</p>
                </a>
              </li>
            
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-id-card"></i>
              <p>
                الاقامات
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/view_card')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة اقامة</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/show_notfication')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض الاقامات</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/endCard')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>الاقامات المنتهية</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                المستخدمين
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('register')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة مستخدم</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/show_user') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> عرض المستخدمين</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
  </aside>