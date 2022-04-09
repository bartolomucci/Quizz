<?php


class Quizz
{
    private int $id;
    
    private string $question;

    private string $answer;

    private string $clue;


    /**
     * Get the value of question
     */ 
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set the value of question
     *
     * @return  self
     */ 
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get the value of answer
     */ 
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set the value of answer
     *
     * @return  self
     */ 
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of clue
     */ 
    public function getClue()
    {
        return $this->clue;
    }

    /**
     * Set the value of clue
     *
     * @return  self
     */ 
    public function setClue($clue)
    {
        $this->clue = $clue;

        return $this;
    }
}