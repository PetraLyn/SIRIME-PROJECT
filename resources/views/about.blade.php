<!DOCTYPE HTML>
<html>
<head>
<title>Siri_Me</title>  <link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/simpleCart.min.js"> </script>
<script src="assets/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="assets/css/main.css" rel='stylesheet' type='text/css' />
<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
<script src="assets/js/jquery.easydropdown.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script src="assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css">

   <link rel="stylesheet" type="text/css" href="assets/css/main.css">
   <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
   <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-responsive.css">
     <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet"  href="assets/js/bootstrap.min.js">
   <!-- <link rel="stylesheet" type="text/css" href="assets/css/css-slider.css"> -->
  

   <link rel="icon" type="image/x-icon" href="assets/images/android-icon-96x96.png">
 
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

</head>
<body>
<div id="navigation">
    <!-- <ul>
      <li><a href="#shop">Shop</a></li>
      <li><a  href="#contact">Contact</a></li>
      <li><a href="#about">About</a></li>
      <li><a class="active scroll" href="#home.html">Home</a></li>
    </ul> -->
    <ul class="nav1">
                    <li><a href="contact">Contact</a></li>
                    <li><a href="shop">Shop</a></li>
                  <li><a href="about">About</a></li>

               </ul>
  </div>
   <div class="logo">
				<a href="about"><img src="assets/images/log.png" alt=""/></a>
			 </div>
  
  <!--  <div class="form">
   {!! Form::open(array('route' => 'queries', 'class'=>'form navbar-form navbar-right searchform')) !!}
     //<form method="post" action="search" enctype="multipart/form-data">
          <input method="text"placeholder="search product">
          <input type="submit" name="search" value="search">
     </form>
  </div>  -->
<div class="header">	
      <div class="container"> 
         <div class="header-top">
      		<!--  <div class="logo">
				<img src="images/sirimelogo.png" alt=""/></a>
			 </div> -->
		  
          <div class="clearfix"></div>

		 </div>  
		 <div class="banner_wrap">
			<div class="bannertop_box">
   		 		<!-- <ul class="login"> -->
   		 			<!-- <li class="login_text"><a href="login.html">Login</a></li> -->
   		 			
	  			<!-- <div class="welcome_box">
	  				<h2>Welcome to SiriMe</h2>
	  				
	  			</div> -->
   		 	</div>
   		 	<div class="banner_right">
   		 		<h1>Be bold <br>Be simply beautiful</h1>
   		 		<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p> -->
   		 		<a href="{{url('shop')}}" class="banner_btn">Buy Now</a>
   		 	</div>
   		 	<div class='clearfix'></div>
	    </div>
	   </div>
	</div>
	<div class="main">
	  <div class="content_box">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="menu_box">
				   	  	<h3 class="menu_head">Menu</h3>
				   	     <ul class="nav">
				   	        <li><a href="about">About</a></li>
					   	  	<li><a href="shop">Shop</a></li>
					        <li><a href="contact">Contact</a></li>
					   	 </ul>
			   	    </div>
			   	    <ul class="login">
			   	    <li class="wish"><a href="checkout">Wish List</a></li>
   		 			<div class='clearfix'></div>
   		 		</ul>
   		 		<div class="cart_bg">
	   		 	  <ul class="cart">
	   		 		 <a href="checkout">
					    <h4><i class="cart_icon"> </i><p>Cart: <span class=""></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</p><div class="clearfix"> </div></h4>
					 </a>
				     <h5 class="empty"><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></h5>
				     <div class="clearfix"> </div>
                  </ul>
	   		 	</div>
			  	<ul class="quick_access">
   		 			<li class="view_cart"><a href="checkout">View Cart</a></li>
   		 			<li class="check"><a href="checkout">Checkout</a></li>
   		 			<div class='clearfix'></div>
   		 		</ul>
   		 		<div class="search">
	  			   {!! Form::open(array('route' => 'queries', 'class'=>'form navbar-form navbar-right searchform')) !!}
	  			   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				   <input type="submit" value="">
	  			</div>
			   	    <div class="category">
			   	    	<h3 class="menu_head">Category Options</h3>
			   	    	<ul class="category_nav">
			   	    	
					   	  	<li><a href="shop">BLEACHING PRODUCTS</a></li>
					   	  	<li><a href="shop">SLIMMING PRODUCTS</a></li>
					   	  	<li><a href="shop">SKIN TIGHTENERS</a></li>
					   	  	
					   	</ul>
			   	    </div>

				     <!-- <div class="tags">
				      	<h4 class="tag_head">Articles Experts</h4>
				      	 <ul class="article_links">
							<li><a href="#">Eleifend option congue nihil</a></li>
							<li><a href="#">Investigationes demonst</a></li>
							<li><a href="#">Qui sequitur mutationem</a></li>
							<li><a href="#">videntur parum clar sollemnes</a></li>
							<li><a href="#">ullamcorper suscipit lobortis</a></li>
							<li><a href="#">commodo consequat. Duis autem</a></li>
							<li><a href="#">Investigationes demonst</a></li>
							<li><a href="#">ullamcorper suscipit lobortis</a></li>
							<li><a href="#">Qui sequitur mutationem</a></li>
							<li><a href="#">videntur parum clar sollemnes</a></li>
							<li><a href="#">ullamcorper suscipit lobortis</a></li>
						  </ul>
						 <a href="#" class="link1">View all</a>
				      </div> -->

			   	    
			   	    
				     <div class="side_banner">
					   
					   <div class="banner_holder">
						  
					   </div>
				     </div>
			  </div>
			  <div class="col-md-9">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                   <!--  <li class="home">
                       <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li> -->
                    <li class="home">&nbsp;
                        About&nbsp;
                        <span>&gt;</span>&nbsp;
                    </li>
                    
                </ul>
                
                <!-- <div class="clearfix"></div>
			   </div> -->
			   
    	         
                <div class="clearfix"></div>		
		        </div>		
				
					<div class="clearfix">
					<h3 class="m_1">About Us</h3>
					SiriMe is an online platform that deals with the sale and delivery of discretely packaged products.These products include slimming products,bleaching products and skin tighteners where most people require atmost privacy and only want the results.
	    </div>
	    <br clear="all">
	     <!-- <div class="clearfix"></div>		
		        </div> -->
		        <h3 class="m_2">Our Shop</h3>
			   <div class="content_grid">
			   		<div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
				  	 <!--   <a href="single.html"> -->
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="assets/images/Shape.jpg" class="img-responsive" alt=""/>
								<a href="{{url('checkout')}}" class="button item_add item_1"> </a>		
							    <div class="product_container">
								   <div class="cart-left">
									 <p class="title"> SHAPE CREAM</p>
								   </div>
								   <span class="amount item_price">Kshs.00.00</span>
								   <div class="clearfix"></div>
							     </div>		
							  </div>
		                    </div>
		                 </a>
				    </div>
				    <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem"> 
				  	    <!--  <a href="single.html"> -->
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="assets/images/evotea slimming products.jpg" class="img-responsive" alt=""/>
								<a href="{{url('checkout')}}" class="button item_add item_1"> </a>		
							    <div class="product_container">
								   <div class="cart-left">
									 <p class="title">EVOTEA</p>
								   </div>
								   <span class="amount item_price">Kshs.00.00</span>
								   <div class="clearfix"></div>
							     </div>		
							  </div>
		                    </div>
		                 </a>
				    </div>
				    <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1"> 
				  	  <!-- <a href="single.html"> -->
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="assets/images/gelcream_1.jpg" class="img-responsive" alt=""/>
								<a href="{{url('checkout')}}" class="button item_add item_1"> </a>	
								 <div class="product_container">
								   <div class="cart-left">
									 <p class="title">GELCREAM</p>
								   </div>
								   <span class="amount item_price">Kshs.00.00</span>
								   <div class="clearfix"></div>
							     </div>		
							  </div>
		                    </div>
		                 </a>
				    </div>
				    <div class="clearfix"></div>
			    </div>		
				
					<div class="clearfix">
					<h3 class="m_1">Testimonials</h3>
              <p>"I couldn't believe the change in just a few months.I hope my story will show people that losing weight doesn't have to be embarassing"</p>
	    </div>

