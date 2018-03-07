
<div id="content">
           <div class="container background-white">
               <div class="row margin-vert-30">
                   <!-- Main Column -->
                   <div class="col-md-12">
                      <?php foreach($projekti as $p){?>
                        <?php if($p->id_projekta==6){?>

                                            <h2>
                                            <?php echo $p->naslov;?>
                                          </h2>
                     <?php foreach ($projektiStatus as $ps){ ?>





                   <li>


                          <a href="<?php echo base_url();?><?php echo $ps->pdf;?>">     <?php echo $ps->naslov;?> </a>
                       </li>

                     <?php }?>

                   </li>

                 <?php }}?>


                 <br>

                       <?php foreach($projekti as $p){?>
                    <?php if($p->id_projekta==6){?>

                    <?php }else {?>   <h2 class="margin-bottom-20"><?php echo $p->naslov;?></h2>
                       <div class="row media-body">

                    <a href="<?php echo $p->link;?>"><?php echo $p->link;?></a>
                    <?php if($p->id_projekta ==2){ ?>

                        <img src="<?php echo base_url();?>assets/img/tocc.png" alt="Traffic">
                 <?php   } ?>
                       <a href="<?php echo base_url();?><?php echo $p->pdf;?>">     <?php echo $p->pdf_naziv;?> </a>
                           <p>

                             <?php echo $p->tekst;?>

                            </p>
                          <?php }}?>
                       </div>



                            <div class="container gallery-container">



                                <div class="tz-gallery">

                                    <div class="row">


                                      <?php foreach($slike as $s){?>
                                      <div class="col-sm-6 col-md-4">
                                          <div class="thumbnail">
                                            <a class="lightbox" href="<?php echo base_url();?><?php echo $s->slika;?>">
                                                <img src="<?php echo base_url();?><?php echo $s->slika;?>" alt="Traffic">
                                              </a>

                                          </div>
                                      </div>
                                    <?php }?>

                                    </div>

                                </div>

                            </div>



                            <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
                            <script>
                                baguetteBox.run('.tz-gallery');
                            </script>


                    </div> <!-- /container -->

 </div>

</div>
<!-- End Main Column -->
</div>
</div>
</div>
