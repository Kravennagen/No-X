#!/usr/bin/env php
<?php
// nox.php for NO_X in /home/hottin_l/Projets/NO_X/hottin_l/nox
// 
// Made by HOTTIN Lucie
// Login   <hottin_l@etna-alternance.net>
// 
// Started on  Thu Nov  6 09:17:07 2014 HOTTIN Lucie
// Last update Thu Nov  6 17:53:55 2014 HOTTIN Lucie
//

require_once "./include/error_management.php";

// PENSER A SUPPRIMER TOUS LES COMMENTAIRES DANS TOUS LES FICHIERS !!!!!!

system("clear");
$j = 1;                      // le nombre d'arguments
$timestart = microtime(TRUE);
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
	    $file = fopen($param, "r");
	    $content = file_get_contents($param);    // Va servir pour rechercher chaque mot du fichier dans le dictionnaire wesh
	    echo "\033[04mRecherche n˚$recherche :\033[00m\n\n";
	    //	    print_r(explode(' ', $content));
	    $i = 0;
	    $tab = $content;
	    while ($i < 4)
	      {
		$reg1 = "/[0.9][06][16][9.3]/";
		//		if ($content[$i] == $reg1)
		print_r(explode(' ', $content));
		print_r($tab);
		echo "\n";
		$i++;
	      }
	    //	    readfile($param);                        // A modifier pour qu'il affiche le mot souhaité
	    fclose($file);
	    $j++;
	    $recherche++;
	  }
      }
    $timeend = microtime(TRUE);
    $time = $timeend - $timestart;
    $page_load_time = number_format($time, 4);
    echo "\nRecherche terminée en " . $page_load_time . " sec.\n\n";
  }