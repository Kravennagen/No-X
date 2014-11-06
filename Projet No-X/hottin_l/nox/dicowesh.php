#!/usr/bin/env php
<?php
// dicowesh.php for Jour 04 in /home/hottin_l/Piscine/Algo/Jour04/hottin_l/defi14
// 
// Made by HOTTIN Lucie
// Login   <hottin_l@etna-alternance.net>
// 
// Started on  Thu Oct 23 09:00:24 2014 HOTTIN Lucie
// Last update Thu Oct 23 23:16:48 2014 HOTTIN Lucie
//


require_once('./include/my_aff_term.php');
require_once('./include/commands_1_2_3.php');
require_once('./include/exit.php');
require_once('./include/commands_a_b.php');
require_once('./include/wesh_to_fr.php');

$dico_wesh = array (
		    "belek" => "attention",
		    "narvalo" => "idiot",
		    "bigo" => "téléphone",
		    "chiller" => "profiter",
		    "craque" => "mensonge",
		    "flouze" => "argent",
		    "gamos" => "voiture",
		    "cistera" => "raciste",
		    "hass" => "problème",
		    "pecno" => "paysan",
		    "pourave" => "nul",
		    "srab" => "camarade",
		    "stokos" => "musclé",
		    "tarlouze" => "lâche",
		    "wesh" => "bonjour",
		    );

$file = fopen('php://stdin', 'r');
my_aff_term();
if ($file !== FALSE)
  {
    echo "\n\033[01;36mCe que je souhaite faire :\033[00m ";
    while (($line = fgets($file)) !== FALSE)
      {
	$params = preg_split("/\s+/", $line);
	$ptr = 'my_func_'.$params[0];
	if (function_exists($ptr))
	  {
	    $ptr($params);
	  }
	else
          echo $params[0].":\033[05;31m Command not found\033[00m\n";
	echo "\n\033[01;36mCe que je souhaite faire :\033[00m ";
      }
    fclose($file);
  }