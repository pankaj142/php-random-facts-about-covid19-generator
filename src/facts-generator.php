<?php
namespace Facts;

class Covid19Facts{
    public function getRandomFact(){
        //get the facts
        $facts = file_get_contents( __DIR__ .'/../assets/facts.json');

        //get random number between 0 to 12 as we have only 13 facts in our dataset
        $rand_no = rand(0,12);
        $facts_decoded =  json_decode($facts);

        //return the fact
        return $facts_decoded[$rand_no];
    }

    public function generate(){
        return $this->getRandomFact();
    }
}