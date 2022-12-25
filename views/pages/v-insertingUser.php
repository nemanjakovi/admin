<?php
require_once "Models/Register.php";
if (isset($_POST['insert_user'])) {

    // NAME
    $name = (string) $_POST['name'];
    $name = trim($name);
    $name = ucfirst($name);

    //Last Name
    $lastName = (string) $_POST['last_name'];
    $lastName = trim($lastName);
    $lastName = ucfirst($lastName);

    // Date
    $date = $_POST['date'];

    // Gender
    $gender = "";
    if ($_POST["radio"] == "Male") {
        $gender =  "Male";
    } elseif ($_POST["radio"] == "Female") {
        $gender = "Female";
    }

    $insertUser =  new InsertUser($name, $lastName, $date, $gender);
    $insertUser->InsertUser();


    header("Location:index.php?page=dashboard");
}


?>

<form action="index.php?page=insertingUser" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputName">Name</label>
            <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
            <label for="inputName">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="inputLastName" placeholder="Last Name">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Date</label>
            <input type="date" class="form-control" name="date" id="inputEmail" placeholder="Email">
        </div>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="radio" value="Male" id="male">
        <label class="form-check-label" for="male" id="male">
            Male
        </label>
    </div>
    <div class="form-check mb-2">
        <input class="form-check-input" type="radio" name="radio" value="Female" id="female">
        <label class="form-check-label" for="female">
            Female
        </label>
    </div>
    <button type="submit" name="insert_user" class="btn btn-primary mb-2">Insert Data</button>
</form>