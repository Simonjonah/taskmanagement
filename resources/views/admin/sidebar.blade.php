<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #003322;">
    <!-- Brand Logo -->
    <a href="{{ url('admin/home') }}" class="brand-link">
      <img src="{{ asset('assets/dist/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image"
           style="opacity: .8">
      <span class="brand-text font-weight-light" style="color: #fff;"><br>3JC ADMIN </span>
    </a>
    
     <style>
      .nav-item p{
        color: #fff;
      }

      .nav-item i{
        color: #fff;
      }
     </style>
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/logo.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a style="color: #fff;" href="{{ url('admin/home') }}" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/home') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard </p>
                </a>
              </li>
              
            </ul>
          </li>
          
          
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Fashion Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                  <a href="{{ url('admin/addsection') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Section</p>
                  </a>
                </li>
                
               
                <li class="nav-item">
                  <a href="{{ url('admin/viewsection') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Section</p>
                  </a>
                </li>
             

            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Category Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item">
                  <a href="{{ url('admin/addcategory') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Category</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ url('admin/viewcategory') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Category</p>
                  </a>
                </li>
                

              </li>
            </ul>
          </li>
          

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               SubCategory Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ url('admin/viewsubcategory') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Subcategory</p>
                </a>
              </li>
             

            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Products Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
               
                <li class="nav-item">
                  <a href="{{ url('admin/viewproducts') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Products</p>
                  </a>
                </li>


              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Orders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <li class="nav-item">
                  <a href="{{ url('admin/unpaidorders') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pending Orders</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ url('admin/paidtransactions') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Paid Transaction</p>
                  </a>
                </li>


                <li class="nav-item">
                  <a href="{{ url('admin/alltransactions') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All Orders</p>
                  </a>
                </li>
              </li>
            </ul>
          </li>

          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Contact Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
            

              <li class="nav-item">
                <a href="{{ url('admin/viewcontact') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Contact</p>
                </a>
              </li>

              
              
            </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Testimony Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ url('admin/addtestimony') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Testimony</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/viewtestimony') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Testimony</p>
                </a>
              </li>
             

            </ul>
          </li>



          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Team Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ url('admin/addteam') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/viewteam') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Team</p>
                </a>
              </li>
             

            </ul>
          </li>

      <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Users Section
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

             
              <li class="nav-item">
                <a href="{{ url('admin/viewusers') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Users</p>
                </a>
              </li>
             

            </ul>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Logout
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/logout') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
           
            </ul>
          </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
