<div id="welcome" class="background-white">
            <div class="container">
                <div class="row margin-vert-40">
                    <!-- Main Text -->
                    <div class="col-md-12">
                        <h2 class="text-center article-title">Center for National and International Security



                        </h2>


                        <p>
        The Center for National and International Security (CNMB) aims to independently or in cooperation with other organizational units of the Faculty of Security Studies, other higher education and scientific-research institutions, state bodies, public  institutions, enterprises, civil society organizations, organize within the framework of the activities of the Faculty of Security and conducts scientific-research, educational and professional activities in the field of national and international security. Research in these areas represents the most important area of the Faculty of Security. In order to better understand the phenomena and the process in the field of security, it is necessary to collect new knowledge in this field, constantly carry out the evaluation process and align the theory and practice in order to acquire the theoretical knowledge and skills acquired and practical application. In this direction, the CNMB will develop the following projects:
</p>
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

    CNMB baviće se i usko stručnim projektima koji za cilj imaju unapređenje nastave iz polja bezbednosti:
<br><br>


    <li>1.Projekat "Bezbednosni razgovori" (Security Talks)</li>

  <li>  2.Projekat TOC search. Baza za pretraživanje podataka o terorizmu i organizovanom kriminalu;</li>

  <li>  3.Softver za prepoznavanje lica u polju bezbednosti (Security face recognition);</li>

  <li>  4.Razvoj android aplikacije u polju bezbednosti;</li>

  <li>  5. Digitalna steganografija;</li>

    <li>6. Program primene novih didaktičkih metoda (IT) u polju bezbednosti;</li>

  <li>  7. Sajber bezbednost (Syber Security);</li>

  <li>  8. Upotreba dronova i drugih letelica u polju bezbednosti i zaštite životne sredine;</li>

  <li>  9. Nuklearna bezbednost;</li>

  <li>  10. Projekat "One Belt One Road – Security Risk Assessment and Resilience"</li>

<br>

    Učesnici:
<br><br>
    <li>   1. prof. dr Ivica Radović, redovni profesor</li>

    <li>   2. prof. dr Zoran Dragišić, redovni profesor</li>

    <li>   3. prof. dr Želimir Kešetović, redovni profesor</li>

    <li>   4. prof. dr Zoran Keković, redovni profesor</li>

    <li>   5. doc. dr Nenad Putnik</li>

    <li>   6. dr Darko Trifunović, viši naučni saradnik, Upravnik Centra  </li>

</p>
                        <?php //<img class="rotateInDownLeft animate" alt="" src="<?php echo base_url();assets/img/serbiaisrael.jpg" style="display: block; margin-left: auto; margin-right: auto; margin-top: 40px;">?>

                    </div>
                    <!-- End Main Text -->
                </div>
            </div>
        </div>
