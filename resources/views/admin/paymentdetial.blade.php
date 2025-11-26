@include('dashboard.admin.header')

@include('dashboard.admin.sidebar')

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Payment Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Payment Details</li>
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
             
              <!-- form start -->
              <form action="{{ url('admin/updateproduct/'.$viewpaidorders->ref_no) }}" method="post" enctype="multipart/form-data">
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
                        <label>Bin</label>
                        <select name="bin" class="form-control select2" style="width: 100%;">
                          <option value="">{{ $viewpaidorders->bin }}</option>
                          
                        </select>
                      </div>
                      @error('bin')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                      <!-- /.col -->
                   
                      

                      <div class="form-group">
                        <label for="">Last 4</label>
                        <input name="last4" type="text" @error('last4') is-invalid @enderror"
                        value="{{ $viewpaidorders->last4 }}" class="form-control" id="" placeholder="Last 4">
                    </div>
                    @error('last4')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                <div class="form-group">
                  <label for="">Exp. Month</label>
                  <input name="exp_month" type="number" @error('exp_month') is-invalid @enderror"
                  value="{{ $viewpaidorders->exp_month }}" class="form-control" id="" placeholder="exp_month">
              </div>
              @error('exp_month')
                  <span class="text-danger">{{ $message }}</span>
              @enderror

              <div class="form-group">
                <label for="">card_type</label>
                <input name="card_type" type="number" @error('card_type') is-invalid @enderror"
                value="{{ $viewpaidorders->card_type }}" class="form-control" id="" placeholder="card_type">
            </div>
            @error('card_type')
                <span class="text-danger">{{ $message }}</span>
            @enderror

                        <label>Bank</label>
                        <select name="sectionname" class="form-control" style="width: 100%;">
                            <option value="">{{ $viewpaidorders->bank }}</option>
                          
                        </select>

                    
                  <div class="form-group">
                      <label for="">ip_address</label>
                      <input name="ip_address" type="text" @error('ip_address') is-invalid @enderror"
                      value="{{ $viewpaidorders->ip_address }}" class="form-control" id="" placeholder=" Enter requested_amounts">
                  </div>
                  @error('ip_address')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror

                   <div class="form-group">
                      <label for="">Authorization code</label>
                      <input name="authorization_code" type="text" @error('authorization_code') is-invalid @enderror"
                      value="{{ $viewpaidorders->authorization_code }}" class="form-control" id="" placeholder=" Enter requested_amounts">
                  </div>
                  @error('authorization_code')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror

                   <div class="form-group">
                      <label for="">Country_code</label>
                      <input name="country_code" type="text" @error('country_code') is-invalid @enderror"
                      value="{{ $viewpaidorders->country_code }}" class="form-control" id="" placeholder=" Enter requested_amounts">
                  </div>
                  @error('country_code')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                 
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">brand</label>
                        <input name="brand" type="text" @error('brand') is-invalid @enderror"
                        value="{{ $viewpaidorders->brand }}" class="form-control" id="" placeholder="Price">
                    </div>
                    @error('brand')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    

                  <div class="form-group">
                    <label for="">Reusable</label>
                    <input name="reusable" type="text" @error('reusable') is-invalid @enderror"
                    value="{{ $viewpaidorders->reusable }}" class="form-control" placeholder="reusable">
                </div>
                @error('reusable')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                

                
           
                <div class="form-group">
                      <label for="">Sizes</label>
                      <input name="size" type="text" @error('size') is-invalid @enderror"
                      value="{{ $viewpaidorders->signature }}" class="form-control" id="" placeholder=" Enter sizes">
                  </div>
                  @error('size')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror

                  <div class="form-group">
                      <label for="">Domain</label>
                      <input name="domain" type="text" @error('domain') is-invalid @enderror"
                      value="{{ $viewpaidorders->domain }}" class="form-control" id="" placeholder=" Enter requested_amounts">
                  </div>
                  @error('domain')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror



                  <div class="form-group">
                      <label for="">Gateway_response</label>
                      <input name="gateway_response" type="text" @error('gateway_response') is-invalid @enderror"
                      value="{{ $viewpaidorders->gateway_response }}" class="form-control" id="" placeholder=" Enter requested_amounts">
                  </div>
                  @error('gateway_response')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror

                  <div class="form-group">
                      <label for="">channel</label>
                      <input name="channel" type="text" @error('channel') is-invalid @enderror"
                      value="{{ $viewpaidorders->channel }}" class="form-control" id="" placeholder=" Enter requested_amounts">
                  </div>
                  @error('channel')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror


                   
                <div class="card-footer">
                    <a class="btn btn-primary" href="{{ url('admin/paymentdetial/') }}">Back</a>
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