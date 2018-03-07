<div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                             <?php print form_open('pocetna/login',$formaAttr); ?>
                               <div class="login-header margin-bottom-30">
                                   <h2>Login to your account</h2>
                               </div>
                               <div class="input-group margin-bottom-20">
                                   <span class="input-group-addon">
                                       <i class="fa fa-user"></i>
                                   </span>
                                    <?php print form_input($username); ?>
                               </div>
                               <div class="input-group margin-bottom-20">
                                   <span class="input-group-addon">
                                       <i class="fa fa-lock"></i>
                                   </span>
                                     <?php print form_input($password); ?>
                               </div>
                               <div class="row">

                                   <div class="col-md-6">

                                     <?php print form_input($dugme); ?>
                                   </div>
                               </div>


                           <?php print form_close(); ?>





                       </div>
