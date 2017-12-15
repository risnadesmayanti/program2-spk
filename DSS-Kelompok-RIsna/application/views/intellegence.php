<!doctype html>
<html class="no-js" lang="en">
<!-- header -->
<?php $this->load->view('header'); ?>

<body>

<!-- sidebar -->

    
    <!-- Page Container / body -->
    <div id="wrapper">

        <!-- Navigation -->
        <?php $this->load->view('navigate'); ?>
     

        <div id="page-wrapper">
        <?php $this->load->view('int'); ?>
		 
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


	<!-- Modal -->
	<!-- Modal : Input Not Valid -->
	<div class="modal fade" id="inputwarn" role="dialog" style="padding-top: 200px">
	    <div class="modal-dialog modal-sm">
	      	<div class="modal-content">
	        	<div class="modal-body">
	        		<div class="alert alert-danger" role="alert">
	        		<h1 align="center" style="font-size: 300%"><span class="glyphicon glyphicon-remove-sign aria-hidden="true"></span></h1>
		          	<h5 align="center" style="color: grey;">Input Data Belum Terisi Dengan Benar</h5>
		          	</div>
			    </div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
	      	</div>	      
	    </div>
  	</div>
  	<!-- Modal : Input Was Reset -->
  	<div class="modal fade" id="inputres" role="dialog" style="padding-top: 200px">
	    <div class="modal-dialog modal-sm">
	      	<div class="modal-content">
	        	<div class="modal-body">
	        		<div class="alert alert-success" role="alert">
	        		<h1 align="center" style="font-size: 300%"><span class="glyphicon glyphicon-erase aria-hidden="true"></span></h1>
		          	<h5 align="center" style="color: grey;">Input Data  Telah Direset</h5>
		          	</div>
			    </div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
	      	</div>
	      
	    </div>
  	</div>

</body>
</html>
