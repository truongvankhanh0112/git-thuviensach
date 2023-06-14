<div>
<div class="uplower fz" id="piechart"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    <?php
        $tongdm=count($listtk);
        $i=1;
        foreach ($listtk as $thongke) {
          extract($thongke);
          if($i==$tongdm) $dayphay=""; else $dayphay=",";
          echo " ['".$thongke['tendanhmuc']."',".$thongke['countsp']."]".$dayphay;
          $i+=1;
        }
      ?>
]);
  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Số Lượng SP theo danh mục', 'width':1200, 'height':550};
  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
