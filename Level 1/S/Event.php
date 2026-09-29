<?php

class Event {
    private string $name;
    private DateTimeImmutable $date;

    public function __construct(string $name, DateTimeImmutable $date)
    {
        $this->name = $name;
        $this->date = $date;
    }

    public function getName() : string{
        return $this->name;
    }

    public function getDate() : string{
        return $this->date->format('Y-m-d');        
    }


}