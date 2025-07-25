<?php 
if(!isset($_SESSION['usuario'])) {
  header('Location: index.php');
  exit;
}

$gen = $_SESSION["generos"];
$count = array_count_values($gen);
?>

<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Masculino', <?php echo isset($count["Masculino"])?$count["Masculino"]:0 ?>],
          ['Feminino', <?php echo isset($count["Feminino"])?$count["Feminino"]:0 ?>],
          ['Outro', <?php echo isset($count["Outro"])?$count["Outro"]:0 ?>],
        ]);

        // Set chart options
        var options = {
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>