<?php

require '../Classes/TaskRepo.php';

$taskRepo = new TaskRepo();

$pdo = $taskRepo->connectDb();

$tasks = $taskRepo->fetchAllTasks($pdo);

require 'index.view.php';