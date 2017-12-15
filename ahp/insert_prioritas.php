<!DOCTYPE html>
<html>
  <head>
	<title>Bootstrap 101 Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css"/>

	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script>

  </head>
  <body>
  <div class="container">
	<div class="row-fluid">
		<img src="images/atas.png" />
	</div>
	<div class="navbar">
				<div class="navbar-inner">
					<ul class="nav">   
						<li>
							<a href=""><i class="icon-home"></i> Home</a>
						</li>                        
						<li>
							<a href="proses.php"> Proses</a>                               
						</li>
						<li>
							<a href=""> Gallery</a>                                
						</li>
					</ul>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span2">
					<ul class="nav nav-list">
					  <li class="nav-header">Main menu</li>
					  <li class="active"><a href="#">Home</a></li>
					  <li><a href="insert_kriteria.php">Input Kriteria</a></li>
					  <li><a href="insert_prioritas.php">Input Prioritas</a></li>
					</ul>
					<ul class="nav nav-list">
					  <li class="nav-header">Laporan</li>
					  <li class="active"><a href="#">Grafik</a></li>
					  <li><a href="#">Laporan</a></li>
					  <li><a href="#">Laporan</a></li>
					</ul>
				</div>
				<div class="span10">
						<h4>Input Prioritas</h4>
						<legend></legend>
						<div class="span4">
							<form method="post" action="">
							  <fieldset>
								<label>Nama Prioritas</label>
								<input type="text" name="nama" placeholder="Nama Prioritas">
								<span class="help-block"></span>
								<button type="submit" name="simpan" class="btn btn-primary">Submit</button>
							  </fieldset>
							</form>
							<?php
								include('koneksi.php');
								if(isset($_POST['simpan'])){
									$nama=$_POST['nama'];
									$tambah=mysql_query("insert into Prioritas(id_prioritas,nama_prioritas)values('','$nama')");
									if($tambah){ ?>
										<div class="alert alert-success">
										  <button type="button" class="close" data-dismiss="alert">&times;</button>
										  <strong>Sukses</strong> Berhasil Insert Data Prioritas.
										</div>
									<?php }
									else{ ?>
										<div class="alert alert-error">
										  <button type="button" class="close" data-dismiss="alert">&times;</button>
										  <strong>Sukses</strong> Berhasil Insert Data Prioritas.
										</div>
									<?php }

								}

							?>
						</div>		
						<div class="span7">
						<div class="hero">
							<table class="table">
								<tr>
									<th>No.</th><th width="210px">Nama Prioritas</th><th>Aksi</th>
								</tr>

									<?php
										include('koneksi.php');
										$no=1;
										$sql=mysql_query("select * from prioritas order by id_prioritas asc");
										while($row=mysql_fetch_array($sql)){
									?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $row['nama_prioritas'];  ?></td>
									<td><a href="editp.php?id=<?php echo $row['id_prioritas']; ?>" title="Edit"><button type="submit" class="btn btn-primary"><i class="icon-edit"></i></button></a>
									&nbsp;<a href="hapusp.php?id=<?php echo $row['id_prioritas']; ?>" title="Hapus"><button type="submit" class="btn btn-primary"><i class=" icon-trash"></i></button></a></td>
								</tr>
								<?php $no++; } ?>
							</table>
						</div>	
					</div>
				</div>

	</div>

	<div class="row-fluid">
		<div class="footer text-center"><small>&copy; 2013 - Aplikasi AHP Indra Kusuma</small></div>
	</div>
  </div>


  </body>
</html>



