<?php
defined('_JEXEC') or die('Restricted access');

//Récupérer les informations sur l'utilisateur
$user = JFactory::getUser();
?>
<?php $this->setGenerator('Bureau Virtuel d\'Aide à l\'Insertion Professionnelle (Développé par Briand IDOSSOU)'); ?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" 
      lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
    <head>
        <jdoc:include type="head" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Briand IDOSSOU" />
        <meta name="type" content="website" />
        <meta name="url" content="http://bvaip.info/" />

        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/foundation/css/foundation.min.css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/topbar.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/tabs.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/shaping.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/validator.css" type="text/css" />

        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/library/daterangepicker/daterangepicker-f5.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/library/intl-tel-input/build/css/intlTelInput.css" type="text/css" />

        <link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon.ico">
            <!--[if lt IE 9]>
                      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
                      <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
                      <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
                      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
                    <![endif]-->
            <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/foundation/js/vendor/modernizr.js"></script>

    </head>
    <body>

        <!-- Premier bloc horizontal (En-tête) --> 
        <section class="bloc_entete small-12 columns" style="background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/background/background_entete.jpg')">
            <div class="row">
                <!--                <div class="bloc_langue small-6 medium-4 large-2 columns">
                                    <a id="drapeau" href="#">
                                        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Flag.png" alt="drapeau" />
                                        English
                                    </a>
                                        <jdoc:include type="modules" name="bloc_langue" style="none" />
                                </div>-->
                <div class="bloc_slogan show-for-large-up large-6 columns">
                    <?php
                    if ($user->id) {
                        ?>
                        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/user.png" style="margin : 0 5px 3px 0" alt="" />
                        <?php
                        echo $user->name;
                    } else {
                        ?>
                        <span>Un outil interactif pour recruter et rechercher un emploi !</span>
                        <?php
                    }
                    ?>

                </div>
                <div class="bloc_connexion small-8 medium-6 large-4 columns" style="padding : 0">

                    <?php
                    if ($user->id) {
                        // utilistateur connecté, on lui affiche le bouton de déconnexion
                        ?>
                        <jdoc:include type="modules" name="bloc_deconnexion" title="Navigation" style="none" />

                        <?php
                    } else {
                        // non connecté, on lui affiche le lien pour se connecter
                        ?>

                        <a href="<?php echo $this->baseurl ?>/index.php/connexion">
                            <!--<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Lock.png" alt="" />-->
                            <span class="white connexion_" >
                                Connexion      
                            </span> 
                        </a>
                        <span  class="white" >|</span> 

                        <?php
                    }
