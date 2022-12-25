<?php
require_once "database/config.php";

class InsertUser extends Database
{
    public $name;
    public $lastName;
    public $date;
    public $gender;

    public function __construct($name, $lastName, $date, $gender)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->date = $date;
        $this->gender = $gender;
    }

    public function setUser($name, $lastName, $date, $gender)
    {

        $stmt = $this->connect()->prepare("INSERT INTO user (first_name, last_name, date, gender) VALUE(?, ?, ?, ?)");
        if (!$stmt->execute(array($name, $lastName, $date, $gender))) {
            $stmt = null;
            exit();
        }
    }

    public function InsertUser()
    {
        $this->setUser($this->name, $this->lastName, $this->date, $this->gender);
    }
}
