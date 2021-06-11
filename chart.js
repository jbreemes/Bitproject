  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Average'],
      ['Class 1',     4],
      ['Class 2',      3],
      ['Class 3',  4],
      ['Class 4', 2],
      ['Class 5',    5],
      ['Class 6',  4]
    ]);

    var options = {
      title: 'Class Happiness Chart'
    };

    var chart = new google.visualization.BarChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
  
