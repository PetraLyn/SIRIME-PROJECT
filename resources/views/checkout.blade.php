<!DOCTYPE HTML>
<html>
<head>
<title>SiriMe</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shape Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
<script src="assets/js/jquery.easydropdown.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script src="assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
				
		});
		</script>
</head>
<body>
   <div class="header">
	<div class="container">
		<div class="header-top">
      		 <div class="logo">
				<a href="index"><img src="assets/images/log.png" alt=""/></a>
			 </div>
		   <div class="header_right">
			 
		    
			<div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
		 </div>  		 
		 <div class="apparel_box">
			<ul class="login">
				<li class="login_text"><a href="login">Login</a></li>
				<li class="wish"><a href="checkout">Wish List</a></li>
				<div class='clearfix'></div>
		    </ul>
		    <ul class="quick_access">
				<li class="view_cart"><a href="checkout">View Cart</a></li>
				<li class="check"><a href="checkout">Checkout</a></li>
				<div class='clearfix'></div>
		     </ul>
			<div class="search">
			   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
			   <input type="submit" value="">
			</div>
		  </div>
		</div>
    </div>
    <div class="main">
	   <div class="container">
		  <div class="check_box">	 
		<div class="col-md-9 cart-items">
			 <h1>My Shopping Bag </h1>
				<script>
				$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			 <div class="cart-header">

			 </div>
			 <script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});	  
					});
			 </script>
			 <div class="cart-header2">
<!-- 				 <div class="close2"> </div>
 -->				  <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="assets/images/skin glow bleaching.jpg" class="img-responsive" alt="">
						</div>
					   <div class="cart-item-info">
						
						<ul class="qty">
							<!-- <li><p>Size : 5ml</p></li> -->
							<li><p></p></li>
						</ul>
							 <div class="delivery">
							 <p></p>
							 <span>Delivered within 24 hours right at your doorstep</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			  </div>		
		 </div>
		 <div class="col-md-3 cart-total">
		 	<a class="continue" href="{{url('info')}}">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total1">00.00</span>
				 <span>Discount</span>
				 <span class="total1"></span>
				 <span>Delivery Charges</span>
				 <span class="total1">00.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li class="last_price"><span>00.00</span></li>
			   <div class="clearfix"> </div>
			 </ul>
			
			 
			 <div class="clearfix"></div>
<!-- 			 <a class="order" href="{{url('info')}}">Place Order</a>
 -->			<!--  <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a> -->
				 <!-- <p><a href="#">Log In</a> to use accounts - linked coupons</p> -->
			 <!-- </div> -->
			 <!-- <a class="continue" href="{{url('cart')}}">Continue to basket</a>
			
			 <a class="order" href="{{url('cart')}}">Place Order</a>
			 <div class="total-item"> -->
				
			 </div>
			</div>
			<div class="clearfix"></div>
	 </div>
	     </div>
	    </div>
		
		 
        <div class="footer">
			<div class="container">
				<div class="footer-grid">
					<h3>Category</h3>
					<ul class="list1">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">About us</a></li>
					  <li><a href="#">Eshop</a></li>
					  <li><a href="#">Contact</a></li>
				    </ul>
				</div>
				
				  <div class="footer-grid">
					<h3 class="Newsletter">Newsletter</h3>
					<p class="footer_desc">For more information about our products and services submit your email</p>
					<div class="search_footer">
			          <input type="text" class="text" value="Insert Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
			          <input type="submit" value="Submit">
			        </div>
				 </div>
				 <div class="footer-grid footer-grid_last">
					<h3>About Us</h3>
					<p class="footer_desc">SiriMe is an online platform that deals with the sale and delivery of discretely packaged products.</p>
                    <p class="f_text">Phone:  &nbsp;&nbsp;&nbsp;00-250-2131</p>
                    <p class="email">Email: &nbsp;&nbsp;&nbsp;<a href="malito:mail@demolink.org">sirime79@gmail.com</a></p>		
                 </div>
				 <div class="clearfix"></div>
			</div>
		</div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files
as needed -->
<script type="application/javascript">
    document.getElementByClass("Newsletter").innerHTML = localStorage.details;
</script>  

        <div class="footer_bottom">
        	<div class="container">
        		<div class="copy">
				   <p>Copyright &copy; 2015 SiriMe. All Rights Reserved . </p>
			    </div>
        	</div>
        </div>
</body>
</html>		