//Si l'utilisateur n'est pas encore connecté, on lui propose un lien d'inscription
                    if (!$user->id) {
                        // utilistateur connecté, on lui affiche le bouton de déconnexion
                        ?>
                        <a href="<?php echo $this->baseurl ?>/index.php/inscription">
                            <!--<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Lock.png" alt="" />-->
                            <span class="white inscription_" >
                                Inscription
                            </span>
                        </a>
                        <?php
                    }
                    ?>

                </div>
                <div class="bloc_reseaux_sociaux small-4 medium-6 large-2 columns">
                    <p style="text-align: right; margin-top : 8px; margin-bottom: 0">
                        <a class="facebook" target="_blank" href="https://www.facebook.com/pages/BVAIP-Bureau-Virtuel-dAide-%C3%A0-lInsertion-Professionnelle/464202240391750">
                            <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Facebook.png" alt="facebook" 
                                 onmouseover="this.src = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Facebook-bleu.png'" 
                                 onmouseout="this.src = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Facebook.png'" />                    
                        </a>
                        <!--                    <a class="linkedin" target="_blank" href="https://www.linkedin.com/">
                                                <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Linkedin.png" alt="linkedin"  
                                                     onmouseover="this.src = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Linkedin-bleu.png'" 
                                                     onmouseout="this.src = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Linkedin.png'" />                    
                                            </a>                   -->
                        </a>
                        <a class="twitter" target="_blank" href="https://twitter.com/bvaip">
                            <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Twitter-Bird.png" alt="twitter"  
                                 onmouseover="this.src = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Twitter-Bird-bleu.png'" 
                                 onmouseout="this.src = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Twitter-Bird.png'" />                    
                        </a>                    
                        </a>
                        <a class="google" target="_blank" href="http://goo.gl/YGmfyW">
                            <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Google.png" alt="google"  
                                 onmouseover="this.src = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Google-rouge.png'" 
                                 onmouseout="this.src = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Google.png'" />                    
                        </a>
                    </p>
                </div>
            </div>
        </section>
        <!--<div class="row" style=""></div>-->
        <!-- Bloc du logo et du menu -->
        <section class="bloc_logo_menu small-12 columns">
            <div class="row">
                <div class="bloc_logo small-8 medium-6 large-3 columns small-centered large-uncentered">
                    <a id="logo" href="<?php echo $this->baseurl; ?>">
                        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/logo.png" alt="logo" /> 
                        <!--<jdoc:include type="modules" name="bloc_logo" style="none" />-->
                    </a>
                </div>

                <?php if ($this->countModules('bloc_navigation')) { ?>
                    <div class="bloc_navigation small-12 medium-12 large-9 columns small-centered large-uncentered">

                        <nav class="top-bar" data-topbar="">
                            <ul class="title-area">
                                <!-- Title Area -->
                                <li class="name">

                                </li>
                                <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                                <li class="toggle-topbar menu-icon"><a href=""><span>MENU</span></a></li>
                            </ul>

                            <section class="top-bar-section" style="left: 0%;">                            

                                <jdoc:include type="modules" name="bloc_navigation" title="Navigation" style="none" />

                            </section>
                        </nav>

                    </div>
                <?php } ?>
            </div>
        </section>

        <!-- Bloc du slideshow (Orbit slider) -->    
        <?php if ($this->countModules('bloc_slideshow')) { ?>
            <section class="bloc_slideshow small-12 columns" >
                <div class="row" style="text-align: center" >
                    <ul data-orbit data-options="resume_on_mouseout: true; timer_speed: 5000; slide_number: false">
                        <!--                            <li>
                                                        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/bg-slider.jpg" alt="slide 1" />
                                                      
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Cameron.jpg" alt="slide 2" />
                                                       
                                                    </li>-->
                        <jdoc:include type="modules" name="bloc_slideshow" title="Slide Show" style="none" />

                    </ul>
                </div>
            </section>
        <?php } ?>
        <!--<div class="row" style=""></div>-->
        <!-- Bloc Recherche emploi --> 
        <?php if ($this->countModules('bloc_recherche_emploi')) { ?>
            <section class="bloc_recherche_emploi small-12 columns" style="background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/background/background_recherche.jpg')">
                <div class="row" >
                    <div class="small-12 columns">
                        <h3 class="findJob" data-skip="true">Trouvez des offres d'emploi !</h3>
                        <jdoc:include type="modules" name="bloc_recherche_emploi" style="none" />
                    </div>
                </div>
            </section>
        <?php } ?>

        <!-- Fil d'ariane -->
        <?php if ($this->countModules('bloc_fil_ariane')) { ?>
            <section class="bloc_fil_ariane small-12 columns">
                <div class="row">
                    <div class="small-12 columns">
                        <jdoc:include type="modules" name="bloc_fil_ariane" style="none" />
                    </div>
                </div>
            </section>
        <?php } ?>
        <!-- Bloc central (Bloc contenu + Bloc Menu Droit) -->
        <section class="bloc_contenu_menu_droit small-12 columns">
            <div class="row">
                <?php
                if ($this->countModules('bloc_menu_droit') OR $this->countModules('bloc_menu_droit_un')) {
                    /* Si il existe des éléments dans au moins l'un de ces deux modules alors */
                    ?>
                    <div class="bloc_contenu small-12 medium-8 large-8 columns end">                    
                        <jdoc:include type="message" />
                        <jdoc:include type="component" />
                    </div>
                    <div class="bloc_menu_droit small-12 medium-4 large-4 columns">
                        <?php
                        if ($this->countModules('bloc_menu_droit_un') AND !$user->guest) {
                            /* Lorsque l'utilisateur est connecté */
                            ?>

                            <div class="row-fluid">

                                <div class="bloc_module_display">
                                    <p class="bloc_titre_module">
                                        <span class="titre_module"><img style="margin-right: 1rem" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/user_black.png" alt=""/><?php echo $user->name ?></span>
                                    </p>
                                    <hr class="hr_module"/>
                                    <p>
                                        <jdoc:include type="modules" name="bloc_menu_droit_un" style="none" /><br/>
                                        <p>
                                            </div>

                                            </div>
                                        <?php } ?>



                                        <?php if ($this->countModules('bloc_menu_droit_offre_emploi')) { ?>

                                            <div class="row-fluid">

                                                <div class="bloc_module_display">
                                                    <p class="bloc_titre_module">
                                                        <span class="titre_module"><img style="margin-right: 1rem" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/for_this_week.png" alt=""/>Offres d'emploi</span>
                                                    </p>
                                                    <hr class="hr_module"/>
                                                    <p>
                                                        <jdoc:include type="modules" name="bloc_menu_droit_offre_emploi" style="none" /><br/>
                                                        <p>
                                                            </div>

                                                            </div>
                                                        <?php } ?>
                                                        <?php if ($this->countModules('bloc_menu_droit_connexion') AND $user->guest) { ?>

                                                            <div class="row-fluid">

                                                                <div class="bloc_module_display">
                                                                    <p class="bloc_titre_module">
                                                                        <span class="titre_module"><img style="margin-right: 1rem" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/login-02.png" alt=""/>Connexion</span>
                                                                    </p>
                                                                    <hr class="hr_module"/>
                                                                    <p>
                                                                        <jdoc:include type="modules" name="bloc_menu_droit_connexion" style="none" /><br/>
                                                                        <p>
                                                                            </div>

                                                                            </div>
                                                                        <?php } ?>






                                                                        <div class="row-fluid">
                                                                            <jdoc:include type="modules" name="bloc_menu_droit" style="none" />
                                                                        </div>

                                                                        </div>
                                                                    <?php } else {
                                                                        ?>
                                                                        <div class="bloc_contenu small-12 medium-12 large-12 columns end">                    
                                                                            <jdoc:include type="message" />
                                                                            <jdoc:include type="component" />
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    </div>
                                                                    </section>
                                                                    <!-- Bloc Publicitaire bas --> 
                                                                    <?php if ($this->countModules('bloc_publicitaire')) { ?>
                                                                        <section class="bloc_publicitaire small-12 columns">
                                                                            <div class="row">           

                                                                                <jdoc:include type="modules" name="bloc_publicitaire" style="none" />
                                                                            </div>
                                                                        </section>
                                                                    <?php } ?>
                                                                    <!-- Bloc bas de page ( 3 blocs verticaux) --> 
                                                                    <!--NB : la disposition des 3 blocs de bas de page est fonction du nombre de modules publiés.--> 
                                                                    <?php if ($this->countModules('bloc_bas_page_gauche') OR $this->countModules('bloc_bas_page_centre') OR $this->countModules('bloc_bas_page_droit')) { ?>
                                                                        <section class="bloc_bas_page small-12 columns">
                                                                            <?php
                                                                            $NbreModulesBasPage = (bool) $this->countModules('bloc_bas_page_gauche') +
                                                                                    (bool) $this->countModules('bloc_bas_page_centre') +
                                                                                    (bool) $this->countModules('bloc_bas_page_droit');
                                                                            $indice = 12 / ($NbreModulesBasPage);
                                                                            ?>
                                                                            <div class="row"> 
                                                                                <?php if ($this->countModules('bloc_bas_page_gauche')) { ?>          
                                                                                    <div class="bloc_bas_page_gauche small-12 medium-<?php echo $indice; ?> large-<?php echo $indice; ?> columns">
                                                                                        <jdoc:include type="modules" name="bloc_bas_page_gauche" style="none" />
                                                                                    </div>   
                                                                                <?php } ?>
                                                                                <?php if ($this->countModules('bloc_bas_page_centre')) { ?>      
                                                                                    <div class="bloc_bas_page_centre small-12 medium-<?php echo $indice; ?> large-<?php echo $indice; ?> columns">
                                                                                        <p><strong>DERNIERS ARTICLES</strong></p>
                                                                                        <jdoc:include type="modules" name="bloc_bas_page_centre" style="none" />
                                                                                    </div>   
                                                                                <?php } ?>   
                                                                                <?php if ($this->countModules('bloc_bas_page_droit')) { ?> 
                                                                                    <div class="bloc_bas_page_droit small-12 medium-<?php echo $indice; ?> large-<?php echo $indice; ?> columns">
                                                                                        <p><strong>TAGS POPULAIRES</strong></p>
                                                                                        <jdoc:include type="modules" name="bloc_bas_page_droit" style="none" />
                                                                                    </div>
                                                                                <?php } ?>
                                                                            </div>
                                                                        </section>
                                                                    <?php } ?>
                                                                    <!-- Bloc Pied de page  ( 3 blocs verticaux) -->
                                                                    <!--NB : la disposition des 3 blocs de bas de page est fonction du nombre de modules publiés.--> 
                                                                    <?php if ($this->countModules('bloc_footer_gauche') OR $this->countModules('bloc_footer_centre') OR $this->countModules('bloc_footer_droit')) { ?>
                                                                        <section class="bloc_footer small-12 columns" style="background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/background/background_entete.jpg')">
                                                                            <?php
                                                                            $NbreModulesFooter = (bool) $this->countModules('bloc_footer_gauche') +
                                                                                    (bool) $this->countModules('bloc_footer_centre');
                                                                            $indice = 8 / ($NbreModulesFooter);
                                                                            ?>
                                                                            <div class="row"> 
                                                                                <?php if ($this->countModules('bloc_footer_gauche')) { ?>          
                                                                                    <div class="bloc_footer_gauche small-12 medium-<?php echo $indice; ?> large-<?php echo $indice; ?> columns">
                                                                                        <jdoc:include type="modules" name="bloc_footer_gauche" style="none" />
                                                                                    </div>   
                                                                                <?php } ?>
                                                                                <?php if ($this->countModules('bloc_footer_centre')) { ?>      
                                                                                    <div class="bloc_footer_centre small-12 medium-<?php echo $indice; ?> large-<?php echo $indice; ?> columns">
                                                                                        <jdoc:include type="modules" name="bloc_footer_centre" style="none" />
                                                                                    </div>   
                                                                                <?php } ?>     
                                                                                <div class="bloc_footer_droit small-12 medium-<?php echo $indice; ?> large-<?php echo $indice; ?> columns">
                                                                                    Suivez-nous
                                                                                    <a class="facebook" target="_blank" href="https://www.facebook.com/pages/BVAIP-Bureau-Virtuel-dAide-%C3%A0-lInsertion-Professionnelle/464202240391750">
                                                                                        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Facebook.png" alt="facebook" 
                                                                                             onmouseover="this.src = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Facebook-bleu.png'" 
                                                                                             onmouseout="this.src = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Facebook.png'" />                    
                                                                                    </a>
                                                                                    <!--                        <a class="linkedin" target="_blank" href="https://www.linkedin.com/">
                                                                                                                <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Linkedin.png" alt="linkedin"  
                                                                                                                     onmouseover="this.src = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Linkedin-bleu.png'" 
                                                                                                                     onmouseout="this.src = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Linkedin.png'" />                    
                                                                                                            </a>                   -->
                                                                                    </a>
                                                                                    <a class="twitter" target="_blank" href="https://twitter.com/bvaip">
                                                                                        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Twitter-Bird.png" alt="twitter"  
                                                                                             onmouseover="this.src = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Twitter-Bird-bleu.png'" 
                                                                                             onmouseout="this.src = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Twitter-Bird.png'" />                    
                                                                                    </a>                    
                                                                                    </a>
                                                                                    <a class="google" target="_blank" href="http://goo.gl/YGmfyW">
                                                                                        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Google.png" alt="google"  
                                                                                             onmouseover="this.src = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Google-rouge.png'" 
                                                                                             onmouseout="this.src = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/Google.png'" />                    
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    <?php } ?>

                                                                    <section class="small-12 columns">
                                                                        <div class="row">
                                                                            <jdoc:include type="modules" name="debug" style="none" />
                                                                        </div>
                                                                    </section>


                                                                    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/foundation/js/vendor/modernizr.js"></script>
                                                                    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/foundation/js/vendor/jquery.js"></script>
                                                                    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/foundation/js/vendor/fastclick.js"></script>
                                                                    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/foundation/js/foundation/foundation.js"></script>
                                                                    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/foundation/js/foundation/foundation.topbar.js"></script>
                                                                    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/foundation/js/foundation/foundation.orbit.js"></script>
                                                                    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/foundation/js/foundation/foundation.tooltip.js"></script>
                                                                    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/foundation/js/foundation/foundation.tab.js"></script>
                                                                    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/foundation/js/foundation/foundation.alert.js"></script>
                                                                    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/foundation/js/foundation/foundation.reveal.js"></script>
                                                                    <!--<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/foundation/js/foundation/foundation.abide.js"></script>-->

                                                                    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/library/daterangepicker/moment.min.js"></script>
                                                                    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/library/daterangepicker/daterangepicker.js"></script>
                                                                    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/library/intl-tel-input/build/js/intlTelInput.min.js"></script>
                                                                    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/library/zmultiselect/zurb5-multiselect.js"></script>


                                                                    <script>
                                                                                             $(document).foundation({
                                                                                                 reveal: {
//                                                                                                     animation_speed: 250
                                                                                                 }
                                                                                             });
                                                                                             
                                                                                             /* Afficher les alert-box et les faire disparaître après x seconds */
                                                                                             var $alertBox = $('.alert-box.temporaire');
                                                                                             // fade $alertBox out after 4 second (4000 ms)
                                                                                             $alertBox.delay(4000).fadeOut('slow');

                                                                                             /* Ouvrir une fenêtre modale au chargement de la page */
                                                                                             $(document).ready(function() {
                                                                                                 $('.modalBox').foundation('reveal', 'open');
                                                                                             });

                                                                                             

                                                                                             /* Mettre les drapeaux et les indicatifs téléphoniques des pays dans les champs input type="tel" */
                                                                                             $("#jform_telephone").intlTelInput({
                                                                                                 //            onlyCountries : ["bj"]
                                                                                                 defaultCountry: "sn"
                                                                                                         //           // nationalMode : true,
                                                                                                         //            //preferredCountries : ["af"],
                                                                                                         //           // selectCountry : "gb"
                                                                                             });
                                                                                             $('.madate').daterangepicker({
                                                                                                 format: 'DD/MM/YYYY',
                                                                                                 showDropdowns: true,
                                                                                                 singleDatePicker: true,
                                                                                                 startDate: '01-01-2014'
                                                                                             });
                                                                                             $('.dateBDD').daterangepicker({
                                                                                                 format: 'YYYY-MM-DD',
                                                                                                 showDropdowns: true,
                                                                                                 singleDatePicker: true,
                                                                                                 startDate: '2015-01-01'
                                                                                             });
                                                                                             //                                                                             $("select#jform_tags").zmultiselect({
                                                                                             //                                                                                 live: "#listeComptes",
                                                                                             ////                                                                                 placeholder: "Sélectionner ci-dessous",
                                                                                             //                                                                                 filter: true,
                                                                                             //                                                                                 filterPlaceholder: 'Filtre...',
                                                                                             //                                                                                 filterResult: true,
                                                                                             //                                                                                 filterResultText: "Eléments",
                                                                                             //                                                                                 selectedText: ['Comptes sélectionnés : ', 'sur'],
                                                                                             //                                                                                 selectAllText: ["Tout sélectionner", "Tout annuler"]
                                                                                             //                                                                             });

                                                                    </script>
                                                                    </body>

                                                                    </html>
