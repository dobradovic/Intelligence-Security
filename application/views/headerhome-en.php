<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Center for National and International Security</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,300,400" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" type="text/css" rel="stylesheet">
    </head>
    <body>

        <!-- Header -->
        <div id="header" style="background-position: 50% 0%; height:100%;" data-stellar-background-ratio="0.5">

          <div id="social" class="visible-lg">

          <ul class="social-icons pull-right hidden-xs">


              <li class="social-facebook">
                  <a href="https://www.facebook.com/SrpskoIzraelskaPoslovnaAsocijacija/?fref=ts" target="_blank" title="Facebook"></a>
              </li>


          </ul>
            </div>
            <div class="container">

                <div class="row">
                    <!-- Logo -->
                    <div class="logo">
                      <a href="pocetna/index" title="">
                            <img class="flipInX animate" src="<?php echo base_url();?>assets/img/fblogo.png" alt="Logo" width="300" height="300"/>
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>
                <!-- Top Menu -->
                <div id="hornav" class="row text-light">
                    <div class="col-md-12">
                        <div class="text-center visible-lg">
                            <ul id="hornavmenu" class="nav navbar-nav">
                                <li>
                                  <?php echo anchor('pocetna/index','Home',array('class'=>'fa-home active')); ?>
                                </li>
                                  <li>
                                    <?php echo anchor('pocetna/clanovi','  activities',array('class'=>'  fa-calendar-o')); ?>

                                  </li>
                                <li>
                                  <?php echo anchor('pocetna/clanovi','Members',array('class'=>'  fa-users')); ?>

                                </li>
                                <li>
                                  <?php echo anchor('pocetna/onama','About us', array('class'=>' fa-font')); ?>

                                <li>
                                    <?php echo anchor('pocetna/kontakt','Contact',array('class'=>'  fa-comment')); ?>
                                </li>


                            </ul>

                        </div>
                    </div>
                </div>
                <!-- End Top Menu -->
            </div>
        </div>
        <!-- End Header -->
        <!-- === END HEADER === -->
