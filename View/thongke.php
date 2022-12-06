<?php
require "../Model/pdo.php";
$sql = "SELECT category.id_category, category.name,
   COUNT(*) AS 'So_luong',
   MAX(product.price) AS 'Gia_cao',
   MIN(product.price) AS 'Gia_thap',
   AVG(product.price) AS 'Gia_TB'
   FROM category JOIN product ON category.id_category = product.id_category 
   GROUP BY category.id_category, category.name";
    $query = pdo_query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="../src/css/admin.css">
</head>

<body>
        <section class="chart">
            <table>
                <thead>
                    <tr>
                        <th>Danh mục</th>
                        <th>Số lượng sp</th>
                        <th>Giá cao </th>
                        <th>Giá thấp</th>
                        <th>Trung bình</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query as $value) : ?>
                        <tr>
                            <td><?php echo $value["name"] ?></td>
                            <td><?php echo $value["So_luong"] ?></td>
                            <td><?php echo $value["Gia_cao"] ?></td>
                            <td><?php echo $value["Gia_thap"] ?></td>
                            <td><?php echo $value["Gia_TB"] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>

            </table>
            <div id="piechart"></div>
        </section>
        <script type="text/javascript">
            // Load google charts
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            // Draw the chart and set the chart values
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Danh mục', 'Thống kê hàng hóa'],
                    <?php
                    $i = 1;
                    $sumCart = count($query);
                    foreach ($query as $value) {
                        if ($i == $sumCart) $coma = "";
                        else $coma = ",";
                        echo "['" . $value["name"] . "'," . $value["So_luong"] . "]" . $coma;
                        $i += 1;
                    }
                    ?>
                ]);

                // Optional; add a title and set the width and height of the chart
                var options = {
                    'title': 'Biểu đồ thống kê hàng hóa API',
                    'width': 550,
                    'height': 400

                };
                // Display the chart inside the <div> element with id="piechart"
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
            }
        </script>
</body>

</html>