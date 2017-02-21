<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Furniture</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ url('aset/css/bootstrap.min.css') }}" type="text/css">

    <!-- Custom Fonts -->
    <link href="{{ url('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') }}" rel='stylesheet' type='text/css'>
    <link href="{{ url('http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic')}}" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ url('font-awesome/css/font-awesome.min.css') }}" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ url('aset/css/animate.min.css') }}" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ url('aset/css/creative.css') }}" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Furniture</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Tentang</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Pemesanan</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#kue">FURNITURE</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1><font color="#FFFFFF">SELAMAT DATANG DI FURNITURE</font></h1>
                <hr>
           <!--          <form method="POST" action="{{ url('pesanfurniture') }}"> 
                    <input type="hidden" name="username" value="sandy">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="password" value="5162">
            -->     <a href="{{ url('pesanfurniture') }}" class="btn btn-primary btn-xl page-scroll">PESAN FURNITURE DISINI !</a>
              
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Tentang Furniture</h2>
                    <hr class="light">
                    <p class="text-faded">Menerima Pemesanan Furniture secara online. User hanya perlu memasukan data diri dengan lengkap beserta Desain Furniture yang diinginkan</p>
                    <a href="#" class="btn btn-default btn-xl">Pesan Sekarang!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">CARA PEMESANAN FURNITURE</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
                        <h3>Pertama</h3>
                        <p class="text-muted">Masukan data diri dan alamat lengkap</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Kedua</h3>
                        <p class="text-muted">Jumlah Pensanan Furniture Sesuai Yang Dibutuhkan</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Ketiga</h3>
                        <p class="text-muted">Jika Sudah Admin akan mengecek dan menghubungi Pemesan</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Keempat</h3>
                        <p class="text-muted">Pesanan pun akan segera dibuat</p>
                    </div>
                </div>
              <div class="col-lg-12 text-center">
              <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" position="center" data-wow-delay=".3s"></i>
                        <h3>Kelima </h3>
                        <p class="text-muted">Jika ingin mengetahui daftar, dan beberapa contoh furniture. Bisa diliat di Daftar furniture</p>
                        <br><br>
                        <a href="{{ url('listfurniture') }}" class="btn btn-primary btn-xl page-scrol">Lihat Daftar</a>
                        </br></br> 
                    </div>
                </div>

            
            </div>
        </div>
    </section>
    <br><br>

    <section class="no-padding" id="kue">
     <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Beberapa Tampilan Furniture</h2>
                    <hr class="primary">
                    <div class="row no-gutter">
                    @foreach($data as $key)
                        <div class="col-lg-4 col-sm-6">
                            <a href="#" class="kue-box">
                                <img src="{{ url('admin/image/'.$key->image) }}" alt="">
                                <div class="kue-box-caption">
                                    <div class="kue-box-caption-content">
                                        <div class="project-category text-faded">
                                            {{$key->namabarang}}
                                            
                                        </div>
                                        <div class="project-category text-faded">
                                            Rp. {{$key->harga}}
                                        </div>
                                        
                                        <div class="project-name">
                                  
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        
       
        <div class="container-fluid">
            <div class="row no-gutter">
        
                
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Service FURNITURE</h2>
                <a href="#" class="btn btn-default btn-xl wow tada">Pesan Furniture ?</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Kontak</h2><br>
                    <hr class="primary">
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p> <u></u></p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">https://www.facebook.com/malikhambali73</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="{{ url('aset/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('aset/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ url('aset/js/jquery.easing.min.js') }}"></script>
    <script src="{{ url('aset/js/jquery.fittext.js') }}"></script>
    <script src="{{ url('aset/js/wow.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ url('aset/js/creative.js') }}"></script>

</body>

</html>
