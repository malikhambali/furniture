<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Furniture</title>

<link href="{{ url('admin/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('admin/css/datepicker3.css') }}" rel="stylesheet">
<link href="{{ url('admin/css/bootstrap-table.css') }}" rel="stylesheet">
<link href="{{ url('admin/css/styles.css') }}" rel="stylesheet">


<script src="{{ url('admin/js/lumino.glyphs.js') }}"></script>


<script src="{{ url('js/html5shiv.js') }}"></script>
<script src="{{ url('js/respond.min.js') }}"></script>


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
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="/"><svg class="glyph stroked male-user"><use xlink:href="stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div>
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
		
			<li><a href="{{ url('admin/home') }}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></use></svg> Home</a></li>
			<li><a href="{{ url('admin/databarang') }}"><svg class="glyph stroked external hard drive"><use xlink:href="#stroked-external-hard-drive"/><</use></svg> Data Barang</a></li>
			<li><a href="{{ url('admin/inputbarang') }}"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Input Barang</a></li>


			<li class="parent ">

			<li role="presentation" class="divider"></li>
			<li><a href="{{ url('admin/datapesanan') }}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Data Pesanan</a></li>
			<li class="active"><a href="{{ url('admin/datapemesan') }}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Data Pesanan user</a></li>
		</ul>

	</div>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Detail Pemesan</li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Detail Pemesan</h1>

					<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked tag"><use xlink:href="#stroked-tag"/></svg> Detail
		
			<a href="{{ url('admin/laporan/'.$data->id) }}"  type="submit" class=" col-sm-offset-8  btn btn-primary"><svg class="glyph stroked printer"  style="width:48px;height:22px; margin:2px"><use  xlink:href="#stroked-printer"/></svg></a>
</div>
					<div class="panel-body">
						<fieldset>  
				 <table class="table table-bordered table-hover table-striped">
				 				 

                                
                         
                            <tr>
                            <td>Barang</td>
                            <td>{{ $data->id_barang }}</td>
                      </tr>
                      	      <a href="{{ url('admin/image/'.$data['image_barang']) }}" class="col-lg-12" target="_blank"><img src="{{ url('admin/image/'.$data['image_barang']) }}" style="width:250px;"></a>
                            
                            

                          

                                <tr>
                                    <td>Nama Lengkap</td><td>:</td>
                                    <td>{{ $data->namalengkap }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td><td>:</td>
                                    <td>{{ $data->alamat }}</td>
                                </tr>
                                <tr>
                                    <td>No Telepon</td><td>:</td>
                                    <td>{{ $data->no_telp }}</td>
                                </tr>
                              	<tr>
                                    <td>email</td><td>:</td>
                                    <td>{{ ($data->email) }}</td>
                                </tr>
                                <tr>
                                    <td>Jumlah</td><td>:</td>
                                    <td>{{ $data->jumlah }}</td>
                                </tr>
                              	
                                </td>
                            </table>
                       


							</fieldset>

						</form>
					</div>
				</div>


		
		

			</div>
		</div>
	</div>


	<script src="{{ url('admin/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ url('admin/js/bootstrap.min.js') }}"></script>
	<script src="{{ url('admin/js/chart.min.js') }}"></script>
	<script src="{{ url('admin/js/chart-data.js') }}"></script>
	<script src="{{ url('admin/js/easypiechart.js') }}"></script>
	<script src="{{ url('admin/js/easypiechart-data.js') }}"></script>
	<script src="{{ url('admin/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ url('admin/js/bootstrap-table.js') }}"></script>


</body>

</html>
