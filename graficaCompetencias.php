<html>
    <style>
#chartdiv {
  width: 100%;
  height: 500px;
  margin-top: 50px;
}
h2{
    text-align: center;
}
</style>

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<h2>COMPETENCIAS</h2>
<!-- Chart code -->
<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv");

// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);

// Create chart
// https://www.amcharts.com/docs/v5/charts/xy-chart/
var chart = root.container.children.push(
  am5xy.XYChart.new(root, {
    panX: false,
    panY: false,
    wheelX: "none",
    wheelY: "none"
  })
);

// Add cursor
// https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
cursor.lineY.set("visible", false);

// Create axes
// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
var xRenderer = am5xy.AxisRendererX.new(root, { minGridDistance: 20 });
xRenderer.labels.template.setAll({ text: "{realName}" });

var xAxis = chart.xAxes.push(
  am5xy.CategoryAxis.new(root, {
    maxDeviation: 0,
    categoryField: "category",
    renderer: xRenderer,
    tooltip: am5.Tooltip.new(root, {
      labelText: "{realName}"
    })
  })
);

var yAxis = chart.yAxes.push(
  am5xy.ValueAxis.new(root, {
    maxDeviation: 0.3,
    renderer: am5xy.AxisRendererY.new(root, {})
  })
);

var yAxis2 = chart.yAxes.push(
  am5xy.ValueAxis.new(root, {
    maxDeviation: 0.3,
    syncWithAxis: yAxis,
    renderer: am5xy.AxisRendererY.new(root, { opposite: true })
  })
);

// Create series
// https://www.amcharts.com/docs/v5/charts/xy-chart/series/
var series = chart.series.push(
  am5xy.ColumnSeries.new(root, {
    name: "Series 1",
    xAxis: xAxis,
    yAxis: yAxis2,
    valueYField: "value",
    sequencedInterpolation: true,
    categoryXField: "category",
    tooltip: am5.Tooltip.new(root, {
      labelText: "{provider} {realName}: {valueY}"
    })
  })
);

series.columns.template.setAll({
  fillOpacity: 0.9,
  strokeOpacity: 0
});
series.columns.template.adapters.add("fill", (fill, target) => {
  return chart.get("colors").getIndex(series.columns.indexOf(target));
});

series.columns.template.adapters.add("stroke", (stroke, target) => {
  return chart.get("colors").getIndex(series.columns.indexOf(target));
});

var lineSeries = chart.series.push(
  am5xy.LineSeries.new(root, {
    name: "Series 2",
    xAxis: xAxis,
    yAxis: yAxis,
    valueYField: "quantity",
    sequencedInterpolation: true,
    stroke: chart.get("colors").getIndex(13),
    fill: chart.get("colors").getIndex(13),
    categoryXField: "category",
    tooltip: am5.Tooltip.new(root, {
      labelText: "{valueY}"
    })
  })
);

lineSeries.strokes.template.set("strokeWidth", 2);

lineSeries.bullets.push(function () {
  return am5.Bullet.new(root, {
    locationY: 1,
    locationX: undefined,
    sprite: am5.Circle.new(root, {
      radius: 5,
      fill: lineSeries.get("fill")
    })
  });
});

// when data validated, adjust location of data item based on count
lineSeries.events.on("datavalidated", function () {
  am5.array.each(lineSeries.dataItems, function (dataItem) {
    // if count divides by two, location is 0 (on the grid)
    if (
      dataItem.dataContext.count / 2 ==
      Math.round(dataItem.dataContext.count / 2)
    ) {
      dataItem.set("locationX", 0);
    }
    // otherwise location is 0.5 (middle)
    else {
      dataItem.set("locationX", 0.5);
    }
  });
});

