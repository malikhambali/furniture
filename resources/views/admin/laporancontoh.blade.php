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
        <h5>Untuk Pembuatan</h5>
        </center>
    </div>
    <br>
    <div class="content">
        <center>
                        
                                    <img src="{{ url('admin/image/'.$data['image']) }}" style="width:250px;"></a>
                            </center>
                            <center>
                            <td>
                                <h4>Rincian Barang</h4>
                                <tr>
                                    <td>Nama Barang</td><td>:</td>
                                    <td>{{ $data->nama_barang }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Barang</td><td>:</td>
                                    <td>{{ $data->jenis_barang }}</td>
                                </tr>
                                <tr>
                                    <td>Jumlah</td><td>:</td>
                                    <td>{{ $data->jumlah }}</td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td><td>:</td>
                                    <td>{{ $data->keterangan }}</td>
                                </tr>
                                
                                </td>
                            </table>
                            <table class="table table-bordered table-hover table-striped">
                             <td>
                             <h3>Biodata</h3>
                             </td>
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
                                    <td>{{ "+62".($data->no_telpon) }}</td>
                                </tr>
                                <tr>
                                    <td>email</td><td>:</td>
                                    <td>{{ $data->email }}</td>
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
