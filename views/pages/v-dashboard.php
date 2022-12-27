<?php
include_once "Models/FetchUsers.php";

// Instance of Users 
$users = new Users();
$users->getAllUsers();
$allUsers = $users->getAllUsers();

// Seedeng Users 
if ($users->getAllUsersCount() < 1) {
    require_once "seeders/seeder.php";
}

if (isset($_POST["filter"])) {
    $filterName = $_POST['filter_name'];
    $filterLastName = $_POST['filter_last_name'];
    $filterDateFrom = $_POST['from_date'];
    $filterToDate = $_POST['to_date'];

    if (!empty($_POST["gender"])) {
        if ($_POST["gender"] == "Male") {
            $filterGender =  "Male";
        } elseif ($_POST["gender"] == "Female") {
            $filterGender = "Female";
        }
    }

    // Filters
    require_once "filters.php";

    $db = new Database();
    $stmt = $db->connect()->prepare($query);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Filter Page 
    require_once "views/pages/v-filterPage.php";
?>

<?php } else { ?>

    <strong class="float-right"><?= date("d/m/Y") ?></strong>
    <h1 class="mb-5">Dashboard</h1>

    <!-- Filter Form Component -->
    <?php require_once "views/pages/components/filter-nav.php" ?>

    <!-- Table Start -->
    <table class="table caption-top ">
        <caption>List of users</caption>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Date</th>
                <th scope="col">gender</th>
                <th scope="col">Menage</th>
            </tr>
        </thead>
        <?php foreach ($allUsers as $user) : ?>
            <tbody>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['first_name']; ?></td>
                    <td><?= $user['last_name']; ?></td>
                    <td><?= $user['date']; ?></td>
                    <td><?= $user['gender']; ?></td>

                    <td><button class="btn btn-primary mr-2 btn-sm edit">Update</button></a>
                        <a class="btn btn-danger btn-sm" href="crud.php?delete=<?= $user["id"]; ?>">Delete</a>
                    </td>
                </tr>
                <?php
                // Update Modal View
                require_once "v-updateUser.php";
                ?>
            <?php endforeach; ?>
            </tbody>
    </table>
    <!-- End Of Table -->

    <hr class="border border-danger border-2 opacity-50">



    <!-- Statistic -->
    <h1 class="mb-4">Statistic</h1>
<?php
    require_once "views/pages/v-statistic.php";
    // require_once "views/pages/components/bar.php";
} ?>




<script src="v-updateUser.php"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Update Modal  -->
<script src="views/js/updateModal.js"></script>
