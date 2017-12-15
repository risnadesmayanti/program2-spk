<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prototype Sistem Pendukung Keputusan</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

       <?php include "nav.php"; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Kriteria</h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="co-lg-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Form Penambahan Kriteria
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <div class="form-group">
                                    <label>Kriteria</label>
                                    <input type="text" class="form-control" placeholder="Nama Kriteria" name="kriteria">
                                    <label>Deskripsi </label>
                                    <input type="text" class="form-control" placeholder="Deskripsi tentang kriteria yang ditambahkan">
                                    <button type="button" class="btn btn-success " name="simpan">Submit</button>
                                </div>
                            </form>
                            <?php
                                include('koneksi.php');
                                if(isset($_POST['simpan'])){
                                    $nama=$_POST['nama'];
                                    $tambah=mysql_query("insert into t_kriteria(id,n_kriteria)values('','$nama')");
                                    if($tambah){ ?>
                                        <div class="alert alert-success">
                                            <p>Berhasil Insert data</p>
                                        </div>
                                    <?php }
                                    else{ ?>
                                        <div class="alert alert-error">
                                            <p>Gagal Insert data</p>
                                        </div>
                                    <?php }
                                    
                                }
                            
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
