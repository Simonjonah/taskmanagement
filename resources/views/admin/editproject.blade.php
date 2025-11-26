@include('admin.header')

@include('admin.sidebar')

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Project</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Project</li>
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
                <h3 class="card-title">Edit Project</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('web/updateproject/'.$edit_prooject->id) }}" method="post" enctype="multipart/form-data">
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
                        <label for="">Task Name</label>
                        <select name="task_id" class="form-control">
                            <option value="{{ $edit_prooject->task_id }}">{{ $edit_prooject->task['task_name'] }}</option>
                            @foreach ($view_tasks as $view_task)
                            <option value="{{ $view_task->id }}">{{ $view_task->task_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('task_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                        <label for="">Project Name</label>
                        <input name="project_name" type="text" @error('project_name') is-invalid @enderror"
                        value="{{ $edit_prooject->project_name }}" class="form-control" id="" placeholder="Project Name">
                    </div>
                    @error('project_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror



                    <div class="form-group">
                     <textarea class="textarea" name="description" class="form-control" @error('description') is-invalid @enderror" placeholder="Write description here"
                      value="" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $edit_prooject->description }}</textarea>
                     </div>
                      @error('description')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                </div>
                  
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
  @include('admin.footer')