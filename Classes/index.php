<?php

class Task {
    protected $description;

    protected $completed = false;

    public function  __construct($description)
    {
        // Automatically triggered on instantiation
        $this->description = $description;
    }

    /**
     * @param bool $completed
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;
    }

    /**
     * @return bool
     */
    public function isCompleted()
    {
        return $this->completed;
    }

}

$tasks = [
    new Task('Go to the store'),
    new Task('Fnish my screencast'),
    new Task('Clean up')
];

require 'index.view.php';