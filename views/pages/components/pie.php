<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Gender', 'Percentage Of Male And Female'],
            ['Male',
                <?php
                $gender = "Male";
                $value = $users->femaleAndMaleCount($gender);
                echo round($value / $users->getAllUsersCount() * 100);
                ?>
            ],
            ['Female',
                <?php
                $gender = "Female";
                $value = $users->femaleAndMaleCount($gender);
                echo round($value / $users->getAllUsersCount() * 100);
                ?>,
            ]
        ]);

        var options = {
            title: 'Percentage Of Male And Female'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>