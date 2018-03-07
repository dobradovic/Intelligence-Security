<!-- === BEGIN CONTENT === -->
     <div id="content">
         <div class="container background-white">
             <div class="row margin-vert-30">
                 <div class="col-md-12">
                     <h2 class="margin-bottom-20">Members</h2>
                     <div class="row">
                            <?php foreach($clanovi as $c){?>
                         <div class="col-md-4 animate fadeIn">

                             <div class="portfolio-item">

                                     <figure class="animate fadeInLeft">
                                         <div class="grid-image">



                                             <div class="featured-info">
                                                 <div class="info-wrapper">
                                                     <h3><?php echo $c->ime;?></h3>
                                                     <p><?php echo $c->titula;?><p>

                                                 </div>
                                             </div>
                                             <div class="overlay"></div>


                                             <img alt="about me" src="<?php echo base_url();?><?php echo $c->slika;?>">

                                         </div>


                                     </figure>

                                        <?php echo anchor('pocetna/clan/'.$c->id_clana, $c->ime, array('class' => 'info'));?>
                                        <div class="portfolio-item titula">
                                    <p>  <?php echo  $c->titula;?></p>

                                  </div>
                                  <p class="zemlja"> <?php echo  $c->zemlja;?></p>

                                  </p>

   </a>


                             </div>


                         </div>
           <?php }?>
                     </div>
                     <hr>
                   </div>
                 </div>
               </div>
