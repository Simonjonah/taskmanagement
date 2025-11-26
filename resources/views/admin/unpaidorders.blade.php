@include('dashboard.admin.header')

@include('dashboard.admin.sidebar')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Tract ID</th>
                    <th>Category</th>
                    <th>Sub Category</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Images</th>
                    <th>Amount</th>
                    <th>Sizes</th>
                    <th>Sections</th>
                    <th>Discounts</th>
                    <th>View</th>
                    <th>Status</th>
                   
                    <th>Delete</th>
                    <th>Date</th>
                  </tr>
                  </thead>
                  <tbody>
                  @if (Session::get('success'))
                  <div class="alert alert-success">
                      {{ Session::get('success') }}
                  </div>
                  @endif

                  @if (Session::get('fail'))
                  <div class="alert alert-danger">
                  {{ Session::get('fail') }}
                  @endif
                  @foreach ($view_unpaid_orders as $view_unpaid_order)
                    <tr>
                        <td>{{ $view_unpaid_order->ref_no }}</td>
                        <td>{{ $view_unpaid_order->product->subcategory->category['categoryname'] }}</td>
                        <td>{{ $view_unpaid_order->product->subcategory['subcategoryname'] }}</td>
                        <td>{{ $view_unpaid_order->productname }}</td>
                        <td>{{ $view_unpaid_order->quantity }}</td>
                        <td><img style="width: auto; height: 30px;" src="{{ URL::asset("/public/../$view_unpaid_order->images")}}" alt=""></td>
                        <td>{{ $view_unpaid_order->amount }}</td>
                        <td>{{ $view_unpaid_order->product['size'] }}</td>
                        <td>{{ $view_unpaid_order->product['sectionname'] }}</td>
                        <td>{{ $view_unpaid_order->discount }}%</td>

                        <td><a href="{{ url('admin/viewsingleorder/'.$view_unpaid_order->ref_no) }}"
                          class='btn btn-info'>
                           <i class="far fa-eye"></i>
                       </a></td>
                        <td>@if ($view_unpaid_order->status == 'pending')
                            <span class="badge badge-warning">Pending</span>
                          @elseif($view_unpaid_order->status == 'suspend')
                          <span class="badge badge-danger"> Suspended</span>
                          @elseif($view_unpaid_order->status == 'reject')
                          <span class="badge badge-danger"> Rejected</span>
                          @elseif($view_unpaid_order->status == 'success')
                          <span class="badge badge-success"> Success</span>
                          @elseif($view_unpaid_order->status == 'admitted')
                          
                          <span class="badge badge-success">Admitted</span>
                          @endif</td>
                        
                      
                       
                         
                       <td><a href="{{ url('admin/deleteorders/'.$view_unpaid_order->ref_no) }}"
                        class='btn btn-danger'>
                         <i class="far fa-trash-alt"></i>
                     </a></td>
                     <td>{{ $view_unpaid_order->created_at->format('D d, M Y, H:i')}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                    <th>Tract ID</th>
                    <th>Category</th>
                    <th>Sub Category</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Images</th>
                    <th>Amount</th>
                    <th>Sizes</th>
                    <th>Sections</th>
                    <th>Discounts</th>
                    <th>View</th>
                    <th>Status</th>
                    
                    <th>Delete</th>
                    <th>Date</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
</div>
<!-- ./wrapper -->

@include('dashboard.admin.footer')
