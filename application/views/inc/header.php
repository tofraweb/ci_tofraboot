<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TofraBoot - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" type="text/css">

    <!-- Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/modern-business.css" type="text/css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>">Tofraboot Starter</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url();?>index.php/page/get_name/about">About</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/page/get_name/services">Services</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/page/get_name/contact">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url();?>index.php/page/get_name/portfolio_1_col">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/page/get_name/portfolio_2_col">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/page/get_name/portfolio_3_col">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/page/get_name/portfolio_4_col">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/page/get_name/portfolio_item">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url();?>index.php/page/get_name/blog_home_1">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/page/get_name/blog_home_2">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/page/get_name/blog_post">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url();?>index.php/page/get_name/fullwidth">Fullwidth Page</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/page/get_name/sidebar">Sidebar Page</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/page/get_name/faq">FAQ</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/page/get_name/page_404">404</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/page/get_name/pricing">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
