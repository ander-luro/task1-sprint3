<?php

require_once 'Athlete.php';
require_once 'Event.php';
require_once 'Medal.php';
require_once 'Result.php';
require_once 'OlympicGame.php';

$athlete1 = new Athlete("Usain Bolt", "Jamaica");
$athlete2 = new Athlete("Justin Gatlin", "USA");
$athlete3 = new Athlete("Anita Włodarczyk", "Poland");
$athlete4 = new Athlete("Yipsi Moreno", "Cuba");
$athlete5 = new Athlete("Mondo Duplantis", "Sweden");
$athlete6 = new Athlete("Renaud Lavillenie", "France");

$event1 = new Event("100m Sprint", new DateTimeImmutable("2026-08-10"));
$event2 = new Event("Hammer Throw", new DateTimeImmutable("2026-08-12"));
$event3 = new Event("Pole Vault", new DateTimeImmutable("2026-08-14"));


$result1 = new Result($athlete1, $event1, Medal::GOLD);
$result2 = new Result($athlete2, $event1, Medal::SILVER);
$result3 = new Result($athlete3, $event2, Medal::GOLD);
$result4 = new Result($athlete4, $event2, Medal::SILVER);
$result5 = new Result($athlete5, $event3, Medal::GOLD);
$result6 = new Result($athlete6, $event3, Medal::BRONZE);


$olympicGame1 = new OlympicGame();
$olympicGame1->addResult($result1);
$olympicGame1->addResult($result2);
$olympicGame1->addResult($result3);
$olympicGame1->addResult($result4);
$olympicGame1->addResult($result5);
$olympicGame1->addResult($result6);


$olympicGame1->getOlympicResults();