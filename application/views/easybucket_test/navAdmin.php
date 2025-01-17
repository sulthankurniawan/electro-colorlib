<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Easubucket - Nav Admin</title>

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

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <img src="./img/logo.png" alt="">
                        <h3 class="breadcrumb-header" style="color:#DCDCDC">Admin Mode</h3>
                    </div>							
                </div>
                <!-- /LOGO -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li id="listOrder" class=""><a href="<?php echo site_url('admin/admin_order') ?>">Customer's order</a></li>
                    <!-- <li><a href="#">Hot Deals</a></li> -->
                    <li id="listOrder"><br></li>
                    <li><br></li>
                    <li id="listAdd" class=""><a href="<?php echo site_url('admin/products/add') ?>">Add Item</a></li>
                    <li id="listUpdate" class=""><a href="#">Update Item</a></li>
                    <li id="listDelete" class=""><a href="<?php echo site_url('admin/products/') ?>">List Item</a></li>
                    <!-- <li><a href="#">Cameras</a></li> -->
                    <!-- <li><a href="#">Accessories</a></li> -->
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->	

    <!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>