<?php
// Database credentials
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'foodfest';

// Create connection and select db
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Get data from database
$result = $db->query("SELECT foodname,rating FROM charts ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Page</title>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['food', 'Rating'],
      <?php
      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "['".$row['foodname']."', ".$row['rating']."],";
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'Breakfast',
        width: 900,
        height: 500,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}
</script>
</head>
<body>
    <!-- Display the pie chart -->
    <div id="piechart"></div>
</body>
</html>