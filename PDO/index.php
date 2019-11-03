<?php

require '../Classes/TaskRepo.php';

$taskRepo = new TaskRepo();

$tasks = $taskRepo->fetchAllTasks('todos');

require 'index.view.php';