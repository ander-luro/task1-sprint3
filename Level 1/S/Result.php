<?php

require_once 'Athlete.php';
require_once 'Event.php';
require_once 'Medal.php';



class Result {
    private Athlete $athlete;
    private Event $event;
    private Medal $medal;

    public function __construct(Athlete $athlete, Event $event, Medal $medal)
    {
        $this->athlete = $athlete;
        $this->event = $event;
        $this->medal = $medal;
    }

    public function getResultSumary() : string{
        $resultSumary = $this->athlete->getName()." from ".$this->athlete->getCountry()." won the ".$this->medal->value." medal in ".$this->event->getName()." on ".$this->event->getDate().PHP_EOL;
        return $resultSumary;

    }



}