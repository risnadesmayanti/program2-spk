
<div class="row-fluid">
		<img style='width:100%' src="images/header.png" />
	</div>
<div class="navbar">
				<div class="navbar-inner">
					<ul class="nav">   
						<li>
							<a style='color:#fff' href="index.php"> Home Page</a>
						</li>   
						<li>
							<a style='color:#fff' href="about.php"> About Us</a>                                
						</li>
				<?php /*
					if ($_SESSION[username] == '' AND $_SESSION[namauser] == ''){
						echo "<li>
								<a style='color:#fff' href='laporan_akhir.php'> Informasi Beasiswa</a>                                 
							  </li>
							  <li>
								<a style='color:#fff' href='login.php'> Login Peserta</a>                                
							  </li>
							  <li>
								<a style='color:#fff' href='admin.php'> Login Admin</a>                                
							  </li>";
					}elseif ($_SESSION[username] != ''){
				?>
						<li>
							<a style='color:#fff' href="mahasiswa.php"> Mahasiswa</a>                                
						</li>
						<li>
							<a style='color:#fff' href="logout.php"> Logout</a>                                
						</li>
				<?php
					}
					
					if (empty($_SESSION[namauser])){
					
					}else{
					*/	
				?>		
						<li>
							<a style='color:#fff' href="mahasiswa.php"> Mahasiswa</a>                                
						</li>
						<li>
							<a style='color:#fff' href="proses.php"> Proses Keputusan</a>                                 
						</li>
						<li>
							<a style='color:#fff' href="#tab6" data-toggle="tab"> Perhitungan AHP</a>                                 
						</li>
						<li>
							<a style='color:#fff' href="#tab7" data-toggle="tab"> Hasil Keputusan</a>                                 
						</li>
						<li>
							<a style='color:#fff' href="laporan_akhir.php"> Laporan Hasil Akhir</a>                                 
						</li>
						<!-- <li>
							<a style='color:#fff' href="logout.php"> Logout</a>                                
						</li> -->
				<?php
					// }
				?>
					</ul>
				</div>
			</div>