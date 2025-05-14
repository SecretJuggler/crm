<?php 

class Router 
{
    public $id;
    public $pretty_url;

    private $dbc;

    public function __construct($dbc)
    {
        $this->dbc = $dbc;
    }

    public function findByEmail($pretty_url) 
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->dbc->prepare($sql);
        $stmt->execute(['email' => $email]);

        $data = $stmt->fetch();
    }

    public function newUser($user)
    {
        
    }
}