var chartData = [
    
    <?php
    require 'conexion.php';

    $sql = $conexion2->query("SELECT count(*) as total1 from personaloperativo where estadocompetencias2021 = 1 and descripcionestructura1 = 'DIRECCION GENERAL' and eliminado = 0");
    $row = mysqli_fetch_assoc($sql);
    
    $sql2 = $conexion2->query("SELECT count(*) as total2 from personaloperativo where estadocompetencias2021 = 3 and descripcionestructura1 = 'DIRECCION GENERAL' and eliminado = 0");
    $row2 = mysqli_fetch_assoc($sql2);
    
    $sql3 = $conexion2->query("SELECT count(*) as total3 from personaloperativo where estadocompetencias2021 = 2 and descripcionestructura1 = 'DIRECCION GENERAL' and eliminado = 0");
    $row3 = mysqli_fetch_assoc($sql3);
    
    
     $sql4 = $conexion2->query("SELECT count(*) as total4 from personaloperativo where estadocompetencias2021 = 1 and descripcionestructura1 = 'DIRECCION DE OPERACIONES' and eliminado = 0");
    $row4 = mysqli_fetch_assoc($sql4);
    
    $sql5 = $conexion2->query("SELECT count(*) as total5 from personaloperativo where estadocompetencias2021 = 3 and descripcionestructura1 = 'DIRECCION DE OPERACIONES' and eliminado = 0");
    $row5 = mysqli_fetch_assoc($sql5);
    
    $sql6 = $conexion2->query("SELECT count(*) as total6 from personaloperativo where estadocompetencias2021 = 2 and descripcionestructura1 = 'DIRECCION DE OPERACIONES' and eliminado = 0");
    $row6 = mysqli_fetch_assoc($sql6);
    
     $sql7 = $conexion2->query("SELECT count(*) as total7 from personaloperativo where estadocompetencias2021 = 1 and descripcionestructura1 = 'DIRECCION MEDICA' and eliminado = 0");
    $row7 = mysqli_fetch_assoc($sql7);
    
    $sql8 = $conexion2->query("SELECT count(*) as total8 from personaloperativo where estadocompetencias2021 = 3 and descripcionestructura1 = 'DIRECCION MEDICA' and eliminado = 0");
    $row8 = mysqli_fetch_assoc($sql8);
    
    $sql9 = $conexion2->query("SELECT count(*) as total9 from personaloperativo where estadocompetencias2021 = 2 and descripcionestructura1 = 'DIRECCION MEDICA' and eliminado = 0");
    $row9 = mysqli_fetch_assoc($sql9);
    
    $sql10 = $conexion2->query("SELECT count(*) as total10 from personaloperativo where estadocompetencias2021 = 1 and descripcionestructura1 = 'DIRECCION DE ADMINISTRACION Y FINANZAS' and eliminado = 0");
    $row10 = mysqli_fetch_assoc($sql10);
    
    $sql11 = $conexion2->query("SELECT count(*) as total11 from personaloperativo where estadocompetencias2021 = 3 and descripcionestructura1 = 'DIRECCION DE ADMINISTRACION Y FINANZAS' and eliminado = 0");
    $row11 = mysqli_fetch_assoc($sql11);
    
    $sql12 = $conexion2->query("SELECT count(*) as total12 from personaloperativo where estadocompetencias2021 = 2 and descripcionestructura1 = 'DIRECCION DE ADMINISTRACION Y FINANZAS' and eliminado = 0");
    $row12 = mysqli_fetch_assoc($sql12);
    
    $sql13 = $conexion2->query("SELECT count(*) as total13 from personaloperativo where estadocompetencias2021 = 1 and descripcionestructura1 = 'SUBDIRECCION DE ENFERMERIA' and eliminado = 0");
    $row13 = mysqli_fetch_assoc($sql13);
    
    $sql14 = $conexion2->query("SELECT count(*) as total14 from personaloperativo where estadocompetencias2021 = 3 and descripcionestructura1 = 'SUBDIRECCION DE ENFERMERIA' and eliminado = 0");
    $row14 = mysqli_fetch_assoc($sql14);
    
    $sql15 = $conexion2->query("SELECT count(*) as total15 from personaloperativo where estadocompetencias2021 = 2 and descripcionestructura1 = 'SUBDIRECCION DE ENFERMERIA' and eliminado = 0");
    $row15 = mysqli_fetch_assoc($sql15);
    
     $sql16 = $conexion2->query("SELECT count(*) as total16 from personaloperativo where estadocompetencias2021 = 1 and descripcionestructura1 = 'SUBDIRECCION DE PLANEACION Y DESARROLLO' and eliminado = 0");
    $row16 = mysqli_fetch_assoc($sql16);
    
    $sql17 = $conexion2->query("SELECT count(*) as total17 from personaloperativo where estadocompetencias2021 = 3 and descripcionestructura1 = 'SUBDIRECCION DE PLANEACION Y DESARROLLO' and eliminado = 0");
    $row17 = mysqli_fetch_assoc($sql17);
    
    $sql18 = $conexion2->query("SELECT count(*) as total18 from personaloperativo where estadocompetencias2021 = 2 and descripcionestructura1 = 'SUBDIRECCION DE PLANEACION Y DESARROLLO' and eliminado = 0");
    $row18 = mysqli_fetch_assoc($sql18);
    
    $sql19 = $conexion2->query("SELECT count(*) as total19 from personaloperativo where estadocompetencias2021 = 1 and descripcionestructura1 = 'SUBDIRECCION DE TECNOLOGIAS DE LA INFORMACION' and eliminado = 0");
    $row19 = mysqli_fetch_assoc($sql19);
    
    $sql20 = $conexion2->query("SELECT count(*) as total20 from personaloperativo where estadocompetencias2021 = 3 and descripcionestructura1 = 'SUBDIRECCION DE TECNOLOGIAS DE LA INFORMACION' and eliminado = 0");
    $row20 = mysqli_fetch_assoc($sql20);
    
    $sql21 = $conexion2->query("SELECT count(*) as total21 from personaloperativo where estadocompetencias2021 = 2 and descripcionestructura1 = 'SUBDIRECCION DE TECNOLOGIAS DE LA INFORMACION' and eliminado = 0");
    $row21 = mysqli_fetch_assoc($sql21);
    
    ?>
    ];

