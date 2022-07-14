<?php

use \Utils\General\V1\Files;

//require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/Bank/Credit/Card.php';
//require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/Bank/Debet/Card.php';
//require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/Utils/General/V1/Files.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/app/autoload.php';

$cardDebet = new \Bank\Debet\Card();
$cardCredit = new \Bank\Credit\Card();
$filesUtils = new Files();

echo $cardDebet->getName();
echo '<br />';
echo $cardCredit->getName();
echo '<br />';
echo $filesUtils->getName();
