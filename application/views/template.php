<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/cctv.png">
  <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/tvip.png">
  <title>
    BA Stock Opname Asset ICT
  </title>
  <!--     Fonts and icons     -->
  <link href="<?=base_url()?>assets/css/font.css" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?=base_url()?>assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?=base_url()?>assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?=base_url()?>assets/demo/demo.css" rel="stylesheet" />
  <link href="<?=base_url()?>assets/css/dataTables.bootstrap4.css" rel="stylesheet" /><!--
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />-->
  <link href="<?=base_url()?>assets/css/sweetalert.css" rel="stylesheet">		
  <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">		
  <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">		
  <script type="text/javascript" src="<?=base_url() ?>assets/js/plugins/sweetalert.min.js"> </script> 
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"> </script>
  <script src="<?=base_url()?>assets/js/html5-qrcode.min.js"></script>
<script>
    function docReady(fn) {
        // see if DOM is already available
        if (document.readyState === "complete"
            || document.readyState === "interactive") {
            // call on next available tick
            setTimeout(fn, 1);
        } else {
            document.addEventListener("DOMContentLoaded", fn);
        }
    }

    docReady(function () {
        var resultContainer = document.getElementById('qr-reader-results');
        var lastResult, countResults = 0;
        function onScanSuccess(decodedText, decodedResult) {
            if (decodedText !== lastResult) {
                ++countResults;
                lastResult = decodedText;
                // Handle on success condition with the decoded message.
                console.log(`Scan result ${decodedText}`, decodedResult);
                // alert(`${decodedText}`, decodedResult);
                $("#barcode").val(`${decodedText}`, decodedResult); 
                html5QrcodeScanner.clear();
                search();
                
            }
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
    });
</script>
  <script>
  	$(document).ready(function () {
	    $('#dataTable').DataTable({
	    	dom: 'Bfrtip',
        	buttons: [
            	'copy', 'csv', 'excel','print'
        	]
	    });
	}); 
  </script>
  <style>
  	.dataTables_length label, .dataTables_filter label  {
  		display: inline-flex;
  		margin-bottom: 0.5rem;
  		vertical-align: middle;
  		line-height: 2;
  	}
  	.dataTables_length .form-control{
		vertical-align: middle;
	}
  	.dataTables_filter {
  		text-align: right;	
  	}
  	.paginate_button .page-link{
		color: #000;
	}
	.modal{
		top: -87px!important;
	}
  </style>
</head>

<body class="white-content body">
  <div class="wrapper">
    <?php $this->load->view('layout/sidebar')?>
    <div class="main-panel" data="blue">
      <!-- Navbar -->
      <?php $this->load->view('layout/navbar')?>
      <!-- End Navbar -->
      <div class="content">
        <?php echo $contents?>
      </div>
      <?php $this->load->view('layout/footer')?>
    </div>
  </div>


  <!--   Core JS Files   -->
  <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
  <!--<script src="<?=base_url()?>assets/js/core/jquery.min.js"></script>-->
  <script src="<?=base_url()?>assets/js/core/popper.min.js"></script>
  <script src="<?=base_url()?>assets/js/core/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?=base_url()?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?=base_url()?>assets/js/black-dashboard.min.js?v=1.0.0"></script>
<?php if ($this->session->flashdata('welcome')) { ?>
	<script>
		$.notify({
			icon: "fa fa-check-circle",
			message: "<?=$this->session->flashdata('welcome')?>"
		},{
			type: "success",
			allow_dismiss: false,
			placement: {
				from: "top",
				align: "center"
			},
			animate: {
				enter: 'animated fadeInDown',
				exit: 'animated fadeOutUp'
			},
		});
   </script>
<?php }elseif ($this->session->flashdata('saved')) {?>
	<script>
		$.notify({
			icon: "fa fa-check-circle",
			message: "<?=$this->session->flashdata('saved')?>"
		},{
			type: "success",
			allow_dismiss: false,
			placement: {
				from: "top",
				align: "center"
			},
			animate: {
				enter: 'animated fadeInDown',
				exit: 'animated fadeOutUp'
			},
		});
   </script>
<?php }elseif ($this->session->flashdata('error')) {?>
	<script>
		$.notify({
			icon: "fa fa-times-circle",
			message: "<?=$this->session->flashdata('error')?>"
		},{
			type: "danger",
			allow_dismiss: false,
			placement: {
				from: "top",
				align: "center"
			},
			animate: {
				enter: 'animated fadeInDown',
				exit: 'animated fadeOutUp'
			},
		});
   </script>
<?php } ?>

<script>
function search(){
	$.ajax({        
		type: "POST", // Method pengiriman data bisa dengan GET atau POST        
		url  : "<?php echo base_url()?>home/getbarcode", // Isi dengan url/path file php yang dituju        
        data: {barcode : $("#barcode").val()},// data yang akan dikirim ke file proses        
        dataType: "json",        
        beforeSend: function(e) {            
        	if(e && e.overrideMimeType) {                
        		e.overrideMimeType("application/json;charset=UTF-8");            
        	}    
        },    
        success: function(response){ // Ketika proses pengiriman berhasil     
	        	  	 // Jika isi dari array status adalah success  
	    	if(response){
	    		getar();
		   		$("#namaasset").val(response.namaasset);        
	        	$("#merk").val(response.merk);
				$("#type").val(response.type);
				$("#user").val(response.user);
				$("#depo").val(response.depo);
				$("#lokasi").val(response.lokasi);
				$("#masterstock").val(response.masterstock);
				$("#kondisi").val(response.kondisi);
				$("#keterangan").val(response.keterangan);
			}else{
			 	alert("Data Tidak ditemukan!");
			}
	        	  		   
	        	  	   
        },        
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error      
        	alert(xhr.responseText);        
        }    
    });
}
function getar(){
	window.navigator.vibrate([300,0]);
}
$(document).ready(function(){  
	$("#barcode").keyup(function(){ // Ketika user menekan tombol di keyboard    
		if(event.keyCode == 13){ // Jika user menekan tombol ENTER      
			search(); // Panggil function search    
		}  
	});
});
</script>
</body>

</html>