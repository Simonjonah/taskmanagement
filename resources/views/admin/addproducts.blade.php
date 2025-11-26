@include('dashboard.admin.header')

@include('dashboard.admin.sidebar')

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Products</li>
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
              <form action="{{ url('admin/createproduct') }}" method="post" enctype="multipart/form-data">
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
                        <input type="hidden" name="category_id" value="{{ $view_subcategories->category['id'] }}">
                        {{-- <h2>{{ $view_subcategories->id }}</h2> --}}
                        <label>Select SubCategory</label>
                        <select name="subcategory_id" class="form-control" style="width: 100%;">
                          <option value="{{ $view_subcategories->id }}">{{ $view_subcategories->subcategoryname }}</option>
                          
                          
                        </select>
                      </div>
                      @error('subcategory_id')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror

                      <div class="form-group">
                        <label for="">Product Name</label>
                        <input name="productname" type="text" @error('productname') is-invalid @enderror"
                        value="{{ old('productname') }}" class="form-control" id="" placeholder="Product name">
                    </div>
                    @error('productname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror


                   

                    <div class="form-group">
                      <label for="">Quantity</label>
                      <input name="quantity" type="number" @error('quantity') is-invalid @enderror"
                      value="{{ old('quantity') }}" class="form-control" id="" placeholder="Quantity">
                  </div>
                  @error('quantity')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror

                    <!-- <div class="form-group">
                        <label for="">Discount Percent </label>
                        <input name="percent" type="number" @error('percent') is-invalid @enderror"
                        value="{{ old('percent') }}" class="form-control" id="" placeholder="Promo">
                    </div>
                    @error('percent')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror -->
                     
                        <label>Select Section</label>
                        <select name="sectionname" class="form-control" style="width: 100%;">
                          @foreach($view_sections as $view_section)
                        <option value="{{ $view_section->sectionname }}">{{ $view_section->sectionname }}</option>
                          @endforeach
                          
                        </select>
                      
                      @error('sectionname')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror


                      
                    <div class="form-group">
                      <label for="">Sizes</label>
                      <input name="size" type="text" @error('size') is-invalid @enderror"
                      value="{{ old('size') }}" class="form-control" id="" placeholder=" Enter sizes">
                  </div>
                  @error('size')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                      <!-- /.form-group -->
                      <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      
                      <div class="form-group">
                        <label for="">Amount</label>
                        <input name="amount" type="number" @error('amount') is-invalid @enderror"
                        value="{{ old('amount') }}" class="form-control" id="" placeholder="Amount">
                    </div>
                    @error('amount')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                      <div class="form-group">
                        <label for="">Discount (Optional)</label>
                        <input name="discount" type="number" @error('discount') is-invalid @enderror"
                        value="{{ old('discount') }}" class="form-control" id="" placeholder="discount (optional)">
                    </div>
                    @error('discount')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                      <div class="form-group">
                        <label for="">Promo (Optional)</label>
                        <input name="promo" type="number" @error('promo') is-invalid @enderror"
                        value="{{ old('promo') }}" class="form-control" id="" placeholder="promo (optional)">
                    </div>
                    @error('promo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <!-- /.col -->
                   <!-- /.form-group -->
                      <div class="form-group">
                        <label for="">Images (Multiple)</label>
                        <input required name="images" multiple type="file" @error('images') is-invalid @enderror"
                        value="{{ old('images') }}" class="form-control" id="" placeholder="Price">
                    </div>
                    @error('images')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                  

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
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