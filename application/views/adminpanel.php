<?php if(isset($session['uloga'])){ ?>
          <?php if($session['uloga']=='admin'){ ?>
<div id="content">
    <div class="container background-white">
        <div class="row margin-vert-30">
            <!-- Main Column -->
            <div class="col-md-12">
                <!-- Main Content -->
                <div class="headline">
                    <h2 class="margin-bottom-20">Unos novog dogadjaja</h2>
                </div>
                <?php echo $tabela; ?>

                <p></p>
                <br>
                <!-- Contact Form -->
              <?php print form_open_multipart('apdogadjaji/admindogadjaji',$formaAttr); ?>

                    <div class="row margin-bottom-20">
                        <div class="col-md-6 col-md-offset-0">
                          <?php print form_input($naslov); ?>

                        </div>
                    </div>

                    <div class="row margin-bottom-20">
                        <div class="col-md-6 col-md-offset-0">
                          <?php print form_textarea($tekst); ?>

                        </div>
                    </div>
                    <div class="row margin-bottom-20">
                        <div class="col-md-6 col-md-offset-0">
                          <?php print form_upload(array('name'=>'fSlika', 'class'=>'form-control')); ?>


                        </div>
                    </div>

                    <div class="row margin-bottom-20">
                        <div class="col-md-6 col-md-offset-0">
                          <?php print form_input($video); ?>

                        </div>
                    </div>



                    <p>
                           <?php print form_submit($btnUnesi);?>
                    </p>
              <?php print form_close(); ?>
                <!-- End Contact Form -->
                <!-- End Main Content -->
            </div>
            <!-- End Main Column -->
            <!-- Side Column -->

            <!-- End Side Column -->
        </div>
    </div>
</div>
<?php }}else echo "" ?>

<!-- === END CONTENT === -->
