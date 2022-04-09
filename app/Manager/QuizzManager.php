<?php

require '../class/Quizz.php';

class QuizzManager
{
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=contact_portfolio', 'root');
        } catch (PDOException $e) {
            echo 'Error : ' . $e->getMessage();
            die;
        }
    }

    public function insert(string $question, string $answer, string $clue)
    {
        $sql = "INSERT INTO spiderman (question,answer,clue) VALUES (:question, :answer, :clue)";
        $req = $this->pdo->prepare($sql);
        $req->execute([
            'question' => $question,
            'answer' => $answer,
            'clue' => $clue,
        ]);

        return $this->pdo->lastInsertId();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM spiderman WHERE id = :id";
        $req = $this->pdo->prepare($sql);
        $req->execute([
            'id' => $id,
        ]);
        
        return $this->pdo->lastInsertId();
    }

}