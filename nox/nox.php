#!/usr/bin/env php
<?php
// nox.php for NO_X in /home/hottin_l/Projets/NO_X/hottin_l/nox
//
// Made by HOTTIN Lucie
// Login   <hottin_l@etna-alternance.net>
//
// Started on  Thu Nov  6 09:17:07 2014 HOTTIN Lucie
// Last update Mon Nov 10 18:07:52 2014 HOTTIN Lucie
//

require_once "./include/error_management.php";
require_once "./include/message_sortie.php";
require_once "./include/functions_needed.php";

system("clear");
$j = 1;
$deb = microtime(TRUE);
if ($argc < 3)
  echo "Vous devez saisir au moins 3 arguments : un fichier exécutable en premier, un dico et un message\n";
else
  {
    echo "\033[01;32m\nBienvenue Agent N˚X\n\n\033[00m";
    while ($j < $argc)
      {
	$param = $argv[$j];
	if ($param == "dico")
	  $j++;
	elseif (error_management($param) == TRUE)
	  {
	    content_param($param);
	    echo "\n\033[36;04mComprendre dans ce message :\033[00m ", message_sortie($param);
	    $j++;
	  }
      }
    $fin = microtime(TRUE);
    $time = $fin - $deb;
    $form = number_format($time, 5);
    echo "\nRecherche terminée en " . $form . " sec.\n\n";
    message_test($argc);
  }