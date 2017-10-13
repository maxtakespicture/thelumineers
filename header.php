<!DOCTYPE html>
<html id="index">

<!--==================================== HEAD ====================================-->

	<head>

	<!--~~~~~~~~~~~~~~~~~~~~~~TITLE~~~~~~~~~~~~~~~~~~~~~~-->
		
        <title>The Lumineers</title>
		<link rel="icon" type="png" href="img/staricon.png">


	<!--~~~~~~~~~~~~~~~~~~~~~~META~~~~~~~~~~~~~~~~~~~~~~~-->
			
		<meta charset="UTF-8">
		<meta name="description" content="Wow look at that">
        <meta name="keywords" content="wordpress, php, flat">
        <meta name="author" content="Max le Roux">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


	<!--~~~~~~~~~~~~~~~~~~~~~~IE SHIV~~~~~~~~~~~~~~~~~~~~-->

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->


	<!--~~~~~~~~~~~~~~~~~~~~~~STYLES~~~~~~~~~~~~~~~~~~~~~-->
			
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_head();?>
	</head>


<!--==================================== BODY ====================================-->

	<body>

    <!--~~~~~~~~~~~~~~~~~~~~~~TOPBAR~~~~~~~~~~~~~~~~~~~~~-->    
    
        <section class="topbar">
            <h3>LOG IN</h3>
            <h3>SHOP</h3>
            <h3>OUR PARTNERS</h3>
            <div class="wrap">
               <div class="search">
                  <input type="text" class="searchTerm" placeholder="Search">
                  <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                 </button>
               </div>
            </div>
        </section>
        
    <!--~~~~~~~~~~~~~~~~~~~~~~HEADER~~~~~~~~~~~~~~~~~~~~~-->

		<header class="col-desk-12 col-tab-12 col-mob-12">			
            <div class=logo>
                <h1>THE LUMINEERS</h1>
            </div>
            <div class="subtitle">
                <h2>an indie band</h2>
            </div>
            <div class="clearfix"></div>
        </header>


    <!--~~~~~~~~~~~~~~~~~~~~~~ NAV ~~~~~~~~~~~~~~~~~~~~~~-->
        
        <nav class="col-desk-12 col-tab-12 col-mob-12">
            <ul>
                <li><a href="#"><h3>HOME</h3></a></li>
                <li><a href="#"><h3>ABOUT</h3></a></li>
                <li><a href="gallery.html"><h3>GALLERY</h3></a></li>
                <li><a href="#"><h3>BLOG</h3></a></li>
                <li><a href="contact.html"><h3>CONTACT</h3></a></li>
            </ul>
        </nav>