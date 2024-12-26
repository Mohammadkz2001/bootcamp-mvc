<?php

namespace controllers;
require_once __DIR__ . '/../models/Task.php';
use models\Task;

class TaskController
{
    private $taskModel;
    public function __construct(){
        $this->taskModel = new Task();
    }

    public function index()
    {
        $tasks = $this->taskModel->getAll();
        require __DIR__ . '/../views/tasks.php';
    }

    public function store()
    {
        if(isset($_POST['title']) && !empty($_POST['title'])){
            $this->taskModel->add($_POST['title']);
        }
    }

    public function delete()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $this->taskModel->delete($_GET['id']);
        }
    }
}