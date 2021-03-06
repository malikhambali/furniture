<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Furniture</title>

<link href="{{url('admin/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{url('admin/css/datepicker3.css')}}" rel="stylesheet">
<link href="{{url('admin/css/bootstrap-table.css')}}" rel="stylesheet">
<link href="{{url('admin/css/styles.css')}}" rel="stylesheet">

<!--Icons-->
<script src="{{url('admin/js/lumino.glyphs.js')}}"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>F</span>URNITURE</a>
				<ul class="user-menu">
					<li>
					<a href="{{url('/')}}" >
					<svg  class="glyph stroked home">
					<use xlink:href="#stroked-home"/>
					</use>
					</svg>
					</a>
					</li>
					</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="{{ url('listfurniture') }}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> List barang</a></li>
			<li class="active"><a href="{{ url('pesanfurniture') }}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Pesan Barang</a></li>
			<li class="parent ">
	</ul>

	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Pesan Barang</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Pesan Sesuai keinginan anda</h1>


		
			
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-body tabs">
					<form method="POST" action="{{ url('pesanbarang') }}" enctype=multipart/form-data>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Input Barang</a></li>
							<li><a href="#tab2" data-toggle="tab">Data Diri Anda</a></li>
						</ul>
		
						<div class="tab-content">

							<div class="tab-pane fade in active" id="tab1">
							<div class="form-group">
					<label>Nama Barang</label>
					<input class="form-control" name="nama_barang" placeholder="">
						</div>
								<div class="form-group">
					<label>Jenis Barang</label>
					<input class="form-control" name="jenis_barang" placeholder="">
						</div>
						<div class="form-group">
				<label>Jumlah</label>
				<input class="form-control" type="number" name="jumlah" placeholder="">
			</div>
			    
							<div class="form-group">
				<label>image input</label>
				<input type="file" name="image">
				 <p class="help-block">Example block-level help text here.</p>
			</div>
				<div class="form-group">
					<label>Keterangan</label>
					<input class="form-control" name="keterangan" placeholder="">
						</div>
					




						</div>	
							<div class="tab-pane fade" id="tab2">
								
				<div class="form-group">
				<label>Nama Lengkap</label>
				<input class="form-control" name="namalengkap" placeholder="">
			</div>


				<div class="form-group">
				<label>Alamat</label>
				<input class="form-control" name="alamat" placeholder="">
			</div>
			    <td>No Telepon</td>
                                    <td>
                                        <div class="form-group input-group">
                                        	<span class="input-group-addon">+62</span>
                                            <input class="form-control" type="number" name="no_telpon" id="no_telpon" autocomplete="off" required>
                                            </div>
                                    </td>
                                </tr>
               	<div class="form-group">

				<label>Email</label>
				<input class="form-control" name="email" placeholder="">
			</div>

               
			<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>

						</div>
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->
			
		


			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->

	<script src="{{url('admin/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{url('admin/js/bootstrap.min.js')}}"></script>
	<script src="{{url('admin/js/chart.min.js')}}"></script>
	<script src="{{url('admin/js/chart-data.js')}}"></script>
	<script src="{{url('admin/js/easypiechart.js')}}"></script>
	<script src="{{url('admin/js/easypiechart-data.js')}}"></script>
	<script src="{{url('admin/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{url('admin/js/bootstrap-table.js')}}"></script>


</body>

</html>
