#!/usr/bin/env php
<?php
// nox.php for NO_X in /home/hottin_l/Projets/NO_X/hottin_l/nox
// 
// Made by HOTTIN Lucie
// Login   <hottin_l@etna-alternance.net>
// 
// Started on  Thu Nov  6 09:17:07 2014 HOTTIN Lucie
// Last update Thu Nov  6 11:20:41 2014 HOTTIN Lucie
//

require_once "./include/error_management.php";

echo "essai\n";

$param = $argv[1];
echo "test\n";
if (error_management($param) == TRUE)
  {
    echo "test1\n";	
    //chorno
    $file = fopen($param, "r");
    //    $content = file_get_contents($param);
    readfile($param);
    fclose($file);
  }