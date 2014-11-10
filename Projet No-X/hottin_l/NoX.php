#!/usr/bin/env php
<?php
// NoX.php for NoX in /home/flaman_m/NoX
// 
// Made by FLAMANT Morgane
// Login   <flaman_m@etna-alternance.net>
// 
// Started on  Thu Nov  6 09:48:17 2014 FLAMANT Morgane
// Last update Thu Nov  6 18:00:36 2014 FLAMANT Morgane
//

$timestart=microtime(true);
//reste du code
$mots_wesh= array('crayon', 'stylo', 'feutre', 'taille-crayon', 'pointe', 'wesh', 'mine', 'gomme', 'dessin', 'coloriage', '\
rayure', 'peinture', 'pinceau', 'couleur', 'craie', 'papier', 'feuille', 'cahier', 'carnet');
$wesh = array("wesh");
array_diff_ukey(array $wesh, array $mots_wesh [,array $wesh], callable $key_compare_func)
var_dump(array_diff_ukey($mots_wesh, $wesh, 'key_compare_func'));
//for($i=0; $i<count($mots_wesh - 1); $i++)
// {
    //mots en wesh trouve
// }


//fin du code ici :
$timeend=microtime(true);
$time=$timeend - $timestart;

$page_load_time = number_format($time, 1);
echo "<br> Recherche terminee en " . $page_load_time . " sec.";
?>