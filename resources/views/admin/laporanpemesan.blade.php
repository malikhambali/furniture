<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <link rel='shortcut icon' type='image/x-icon' href='../../favicon.ico' />

    <title>Furniture</title>

    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('metro/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('metro/css/metro.css') }}" rel="stylesheet">
    <link href="{{ url('metro/css/metro-icons.css') }}" rel="stylesheet">
    <link href="{{ url('metro/css/metro-responsive.css') }}" rel="stylesheet">
<script>
  $(document).ready(function() {
    $('select').metro_select();
  });
  </script>

    <script src="{{ url('metro/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ url('metro/js/jquery.dataTables.min.js') }}"></script>

    <script src="{{ url('metro/js/metro.js') }}"></script>

    <style>
        html, body {
            height: 100%;
        }
        body {
        }
        .page-content {
            padding-top: 3.125rem;
            min-height: 100%;
            height: 100%;
        }
        .table .input-control.checkbox {
            line-height: 1;
            min-height: 0;
            height: auto;
        }

        @media screen and (max-width: 800px){
            #cell-sidebar {
                flex-basis: 52px;
            }
            #cell-content {
                flex-basis: calc(100% - 52px);
            }
        }
    </style>

    <script>
        function pushMessage(t){
            var mes = 'Info|Implement independently';
            $.Notify({
                caption: mes.split("|")[0],
                content: mes.split("|")[1],
                type: t
            });
        }

        $(function(){
            $('.sidebar').on('click', 'li', function(){
                if (!$(this).hasClass('active')) {
                    $('.sidebar li').removeClass('active');
                    $(this).addClass('active');
                }
            })
        })
    </script>
</head>
<body onLoad="window.print()" class="bg-steel">
    <div class="app-bar fixed-top darcula" data-role="appbar" style="background-color:#03A9F4; box-shadow:0 5px 10px grey; height:11%;">
        
        <br><center><h1>FURNITUTRE</h1></center>
        <span Eclass="app-bar-divider"></span>
        

        
    </div>

    <div class="page-content">
        <div class="flex-grid no-responsive-future" style="height: 100%;">
            <div class="row" style="height: 100%">
                
                <div class="cell auto-size padding20 bg-white" ><br><br><br><br>
                    <table class="dataTable border bordered">
                        <thead>
                        <tr>
                            <td class="sortable-column">ID</td>
                            <td class="sortable-column">Nama Pemesan</td>
                            <td class="sortable-column">Alamat</td>
                            <td class="sortable-column">no Telepon</td>
                            <td class="sortable-column">Jumlah</td>
                            <td class="sortable-column">Gambar</td>
                            <td class="sortable-column">email</td>
                        </tr>
                        </thead>
                        <tbody>
                      <tr>
                            
                            <td class="sortable-column"><?php echo "1";?></td>
                            <td class="sortable-column"><?php echo $key['namalengkap'];?></td>
                            <td class="sortable-column"><?php echo $key['alamat'];?></td>
                            <td class="sortable-column"><?php echo $key['no_telp'];?></td>
                            <td class="sortable-column"><?php echo $key['jumlah'];?></td>
                            <td class="sortable-column"><?php echo $key['image'];?></td>
                            <td class="sortable-column"><?php echo $key['email'];?></td>
                        </tr>
                        </tr>
                    </tbody>
                    </table>
                    <br><br><br><br>
                </div>
            </div>
        </div>
    </div>
</body>
</html>