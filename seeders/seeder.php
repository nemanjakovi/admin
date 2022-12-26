<?php

require_once "database/config.php";

class Seeder extends Database
{

    public function setUsers($name, $lastName, $date, $gender)
    {
        try {
            $stmt = $this->connect()->prepare("INSERT INTO user (first_name, last_name, date, gender) VALUE (?, ?, ?, ?)");
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $lastName);
            $stmt->bindParam(3, $date);
            $stmt->bindParam(4, $gender);
            $stmt->execute();
        } catch (PDOException $e) {
            echo   $e->getMessage();
        }
    }
}

try {
    $user = new Seeder();

    $user->setUsers("Pera", "Stankovic", "1960-05-26", "Male");
    $user->setUsers("Laza", "Ristic", "1972-09-16", "Male");
    $user->setUsers("Marija", "Bogdanovic", "1993-10-10", "Female");
    $user->setUsers("Milena", "Stankovic", "2000-04-07", "Female");
    $user->setUsers("Ana", "Stankovic", "1981-10-01", "Female");
    $user->setUsers("Petra", "Markovic", "2019-01-12", "Female");
    $user->setUsers("Nemanja", "Mitrovic", "1958-02-26", "Male");
    $user->setUsers("Pera", "Peric", "1985-12-06", "Male");
    $user->setUsers("Nemanja", "Markovic", "1990-03-15", "Male");
} catch (Throwable $e) {
    echo   $e->getMessage();
}
