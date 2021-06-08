  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Happiness'],
      ['Class 1',     11],
      ['Class 2',      2],
      ['Class 3',  2],
      ['Class 4', 2],
      ['Class 5',    7],
      ['Class 6',  2]
    ]);

    var options = {
      title: 'Class Happiness Chart'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }