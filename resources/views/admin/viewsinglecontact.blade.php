@include('dashboard.admin.header')

@include('dashboard.admin.sidebar')

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add view_singcontacts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Contacts</li>
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
              <form action="{{ url('admin/createview_singcontacts') }}" method="post" enctype="multipart/form-data">
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
                        <input name="name" type="text" @error('name') is-invalid @enderror"
                        value="{{ $view_singcontacts->fulname }}" class="form-control" id="" placeholder="Name">
                    </div>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror


                   

                    <div class="form-group">
                      <label for="">Email</label>
                      <input name="email" type="text" @error('email') is-invalid @enderror"
                      value="{{ $view_singcontacts->email }}" class="form-control" id="" placeholder="email">
                  </div>
                  @error('email')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                  <div class="form-group">
                      <label for="">Phone</label>
                      <input name="phone" type="text" @error('phone') is-invalid @enderror"
                      value="{{ $view_singcontacts->phone }}" class="form-control" id="" placeholder="phone">
                  </div>
                  @error('phone')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
 <!-- /.form-group -->
                      
                 
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      
                      <div class="form-group">
                     <textarea class="textarea" name="body" class="form-control" @error('body') is-invalid @enderror" placeholder="Place some text here"
                      value="" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $view_singcontacts->body }}</textarea>
                     </div>
                      @error('body')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror

                     

                  

                  <div class="card-footer">
                    <a href="{{ url('admin/viewcontact') }}">Back</a>
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