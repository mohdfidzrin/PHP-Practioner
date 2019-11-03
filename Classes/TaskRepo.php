<?php

require 'Task.php';

class TaskRepo {

    protected $pdo;

    public function __construct()
    {
        $this->pdo = self::make();
    }

    protected static function make() {
        try {
            return new PDO(
                'mysql:host=127.0.0.1;dbname=mytodo', 'root',''
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    function fetchAllTasks($table) {
        $statement = $this->pdo->prepare("select * from $table");

        $statement->execute();

        return $statement->fetchAll(
            PDO::FETCH_CLASS,'Task'
        ); // map obj to Task Class or return $statement as a Task class/obj
    }
}