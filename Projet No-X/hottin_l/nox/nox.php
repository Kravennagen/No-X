#!/usr/bin/env php
<?php
// nox.php for NO_X in /home/hottin_l/Projets/NO_X/hottin_l/nox
// 
// Made by HOTTIN Lucie
// Login   <hottin_l@etna-alternance.net>
// 
// Started on  Thu Nov  6 09:17:07 2014 HOTTIN Lucie
// Last update Fri Nov  7 13:53:06 2014 HOTTIN Lucie
//

require_once "./include/error_management.php";

// PENSER A SUPPRIMER TOUS LES COMMENTAIRES DANS TOUS LES FICHIERS !!!!!!

system("clear");
$j = 1;
$deb = microtime(TRUE);
$recherche = 1;
if ($argc< 3)
  echo "Vous devez saisir au moins 3 arguments : un fichier exécutable en premier, un dico et un message\n";
else
  {
    while ($j < $argc)
      {
	$param = $argv[$j];
	if ($param == "dico")
	  $j++;
	elseif (error_management($param) == TRUE)
	  {
	    echo "\033[01;32m\nBienvenue Agent N˚X\n\n\033[00m";	
	    $content = file_get_contents($param);
	    echo "\033[04mRecherche n˚$recherche :\033[00m\n\n";
	    $message = explode(" ", trim($content));
	    $content2 = file_get_contents("dico");
	    $dico = explode(" ", trim($content2));
	    $i = 0;
	    while (isset($message[$i]))
	      {
		$k = 0;		
		while (isset($dico[$k]))
		  {
		    if ($message[$i] != $dico[$k])
		      $k++;
		    else
		      {
			echo "$message[$i]\n";
			break;
		      }
		  }		    
		$i++;
	      }
	    $j++;
	    $recherche++;
	  }
      }
    $fin = microtime(TRUE);
    $time = $fin - $deb;
    $form = number_format($time, 5);
    echo "\nRecherche terminée en " . $form . " sec.\n\n";
  }