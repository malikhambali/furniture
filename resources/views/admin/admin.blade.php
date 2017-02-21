<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Furniture</title>

<link href="{{ url('admin/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('admin/css/datepicker3.css') }}" rel="stylesheet">
<link href="{{ url('admin/css/styles.css') }}" rel="stylesheet">

<!--Icons-->
<script src="{{ url('admin/js/lumino.glyphs.js') }}"></script>

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
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="{{ url('logout') }}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
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
			<li class="active"><a href="{{ url('admin/home') }}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></use></svg> Home</a></li>
			<li><a href="{{ url('admin/databarang') }}"><svg class="glyph stroked external hard drive"><use xlink:href="#stroked-external-hard-drive"/><</use></svg> Data Barang</a></li>
			<li><a href="{{ url('admin/inputbarang') }}"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Input Barang</a></li>


			<li class="parent ">

			<li role="presentation" class="divider"></li>
			<li><a href="{{ url('admin/datapesanan') }}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Data Pesanan</a></li>
			<li><a href="{{ url('admin/datapemesan') }}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Data Pesanan user</a></li>

		</ul>
		
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active"></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Welcome</h1>
			</div>
		</div><!--/.row-->
									
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{ $ruangtamu }}</div>
							<div class="text-muted">Jumlah Barang</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked email"><use xlink:href="#stroked-email"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{ $pesan }}</div>
							<div class="text-muted">Jumlah Pesanan</div>
						</div>
					</div>
				</div>
			</div>

				<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{ $mesan }}</div>
							<div class="text-muted">Pemesan</div>
						</div>
					</div>
				</div>
			</div>
			
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked heart"><use xlink:href="#stroked-heart"/></svg> Welcome :)</div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<fieldset>
								<!-- Name input-->
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message"> GOOD DAY :)</label>
								
								<!-- Form actions -->
							</fieldset>
						</form>
					</div>
				</div>
				
				
			</div><!--/.col-->
			
			<div class="col-md-4">
			
				<div class="panel panel-red">
					<div class="panel-heading dark-overlay"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Calendar</div>
					<div class="panel-body">
						<div id="calendar"></div>
					</div>
				</div>
				
				
								
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->
		  

	<script src="{{ url('admin/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ url('admin/js/bootstrap.min.js') }}"></script>
	<script src="{{ url('admin/js/chart.min.js') }}"></script>
	<script src="{{ url('admin/js/chart-data.js') }}"></script>
	<script src="{{ url('admin/js/easypiechart.js') }}"></script>
	<script src="{{ url('admin/js/easypiechart-data.js') }}"></script>
	<script src="{{ url('admin/js/bootstrap-datepicker.js') }}"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
