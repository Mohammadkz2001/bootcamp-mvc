<?php

namespace models;
use config\Database;

require_once __DIR__ . '/../config/Database.php';

class Task
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getAll()
    {
        $statement = $this->db->query('SELECT * FROM tasks');
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function add($title)
    {
        $statement = $this->db->prepare('INSERT INTO tasks (title) VALUES (:title)');
        $statement->bindParam(":title", $title);
        $statement->execute();
    }

    public function delete($id)
    {
        $statement = $this->db->prepare('DELETE FROM tasks WHERE id = :id');
        $statement->bindParam(":id", $id);
        $statement->execute();
    }

}