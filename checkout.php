

<!------------ Header starts --------------------->
<?php include('includes/header.php'); ?>
<!------------ Header ends ----------------------->

<!------------ Content wrapper starts -------------->

  <div class="content_wrapper">	  
  <div id="sidebar">
	  <div id="sidebar_title">Loại trang trí</div>
	  <ul id="cats">
	    
		
		<?php 
		getCats();
		?>
	  </ul>
	  
	  <div id="sidebar_title">Loại hoa</div>
	  <ul id="cats">
	    <?php 
		getBrands();
		?>
	  </ul>
	  
	</div><!-- /#sidebar -->
	<div id="content_area">	

  <div align="center" style="padding:20px; ">

  <h2 style="margin-bottom:5px; font-size:large; text-align:left">TUỲ CHỌN THANH TOÁN</h2>
  </br>
  </br>
  </br>
  </br>
  <b style="margin-left:-50px;">Pay with</b>&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://www.paypal.com"><img src="images/paypal.png" width="300" height="135"></a> <b &nbsp;>Or <a href="order.php">Pay Offline</b>
	 
</br>
</br>
</br>



	 <?php 	  
      //if(!isset($_SESSION['user_id'])){
	    // include('login.php');
	  //}else{
	    //include('payment.php');
	  //} 
	  
	  ?>  
	
	</div>
	</div>
  </div><!-- /.content_wrapper-->
  <!------------ Content wrapper ends -------------->
  
  <?php include ('includes/footer.php'); ?>
  
  
