@include('dashboard.admin.header')

  @include('dashboard.admin.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
               <h3>{{ $categorycount }}</h3>

                <p>Category</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ url('admin/viewcategory') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $sections }}<sup style="font-size: 20px"></sup></h3>

                <p>Fashion Sections</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ url('admin/viewsection') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $subcate }}</h3>

                <p> Sub Category </p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ url('admin/viewsubcategory') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $productcount}}</h3>

                <p>Products</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ url('admin/viewproducts') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>{{ $unpaidtrans }}</h3>
                <p>Pending Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{ url('admin/unpaidorders') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $paidtransaction }}</h3>
                <p>Paid Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{ url('admin/paidtransactions') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{ $alltransaction }}</h3>
                <p>All Orders</p>
              </div> 
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{ url('admin/alltransactions') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-default">
              <div class="inner">
                <h3>{{ $countcontacts }}</h3>
                <p>Contacts </p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{ url('admin/viewcontact') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Team</span>
                <span class="info-box-number">
                  {{ $teamscount}}
                </span>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Testimonies</span>
                <span class="info-box-number">{{ $testimonycount}}</span>
              </div>
            </div>
          </div>


          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Users</span>
                <span class="info-box-number">{{ $users }}</span>
              </div>
            </div>
          </div>


          <!-- <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Events</span>
                <span class="info-box-number">7</span>
              </div>
            </div>
          </div> -->


          <!-- <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Testimonies</span>
                <span class="info-box-number">78</span>
              </div>
            </div>
          </div> -->


          <!-- <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Replied Queries</span>
                <span class="info-box-number">9</span>
              </div>
            </div>
          </div> -->
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Latest Users</h3>
                    <div class="card-tools">
                      {{-- <span class="badge badge-danger">7 New Lecturers</span> --}}
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                 
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                      @foreach ($view_users as $view_user)
                          <li>
                           <a href="{{ url('viewsingleuser/'.$view_user->ref_no) }}"></a>
                            <a class="users-list-name" href="{{ url('viewsingleuser/'.$view_user->ref_no) }}">{{ $view_user->fname }}  {{ $view_user->phone }}</a>
                            <span class="users-list-date">{{ $view_user->created_at->diffForHumans() }}</span>
                          </li>
                      
                    @endforeach
                  </ul>
                  </div>
                  
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="{{ url('admin/viewusers') }}">View All Users</a> 
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->





              <!-- TABLE: LATEST ORDERS -->
              <div class="card">
                <div class="card-header border-transparent">
                  <h3 class="card-title">Latest Payments</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table m-0">
                      <thead>
                      <tr>
                        <th>Order ID</th>
                        <th>Name</th>
                        <th>Product</th>
                        <th>Qtity</th>

                        <th>Status</th>
                        
                      </tr>
                      </thead>
                      <tbody>
                    @foreach ($orders as $order)
                        <tr>
                          <td><a href="{{ url('admin/viewsingleorder/'.$order->ref_no) }}">{{ $order->ref_no }}</a></td>
                          <td>{{ $order->fname }} {{ $order->lname }}</td>
                          <td>{{ $order->productname }}</td>
                          <td>{{ $order->quantity }}</td>

                          <td>@if ($order->status == null)
                            <span class="badge badge-secondary">In Progress</span>
                          @elseif($order->status == 'success')
                          <span class="badge badge-success">Success</span>
                          @elseif($order->status == 'pending')
                          <span class="badge badge-danger">Pending</span>
                          @elseif($order->status == 'canceled')
                          <span class="badge badge-info">Canceled</span>
                          @endif
                        </td>
                       

                        </tr>
                        @endforeach 
                      </tbody>
                    </table> 
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                 <a href="{{ url('admin/alltransactions') }}" class="btn btn-sm btn-info float-left">View </a> 
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->





            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Products</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Track ID</th>
                      <th>Name</th>
                      <th>Discount</th>
                      <th>Amount</th>
                      <th>Status</th>
                      <th>Qntity</th>

                    </tr>
                    </thead>
                    <tbody>
                       @foreach ($view_products as $view_product)
                      <tr>
                        <td><a href="{{ url('admin/viewsingleproduct/'.$view_product->ref_no) }}">{{ $view_product->ref_no }}</a></td>
                        <td><a href="{{ url('admin/viewsingleproduct/'.$view_product->ref_no) }}">{{ $view_product->productname }}</a></td>
                        <td><a href="{{ url('admin/viewsingleproduct/'.$view_product->ref_no) }}">{{ $view_product->discount }}%</a></td>
                        
                        <td>{{ $view_product->amount }}</td>

                        <td>@if ($view_product->status == null)
                          <span class="badge badge-secondary">In Progress</span>
                        @elseif($view_product->status == 'Success')
                        <span class="badge badge-success">Success</span>
                        @elseif($view_product->status == 'approved')
                        <span class="badge badge-success">Approved</span>
                        @elseif($view_product->status == 'confirm')
                        <span class="badge badge-info">Confirmed</span>
                        @endif
                      </td>
                        <td>{{ $view_product->quantity }}</td>
                     
                      </tr>
                      @endforeach 
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                 <a href="{{ url('admin/viewproducts') }}" class="btn btn-sm btn-info float-left">View All </a> 
                {{-- <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a> --}}
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->


          
          <div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            
            <!-- /.info-box -->
            <!-- <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="far fa-heart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Mentions</span>
                <span class="info-box-number">92,050</span>
              </div>
            </div> -->
            <!-- /.info-box -->
            <!-- <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Downloads</span>
                <span class="info-box-number">114,381</span>
              </div>
            </div> -->
            <!-- /.info-box -->
            <!-- <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="far fa-comment"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Direct Messages</span>
                <span class="info-box-number">163,921</span>
              </div>
            </div> -->
            <!-- /.info-box -->

           

            <!-- PRODUCT LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Recently Contacts</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                 @foreach ($view_contacts as $view_contact)
                  <li class="item">
                    <a href="{{ url('admin/viewsinglecontact/'.$view_contact->id) }}" class="btn btn-info">View
                     </a>
                    <div class="product-info">
                      <a href="{{ url('admin/viewsinglecontact/'.$view_contact->id) }}">
                        <span class="badge badge-warning float-right">{{ $view_contact->email }}</span></a>
                      <span class="product-description">
                       By {{ $view_contact->fname }} 
                      </span>
                    </div>
                  </li>
                  @endforeach 
                </ul>
              </div>
            </div>
            <!-- /.card -->



            <!-- PRODUCT LIST -->
            <!-- <div class="card">
              <div class="card-header">
                <h3 class="card-title">First TIme Payments</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div> -->
              <!-- /.card-header -->
              <!-- <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  {{-- @foreach ($student_sums as $student_sum)
                  <li class="item">
                    <a href="{{ $student_sum->ref_no }}" class="btn btn-info">View 
                     </a>
                     <small><a href="viewsfees/{{ $student_sum->ref_no }}" class="btn btn-info">₦ {{ $student_sum->amount }}
                     </a></small>
                     
                    <div class="product-info">
                      <a href="{{ $student_sum->ref_no }}" class="product-title">{{ $student_sum->programname }}
                        <span class="badge badge-warning float-right">{{ $student_sum->registercourse['programname']}}</span></a>
                      <span class="product-description">
                       By {{ $student_sum->fname }} {{ $student_sum->surname }}
                      </span>
                    </div>
                  </li>
                  @endforeach
                </ul> --}}
              </div>
            </div> -->
            <!-- /.card -->


          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
  </div>
  @include('dashboard.admin.footer')