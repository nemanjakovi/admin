<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
<script>
    var xValues = ["Under 18", "Betwee  n 18-30", "Between 30-40", "Between 40-50", "Between 50-70", "Above 70"];
    var yValues = [
        <?php
        $operator = ">";
        echo  $users->ageOfUsers($operator);
        ?>,
        <?php
        $toDate = date("Y") - 18 . "/" . date("m") . "/" . date("d");
        $fromDate = date("Y") - 30 . "/" . date("m") . "/" . date("d");
        echo $users->userRange($fromDate, $toDate);
        ?>,
        <?php
        $toDate = date("Y") - 30 . "/" . date("m") . "/" . date("d");
        $fromDate = date("Y") - 40 . "/" . date("m") . "/" . date("d");
        echo $users->userRange($fromDate, $toDate);
        ?>,
        <?php
        $toDate = date("Y") - 40 . "/" . date("m") . "/" . date("d");
        $fromDate = date("Y") - 50 . "/" . date("m") . "/" . date("d");
        echo $users->userRange($fromDate, $toDate);
        ?>,
        <?php
        $toDate = date("Y") - 50 . "/" . date("m") . "/" . date("d");
        $fromDate = date("Y") - 70 . "/" . date("m") . "/" . date("d");
        echo $users->userRange($fromDate, $toDate);
        ?>,
        0
    ];
    var barColors = ["gray", "red", "green", "blue", "orange", "brown"];

    new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: "Users in database"
            }
        }
    });
</script>