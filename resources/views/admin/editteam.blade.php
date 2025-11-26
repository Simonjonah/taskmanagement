@include('dashboard.admin.header')

@include('dashboard.admin.sidebar')

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Team</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Team</li>
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
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('admin/updateteam/'.$edit_team->ref_no) }}" method="post" enctype="multipart/form-data">
                  @csrf
               @method('PUT') 
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
                        <input name="fulname" type="text" @error('fulname') is-invalid @enderror"
                        value="{{ $edit_team->fulname }}" class="form-control" id="" placeholder="fulName">
                    </div>
                    @error('fulname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror


                   

                    <div class="form-group">
                      <label for="">position</label>
                      <input name="position" type="text" @error('position') is-invalid @enderror"
                      value="{{ $edit_team->position }}" class="form-control" id="" placeholder="position">
                  </div>
                  @error('position')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
 <!-- /.form-group -->
                    
                 
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      
                       <label for="">Images </label>
                        <td><img style="width: 100; height: 100px;" src="{{ URL::asset("/public/../$edit_team->images")}}" alt=""></td>

                        <input  name="images" type="file" @error('images') is-invalid @enderror"
                        value="{{ old('images') }}" class="form-control" id="" placeholder="Price">
                    </div>
                    @error('images')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                     

                  

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
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