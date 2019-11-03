<?php

class Task {
    protected $description;

    protected $completed = false;

    public function  __construct($description)
    {
        // Automatically triggered on instantiation
        $this->description = $description;
    }
}

$task = new Task('Go to the store');