@include('dashboard.admin.header')

@include('dashboard.admin.sidebar')

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Products</li>
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
              <form action="{{ url('admin/updateproduct/'.$view_product->ref_no) }}" method="post" enctype="multipart/form-data">
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
                        <label>Select SubCategory</label>
                        <select name="subcategory_id" class="form-control select2" style="width: 100%;">
                          <option value="{{ $view_product->subcategory['id'] }}">{{ $view_product->subcategory['subcategoryname'] }}</option>
                          @foreach ($view_subcategories as $view_subcategorie)
                            <option value="{{ $view_subcategorie->id }}">{{ $view_subcategorie->subcategoryname }}</option>
                          @endforeach
                          
                        </select>
                      </div>
                      @error('subcategory_id')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                      <!-- /.col -->
                   
                      

                      <div class="form-group">
                        <label for="">Products</label>
                        <input name="productname" type="text" @error('productname') is-invalid @enderror"
                        value="{{ $view_product->productname }}" class="form-control" id="" placeholder="Products">
                    </div>
                    @error('productname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                <div class="form-group">
                  <label for="">Discount</label>
                  <input name="discount" type="number" @error('discount') is-invalid @enderror"
                  value="{{ $view_product->discount }}" class="form-control" id="" placeholder="Discount">
              </div>
              @error('discount')
                  <span class="text-danger">{{ $message }}</span>
              @enderror

              <div class="form-group">
                <label for="">Quantity</label>
                <input name="quantity" type="number" @error('quantity') is-invalid @enderror"
                value="{{ $view_product->quantity }}" class="form-control" id="" placeholder="Quantity">
            </div>
            @error('quantity')
                <span class="text-danger">{{ $message }}</span>
            @enderror

                        <label>Select Section</label>
                        <select name="sectionname" class="form-control" style="width: 100%;">
                          <option value="{{ $view_product->sectionname }}">{{ $view_product->sectionname }}</option>
                          
                        @foreach($view_sections as $view_section)
                        <option value="{{ $view_section->sectionname }}">{{ $view_section->sectionname }}</option>
                          @endforeach
                          
                        </select>
                      
                      @error('sectionname')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror


                      
                    

            <!-- /.form-group -->

                    {{-- <div class="form-group">
                      <textarea name="body" id="compose-textarea" @error('body') is-invalid @enderror"
                      value="{{ old('body') }}" class="form-control" style="height: 300px">
                       {!! $view_product->subcategory['body'] !!}
                      </textarea>
                  </div>
                  @error('body')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror --}}
                    
                      <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Amount</label>
                        <input name="amount" type="number" @error('amount') is-invalid @enderror"
                        value="{{ $view_product->amount }}" class="form-control" id="" placeholder="Price">
                    </div>
                    @error('amount')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    

                  <div class="form-group">
                    <label for="">Promo</label>
                    <input name="promo" type="number" @error('promo') is-invalid @enderror"
                    value="{{ $view_product->promo }}" class="form-control" placeholder="promo">
                </div>
                @error('promo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                

                
            <!-- /.form-group -->
            <div class="form-group">
              <td><img style="width: auto; height: 30px;" src="{{ URL::asset("/public/../$view_product->images")}}" alt=""></td>

              <label for="">Image</label>
              <input name="images" type="file" @error('images') is-invalid @enderror"
              value="{{ old('images') }}" class="form-control" id="" placeholder="Price">
          </div>
          @error('images')
              <span class="text-danger">{{ $message }}</span>
          @enderror
                <div class="form-group">
                      <label for="">Sizes</label>
                      <input name="size" type="text" @error('size') is-invalid @enderror"
                      value="{{ $view_product->size }}" class="form-control" id="" placeholder=" Enter sizes">
                  </div>
                  @error('size')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                <div class="card-footer">
                    <a class="btn btn-primary" href="{{ url('admin/viewproducts') }}">Back</a>
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