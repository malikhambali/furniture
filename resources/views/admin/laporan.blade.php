 <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('metro/css/metro.css') }}" rel="stylesheet">
    <link href="{{ url('metro/css/metro-icons.css') }}" rel="stylesheet">
    <link href="{{ url('metro/css/metro-responsive.css') }}" rel="stylesheet">
    <link href="{{ url('metro/css/css.css') }}" rel="stylesheet">

    <script src="{{ url('metro/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ url('metro/js/jquery.dataTables.min.js') }}"></script>

    <script src="{{ url('metro/js/metro.js') }}"></script>

<body onLoad="window.print()" class="bg-steel">
        
        <div class="example">
            <div class="panel">
    <div class="heading" style="background-color:#eceaea; margin:auto; box-shadow:0 5px 10px grey; height:70px; width:57%;">
        <font color="black">
        <center>
        <h4>FURNITURE</h4>
        </center>
    </div>
    <br>
    <div class="content">
        <center>
                              <img src="{{ url('admin/image/'.$data['image_barang']) }}" style="width:250px;"></a>
                           </center>
            <center>
                    <table class="batas">
                  
                            <tr>
                            <td>Barang</td>
                            <td>{{ $data->id_barang }}</td>
                      </tr> 
                            

                          

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
                                    <td>{{ "+62".$data->no_telp }}</td>
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
                           
                     <br>
                    </table>
            </center>
            <br>
    </div>
</div>
        </div>


    <!--materialize js-->    <!--prism-->
    <!--scrollbar-->
    <!-- chartist -->
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->


                </div>
            </div>
        </div>
    </div>
</body>
