@include('dashboard.admin.header')

@include('dashboard.admin.sidebar')

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('admin/createviewsingleuser') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  {{-- @method('PUT') --}}
                  @if (Session::get('success'))
                  <div class="alert alert-success">
                      {{ Session::get('success') }}
                  </div>
                  @endif

                  @if (Session::get('fail'))
                  <div class="alert alert-danger">
                  {{ Session::get('fail') }}
                  @endif

                  <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      

                      <div class="form-group">
                        <label for="">Name</label>
                        <input name="fname" type="text" @error('fname') is-invalid @enderror"
                        value="{{ $viewsingleuser->fname }}" class="form-control" id="" placeholder="fname">
                    </div>
                    @error('fname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror


                   

                    <div class="form-group">
                      <label for="">Email</label>
                      <input name="email" type="email" @error('email') is-invalid @enderror"
                      value="{{ $viewsingleuser->email }}" class="form-control" id="" placeholder="email">
                  </div>
                  @error('email')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
 <!-- /.form-group -->
                    
                 
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      
                       
                      <div class="form-group">
                        <label for="">Phone</label>
                        <input name="phone" type="tel" @error('phone') is-invalid @enderror"
                        value="{{ $viewsingleuser->phone }}" class="form-control" id="" placeholder="phone">
                    </div>
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                        <label for="">Address</label>
                        <input name="address" type="tel" @error('address') is-invalid @enderror"
                        value="{{ $viewsingleuser->address }}" class="form-control" id="" placeholder="address">
                    </div>
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                     

                  

                  <div class="card-footer">
                    <a href="{{ url('admin/viewusers') }}">Back</a>
                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                  </div>
                  </div>
                  
              </form>
            </div>



            

          </div>

          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @include('dashboard.admin.footer')