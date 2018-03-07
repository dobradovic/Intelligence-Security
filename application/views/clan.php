<div id="content">
           <div class="container background-white">
               <div class="row margin-vert-30">
                   <!-- Main Column -->
                   <div class="col-md-12">
                       <?php foreach($clanovi as $c){?>
                       <h2 class="margin-bottom-20"><?php echo $c->ime;?></h2>
                       <div class="row media-body">

                           <div class="col-md-4 animate fadeIn">

                               <div class="portfolio-item">

                                       <figure class="animate fadeInLeft">
                                           <div class="grid-image media-left">


                                               <div class="featured-info">
                                                   <div class="info-wrapper">
                                                       <h3><?php echo $c->ime;?></h3>

                                                   </div>
                                               </div>
                                               <div class="overlay"></div>


                                               <img alt="about me" src="<?php echo base_url();?><?php echo $c->slika;?>">

                                           </div>


                                       </figure>


                                       </a>
                                          <p><?php echo $c->zemlja;?></p>
                               </div>

                           </div>

                           <p>

                             <?php echo $c->biografija;?>
                             <br>
                             <br>
                             <?php if($c->id_clana == 15){ ?>
                             <a href="<?php echo base_url();?><?php echo $c->pdf;?>">Vinay Kaura Bio - pdf</a>

                            </p>
                          <?php }}?>
                          <?php if($c->id_clana == 20){ ?>
                          <a href="<?php echo base_url();?><?php echo $c->pdf;?>">Dr Jonathan Levy CV - pdf</a>

                         </p>
                       <?php }?>
                       <?php if($c->id_clana == 22){ ?>
                       <a href="<?php echo base_url();?><?php echo $c->pdf;?>">Dr Nikola Tanić CV - pdf</a>

                      </p>
                    <?php }?>
                       </div>


 </div>

</div>
<!-- End Main Column -->
</div>
</div>
</div>
