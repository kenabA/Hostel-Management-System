google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ["Task", "Hours per Day"],
    ["Vegetarian", 5],
    ["Non - Vegetarian", 5],
  ]);

  var options = {
    backgroundColor: "#f7f7f7",
    title: "Food Category Chart",
    pieHole: 0.3,
  };

  var chart = new google.visualization.PieChart(
    document.getElementById("donutchart")
  );
  chart.draw(data, options);
}
