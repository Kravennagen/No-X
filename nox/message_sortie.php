#!/usr/bin/env php
<?php
// content_param.php for NOx in /home/hottin_l/Projets/NO_X/hottin_l/nox
// 
// Made by HOTTIN Lucie
// Login   <hottin_l@etna-alternance.net>
// 
// Started on  Mon Nov 10 16:28:46 2014 HOTTIN Lucie
// Last update Mon Nov 10 17:10:05 2014 HOTTIN Lucie
//

function	message_sortie($message)
{
  switch ($message)
    {
    case "message1" :
      echo "\033[36m\n\nATTENTION, il y a un problème de cocaïne à Pétauchnok\033[00m\n";
      break;
    case "message2" :
      echo "\033[36m\n\nUn homme postillonant a eu une amende par les contrôleurs de transports en commun\033[00m\n";
      break;
    case "message3" :
      echo "\033[36m\n\nUn idiot a mangé le repas d'un paysan\n\033[00m";
      break;
    case "message4" :
      echo "\n\033[36m\nUn indic en costume est dans une cachette\n\033[00m";
      break;
    case "message5" :
      echo "\n\033[36m\nUn Portugais a cassé la cigarette d'un ami\n\033[00m";
      break;
    case "message6" :
      echo "\033[36m\n\nLes gens dans la voiture ont des ennuis au téléphone avec des délinquants de Seine-Saint-Denis\n\033[00m";
      break;
    case "message7" :
      echo "\033[36m\n\nLes policiers sont dans l'établissement. Il mettent de l'ambiance dans notre inactivité\n\033[00m";
      break;
    }
}