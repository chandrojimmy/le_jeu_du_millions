<?php
namespace Chandro\App ;



require_once '../src/Entity/Question.php';
//inclusion des fichiers contenant les classes
require_once '../src/Entity/Answer.php';
//import de la classe Question
use Chandro\Jeu20\Entity\Question;
// import de la classe Answer
use Chandro\Jeu20\Entity\Answer;
//création d'une question
$answer = new Question();
$answer->setContentTexte("Qu'est-ce que la loi de Moore ?");
$answer->setLevel(1);
echo $answer;
echo "<br>"; //retour à la ligne
//création d'une réponse
$answer = new Answer();
$answer->setContentText("Une loi pour faire de l'hu(moor)");
echo $answer;
