<?php
$query = "SELECT * FROM user ";
$where = "WHERE";

if (!empty($_POST['filter_name'])) {
    $query .= $where . " " . 'first_name' . ' = "' .  $filterName . '"';
}
if (!empty($_POST['filter_last_name'])) {
    $query .=  ' ' .  "AND" . ' last_name' . ' = "' .  $filterLastName . '" ';

    if (empty($filterName)) {
        $query = "SELECT * FROM user ";
        $query .= $where . " " . 'last_name' . ' = "' .  $filterLastName . '"';
    }
}
if (!empty($_POST["gender"])) {
    $query .= ' ' .  "AND" . ' gender' . ' = "' .  $filterGender . '" ';

    if (empty($filterName)) {
        $query = "SELECT * FROM user ";
        $query .= $where . ' last_name = "'  . $filterLastName . '" AND ' . 'gender' . ' = "' .  $filterGender . '"';
    }
    if (empty($filterLastName)) {
        $query = "SELECT * FROM user ";
        $query .= $where . ' first_name = "'  . $filterName . '" AND ' . 'gender' . ' = "' .  $filterGender . '"';
    }
    if (empty($filterName) && empty($filterLastName)) {
        $query = "SELECT * FROM user ";
        $query .= $where . " " . 'gender' . ' = "' .  $filterGender . '"';
    }
}
if (!empty($filterFromDate) && !empty($filterToDate)) {
    $query = "SELECT * FROM user ";
    $query .=  $where . ' date BETWEEN "' . $filterFromDate . '" AND "' . $filterToDate . '"';
}
