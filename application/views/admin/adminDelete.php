<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Easybucket - Delete</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url('css/slick.css') ?>"/>
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url('css/slick-theme.css') ?>"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url('css/nouislider.min.css') ?>"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css') ?>">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url('css/style.css') ?>"/>


 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->

    </head>
	<body>

	<!-- BREADCRUMB -->
	<div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="breadcrumb-header">Delete Item</h3>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->
        
    <!-- Products tab & slick -->
    <div class="col-md-12">
        <div class="row">
            <div class="products-tabs">
                <!-- tab -->
                <div id="tab1" class="tab-pane active">
                    <div class="products-slick" data-nav="#slick-nav-1">
                        <!-- product -->
                        <div class="product">
                            <div class="product-img">
                                <img src="./img/product01.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <h4 class="product-price">$980.00</h4>
                                <h3 class="product-name"><a href="#">Description</a></h3>
                            </div>
                            <div class="add-to-cart">
                                <button class="add-to-cart-btn"><i class=""></i>Delete</button>
                            </div>
                        </div>
                        <!-- /product -->

                        <!-- product -->
                        <div class="product">
                            <div class="product-img">
                                <img src="./img/product02.png" alt="">
                                
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <h4 class="product-price">$980.00</h4>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                            </div>
                            <div class="add-to-cart">
                                <button class="add-to-cart-btn"><i class=""></i>Delete</button>
                            </div>
                        </div>
                        <!-- /product -->

                        <!-- product -->
                        <div class="product">
                            <div class="product-img">
                                <img src="./img/product03.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <h4 class="product-price">$980.00</h4>
                                <h3 class="product-name"><a href="#">Description</a></h3>                              
                            </div>
                            <div class="add-to-cart">
                                <button class="add-to-cart-btn"><i class=""></i>Delete</button>
                            </div>
                        </div>
                        <!-- /product -->

                        <!-- product -->
                        <div class="product">
                            <div class="product-img">
                                <img src="./img/product04.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <h4 class="product-price">$980.00</h4>   
                                <h3 class="product-name"><a href="#">Description</a></h3>  
                            </div>
                            <div class="add-to-cart">
                                <button class="add-to-cart-btn"><i class=""></i>Delete</button>
                            </div>
                        </div>
                        <!-- /product -->
                    </div>
                    <div id="slick-nav-1" class="products-slick-nav"></div>
                </div>
                <!-- /tab -->
            </div>
        </div>
    </div>
    <!-- Products tab & slick -->
    <script>
			var element = document.getElementById("listDelete");
			element.classList.add("active");
	</script>
    
	
    <!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>


    </body>
</html>
