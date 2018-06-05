<?php 

require 'functions.php';

class Task
{
    public $description;

    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}

$tasks = [
    new Task('Go to store'),
    new Task('Record good stuff'),
    new Task('Get coffee')
];
// dd($tasks);

$tasks[2]->complete();

require 'index.view.php';
