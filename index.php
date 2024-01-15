<?php

use class\UserManager;

require_once 'class/answer.php';
require_once 'class/question.php';
require_once 'class/qcm.php';

require_once 'config/connexion_database.php';


$qcm = new Qcm();
$question1 = new Question('POO signifie :');
$question1->addAnswer(new Answer('Php Orienté Objet'));
$question1->addAnswer(new Answer('ProgrammatiOn Orientée Outil'));
$question1->addAnswer(new Answer('Programmation Orientée Objet', Answer::BONNE_REPONSE));
$question1->addAnswer(new Answer('Papillon Onirique Ostentatoire'));
$question1->setExplanation('Sans commentaires si vous avez eu faux :-°');
$qcm->addQuestion($question1);
$qcm->generate();


echo '<pre>';
var_dump($qcm);
echo '<pre>';
$qcm->generate();