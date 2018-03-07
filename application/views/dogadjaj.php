
       <div class="container">




     <!-- Article main content -->

     <article class="col-md-12 maincontent">
            <header class="page-header"><p>

</p>
   </header>
   <header class="page-header">
  <?php foreach ($dogadjaj as $d){ ?>
     <h2 class="page-title">   <?php echo  $d->naslov;?></h2>
   </header>

       <header>



                <?php echo  $d->tekst;?>


         <hr>

       </header>
        <!-- <div class="col-md-3">
       <div class="thumbnail">

   <img alt="about me" src="<?php echo base_url();?><?php echo $d->slika;?>">

         </a>
       </div>
     </div>-->












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
     <?php echo $d->video;?>

     <?php }?>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
     <script>
         baguetteBox.run('.tz-gallery');
     </script>


     <br><br>
     </article>
     <!-- /Article -->
   </div>
  </div>
     <!-- Sidebar -->
</div>
     <!-- /Sidebar -->
     <script>
         baguetteBox.run('.tz-gallery');
     </script>
