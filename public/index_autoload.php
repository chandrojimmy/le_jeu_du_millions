<?php
namespace Chandro\App ;

require_once '../src/Utils/autoloaders.php';
//enregistrement des fonctions d'autoload
spl_autoload_register('Chandro\Utils\myAutoloadingWithPrefix');
//import de la classe Question
use Chandro\Entity\Question;
// import de la classe Answer
use Chandro\Entity\Answer;
//création d'une question
$answer = new Question();
$answer->setContentTexte("Qu'est-ce que la loi de Moore ?");
   $answer ->setLevel(1);
echo $answer;
echo "<br>"; //retour à la ligne
//création d'une réponse
$answer = new Answer();
$answer->setContentText("Une loi pour faire de l'hu(moor)");
echo $answer;


