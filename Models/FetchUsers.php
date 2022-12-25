<?php
require_once "database/config.php";

class Users extends Database
{
    public function getAllUsers()

    {
        $sql = "SELECT * FROM user";
        $stmt = $this->connect()->query($sql);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function femaleAndMaleCount($gender)
    {
        $stmt = 'SELECT COUNT(gender) FROM user WHERE gender ="' . "$gender" . '" ';
        $stmt = $this->connect()->query($stmt);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($users as  $count) {
            foreach ($count as  $value) {
                return $value;
            }
        }
    }

    public function getAllUsersCount()
    {
        $stmt = 'SELECT COUNT(first_name) FROM user';
        $stmt = $this->connect()->query($stmt);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($users as $user) {
            foreach ($user as $allUsers) {
                return $allUsers;
            }
        }
    }
    public function ageOfUsers($operator)
    {
        $date = date("Y") - 18 . "/" . date("m") . "/" . date("d");
        $stmt = 'SELECT COUNT(date) FROM user WHERE date ' . $operator . ' "' . "$date" . '" ';
        $stmt = $this->connect()->query($stmt);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($users as $user) {
            foreach ($user as $date) {
                return $date;
            }
        }
    }


    public function userRange($fromDate, $ToDate)
    {
        $stmt = 'SELECT COUNT(date) FROM user WHERE date BETWEEN "' . $fromDate . '" AND "' . $ToDate . '"';
        $stmt = $this->connect()->query($stmt);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($users as $user) {
            foreach ($user as $date) {
                return $date;
            }
        }
    }
}
