<?php

namespace Chandro\Jeu20\Utils;

class autoloaders
 {
     function myAutoloadingWithPrefix(string $className)
     {
         $prefix = "Chandro/Jeu20\\";
         $baseDir =__DIR__.'/../';
         $lengthPrefix = strlen($prefix);
         if (strcmp($prefix,$className,$lengthPrefix) !==0){
             return;
         }
         $pathTemp = str_replace($prefix,$baseDir,$className);
         $pathToClassFile  = str_replace('\\', '/' ,$pathTemp).'.php';
         if (file_exists($pathToClassFile)){
             require_once $pathToClassFile;
         }else{
             echo "non Trouvé !<br><br>";
         }


     }



}