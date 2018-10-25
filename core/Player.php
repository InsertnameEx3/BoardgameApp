<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */
class Player
{
    public $name;
    public $readyForGame; //boolean true/false
    public $wins;


    //public function __construct($name, $available)
    //{
        //$this->name = $name;
       // $this->readyForGame = $available;
    //}

    public function isAvailable()
    {
        Return "Is " . $this->name . " klaar om een spel te spelen? " . ($this->readyForGame ? " Ready!" : " Playing!");
    }
}