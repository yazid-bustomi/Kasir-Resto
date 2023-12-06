<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="{{ asset('img/resto.png') }}">
  <title>{{ $title }}</title>
  <!-- Bootstrap -->
  <link href="/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
  <!-- Animate.css -->
  <link href="/animate.css/animate.css" rel="stylesheet" type="text/css" />
  <!-- Font Awesome iconic font -->
  <link href="/fontawesome/css/fontawesome-all.css" rel="stylesheet" type="text/css" />
  <!-- Magnific Popup -->
  <link href="/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
  <!-- Slick carousel -->
  <link href="/slick/slick.css" rel="stylesheet" type="text/css" />
  <!-- Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Oswald:300,400,500,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <!-- Theme styles -->
  <link href="/css/dot-icons.css" rel="stylesheet" type="text/css">
  <link href="/css/theme.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <script src="https://kit.fontawesome.com/5f52f05008.js" crossorigin="anonymous"></script>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }


    .navbar a {
      float: right;
      font-size: 16px;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .dropdown {
      float: left;
    }

    .dropdown .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    .dropdown-content {
      display: none;
      width: 150px;
      position: absolute;
      background-color: #E7F6F2;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    }

    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }


    .dropdown:hover .dropdown-content {
      display: block;
    }
  </style>
</head>

<body class="body">

  <header class="header header-horizontal header-view-pannel">
    <div class="container">
      <nav class="navbar">




        {{-- @if (!Auth::check())
        <a class="nav-link text-decoration-none text-white" href="/login">Login</a>
        @else --}}

        <button class="navbar-toggler" type="button">
          <span class="th-dots-active-close th-dots th-bars">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </button>
        <div class="navbar-collapse">
          <ul class="navbar-nav">
            
          </ul>
          <div class="navbar-extra">
            <a class="btn-theme btn" style="background-color: #395B64; border-radius: 15px"
              href="{{route('logout')}}">Logout</a>&nbsp;

              <a type="button" class="btn-theme btn position-relative mr-3"
                style="background-color: #395B64; border-radius: 15px; color: white; height: 55px; padding-top: 10px">
                <h2><i class="bx bx-cart" style="font-size: 24px;"></i></h2>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill badge-danger">
                    0
                </span></a>&nbsp;

              <a class="btn-theme btn  ml-3 text-light" style="background-color: #395B64; border-radius: 15px"
                  href="{{route('Home-user')}}">Kembali</a>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <br><br><br>

  <h2 align="center">Our Menu</h2>

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-Dessert">Desserts</li>
            <li data-filter=".filter-Drinks">Drinks</li>
            <li data-filter=".filter-Maincourse">Maincourse</li>
            <li data-filter=".filter-Snack">Snack</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" style="padding-left:10%">
        @foreach($Produk as $d)
        <div class="col-lg-3 col-md-6 portfolio-item filter-{{$d->nama_kategori}} "
          style="background-color:#222831;padding:0px;border-radius:30px;margin-left:30px;">
          <img class="card-img-top" src="{{ asset('uploads/' . $d->gambar_produks) }}" alt="Card image"
            style="border-radius:30px 30px 0px 50px">
          <div class="card-body" style="color:white;padding:30px;">
            <h4 class="card-title">{{$d->nama_produks}}</h4>
            <p class="card-text">Rp {{$d->harga_produks}}</p>


            <a class="btn btn-warning" data-toggle="modal" data-target="#exampleModals{{$d->id_produks}}"
              title="App 1">Lihat Produk</a>
            <a class="btn btn-success" data-toggle="modal" data-target="#exampleModal{{$d->id_produks}}"
              title="App 1">Order <i class="bx bx-cart"></i></a>
          </div>



        </div>


        <div class="modal fade" id="exampleModals{{$d->id_produks}}" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog " role="document">
            <div class="modal-content card" style="background-color:#E7F6F2">
              <img class="card-img-top" src="{{ asset('storage/img/uploads/' . $d->gambar_produks) }}" alt="Card image">
              <div class="card-body" align="center">
                <h4 class="card-title">{{$d->nama_produks}}</h4>
                <p class="card-text"><b>Harga: </b> {{$d->harga_produks}}</p>
                <p class="card-text"><b>Deskripsi: </b> </p>
                <p class="card-text">{{$d->deskripsi_produks}}</p>
                <p class="card-text"><b>stok_produks: </b> {{$d->stok_produks}}</p>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
              </div>



            </div>
          </div>
        </div>


        <div class="modal fade" id="exampleModal{{$d->id_produks}}" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            <form method="post" action="{{ route('add_cart') }}" enctype="multipart/form-data">
              @csrf
              <div class="modal-content" style="background-color:#E7F6F2">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Pembelian Barang</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <div class="row">
                    <label class="col-sm-3">Kuantitas</label>
                    <div class="col-sm-6">
                      <div class="input-group ">
                        <span class="input-group-btn">
                          <button type="button" class="quantity-left-minus btn  btn-number" data-type="minus"
                            data-field="">
                            <i class="bx bx-minus"></i>
                          </button>
                        </span>
                        <input type="number" id="quantity" name="jumlah" class="form-control input-number" value="10"
                          min="1" max="100">
                        <input type="hidden" id="id_produk" name="id_produk" value="{{$d->id_produks}}">
                        <span class="input-group-btn">
                          <button type="button" class="quantity-right-plus btn  btn-number" data-type="plus"
                            data-field="">
                            <i class="bx bx-plus"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                    <label class="col-sm-3">Tersisa {{$d->stok_produks}} Buah</label>
                  </div>


                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Beli Sekarang</button>
                  <input type="submit" class="btn btn-primary" value="Masukan Keranjang">
                </div>
              </div>
            </form>
          </div>
        </div>




        @endforeach


      </div>
  </section><!-- End Portfolio Section -->



        <a class="scroll-top disabled" href="#"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
        <footer class="flex-shrink-0 section-text-white footer footer-links" >
                
            <div class="footer-copy">
                <div class="container text-white-50"><strong>&copy; </strong>
                  All rights reserved.</div>
            </div>
        </footer>
        
        <!-- jQuery library -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Paralax.js -->
        <script src="/parallax.js/parallax.js"></script>
        <!-- Waypoints -->
        <script src="/waypoints/jquery.waypoints.min.js"></script>
        <!-- Slick carousel -->
        <script src="/slick/slick.min.js"></script>
        <!-- Magnific Popup -->
        <script src="/magnific-popup/jquery.magnific-popup.min.js"></script>
        <!-- Inits product scripts -->
        <script src="/js/script.js"></script>
  <a class="scroll-top disabled" href="#"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
  <footer class="flex-shrink-0 section-text-white footer footer-links">

    <div class="footer-copy">
      <div class="container text-white-50"><strong>&copy; </strong>
        All rights reserved.</div>
    </div>
  </footer>

  <!-- jQuery library -->
  <script src="/js/jquery-3.3.1.js"></script>
  <!-- Bootstrap -->
  <script src="/bootstrap/js/bootstrap.js"></script>
  <!-- Paralax.js -->
  <script src="/parallax.js/parallax.js"></script>
  <!-- Waypoints -->
  <script src="/waypoints/jquery.waypoints.min.js"></script>
  <!-- Slick carousel -->
  <script src="/slick/slick.min.js"></script>
  <!-- Magnific Popup -->
  <script src="/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Inits product scripts -->
  <script src="/js/script.js"></script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ4Qy67ZAILavdLyYV2ZwlShd0VAqzRXA&callback=initMap"></script>
  <script async defer src="https://ia.media-imdb.com/images/G/01/imdb/plugins/rating/js/rating.js"></script>
</body>
<script>
  $(document).ready(function(){

        var quantitiy=0;
          $('.quantity-right-plus').click(function(e){
                
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());
                
                // If is not undefined
                    
                    $('#quantity').val(quantity + 1);

                  
                    // Increment
                
            });

            $('.quantity-left-minus').click(function(e){
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());
                
                // If is not undefined
              
                    // Increment
                    if(quantity>0){
                    $('#quantity').val(quantity - 1);
                    }
            });
            
        });
</script>

</html>