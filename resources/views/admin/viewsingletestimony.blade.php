@include('dashboard.admin.header')

@include('dashboard.admin.sidebar')

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Testimony</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Testimony</li>
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
              <form action="{{ url('admin/createtestimony') }}" method="post" enctype="multipart/form-data">
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
                        value="{{ $testimony->name }}" class="form-control" id="" placeholder="Name">
                    </div>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror


                   

                    <div class="form-group">
                      <label for="">position</label>
                      <input name="position" type="text" @error('position') is-invalid @enderror"
                      value="{{ $testimony->position }}" class="form-control" id="" placeholder="position">
                  </div>
                  @error('position')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
 <!-- /.form-group -->
                      <div class="form-group">
                        <label for="">Images </label>
                        <td><img style="width: auto; height: 30px;" src="{{ URL::asset("/public/../$testimony->images")}}" alt=""></td>

                        <input required name="images" type="file" @error('images') is-invalid @enderror"
                        value="{{ old('images') }}" class="form-control" id="" placeholder="Price">
                    </div>
                    @error('images')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                 
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      
                      <div class="form-group">
                     <textarea class="textarea" name="body" class="form-control" @error('body') is-invalid @enderror" placeholder="Place some text here"
                      value="" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $testimony->body }}</textarea>
                     </div>
                      @error('body')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror

                     

                  

                  <div class="card-footer">
                    <a href="{{ url('admin/viewtestimony') }}">Back</a>
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