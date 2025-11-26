
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>-</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{  asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{  asset('assets/dist/css/adminlte.min.css') }}">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style>
    .logo{
      width: 200px;
      height: 100px;
      margin-left: 20px;
      position: relative;
      /* top: 90px; */
    }
    .fline{
      border: 0; 
      border-top: 4px solid green;
      margin-top: -10px;
      margin-bottom: 20px;
      
    }
   
    .watermark {
  position: fixed;
  top: 30%;
  left: 25%;
  width: 50%;
  text-align: center;
  opacity: 0.1;
  z-index: 0;
}

.watermark img {
  width: 1000px; /* Adjust the size as needed */
  height: 1000px; /* Maintain aspect ratio */
  /* height: 100%; */
  position: relative;
  left: -220px;
}
  
  </style>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-2 invoice-col">
        <address>
          <img class="logo" src="{{ asset('assets/dist/img/letter.png') }}">
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-6 invoice-col">
        <address>
            <h1 style="text-align: center; color: #009f79; font-weight: bold; font-size: 45px;">Bridging-Health Int’l</h1>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
         <address>
          929 N Spring Ave St. Louis, MO 63108<br>
         <strong>Email:</strong> info@bridging-health.org, <br>
          <strong>Phone:</strong> P +1 (314) 648-2047<br>
          <strong>Website:</strong> https://bridging-healthintl.net/<br>
          
        </address>
      </div>
    </div>
    <!-- /.row -->
  <hr class="fline">
  <!-- <hr class="senline"> -->

<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    
    <div class="row">
      <div class="col-12 table-responsive">
       <!-- <h2 style="text-align: center; text-transform: uppercase; font-weight: bold; margin-top: 30px;">{{ $print_letter->title }}</h2> -->
       <p style="text-align: justify; font-size: 40px !important;">{!! $print_letter->body !!}</p>
       <div class="watermark">
  <img src="{{ asset('assets/dist/img/letter.png') }}" alt="Watermark">
</div>
    </p>
    



    
   
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    
  </section>

   
</div>
<!-- ./wrapper -->
<!-- <footer>
    This is a footer line.
  </footer> -->
<!-- <script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script> -->
<script>
  window.onload = function () {
    setTimeout(() => {
      window.print();
    }, 500);
  };
</script>

</body>
</html>
