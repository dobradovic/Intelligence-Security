
       <div class="container">




     <!-- Article main content -->

     <article class="col-md-12 maincontent">

   <header class="page-header">

     <h2 class="page-title"> The Center has organized the following activities:</h2>
   </header>

       <header>
          <?php foreach ($dogadjaji as $d){ ?>

             <?php echo anchor('pocetna/dogadjaj/'.$d->id_dogadjaj, $d->naslov, array('class' => 'info'));?>
         <hr>

       </header>
        <!-- <div class="col-md-3">
       <div class="thumbnail">

   <img alt="about me" src="<?php echo base_url();?><?php echo $d->slika;?>">

         </a>
       </div>
     </div>-->










     <?php }?>
     <br><br>
     </article>
     <!-- /Article -->
   </div>
  </div>
     <!-- Sidebar -->
</div>
     <!-- /Sidebar -->
