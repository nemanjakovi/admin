<!doctype html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="views/css/bootstrap.min.css">

</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <h1><a href="index.php?page=insertingUser" class="logo">Admin Panel</a></h1>
            <ul class="list-unstyled components mb-5">
                <li class="<?php if (isset($_GET['page']) && $_GET['page'] == 'insertingUser') echo htmlspecialchars('active') ?>">
                    <a href="index.php?page=insertingUser"><span class="fa fa-home mr-3"></span> Insert User</a>
                </li>
                <li class="<?php if (isset($_GET['page']) && $_GET['page'] == 'dashboard') echo htmlspecialchars('active') ?> ">
                    <a href=" index.php?page=dashboard"><span class="fa fa-user mr-3 "></span> Dashboard</a>
                </li>

            </ul>

        </nav>
        <!-- Page Content -->
        <div id="content" class="p-4 p-md-5 pt-5">

            <?php
            // Inserting User
            if (isset($_GET['page']) && $_GET['page'] == 'insertingUser') {
                include_once "views/pages/v-insertingUser.php";
                //Dashboard
            } else if (isset($_GET['page']) && $_GET['page'] == 'dashboard') {
                include_once "views/pages/v-dashboard.php";
                // Update User 
            }
            ?>
        </div>
    </div>

    <script src="views/js/jquery.min.js"></script>
    <script src="views/js/popper.js"></script>
    <script src="views/js/bootstrap.min.js"></script>
    <script src="views/js/main.js"></script>

</body>

</html>