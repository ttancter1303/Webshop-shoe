<html>
<head>
<title>plus2net.com : Column chart</title>
</head>
<body >
<script>

        var my_2d = [{"month":"Jan","0":"Jan","sale":"300","1":"300","profit":"150","2":"150"},{"month":"Feb","0":"Feb","sale":"200","1":"200","profit":"130","2":"130"},{"month":"Mar","0":"Mar","sale":"300","1":"300","profit":"200","2":"200"},{"month":"April","0":"April","sale":"400","1":"400","profit":"300","2":"300"},{"month":"May","0":"May","sale":"300","1":"300","profit":"200","2":"200"},{"month":"Jun","0":"Jun","sale":"200","1":"200","profit":"100","2":"100"},{"month":"July","0":"July","sale":"200","1":"200","profit":"150","2":"150"},{"month":"Jan","0":"Jan","sale":"300","1":"300","profit":"150","2":"150"},{"month":"Feb","0":"Feb","sale":"200","1":"200","profit":"130","2":"130"},{"month":"Mar","0":"Mar","sale":"300","1":"300","profit":"200","2":"200"},{"month":"April","0":"April","sale":"400","1":"400","profit":"300","2":"300"},{"month":"May","0":"May","sale":"300","1":"300","profit":"200","2":"200"},{"month":"Jun","0":"Jun","sale":"200","1":"200","profit":"100","2":"100"},{"month":"July","0":"July","sale":"200","1":"200","profit":"150","2":"150"}]

</script>
$products = array();
var test = [
            foreach(orderGetTotalSales($_GET['order_id']) as $product){

            }
        ]
<div id="chart_div"></div>
<br><br>
<a href=https://www.plus2net.com/php_tutorial/chart-column-database.php>Column Chart from MySQL database</a>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {packages: ['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Month');
        data.addColumn('number', 'Sale');
		data.addColumn('number', 'Profit');
        for(i = 0; i < my_2d.length; i++)
    data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2])]);
       var options = {
          title: 'plus2net.com Sale Profit',
          hAxis: {title: 'Month',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
		  height:400,
		  width:900,
		  
        };

var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);		
       }
	///////////////////////////////
////////////////////////////////////
</script>
</body></html>
