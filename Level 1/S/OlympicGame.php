<?php
require_once 'Event.php';

class OlympicGame {
    private array $results = [];

    public function addResult(Result $result){
        $this->results[] = $result;
    }

    public function getOlympicResults(){
        foreach ($this->results as $result){
            echo "- ".$result->getResultSumary().PHP_EOL;
        }
    }

}