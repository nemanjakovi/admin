<div class="d-flex justify-content-around mb-5">
    <div class=" text-center text-bg-dark p-2 w-25 h-25 align-self-center rounded">

        <strong>Number of users in database - <?= round($users->getAllUsersCount()); ?> </strong>
    </div>
    <!-- Bar Component  -->
    <?php require_once "views/pages/components/bar.php" ?>

</div>

<hr class="border border-danger border-2 opacity-50 mb-5 ">

<div class="d-flex justify-content-around mb-5">
    <div class="align-self-center">
        <div class=" text-center text-bg-dark p-2 mb-3  rounded">
            <?php $gender = "Female"; ?>
            <strong>Number of female users - <?= $users->femaleAndMaleCount($gender); ?> </strong>
        </div>
        <div class=" text-center text-bg-dark p-2  rounded">
            <?php $gender = "Male"; ?>
            <strong>Number of male users - <?= $users->femaleAndMaleCount($gender); ?> </strong>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div id="piechart" style="width: 900px; height: 500px;"></div>

        <!-- Pie Component  -->
        <?php require_once "views/pages/components/pie.php" ?>
    </div>
</div>