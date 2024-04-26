google.charts.load("current", {
  packages: ["corechart"],
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var piechartDiv = document.getElementById("piechart");

  var maleData = parseInt(piechartDiv.getAttribute("data-male"));
  var femaleData = parseInt(piechartDiv.getAttribute("data-female"));

  var data = google.visualization.arrayToDataTable([
    ["Task", "Hours per Day"],
    ["Male", maleData],
    ["Female", femaleData],
  ]);

  var options = {
    title: "Gender Chart",
    backgroundColor: "#f7f7f7",
    colors: ["#3366cc", "#ff69b4"],
  };

  var chart = new google.visualization.PieChart(
    document.getElementById("piechart")
  );

  chart.draw(data, options);
}