<div class="clearfix"></div>
			    </div>
			  </div>
			</div>
		 </div>
		</div>
		
	    
     <div class="footer">
			<div class="container">
				<div class="footer-grid">
					<h3>Category</h3>
					<ul class="list1">
					  
					  <li><a href="about">About us</a></li>
					  <li><a href="shop">Shop</a></li>
					  <li><a href="contact">Contact</a></li>
				    </ul>
				</div>
				<!-- <div class="footer-grid">
					<h3>Our Account</h3>
				    <ul class="list1">
					  <li><a href="#">Your Account</a></li>
					  <li><a href="#">Personal information</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Discount</a></li>
					  <li><a href="#">Orders history</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Search Terms</a></li>
				    </ul>
				</div> -->
				<!-- <div class="footer-grid">
					<h3>Our Support</h3>
					<ul class="list1">
					  <li><a href="#">Site Map</a></li>
					  <li><a href="#">Search Terms</a></li>
					  <li><a href="#">Advanced Search</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="#">Contact Us</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="#">Addresses</a></li>
				    </ul>
				  </div> -->
				  <div class="footer-grid">
					<h3>Newsletter</h3>
					<p class="footer_desc">For more information about our products and services submit your email</p>
					<div class="search_footer">
			          <input type="text" class="text" value="Insert Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
			          <input type="submit" value="Submit">
			        </div>
			        <!-- <img src="images/payment.png" class="img-responsive" alt=""/> -->
				 </div>
				 <div class="footer-grid footer-grid_last">
					<h3>About Us</h3>
					<p class="footer_desc">SiriMe is an online platform that deals with the sale and delivery of discretely packaged products.</p>
                    <p class="f_text">Phone:  &nbsp;&nbsp;&nbsp;00-250-2131</p>
                    <p class="email">Email: &nbsp;&nbsp;&nbsp;<a href="malito:mail@demolink.org">sirime79@gmail.com</a></p>	
                 </div>
				 <div class="clearfix"> </div>
			</div>
		</div>
        <div class="footer_bottom">
        	<div class="container">
        		<div class="copy">
				   <p>Copyright &copy; 2015 SiriMe. All Rights Reserved . </p>
			    </div>
        	</div>
        </div>
</body>
</html>		

	    
   		