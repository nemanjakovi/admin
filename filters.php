<?php
$query = "SELECT * FROM user ";

$conditions = [];
if (!empty($filterName)) {
    $conditions[] = ' first_name = ' . "'$filterName'";
}
if (!empty($filterLastName)) {
    $conditions[] = ' last_name = ' . "'$filterLastName'";
}
if (!empty($filterGender)) {
    $conditions[] = ' gender = ' . "'$filterGender'";
}
if (!empty($filterDateFrom) && !empty($filterToDate)) {
    $conditions[] = ' date BETWEEN ' . "'$filterDateFrom' AND " . "'$filterToDate' ";
}

if (count($conditions) > 0) {
    $query .= " WHERE " . implode(" AND ", $conditions);
}
