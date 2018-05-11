<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Sparkly Cleaners | Home </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Immerse a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<?php wp_head(); ?>

<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Sintony:400,700&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
<!-- banner -->
<div class="w3l_banner <?php if(is_front_page()){
  ?>
  style=''
  <?php
  }?>">

<div class="w3_bandwn">
<div class="container">
<div class="col-md-4 w3_l">
<i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:admin@sparklycleaners.co.uk">admin@sparklycleaners.co.uk</a>
</div>
<div class="col-md-5 w3_c">
<i class="fa fa-phone" aria-hidden="true"></i> 07833383626
</div>
<div class="col-md-3 w3_r">
<a href="https://www.facebook.com/Sparklycleaners-1924176447873034"><i class="fa fa-facebook" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
</div>
<div class="clearfix"></div>
</div>
</div>
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar">
        </span>
      </button>
     <h1><a class="navbar-brand" href="#"><img src="  <?php echo get_template_directory_uri() ?>/images/sparkycleaners.png">
</a></h1>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'slimmenu',
                    'menu_class' => 'nav navbar-nav',
                ));
            ?>
		    
 <form class="navbar-form navbar-left" action="<?php echo home_url('/'); ?>" method="get" style="float: right !important;">
            <div class="w3l_frm" >
              
          <input type="text" value="<?php the_search_query(); ?>" name="s"  placeholder="Search" required="">
            </div>
        </form>





        </div>
     
     
    </div><!-- /.navbar-collapse -->
    </nav>

