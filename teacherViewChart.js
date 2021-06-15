    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Task', 'Percentage'],
        ['Class 1',     44] ,

      ]);

      var options = {
        width: '80%', 
        title: 'Class Happiness Chart'
      };

      var chart = new google.visualization.BarChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
