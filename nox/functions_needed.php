<?php
// functions_needed.php for nox in /home/hottin_l/Projets/NO_X/hottin_l/nox/include
// 
// Made by HOTTIN Lucie
// Login   <hottin_l@etna-alternance.net>
// 
// Started on  Mon Nov 10 18:04:05 2014 HOTTIN Lucie
// Last update Mon Nov 10 18:07:30 2014 HOTTIN Lucie
//

function	search($message, $dico)
{
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
}

function	content_param($param)
{
  $recherche = 1;
  if(file_exists($param) == FALSE)
    {
      echo "\033[31;05mLe message n'existe pas. \033[00m\n\n";
      exit;
    }
else
  {
    $content = file_get_contents($param);
    echo "\n\033[04mRecherche n˚$recherche :\033[00m\n\n";
    $message = explode(" ", trim($content));
    $content2 = file_get_contents("dico");
    $dico = explode(" ", trim($content2));
    $trier= implode(' ',$dico);
    file_put_contents("dico", $trier);
    search($message, $dico);
    $recherche++;
  }
}

function	message_test($argc)
{
  if ($argc == 3)
    {
      echo "\033[35m";
      echo "Agent N˚X, vous ne saviez peut être pas que vous pouviez faire ";
      echo "plusieurs recherches en même temps. \n";
      echo "Si vous voulez essayer, il vous faudra quitter le programme et ";
      echo "le relancer avec plusieurs messages (des fichiers message) !!\n\n";
      echo "\033[00m";
    }
}