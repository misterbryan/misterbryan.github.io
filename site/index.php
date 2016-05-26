<?php
defined('_JEXEC') or die('Restricted access');

//Récupérer les informations sur l'utilisateur
$user = JFactory::getUser();
?>
<?php $this->setGenerator('Site personnel de Briand IDOSSOU'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" 
      lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
    <head>
        <jdoc:include type="head" />
<title>Briand I. IDOSSOU</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=1024" />
<meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="author" content="Briand IDOSSOU" />
        <meta name="type" content="website" />
        <meta name="url" content="http://idossoubriand.joomla.com/" />

        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/foundation/css/foundation.min.css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/jscrollpane.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/lightbox.css" type="text/css" />
		
        <link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/favicon.ico">
    
<!--[if lt IE 9]> 
<style type="text/css">
.ff-container{margin-top:-20px;}
.ff-items a span {display:none;}
.ff-items a:hover span {display:block;background-color:#b72228;width:120px;height:80px;}
.ie8 {display:none;}
.label{border:none; padding-left:15px;}
</style>
<![endif]-->
</head>
<body onLoad="load()" class="impress-not-supported">
<!-- OVRVIEW BUTTON  -->
<a href="#overview" class="overview-button"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/overview.png" alt="" /></a>
<!-- NAVIGATION  -->
<ul id="navigation">
  <li><a href="#home"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/home.png" alt="" /><span>Accueil</span></a></li>
  <li><a href="#about"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/about.png" alt="" /><span>A propos</span></a></li>
  <li><a href="#resume"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/resume.png" alt="" /><span>CV</span></a></li>
  <li><a href="#skills"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/skills.png" alt="" /><span>Notions</span></a></li>
  <li><a href="#portfolio"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/portfolio.png" alt="" /><span>Portfolio</span></a></li>
  <!--li><a href="#contact"><img src="images/contact.png" alt="" /><span>Contact</span></a></li-->
</ul>
<!-- FALLBACK MESSAGE FOR OLDER BROWSERS  -->
<div class="fallback-message">
  <p>Votre navigateur <b>ne supporte pas les éléments nécessaires pour le bon fonctionnement de ce site</b>, ceci en est donc la version simplifiée.</p>
  <p>Pour une meilleur performance, utilisez la dernière version de <b>Chrome</b>, <b>Safari</b> ou <b>Firefox</b> browser.</p>
</div>
<div id="impress">
<!-- HOMEPAGE  -->
  <div id="home" class="step" data-x="950" data-y="-700" data-scale="6">
    <div class="home-grid">
    <!-- SLIDER  -->
      <div class="slider-wrapper theme-default box effect">
        <div id="" class="nivoSlider"> 
        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/1.jpg" alt="" /> 
	  </div>
      </div>
    </div>
    <div class="home-grid">
      <h1>Briand I. IDOSSOU</h1>
      <h2>Développeur d'applications</h2>
      <ul class="icons">
        <li><a href="https://www.facebook.com/bryan.f.jimmy?fref=ts" target="_new"><img class="icon" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/social-icons/facebook.png" alt="Facebook" /></a></li>
        <li><a href="https://twitter.com/idossoubriand" target="_new"><img class="icon" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/social-icons/twitter.png" alt="Twitter" /></a></li>
        <li><a href="https://linkedin.com/pub/briand-idossou/59/591/89a/" target="_new"><img class="icon" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/social-icons/in.png" alt="Linked In" /></a></li>
        <li><a href="https://plus.google.com/113561984045244061482/posts/p/pub" target="_new"><img class="icon" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/social-icons/google.png" alt="Google +" /></a></li>
      </ul>
    </div>
  </div>
  <!-- ABOUT ME  -->
  <div id="about" class="step" data-x="-600" data-y="3000" data-z="-1000" data-rotate="90" data-scale="4">
    <div id="about-scroll" class="jp-container about-panel">
      <h2>A propos</h2>
      <p>Développeur d'applications, passionné des NTIC et autodidacte.</p>
      <div class="about-grid-left">
        <p><span class="label">NOM:</span>Briand I. IDOSSOU</p>
        <p><span class="label">DATE DE NAISSANCE:</span>24/09/1991</p>
        <!--p><span class="label">LIEU DE NAISSANCE:</span>Abomey-Calavi, BENIN</p-->
        <p><span class="label">E-MAIL:</span>idossoubriand@gmail.com</p>
        <p><span class="label">TELEPHONE:</span>(Benin) +229 96767673, (Dakar) +221 778707554</p>
      </div>
      <div class="about-grid-right">
      </div>
    </div>
  </div>
  <!-- RESUME  -->
  <div id="resume" class="step" data-x="2800" data-y="2700" data-rotate="180" data-scale="5">
    <div id="resume-scroll" class="jp-container resume-panel">
      <h2>Expériences</h2>
      <div class="resume">
        <p class="first"><span class="place">Volontaire International - OIF&AUF</span><span class="time">12/2014-12/2015</span></p>
        <p class="second">
		<i>Volontaire International de l'Organisation Internationale de la Francophonie (OIF). En poste à l'Agence Universitaire de la Francophonie (AUF).</i> <br/>
		Mise en place d'un Bureau Virtuel d'Aide à l'Insertion professionnelle. Réalisation de la charte graphique, de l'application web, et campagne sur les réseaux sociaux.
		</p>
      </div>
      <div class="resume">
        <p class="first"><span class="place">Développeur Web - H.E. Systems</span><span class="time">03/2014-11/2014</span></p>
        <p class="second">
			Développement d'une plateforme sécurisée de paiement en ligne.
		</p>
      </div>
      <div class="resume">
        <p class="first"><span class="place">Designer&Développeur - MobileLab</span><span class="time">08/2013-03/2014</span></p>
        <p class="second">
			Chef projet, designer, développeur et administrateur des applications web réalisées par la société MobileLab
		</p>
      </div>
	  <div class="resume">
        <p class="first"><span class="place">Stagiaire - OTI</span><span class="time">02/2013-08/2013</span></p>
        <p class="second">
			Mémoire de fin de formation en informatique. </br>
			Mise en œuvre de la Voix sur IP sur un réseau d'opérateur : Qualité de Services et performances.
		</p>
      </div>
	  <div class="resume">
        <p class="first"><span class="place">Consultant Web - Magmatel</span><span class="time">11/2012-02/2013</span></p>
        <p class="second">
			Suivi du projet de développement d'une plateforme web de gestion des dossiers médicaux des patients sur toute l'étendue du territoire national.
		</p>
      </div>
	  <div class="resume">
        <p class="first"><span class="place">Stagiaire - CoNeSI</span><span class="time">08/2010-10/2010</span></p>
        <p class="second">
			Apprentissage de la réparation des Desktops, côté Hard et côté Soft. Maîtrise des composants des ordinateurs et des techniques pour bien préserver les matériels informatiques.
		</p>
      </div>
	  <div class="resume">
        <p class="first"><span class="place">Stagiaire - Euphorbia</span><span class="time">08/2009-09/2009</span></p>
        <p class="second">
			Maîtrise de l’architecture des réseaux informatiques et des configurations des équipements d'un réseau informatique.
		</p>
      </div>
      <h2>Etudes et Formations</h2>
      <div class="resume">
        <p class="first"><span class="place">EPAC BENIN </span><span class="time">2008-2013</span></p>
        <p class="second">
		Cycle d'ingénieur en Informatique et en réseaux à l’EPAC (Ecole Polytechnique d’Abomey-Calavi). 
Obtention du diplôme d'ingénieur de conception en réseaux informatiques et internet
</p>
      </div>
      <div class="resume">
        <p class="first"><span class="place">FADESP BENIN</span><span class="time">2008-20012</span></p>
        <p class="second">
		Cycle de maîtrise en Sciences Juridiques à la FADESP (Faculté de Droit et de Sciences Politiques). 
Obtention de la licence puis de la maîtrise en Droit des Affaires et Carrière Judicaire
</p>
      </div>
	  <div class="resume">
        <p class="first"><span class="place">CSJM Le Faucon BENIN</span><span class="time">2001-2008</span></p>
        <p class="second">
		Cours secondaire au CSJM (Complexe Scolaire Jean Michel) Le Faucon. Obtention du BACCALAUREAT Série D, mention Bien
		</p>
      </div>
    </div>
  </div>
  <!-- SKILLS  -->
  <div id="skills" class="step" data-x="5800" data-y="-1700" data-z="-3000" data-rotate="300" data-scale="3">
    <h2>Compétences</h2>
    <div class="legend">
      <div class="skills">
        <ul>
          <li class="sql">SQL</li>
          <li class="photoshop">Photoshop</li>
          <li class="joomla">Joomla</li>
          <li class="php">PHP</li>
          <li class="html5_css3">HTML5/CSS3</li>
        </ul>
      </div>
    </div>
    <div id="diagram"></div>
    <div class="get">
      <div class="arc"> <span class="text">SQL</span>
        <input type="hidden" class="percent" value="70" />
        <input type="hidden" class="color" value="#88B8E6" />
      </div>
      <div class="arc"> <span class="text">Photoshop</span>
        <input type="hidden" class="percent" value="75" />
        <input type="hidden" class="color" value="#750000" />
      </div>
      <div class="arc"> <span class="text">Joomla</span>
        <input type="hidden" class="percent" value="85" />
        <input type="hidden" class="color" value="#9C8ADC" />
      </div>
      <div class="arc"> <span class="text">PHP</span>
        <input type="hidden" class="percent" value="90" />
        <input type="hidden" class="color" value="#750EE0" />
      </div>
	  <div class="arc"> <span class="text">HTML5/CSS3</span>
        <input type="hidden" class="percent" value="95" />
        <input type="hidden" class="color" value="#6286a8" />
      </div>
    </div>
  </div>
  <!-- PORTFOLIO  -->
  <div id="portfolio" class="step" data-x="6800" data-y="250" data-rotate="290" data-scale="2">
    <div id="portfolio-scroll" class="jp-container portfolio-panel">
      <h2>Portfolio</h2>
      <div class="ff-container">
        <input id="select-type-all" name="radio-set-1" type="radio" class="ff-selector-type-all ie8" checked="checked" />
        <label for="select-type-all" class="ff-label-type-all ie8">Tous</label>
        <input id="select-type-1" name="radio-set-1" type="radio" class="ff-selector-type-1 ie8" />
        <label for="select-type-1" class="ff-label-type-1 ie8">Sites Web</label>
        <input id="select-type-2" name="radio-set-1" type="radio" class="ff-selector-type-2 ie8" />
        <label for="select-type-2" class="ff-label-type-2 ie8">Applications</label>
        <div class="clr"></div>
        <ul class="ff-items">
          <li class="ff-item-type-2"> <a data-rel="lightbox[project1]" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/portfolio/2-1.jpg"> <span>Application DriverCode</span> <img src="images/portfolio/2-1-thumb.jpg" alt="" /> </a> </li>
          <li class="ff-item-type-2"> <a data-rel="lightbox[project1]" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/portfolio/2-2.jpg"> <span>Application Sante++</span> <img src="images/portfolio/2-2-thumb.jpg" alt="" /> </a> </li>
          <li class="ff-item-type-1"> <a data-rel="lightbox[project1]" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/portfolio/1-1.jpg"> <span>Site web perso Briand IDOSSOU</span> <img src="images/portfolio/1-1-thumb.jpg" alt="" /> </a> </li>
          <li class="ff-item-type-1"> <a data-rel="lightbox[project1]" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/portfolio/1-2.jpg"> <span>Site de l'entreprise MobileLab</span> <img src="images/portfolio/1-2-thumb.jpg" alt="" /> </a> </li>
         <li class="ff-item-type-1"> <a data-rel="lightbox[project1]" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/portfolio/1-3.jpg"> <span>Site appengine JobCloud</span> <img src="images/portfolio/1-3-thumb.jpg" alt="" /> </a> </li>
          <li class="ff-item-type-1"> <a data-rel="lightbox[project1]" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/portfolio/1-4.jpg"> <span>Site e-commerce CieloMarket</span> <img src="images/portfolio/1-4-thumb.jpg" alt="" /> </a> </li>
         <li class="ff-item-type-1"> <a data-rel="lightbox[project1]" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/portfolio/1-5.jpg"> <span>Site d'emploi BVAIP</span> <img src="images/portfolio/1-5-thumb.jpg" alt="" /> </a> </li>
           </ul>
      </div>
    </div>
  </div>
  <!-- CONTACT  -->
  <!--div id="contact" class="step" data-x="6700" data-y="3000" data-z="-1000" data-rotate="340" data-scale="3">
    <div class="map-effect"><div id="map" class="map"></div></div>
    <div class="contact-left">
      <h5>Contact Info</h5>
      <p><span class="label">Adresse:</span>Benin, Abomey-Calavi, Quartier Agori Plateau/ Sénégal, Dakar, Medina Rue 6x11</p>
      <p><span class="label">Téléphone:</span>+229 96767673 / +221 778707554</p>
      <p><span class="label">E-mail:</span>idossoubriand@gmail.com</p>
    </div>
    <div class="contact-right">
      <h5>Contact Rapide</h5>
      <form id="contactForm" action="#" method="post">
        <div class="contact-form">
          <input type="text" name="senderName" id="senderName" required="required" maxlength="40" placeholder="Nom" />
          <input type="email" name="senderEmail" id="senderEmail" required="required" maxlength="50" placeholder="E-Mail"  />
          <textarea name="message" id="message" required="required" placeholder="Message" ></textarea>
          <input type="submit" id="sendMessage" name="sendMessage" class="button" value="Envoyer Message" />
        </div>
      </form>
      <div id="sendingMessage" class="statusMessage">
        <p>Envoi de message en cours. Veuillez patienter...</p>
      </div>
      <div id="successMessage" class="statusMessage">
        <p>Merci de m'avoir adresser un message, je vous réponds d'ici peu.</p>
      </div>
      <div id="failureMessage" class="statusMessage">
        <p>Il y a eu un problème lors de l'envoi de votre message. Veuillez reéssayer.</p>
      </div>
      <div id="incompleteMessage" class="statusMessage">
        <p>Veuillez remplir tous les champs.</p>
      </div>
    </div>
  </div-->
  <!-- CREDITS  -->
  <div id="credits" class="step" data-x="6700" data-y="6500" data-z="-100" data-rotate-x="-40" data-rotate-y="10" data-scale="1">
    <p><span class="t1">Merci de votre visite.</span> <br />
      <span class="t4">J'espère vous revoir</span> <b><sup>bientôt</sup> </b>!</p>
    <span class="footnote">Briand I. IDOSSOU - Développeur d'applications</span> </div>
  <div id="overview" class="step" data-x="3000" data-y="1500" data-scale="10"> </div>
</div>
<!-- HINT  -->
<div class="hint"> <span>Vous pouvez utiliser la barre d'espace ou les flêches de direction pour naviguer</span> </div>

<!-- JS FILES  -->
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/impress.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.jscrollpane.min.js" type="text/javascript"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/raphael.js" type="text/javascript"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/init.js" type="text/javascript"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/lightbox.js" type="text/javascript"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/scroll-startstop.events.jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/custom.js" type="text/javascript"></script>
<script type="text/javascript">impress().init();</script>
</body>

</html>
