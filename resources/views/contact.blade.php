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
<!-- <!--details-product-slider-->
</head>
<body>
 <div id="navigation">
    <!-- <ul>
      <li><a href="#shop.html">Shop</a></li>
      <li><a  href="#contact.html">Contact</a></li>
      <li><a href="#about.html">About</a></li>
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
     <form method="post" action="search" enctype="multipart/form-data">
          <input method="text"placeholder="search product">
          <input type="submit" name="search" value="search">
     </form>
  </div>  -->
 <div class="header"> 
      <div class="container"> 
         <div class="header-top">
     <!--       <div class="logo">
        <a href="index.html"><img src="images/sirimelogo.png" alt=""/></a>
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
          <a href="#" class="banner_btn">Buy Now</a>
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
              <h4><i class="cart_icon"> </i><p>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</p><div class="clearfix"> </div></h4>
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
             <i{!! Form::open(array('route' => 'queries', 'class'=>'form navbar-form navbar-right searchform')) !!}
            <form method="post" action="search" enctype="multipart/form-data">
          <input method="text"placeholder="search product">
          <input type="submit" name="search" value="search">
     </form>
          </div>
              <div class="category">
                <h3 class="menu_head">Category Options</h3>
                <ul class="category_nav">
                
                  <li><a href="shop">BLEACHING PRODUCTS</a></li>
                  <li><a href="shop">SLIMMING PRODUCTS</a></li>
                  <li><a href="shop">SKIN TIGHTENERS</a></li>
                  
              </ul>
              </div>
   <!-- <div class="map">
   	 
     <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px"></a></small>
   </div> -->
  
			   	    <div class="side_banner">
					   
					   
				     </div>
			  </div>
			  <div class="col-md-9">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                  
                    <li class="women">
                       <!-- Contact Us -->
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="about">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="singel_right">
			     <div class="lcontact span_1_of_contact">
				      <div class="contact-form">
                <h1>Contact Us!</h1>

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::open(array('route' => 'contact_store','method'=>'post','class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('Your Name') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your E-mail Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your e-mail address')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your Message') !!}
    {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your message')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Contact Us!', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
					        
</div>


@if(Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Success!</strong> {{ Session::get('message', '') }}
    </div>
@endif
{!! Form::close() !!}
				  	        <!-- <form>
					    	    <p class="comment-form-author"><label for="author">Your Name:</label>
					    	    	<input type="text" class="textbox" value="Enter your name here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your name here...';}">
						    	</p>
						        <p class="comment-form-author"><label for="author">Email:</label>
						     	   <input type="text" class="textbox" value="Enter your email here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						        </p>
						        <p class="comment-form-author"><label for="author">Message:</label>
						    	  <textarea value="Enter your message here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Enter your message here...</textarea>
						        </p>
						        <input name="submit" type="submit" id="submit" value="Submit">
					        </form> -->
				       </div>
			     </div>
			     <div class="contact_grid span_2_of_contact_right">
					<h3>Address</h3>
				    <div class="address">
						<i class="pin_icon"></i>
					    <div class="contact_address">
						  Bishop Magua,Ngong road<br>George Padmore lane<br>Ground floor
					    </div>
					    <div class="clearfix"></div>
					</div>
					<div class="address">
						<i class="phone"></i>
					    <div class="contact_address">
						  +254 723 345 456
					    </div>
					    <div class="clearfix"></div>
					</div>
					<div class="address">
						<i class="mail"></i>
					    <div class="contact_email">
						  <a href="malito:mail@demolink.org">sirime79@gmail.com</a>
					    </div>
					    <div class="clearfix"></div>
					</div>
		        </div>
		        <div class="clearfix"></div>
		    </div>
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