// Set data
var data = {
  "DIRECCIÓN GENERAL": {
    "FINALIZADO": <?php echo $row['total1']; ?>,
    "PENDIENTE": <?php echo $row2['total2']; ?>,
    "SIN INICIAR": <?php echo $row3['total3']; ?>,
  
 
  },
  "DIRECCIÓN DE OPERACIONES": {
   "FINALIZADO": <?php echo $row4['total4']; ?>,
    "PENDIENTE": <?php echo $row5['total5']; ?>,
    "SIN INICIAR": <?php echo $row6['total6']; ?>,
   
  },
  "DIRECCIÓN MEDICA": {
   "FINALIZADO": <?php echo $row7['total7']; ?>,
    "PENDIENTE": <?php echo $row8['total8']; ?>,
    "SIN INICIAR": <?php echo $row9['total9']; ?>,
   
  },
  "ADMINISTRACIÓN Y FINANZAS": {
    "FINALIZADO": <?php echo $row10['total10']; ?>,
    "PENDIENTE": <?php echo $row11['total11']; ?>,
    "SIN INICIAR": <?php echo $row12['total12']; ?>,
   
  },
  "ENFERMERIA": {
    "FINALIZADO": <?php echo $row13['total13']; ?>,
    "PENDIENTE": <?php echo $row14['total14']; ?>,
    "SIN INICIAR": <?php echo $row15['total15']; ?>
   
  },
  "PLANEACIÓN Y DESARROLLO": {
    "FINALIZADO": <?php echo $row16['total16']; ?>,
    "PENDIENTE": <?php echo $row17['total17']; ?>,
    "SIN INICIAR": <?php echo $row18['total18']; ?>
   
  },
  "SUBDIRECCIÓN DE TI": {
    "FINALIZADO": <?php echo $row19['total19']; ?>,
    "PENDIENTE": <?php echo $row20['total20']; ?>,
    "SIN INICIAR": <?php echo $row21['total21']; ?>
   
  }
};

// process data ant prepare it for the chart
for (var providerName in data) {
  var providerData = data[providerName];

  // add data of one provider to temp array
  var tempArray = [];
  var count = 0;
  // add items
  for (var itemName in providerData) {
    if (itemName != "quantity") {
      count++;
      // we generate unique category for each column (providerName + "_" + itemName) and store realName
      tempArray.push({
        category: providerName + "_" + itemName,
        realName: itemName,
        value: providerData[itemName],
        provider: providerName
      });
    }
  }
  // sort temp array
 /* tempArray.sort(function (a, b) {
    if (a.value > b.value) {
      return 1;
    } else if (a.value < b.value) {
      return -1;
    } else {
      return 0;
    }
  });*/

  // add quantity and count to middle data item (line series uses it)
  var lineSeriesDataIndex = Math.floor(count / 2);
  tempArray[lineSeriesDataIndex].quantity = providerData.quantity;
  tempArray[lineSeriesDataIndex].count = count;
  // push to the final data
  am5.array.each(tempArray, function (item) {
    chartData.push(item);
  });

  // create range (the additional label at the bottom)

  var range = xAxis.makeDataItem({});
  xAxis.createAxisRange(range);

  range.set("category", tempArray[0].category);
  range.set("endCategory", tempArray[tempArray.length - 1].category);

  var label = range.get("label");

  label.setAll({
    text: tempArray[0].provider,
    dy: 30,
    fontWeight: "bold",
    tooltipText: tempArray[0].provider
  });

  var tick = range.get("tick");
  tick.setAll({ visible: true, strokeOpacity: 1, length: 10, location: 0 });

  var grid = range.get("grid");
  grid.setAll({ strokeOpacity: 1 });
}

// add range for the last grid
var range = xAxis.makeDataItem({});
xAxis.createAxisRange(range);
range.set("category", chartData[chartData.length - 1].category);
var tick = range.get("tick");
tick.setAll({ visible: true, strokeOpacity: 1, length: 10, location: 1 });

var grid = range.get("grid");
grid.setAll({ strokeOpacity: 1, location: 1 });

xAxis.data.setAll(chartData);
series.data.setAll(chartData);
lineSeries.data.setAll(chartData);

// Make stuff animate on load
// https://www.amcharts.com/docs/v5/concepts/animations/
series.appear(1000);
chart.appear(1000, 100);

}); // end am5.ready()
</script>

<!-- HTML -->
<div id="chartdiv"></div>
amCharts
</html>