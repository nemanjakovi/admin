<a href="index.php?page=dashboard" class="btn btn-primary mb-3">
    Back To Dashboard </a>

<!-- Filter Form Component -->
<?php require_once "views/pages/components/filter-nav.php" ?>

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
    <?php foreach ($users as $user) : ?>
        <tbody>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['first_name']; ?></td>
                <td><?= $user['last_name']; ?></td>
                <td><?= $user['date']; ?></td>
                <td><?= $user['gender']; ?></td>

                <td><button class="btn btn-primary mr-2 btn-sm edit">Update</button>
                    </a>
                    <a class="btn btn-danger btn-sm" href="crud.php?delete=<?= $user["id"]; ?>">Delete</a>
                </td>
            </tr>
            <?php
            require_once "v-updateUser.php";
            ?>
        <?php endforeach; ?>
        </tbody>
</table>