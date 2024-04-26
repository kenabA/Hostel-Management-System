google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var donutchartDiv = document.getElementById("donutchart");

  var vegData = parseInt(donutchartDiv.getAttribute("data-veg"));
  var nonvegData = parseInt(donutchartDiv.getAttribute("data-non-veg"));

  var data = google.visualization.arrayToDataTable([
    ["Task", "Hours per Day"],
    ["Vegetarian", vegData],
    ["Non - Vegetarian", nonvegData],
  ]);

  var options = {
    backgroundColor: "#f7f7f7",
    title: "Food Category Chart",
    pieHole: 0.3,
    colors: ["#35B82A", "#D7263D"],
  };

  var chart = new google.visualization.PieChart(
    document.getElementById("donutchart")
  );
  chart.draw(data, options);
}
