google.charts.load("current", {
  packages: ["corechart"],
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ["Task", "Hours per Day"],
    ["Male", 50],
    ["Female", 24],
    ["Others", 5],
  ]);

  var options = {
    title: "Gender Chart",
  };

  var chart = new google.visualization.PieChart(
    document.getElementById("piechart")
  );

  chart.draw(data, options);
}
