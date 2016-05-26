<?php
/*
 * Grâce à ce fichier, à chaque fois qu'un internaute tombe sur une page 404, 
 * il est redirigé vers la page d'accueil
 */
defined('_JEXEC') or die;

$lien_de_redirection = $this->baseurl;

if (($this->error->getCode()) == '404') {
	header('Location: '.$lien_de_redirection);
	exit;
}