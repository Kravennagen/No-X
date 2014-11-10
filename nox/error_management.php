<?php
// error_management.php for NO_X in /home/hottin_l/Projets/NO_X/hottin_l/nox/include
// 
// Made by HOTTIN Lucie
// Login   <hottin_l@etna-alternance.net>
// 
// Started on  Thu Nov  6 11:06:10 2014 HOTTIN Lucie
// Last update Thu Nov  6 11:14:22 2014 HOTTIN Lucie
//

function	error_management()
{
  if (isset($argv[1]))
    {
      $param = $argv[1];
      if (!file_exists($param))
	{
	  echo "nox: {$param}: No such fie or directory\n";
	  return (FALSE);
	}
      elseif (is_dir($param))
	{
	  echo "nox: {$param}: Is a directory\n";
	  return (FALSE);
	}
      elseif (!is_readable($param))
	{
	  echo "nox: {$param}: Permission denied\n";
	  return (FALSE);
	}
      elseif (fopen($param, "r") == 0)
	{
	  echo "nox: {$param}: Cannot open file\n";
	  return (FALSE);
	}
    }
  else
    return (TRUE);
}