<div id="content">
           <div class="container background-white">
               <div class="row margin-vert-30">
                   <!-- Main Column -->
                   <div class="col-md-12">
                       <h2 class="margin-bottom-20">About us</h2>
                       <p>The Center for National and International Security (CNIS) aims to independently or in cooperation with other organizational units of the Faculty, other higher education and scientific-research institutions, state bodies, public institutions, enterprises, civil society organizations, organize within the framework of the activities of the Faculty of Security and conducts scientific-research, educational and professional activities in the field of national and international security. Research in these areas represents the most important area of the Faculty of Security Studies, University of Belgrade. In order to better understand the phenomena and the process in the field of security, it is necessary to collect new knowledge in this field, to constantly carry out the evaluation process and to harmonize theory and practice in order to acquire theoretical knowledge and skills in practical application. To reach this goals, the CNIS will develop the following projects:
</p>



<h2 class="margin-bottom-20">Projects</h2>
<div class="row padding-top-20">
    <?php foreach ($projekti as $projekat){ ?>

                    <div class="col-sm-6 col-md-4">

                        <div class="panel panel-default fadeInLeft animate">

                            <div class="panel-body text-center">
                                <h3>
                                  <?php echo anchor('pocetna/projekat/'.$projekat->id_projekta, $projekat->naslov);?>

                                  </h3>
                            </div>

                        </div>

                    </div>


  <?php  }?>


                   </div>

                   <!-- End Main Column -->
                 The CNIS will also be dealing with highly professional projects aimed at improving security education:
                 <br><br>
                 <li>
                     <?php echo anchor('pocetna/projekat/'.$projekat->id_projekta=2, "Project TOC search. Database for Searching Information on Terrorism and Organized Crime");?>

                  </li>
                 <li>
                      <?php echo anchor('projekti/projekat_toc/', 'Project "Security Talks"');?>
                  </li>

                     <?php foreach ($projektiStatus as $ps){ ?>





                   <li>
                  <?php echo $ps->naslov;?>
                   </li>

                 <?php }?>


                 <br>




                 </p>
                                         <?php //<img class="rotateInDownLeft animate" alt="" src="<?php echo base_url();assets/img/serbiaisrael.jpg" style="display: block; margin-left: auto; margin-right: auto; margin-top: 40px;">?>

                                     </div>
                                     <!-- End Main Text -->
                                 </div>
                             </div>
                         </div>
