@include('dashboard.admin.header')

@include('dashboard.admin.sidebar')

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Payments Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Payments Details</li>
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
               @php
                   $discoutseach = 0;             
                $itemTotal = $view_singleorders->product['amount'] * $view_singleorders->quantity;
                $itemDiscount = ($itemTotal * ($view_singleorders['discount'] ?? 0)) / 100;

                $discoutseach = $itemTotal - $itemDiscount;
               
            @endphp
              <!-- form start -->
              <form action="{{ url('admin/updateproduct/'.$view_singleorders->ref_no) }}" method="post" enctype="multipart/form-data">
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
                          <option value="{{ $view_singleorders->product->subcategory['id'] }}">{{ $view_singleorders->product->subcategory['subcategoryname'] }}</option>
                          
                        </select>
                      </div>
                      @error('subcategory_id')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                      <!-- /.col -->
                   
                      

                      <div class="form-group">
                        <label for="">Products</label>
                        <input name="productname" type="text" @error('productname') is-invalid @enderror"
                        value="{{ $view_singleorders->productname }}" class="form-control" id="" placeholder="Products">
                    </div>
                    @error('productname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                        <label for="">City</label>
                        <input name="city" type="text" @error('city') is-invalid @enderror"
                        value="{{ $view_singleorders->city }}" class="form-control" id="" placeholder="City">
                    </div>
                    @error('city')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                        <label for="">phone</label>
                        <input name="phone" type="text" @error('phone') is-invalid @enderror"
                        value="{{ $view_singleorders->phone }}" class="form-control" id="" placeholder="phone">
                    </div>
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                        <label for="">Address</label>
                        <input name="address" type="text" @error('address') is-invalid @enderror"
                        value="{{ $view_singleorders->address }}" class="form-control" id="" placeholder="address">
                    </div>
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    

                     <div class="form-group">
                        <label for="">First name</label>
                        <input name="fname" type="text" @error('fname') is-invalid @enderror"
                        value="{{ $view_singleorders->fname }}" class="form-control" id="" placeholder="First name">
                    </div>
                    @error('fname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                        <label for="">Last name</label>
                        <input name="lname" type="text" @error('lname') is-invalid @enderror"
                        value="{{ $view_singleorders->lname }}" class="form-control" id="" placeholder="Last name">
                    </div>
                    @error('lname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="email" type="text" @error('email') is-invalid @enderror"
                        value="{{ $view_singleorders->email }}" class="form-control" id="" placeholder="Email">
                    </div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                <div class="form-group">
                  <label for="">Discount</label>
                  <input name="discount" type="number" @error('discount') is-invalid @enderror"
                  value="{{ $view_singleorders->discount }}" class="form-control" id="" placeholder="Discount">
              </div>
              @error('discount')
                  <span class="text-danger">{{ $message }}</span>
              @enderror

              <div class="form-group">
                <label for="">Quantity</label>
                <input name="quantity" type="number" @error('quantity') is-invalid @enderror"
                value="{{ $view_singleorders->quantity }}" class="form-control" id="" placeholder="Quantity">
            </div>
            @error('quantity')
                <span class="text-danger">{{ $message }}</span>
            @enderror

                        <label>Select Section</label>
                        <select name="sectionname" class="form-control" style="width: 100%;">
                        <option value="">{{ $view_singleorders->product['sectionname'] }}</option>
                          
                        </select>
                      
                      @error('sectionname')
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
                        value="{{ $view_singleorders->product['amount'] }}" class="form-control" id="" placeholder="Price">
                    </div>
                    @error('amount')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    

                  <div class="form-group">
                    <label for="">Promo</label>
                    <input name="promo" type="number" @error('promo') is-invalid @enderror"
                    value="{{ $view_singleorders->product['promo'] }}" class="form-control" placeholder="promo">
                </div>
                @error('promo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                

                
            <!-- /.form-group -->
            <div class="form-group">
              <td><img style="width: auto; height: 30px;" src="{{ URL::asset("/public/../$view_singleorders->images")}}" alt=""></td>

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
                      value="{{ $view_singleorders->product['size'] }}" class="form-control" id="" placeholder=" Enter sizes">
                  </div>
                  @error('size')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror

                  <div class="form-group">
                      <label for="">Amount Paid</label>
                      <input name="requested_amount" type="text" @error('requested_amount') is-invalid @enderror"
                      value="{{ $discoutseach }}" class="form-control" id="" placeholder=" Enter requested_amounts">
                  </div>
                  @error('requested_amount')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                  <div class="form-group">
                      <textarea name="body" id="compose-textarea" @error('body') is-invalid @enderror"
                      value="{{ old('body') }}" class="form-control" style="height: 300px">
                       {!! $view_singleorders->notes !!}
                      </textarea>
                  </div>
                  @error('body')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror 

                  <div class="form-group">
                        <label for="">Landmark</label>
                        <input name="landmark" type="text" @error('landmark') is-invalid @enderror"
                        value="{{ $view_singleorders->landmark }}" class="form-control" id="" placeholder="landmark">
                    </div>
                    @error('landmark')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                <div class="card-footer">
                    <a class="btn btn-primary" href="{{ url('admin/paymentdetial/') }}">Back</a>
                    <a class="btn btn-info" href="{{ url('admin/paymentdetial/'.$view_singleorders->ref_no) }}">Card Details</a>
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