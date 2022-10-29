<?php

class Books{

    protected $ISBN;
    Protected $user_id;

    Protected $title;

    protected $author;

    protected $genre;


    public function __construct($isbn, $user_id, $title, $author, $genre){
        $this->ISBN =$isbn;
        $this->user_id=$user_id;
        $this->title=$title;
        $this->author=$author;
        $this->genre=$genre;
    }
    
    public function getISBN()
    {
        return $this->ISBN;
    }
   
    public function getUser()
    {
        return $this->user_id;
    }
    public function setUser($user_id)
    {
        $this->user_id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getGenre()
    {
        return $this->genre;
    }  

}


?>