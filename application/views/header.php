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
        <meta name="description" content="Center for National and International Security University of Belgrade, conducts scientific-research, educational and professional activities in the field of national and international security In order to better understand the phenomena and the process in the field of security">
        <meta name="keywords" content="Center, National, International, Security, University, Belgrade, Intelligence, CNIS, scientific-research, educational, professional, activities, project  ">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link rel="shortcut icon"href="<?php echo base_url();?>/assets/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url();?>/assets/img/favicon.ico" type="image/x-icon">
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/gallery-clean.css">
    </head>
    <body>

        <!-- Header -->
        <div id="header" style="background-position: 50% 0%; <br />
<b>Notice</b>:  Undefined variable: full_page in <b>C:\xampp\htdocs\bootstrap\html\php\header.php</b> on line <b>46</b><br />
" data-stellar-background-ratio="0.5">
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
                        <h2 class="naslovlogo">Center for National and International Security</h2>
                            <h2 class="naslovlogo">Faculty of Security Studies, University Of Belgrade</h2>
                        <a href="<?php echo base_url();?>" title="">
                            <img src="<?php echo base_url();?>assets/img/fblogo.png" alt="Logo" width="200" height="200" class="flipInX animate"/>
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
                                    <?php echo anchor('pocetna/dogadjaji','Activities',array('class'=>'  fa-calendar-o')); ?>
                                </li>
                                <li>
                                      <?php echo anchor('pocetna/clanovi','Members',array('class'=>'  fa-users')); ?>

                                </li>
                                <!--
                                <li>
                                    <span class="fa-font ">O nama</span>
                                    <ul>
                                        <li>
                                          <?php echo anchor('pocetna/onama','Ko smo mi'); ?>
                                        </li>
                                        <li>
                                            <?php echo anchor('pocetna/statut','Statut'); ?>
                                        </li>
                                        <li>
                                            <?php echo anchor('pocetna/clanovi','članovi'); ?>
                                        </li>
                                    </ul>
                                </li>
                              -->
                              <li>
                               <?php echo anchor('pocetna/onama','About us',array('class'=>' fa-font')); ?>
                                 </li>
                              <li>
                                  <?php echo anchor('pocetna/kontakt','Contact',array('class'=>'  fa-comment')); ?>
                              </li>


                                <?php if(isset($session['uloga'])){ ?>
                                     <?php if($session['uloga']=='admin'){ ?>
                             <li>
                                 <?php echo anchor('pocetna/logout','Logout',array('class'=>'  fa-comment')); ?>
                             </li>
                             <?php }}?>
                            </ul>

                        </div>
                    </div>
                </div>
                <!-- End Top Menu -->
            </div>
        </div>
        <!-- End Header -->
        <!-- === END HEADER === -->
