<?php
require_once "database/config.php";
if (isset($_GET['delete'])) {

    $id = $_GET["delete"];
    $db = new Database();
    $stmt = $db->connect()->prepare("DELETE FROM user WHERE id=" . $id);

    if (!$stmt->execute()) {
        $stmt = null;
        header("Location:crud.php?error=deleteStmtFail");
        exit();
    } else {

        header("Location:index.php?page=dashboard");
    }
}

if (isset($_POST["update_user"])) {

    $name  =  $_POST["name"];
    $lastName = $_POST["last_name"];
    $date = $_POST["date"];
    $user_id =  $_POST["u_id"];
    $gender = "";
    if ($_POST["radio"] == "Male") {
        $gender =  "Male";
    } elseif ($_POST["radio"] == "Female") {
        $gender = "Female";
    }


    $db = new Database();
    $stmt = $db->connect()->prepare("UPDATE user 
    SET  first_name = ?, 
         last_name = ?,
         date = ?,
         gender = ? 
         WHERE id = ?");

    if (!$stmt->execute(array($name, $lastName, $date, $gender, $user_id))) {
        $stmt = null;
        header("Location:crud.php?error=updateStmtFail");
        exit();
    }
    header("Location: index.php?page=dashboard");
}
