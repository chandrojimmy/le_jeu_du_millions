<?php

namespace Chandro\Utils;



 function myAutoloadingWithPrefix(string $className):void
 {
        $prefix = 'Chandro\\';
        //les classes sont accessibles en remontant d'un dossier (cela nous placedans le dossier "src")
  $baseDir = __DIR__.'/../';
  $lengthPrefix = strlen($prefix);
  if (strncmp($prefix, $className, $lengthPrefix) !== 0) {
      return;
  }
  $pathTemp = str_replace($prefix, $baseDir, $className);
  $pathToClassFile = str_replace('\\', '/', $pathTemp).'.php';

   if (file_exists($pathToClassFile)) {
       require_once $pathToClassFile;
   }else{
       echo "non trouvé !<br><br>";
   }






}