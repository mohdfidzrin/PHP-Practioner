<?php

class Tasks {
    public $description;

    public $completed = false;

    public function  __construct($description)
    {
        // Automatically triggered on instantiation
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
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
    new Tasks('Go to the store'),
    new Tasks('Fnish my screencast'),
    new Tasks('Clean up')
];

$tasks[0]->setCompleted(true);

require 'index.view.php';