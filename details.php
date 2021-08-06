
<?php include('includes/header.php'); ?>
  
  <!-- <div class="menubar">
    <ul id="menu">
	  <li><a href="index.php">Home</a></li>
	  <li><a href="all_products.php">All Products</a></li>
	  <li><a href="customer/my_account.php">My Account</a></li>
	  <li><a href="cart.php">Shopping Cart</a></li>
	  <li><a href="contact.php">Contact Us</a></li>
	</ul>
  </div> -->
  
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
	  <div id="products_box">
	    
		<?php 
		if(isset($_GET['pro_id'])){
		  $product_id = $_GET['pro_id'];
		  
		  $run_query_by_pro_id = mysqli_query($con, "select * from products where product_id='$product_id' ");
		  
		  while($row_pro = mysqli_fetch_array($run_query_by_pro_id)){
		  
			  $pro_id = $row_pro['product_id'];
			  $pro_cat = $row_pro['product_cat'];
			  $pro_brand = $row_pro['product_brand'];
			  $pro_title = $row_pro['product_title'];
			  $pro_price = $row_pro['product_price'];
			  $pro_image = $row_pro['product_image'];	
			  $pro_desc = $row_pro['product_desc'];		  
		  
		  echo "
		      <div id='single_product'>
			   
				<div class='row content-row'>
				
					<div class='product-image'>
					<h3 style='text-align:center;font-size:25px;margin-bottom:10px; margin-top:15px; color:red'>$pro_title</h3>
						<img src='admin_area/product_images/$pro_image' width='200' height='265'  />
						
					</div>
					<div class='product-info'>
						<p style='text-align:left; font-size:25px; margin-top:20px; color: #8B0000 '><b> Giá tiền: $ $pro_price </b></p></br>
						<p style='text-align:left'>Chi tiết thiết kế: </br>
						Một bình hoa được florist nhà HungFlower</br>
						thiết kế bởi những bông hoa nhập khẩu châu</br>
						châu Âu cực kì tươi mới và vô cùng sang trọng. </br>
							
						Một mẫu bình hoa mang tính nghệ thuật cao,</br>
						dành cho những vị khách yêu nghệ thuật,</br>
						mê cái đẹp và biết thưởng thức.</br>
						Vậy nên khách hàng MUA HOA hãy yên tâm </br>
						mình sẽ luôn MUAHOA ĐẸP nhất nhé.</br>
						Xin chân thành cảm ơn sự ủng hộ của</br>
						Quý Khách.</br>
						</p>
						
						<a href='index.php?add_cart=$pro_id'>
						<button class='button button1'>THÊM VÀO GIỎ</button>
					  </a>
					</div>
					<p>
				</div>  
			  </div>
		  ";
		  }
		  
		}
		?>
		
	  </div><!-- /#products_box -->
	</div>
	
  </div><!-- /.content_wrapper-->
  
  <?php include ('includes/footer.php'); ?>
  
  