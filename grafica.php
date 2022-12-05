<html>
<style>
#chartdiv {
  width: 100%;
  height: 400px;
}
#chartdiv2 {
  width: 100%;
  height: 400px;
}
#chartdiv3 {
  width: 100%;
  height: 400px;
}
#chartdiv4 {
  width: 100%;
  height: 400px;
}
#chartdiv5 {
  width: 100%;
  height: 400px;
}
#chartdiv6 {
  width: 100%;
  height: 400px;
}
#chartdiv7 {
  width: 100%;
  height: 400px;
}
#chartdiv8 {
  width: 100%;
  height: 400px;
}
h2{
    text-align: center;
}
</style>

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<h2>CAPTURA DE METAS 2021</h2>
<!-- Chart code -->
<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv4");

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
      dataItem.set("locationX", 0.2);
    }
  });
});

var chartData = [
    <?php
    require 'conexion.php';

    $sql = $conexion2->query("SELECT count(*) as total1 from personaloperativo2022 where fechaFinalizo2021 between '2022-01-01' and '2022-01-31' and descripcionestructura1 = 'DIRECCION GENERAL'");
    $row = mysqli_fetch_assoc($sql);

    $sql2 = $conexion2->query("SELECT count(*) as total2 from personaloperativo2022 where fechaFinalizo2021 between '2022-02-01' and '2022-02-28' and descripcionestructura1 = 'DIRECCION GENERAL'");
    $row2 = mysqli_fetch_assoc($sql2);

    $sql3 = $conexion2->query("SELECT count(*) as total3 from personaloperativo2022 where fechaFinalizo2021 between '2022-03-01' and '2022-03-31' and descripcionestructura1 = 'DIRECCION GENERAL'");
    $row3 = mysqli_fetch_assoc($sql3);

    $sql4 = $conexion2->query("SELECT count(*) as total4 from personaloperativo2022 where fechaFinalizo2021 between '2022-04-01' and '2022-04-30' and descripcionestructura1 = 'DIRECCION GENERAL'");
    $row4 = mysqli_fetch_assoc($sql4);

    $sql5 = $conexion2->query("SELECT count(*) as total5 from personaloperativo2022 where fechaFinalizo2021 between '2022-05-01' and '2022-05-31' and descripcionestructura1 = 'DIRECCION GENERAL'");
    $row5 = mysqli_fetch_assoc($sql5);

    $sql6 = $conexion2->query("SELECT count(*) as total6 from personaloperativo2022 where fechaFinalizo2021 between '2022-06-01' and '2022-06-30' and descripcionestructura1 = 'DIRECCION GENERAL'");
    $row6 = mysqli_fetch_assoc($sql6);

    $sql7 = $conexion2->query("SELECT count(*) as total7 from personaloperativo2022 where fechaFinalizo2021 between '2022-07-01' and '2022-07-31' and descripcionestructura1 = 'DIRECCION GENERAL'");
    $row7= mysqli_fetch_assoc($sql7);

    $sql8 = $conexion2->query("SELECT count(*) as total8 from personaloperativo2022 where fechaFinalizo2021 between '0000-00-00' and '0000-00-00' and descripcionestructura1 = 'DIRECCION GENERAL' and vistoBuenoResultado2021 = 4");
    $row8 = mysqli_fetch_assoc($sql8);
    
    $sql9 = $conexion2->query("SELECT count(*) as total9 from personaloperativo2022 where vistoBuenoResultado2021 = 1 and descripcionestructura1 = 'DIRECCION GENERAL'");
    $row9 = mysqli_fetch_assoc($sql9);
    
     $sql10 = $conexion2->query("SELECT count(*) as total10 from personaloperativo2022 where vistoBuenoResultado2021 = 2 and descripcionestructura1 = 'DIRECCION GENERAL'");
    $row10 = mysqli_fetch_assoc($sql10);
    
    $sql11 = $conexion2->query("SELECT count(*) as total11 from personaloperativo2022 where vistoBuenoResultado2021 = 3 and descripcionestructura1 = 'DIRECCION GENERAL'");
    $row11 = mysqli_fetch_assoc($sql11);
    
    $sql12 = $conexion2->query("SELECT count(*) as total12 from personaloperativo2022 where vistobueno2021 = 4 and descripcionestructura1 = 'DIRECCION DE GENERAL' and eliminado = 0");
    $row12 = mysqli_fetch_assoc($sql12);
    ?>
  
];

// Set data
var data = {
  "DIRECCION GENERAL": {
    "Enero": <?php echo $row['total1']; ?>,
    "Febrero": <?php echo $row2['total2']; ?>,
    "Marzo": <?php echo $row3['total3']; ?>,
    "Abril": <?php echo $row4['total4']; ?>,
    "Mayo": <?php echo $row5['total5']; ?>,
    
    "Autorizado": <?php echo $row9['total9']; ?>,
    "Pendiente de VoBo": <?php echo $row10['total10']; ?>,
    "Rechazado": <?php echo $row11['total11']; ?>,
    "Sin captura": <?php echo $row8['total8']; ?>,
    
    "No capturo metas 2021": <?php echo $row12['total12']; ?>,
 
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
  /*tempArray.sort(function (a, b) {
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
<div id="chartdiv4"></div>


<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv5");

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
      dataItem.set("locationX", 0.2);
    }
  });
});

var chartData = [
    <?php
    require 'conexion.php';

    $sql = $conexion2->query("SELECT count(*) as total1 from personaloperativo where fechaFinalizo2021 between '2022-01-01' and '2022-01-31' and descripcionestructura1 = 'DIRECCION MEDICA'");
    $row = mysqli_fetch_assoc($sql);

    $sql2 = $conexion2->query("SELECT count(*) as total2 from personaloperativo where fechaFinalizo2021 between '2022-02-01' and '2022-02-28' and descripcionestructura1 = 'DIRECCION MEDICA'");
    $row2 = mysqli_fetch_assoc($sql2);

    $sql3 = $conexion2->query("SELECT count(*) as total3 from personaloperativo where fechaFinalizo2021 between '2022-03-01' and '2022-03-31' and descripcionestructura1 = 'DIRECCION MEDICA'");
    $row3 = mysqli_fetch_assoc($sql3);

    $sql4 = $conexion2->query("SELECT count(*) as total4 from personaloperativo where fechaFinalizo2021 between '2022-04-01' and '2022-04-30' and descripcionestructura1 = 'DIRECCION MEDICA'");
    $row4 = mysqli_fetch_assoc($sql4);

    $sql5 = $conexion2->query("SELECT count(*) as total5 from personaloperativo where fechaFinalizo2021 between '2022-05-01' and '2022-05-31' and descripcionestructura1 = 'DIRECCION MEDICA'");
    $row5 = mysqli_fetch_assoc($sql5);

    $sql6 = $conexion2->query("SELECT count(*) as total6 from personaloperativo where fechaFinalizo2021 between '2022-06-01' and '2022-06-30' and descripcionestructura1 = 'DIRECCION MEDICA'");
    $row6 = mysqli_fetch_assoc($sql6);

    $sql7 = $conexion2->query("SELECT count(*) as total7 from personaloperativo where fechaFinalizo2021 between '2022-07-01' and '2022-07-31' and descripcionestructura1 = 'DIRECCION MEDICA'");
    $row7= mysqli_fetch_assoc($sql7);

    $sql8 = $conexion2->query("SELECT count(*) as total8 from personaloperativo where fechaFinalizo2021 between '0000-00-00' and '0000-00-00' and descripcionestructura1 = 'DIRECCION MEDICA' and vistoBuenoResultado2021 = 4");
    $row8 = mysqli_fetch_assoc($sql8);
    
    $sql9 = $conexion2->query("SELECT count(*) as total9 from personaloperativo where vistoBuenoResultado2021 = 1 and descripcionestructura1 = 'DIRECCION MEDICA'");
    $row9 = mysqli_fetch_assoc($sql9);
    
     $sql10 = $conexion2->query("SELECT count(*) as total10 from personaloperativo where vistoBuenoResultado2021 = 2 and descripcionestructura1 = 'DIRECCION MEDICA'");
    $row10 = mysqli_fetch_assoc($sql10);
    
    $sql11 = $conexion2->query("SELECT count(*) as total11 from personaloperativo where vistoBuenoResultado2021 = 3 and descripcionestructura1 = 'DIRECCION MEDICA'");
    $row11 = mysqli_fetch_assoc($sql11);
    
    $sql12 = $conexion2->query("SELECT count(*) as total12 from personaloperativo where vistobueno2021 = 4 and descripcionestructura1 = 'DIRECCION MEDICA' and eliminado = 0");
    $row12 = mysqli_fetch_assoc($sql12);
    ?>
  
];

// Set data
var data = {
  "DIRECCION MEDICA": {
    "Enero": <?php echo $row['total1']; ?>,
    "Febrero": <?php echo $row2['total2']; ?>,
    "Marzo": <?php echo $row3['total3']; ?>,
    "Abril": <?php echo $row4['total4']; ?>,
    "Mayo": <?php echo $row5['total5']; ?>,
  
    "Autorizado": <?php echo $row9['total9']; ?>,
    "Pendiente de VoBo": <?php echo $row10['total10']; ?>,
    "Rechazado": <?php echo $row11['total11']; ?>,
    "Sin captura": <?php echo $row8['total8']; ?>,
    
    "No capturo metas 2021": <?php echo $row12['total12']; ?>,
 
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
  /*tempArray.sort(function (a, b) {
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
<div id="chartdiv5"></div>


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
      dataItem.set("locationX", 0.2);
    }
  });
});

var chartData = [
    <?php
    require 'conexion.php';

    $sql = $conexion2->query("SELECT count(*) as total1 from personaloperativo where fechaFinalizo2021 between '2022-01-01' and '2022-01-31' and descripcionestructura1 = 'DIRECCION DE OPERACIONES'");
    $row = mysqli_fetch_assoc($sql);

    $sql2 = $conexion2->query("SELECT count(*) as total2 from personaloperativo where fechaFinalizo2021 between '2022-02-01' and '2022-02-28' and descripcionestructura1 = 'DIRECCION DE OPERACIONES'");
    $row2 = mysqli_fetch_assoc($sql2);

    $sql3 = $conexion2->query("SELECT count(*) as total3 from personaloperativo where fechaFinalizo2021 between '2022-03-01' and '2022-03-31' and descripcionestructura1 = 'DIRECCION DE OPERACIONES'");
    $row3 = mysqli_fetch_assoc($sql3);

    $sql4 = $conexion2->query("SELECT count(*) as total4 from personaloperativo where fechaFinalizo2021 between '2022-04-01' and '2022-04-30' and descripcionestructura1 = 'DIRECCION DE OPERACIONES'");
    $row4 = mysqli_fetch_assoc($sql4);

    $sql5 = $conexion2->query("SELECT count(*) as total5 from personaloperativo where fechaFinalizo2021 between '2022-05-01' and '2022-05-31' and descripcionestructura1 = 'DIRECCION DE OPERACIONES'");
    $row5 = mysqli_fetch_assoc($sql5);

    $sql6 = $conexion2->query("SELECT count(*) as total6 from personaloperativo where fechaFinalizo2021 between '2022-06-01' and '2022-06-30' and descripcionestructura1 = 'DIRECCION DE OPERACIONES'");
    $row6 = mysqli_fetch_assoc($sql6);

    $sql7 = $conexion2->query("SELECT count(*) as total7 from personaloperativo where fechaFinalizo2021 between '2022-07-01' and '2022-07-31' and descripcionestructura1 = 'DIRECCION DE OPERACIONES'");
    $row7= mysqli_fetch_assoc($sql7);

    $sql8 = $conexion2->query("SELECT count(*) as total8 from personaloperativo where fechaFinalizo2021 between '0000-00-00' and '0000-00-00' and descripcionestructura1 = 'DIRECCION DE OPERACIONES' and vistoBuenoResultado2021 = 4");
    $row8 = mysqli_fetch_assoc($sql8);
    
    $sql9 = $conexion2->query("SELECT count(*) as total9 from personaloperativo where vistoBuenoResultado2021 = 1 and descripcionestructura1 = 'DIRECCION DE OPERACIONES'");
    $row9 = mysqli_fetch_assoc($sql9);
    
     $sql10 = $conexion2->query("SELECT count(*) as total10 from personaloperativo where vistoBuenoResultado2021 = 2 and descripcionestructura1 = 'DIRECCION DE OPERACIONES'");
    $row10 = mysqli_fetch_assoc($sql10);
    
    $sql11 = $conexion2->query("SELECT count(*) as total11 from personaloperativo where vistoBuenoResultado2021 = 3 and descripcionestructura1 = 'DIRECCION DE OPERACIONES'");
    $row11 = mysqli_fetch_assoc($sql11);
    
    $sql12 = $conexion2->query("SELECT count(*) as total12 from personaloperativo where vistobueno2021 = 4 and descripcionestructura1 = 'DIRECCION DE OPERACIONES' and eliminado = 0");
    $row12 = mysqli_fetch_assoc($sql12);
    ?>
  
];

// Set data
var data = {
  "DIRECCION DE OPERACIONES": {
    "Enero": <?php echo $row['total1']; ?>,
    "Febrero": <?php echo $row2['total2']; ?>,
    "Marzo": <?php echo $row3['total3']; ?>,
    "Abril": <?php echo $row4['total4']; ?>,
    "Mayo": <?php echo $row5['total5']; ?>,
   
    "Autorizado": <?php echo $row9['total9']; ?>,
    "Pendiente de VoBo": <?php echo $row10['total10']; ?>,
    "Rechazado": <?php echo $row11['total11']; ?>,
    "Sin captura": <?php echo $row8['total8']; ?>,
    
    "No capturo metas 2021": <?php echo $row12['total12']; ?>,
 
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
  /*tempArray.sort(function (a, b) {
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



<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv2");

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
      dataItem.set("locationX", 0.2);
    }
  });
});

var chartData = [
      <?php
    require 'conexion.php';

    $sql = $conexion2->query("SELECT count(*) as total1 from personaloperativo where fechaFinalizo2021 between '2022-01-01' and '2022-01-31' and descripcionestructura1 = 'DIRECCION DE ADMINISTRACION Y FINANZAS'");
    $row = mysqli_fetch_assoc($sql);

    $sql2 = $conexion2->query("SELECT count(*) as total2 from personaloperativo where fechaFinalizo2021 between '2022-02-01' and '2022-02-28' and descripcionestructura1 = 'DIRECCION DE ADMINISTRACION Y FINANZAS'");
    $row2 = mysqli_fetch_assoc($sql2);

    $sql3 = $conexion2->query("SELECT count(*) as total3 from personaloperativo where fechaFinalizo2021 between '2022-03-01' and '2022-03-31' and descripcionestructura1 = 'DIRECCION DE ADMINISTRACION Y FINANZAS'");
    $row3 = mysqli_fetch_assoc($sql3);

    $sql4 = $conexion2->query("SELECT count(*) as total4 from personaloperativo where fechaFinalizo2021 between '2022-04-01' and '2022-04-30' and descripcionestructura1 = 'DIRECCION DE ADMINISTRACION Y FINANZAS'");
    $row4 = mysqli_fetch_assoc($sql4);

    $sql5 = $conexion2->query("SELECT count(*) as total5 from personaloperativo where fechaFinalizo2021 between '2022-05-01' and '2022-05-31' and descripcionestructura1 = 'DIRECCION DE ADMINISTRACION Y FINANZAS'");
    $row5 = mysqli_fetch_assoc($sql5);

    $sql6 = $conexion2->query("SELECT count(*) as total6 from personaloperativo where fechaFinalizo2021 between '2022-06-01' and '2022-06-30' and descripcionestructura1 = 'DIRECCION DE ADMINISTRACION Y FINANZAS'");
    $row6 = mysqli_fetch_assoc($sql6);

    $sql7 = $conexion2->query("SELECT count(*) as total7 from personaloperativo where fechaFinalizo2021 between '2022-07-01' and '2022-07-31' and descripcionestructura1 = 'DIRECCION DE ADMINISTRACION Y FINANZAS'");
    $row7= mysqli_fetch_assoc($sql7);

    $sql8 = $conexion2->query("SELECT count(*) as total8 from personaloperativo where fechaFinalizo2021 between '0000-00-00' and '0000-00-00' and descripcionestructura1 = 'DIRECCION DE ADMINISTRACION Y FINANZAS' and vistoBuenoResultado2021 = 4");
    $row8 = mysqli_fetch_assoc($sql8);
    
    $sql9 = $conexion2->query("SELECT count(*) as total9 from personaloperativo where vistoBuenoResultado2021 = 1 and descripcionestructura1 = 'DIRECCION DE ADMINISTRACION Y FINANZAS'");
    $row9 = mysqli_fetch_assoc($sql9);
    
    $sql10 = $conexion2->query("SELECT count(*) as total10 from personaloperativo where vistoBuenoResultado2021 = 2 and descripcionestructura1 = 'DIRECCION DE ADMINISTRACION Y FINANZAS'");
    $row10 = mysqli_fetch_assoc($sql10);
    
    $sql11 = $conexion2->query("SELECT count(*) as total11 from personaloperativo where vistoBuenoResultado2021 = 3 and descripcionestructura1 = 'DIRECCION DE ADMINISTRACION Y FINANZAS'");
    $row11 = mysqli_fetch_assoc($sql11);
    
    $sql12 = $conexion2->query("SELECT count(*) as total12 from personaloperativo where vistobueno2021 = 4 and descripcionestructura1 = 'DIRECCION DE ADMINISTRACION Y FINANZAS' and eliminado = 0");
    $row12 = mysqli_fetch_assoc($sql12);
    ?>
  
];

// Set data
var data = {
  "DIRECCION DE ADMINISTRACION Y FINANZAS": {
    "Enero": <?php echo $row['total1']; ?>,
    "Febrero": <?php echo $row2['total2']; ?>,
    "Marzo": <?php echo $row3['total3']; ?>,
    "Abril": <?php echo $row4['total4']; ?>,
    "Mayo": <?php echo $row5['total5']; ?>,
    
    "Autorizado": <?php echo $row9['total9']; ?>,
    "Pendiente de VoBo": <?php echo $row10['total10']; ?>,
    "Rechazado": <?php echo $row11['total11']; ?>,
    "Sin captura": <?php echo $row8['total8']; ?>,
    
    "No capturo metas 2021": <?php echo $row12['total12']; ?>,
 
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
  /*tempArray.sort(function (a, b) {
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
<div id="chartdiv2"></div>

<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv3");

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
      dataItem.set("locationX", 0.2);
    }
  });
});

var chartData = [
      <?php
    require 'conexion.php';

    $sql = $conexion2->query("SELECT count(*) as total1 from personaloperativo where fechaFinalizo2021 between '2022-01-01' and '2022-01-31' and descripcionestructura1 = 'DIRECCION DE ADMINISTRACION Y FINANZAS'");
    $row = mysqli_fetch_assoc($sql);

    $sql2 = $conexion2->query("SELECT count(*) as total2 from personaloperativo where fechaFinalizo2021 between '2022-02-01' and '2022-02-28' and descripcionestructura1 = 'DIRECCION DE ADMINISTRACION Y FINANZAS'");
    $row2 = mysqli_fetch_assoc($sql2);

    $sql3 = $conexion2->query("SELECT count(*) as total3 from personaloperativo where fechaFinalizo2021 between '2022-03-01' and '2022-03-31' and descripcionestructura1 = 'SUBDIRECCION DE ENFERMERIA'");
    $row3 = mysqli_fetch_assoc($sql3);

    $sql4 = $conexion2->query("SELECT count(*) as total4 from personaloperativo where fechaFinalizo2021 between '2022-04-01' and '2022-04-30' and descripcionestructura1 = 'SUBDIRECCION DE ENFERMERIA'");
    $row4 = mysqli_fetch_assoc($sql4);

    $sql5 = $conexion2->query("SELECT count(*) as total5 from personaloperativo where fechaFinalizo2021 between '2022-05-01' and '2022-05-31' and descripcionestructura1 = 'SUBDIRECCION DE ENFERMERIA'");
    $row5 = mysqli_fetch_assoc($sql5);

    $sql6 = $conexion2->query("SELECT count(*) as total6 from personaloperativo where fechaFinalizo2021 between '2022-06-01' and '2022-06-30' and descripcionestructura1 = 'SUBDIRECCION DE ENFERMERIA'");
    $row6 = mysqli_fetch_assoc($sql6);

    $sql7 = $conexion2->query("SELECT count(*) as total7 from personaloperativo where fechaFinalizo2021 between '2022-07-01' and '2022-07-31' and descripcionestructura1 = 'SUBDIRECCION DE ENFERMERIA'");
    $row7= mysqli_fetch_assoc($sql7);

    $sql8 = $conexion2->query("SELECT count(*) as total8 from personaloperativo where fechaFinalizo2021 between '0000-00-00' and '0000-00-00' and descripcionestructura1 = 'SUBDIRECCION DE ENFERMERIA' and vistoBuenoResultado2021 = 4");
    $row8 = mysqli_fetch_assoc($sql8);
    
    $sql9 = $conexion2->query("SELECT count(*) as total9 from personaloperativo where vistoBuenoResultado2021 = 1 and descripcionestructura1 = 'SUBDIRECCION DE ENFERMERIA'");
    $row9 = mysqli_fetch_assoc($sql9);
    
    $sql10 = $conexion2->query("SELECT count(*) as total10 from personaloperativo where vistoBuenoResultado2021 = 2 and descripcionestructura1 = 'SUBDIRECCION DE ENFERMERIA'");
    $row10 = mysqli_fetch_assoc($sql10);
    
    $sql11 = $conexion2->query("SELECT count(*) as total11 from personaloperativo where vistoBuenoResultado2021 = 3 and descripcionestructura1 = 'SUBDIRECCION DE ENFERMERIA' and eliminado = 0");
    $row11 = mysqli_fetch_assoc($sql11);
    
    $sql12 = $conexion2->query("SELECT count(*) as total12 from personaloperativo where vistobueno2021 = 4 and descripcionestructura1 = 'SUBDIRECCION DE ENFERMERIA'");
    $row12 = mysqli_fetch_assoc($sql12);
    ?>
  
];

// Set data
var data = {
  "SUBDIRECCION DE ENFERMERIA": {
    "Enero": <?php echo $row['total1']; ?>,
    "Febrero": <?php echo $row2['total2']; ?>,
    "Marzo": <?php echo $row3['total3']; ?>,
    "Abril": <?php echo $row4['total4']; ?>,
    "Mayo": <?php echo $row5['total5']; ?>,
    
    "Autorizado": <?php echo $row9['total9']; ?>,
    "Pendiente de VoBo": <?php echo $row10['total10']; ?>,
    "Rechazado": <?php echo $row11['total11']; ?>,
    "Sin captura": <?php echo $row8['total8']; ?>,
    
    "No capturo metas 2021": <?php echo $row12['total12']; ?>,
 
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
  /*tempArray.sort(function (a, b) {
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
<div id="chartdiv3"></div>

<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv6");

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
      dataItem.set("locationX", 0.2);
    }
  });
});

var chartData = [
      <?php
    require 'conexion.php';

    $sql = $conexion2->query("SELECT count(*) as total1 from personaloperativo where fechaFinalizo2021 between '2022-01-01' and '2022-01-31' and descripcionestructura1 = 'SUBDIRECCION DE PLANEACION Y DESARROLLO'");
    $row = mysqli_fetch_assoc($sql);

    $sql2 = $conexion2->query("SELECT count(*) as total2 from personaloperativo where fechaFinalizo2021 between '2022-02-01' and '2022-02-28' and descripcionestructura1 = 'SUBDIRECCION DE PLANEACION Y DESARROLLO'");
    $row2 = mysqli_fetch_assoc($sql2);

    $sql3 = $conexion2->query("SELECT count(*) as total3 from personaloperativo where fechaFinalizo2021 between '2022-03-01' and '2022-03-31' and descripcionestructura1 = 'SUBDIRECCION DE PLANEACION Y DESARROLLO'");
    $row3 = mysqli_fetch_assoc($sql3);

    $sql4 = $conexion2->query("SELECT count(*) as total4 from personaloperativo where fechaFinalizo2021 between '2022-04-01' and '2022-04-30' and descripcionestructura1 = 'SUBDIRECCION DE PLANEACION Y DESARROLLO'");
    $row4 = mysqli_fetch_assoc($sql4);

    $sql5 = $conexion2->query("SELECT count(*) as total5 from personaloperativo where fechaFinalizo2021 between '2022-05-01' and '2022-05-31' and descripcionestructura1 = 'SUBDIRECCION DE PLANEACION Y DESARROLLO'");
    $row5 = mysqli_fetch_assoc($sql5);

    $sql6 = $conexion2->query("SELECT count(*) as total6 from personaloperativo where fechaFinalizo2021 between '2022-06-01' and '2022-06-30' and descripcionestructura1 = 'SUBDIRECCION DE PLANEACION Y DESARROLLO'");
    $row6 = mysqli_fetch_assoc($sql6);

    $sql7 = $conexion2->query("SELECT count(*) as total7 from personaloperativo where fechaFinalizo2021 between '2022-07-01' and '2022-07-31' and descripcionestructura1 = 'SUBDIRECCION DE PLANEACION Y DESARROLLO'");
    $row7= mysqli_fetch_assoc($sql7);

    $sql8 = $conexion2->query("SELECT count(*) as total8 from personaloperativo where fechaFinalizo2021 between '0000-00-00' and '0000-00-00' and descripcionestructura1 = 'SUBDIRECCION DE PLANEACION Y DESARROLLO' and vistoBuenoResultado2021 = 4");
    $row8 = mysqli_fetch_assoc($sql8);
    
    $sql9 = $conexion2->query("SELECT count(*) as total9 from personaloperativo where vistoBuenoResultado2021 = 1 and descripcionestructura1 = 'SUBDIRECCION DE PLANEACION Y DESARROLLO'");
    $row9 = mysqli_fetch_assoc($sql9);
    
    $sql10 = $conexion2->query("SELECT count(*) as total10 from personaloperativo where vistoBuenoResultado2021 = 2 and descripcionestructura1 = 'SUBDIRECCION DE PLANEACION Y DESARROLLO'");
    $row10 = mysqli_fetch_assoc($sql10);
    
    $sql11 = $conexion2->query("SELECT count(*) as total11 from personaloperativo where vistoBuenoResultado2021 = 3 and descripcionestructura1 = 'SUBDIRECCION DE PLANEACION Y DESARROLLO'");
    $row11 = mysqli_fetch_assoc($sql11);
    
    $sql12 = $conexion2->query("SELECT count(*) as total12 from personaloperativo where vistobueno2021 = 4 and descripcionestructura1 = 'SUBDIRECCION DE PLANEACION Y DESARROLLO' and eliminado = 0");
    $row12 = mysqli_fetch_assoc($sql12);
    ?>
  
];

// Set data
var data = {
  "SUBDIRECCION DE PLANEACION Y DESARROLLO": {
    "Enero": <?php echo $row['total1']; ?>,
    "Febrero": <?php echo $row2['total2']; ?>,
    "Marzo": <?php echo $row3['total3']; ?>,
    "Abril": <?php echo $row4['total4']; ?>,
    "Mayo": <?php echo $row5['total5']; ?>,
    
    "Autorizado": <?php echo $row9['total9']; ?>,
    "Pendiente de VoBo": <?php echo $row10['total10']; ?>,
    "Rechazado": <?php echo $row11['total11']; ?>,
    "Sin captura": <?php echo $row8['total8']; ?>,
    
    "No capturo metas 2021": <?php echo $row12['total12']; ?>,
 
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
  /*tempArray.sort(function (a, b) {
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
<div id="chartdiv6"></div>

<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv7");

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
      dataItem.set("locationX", 0.2);
    }
  });
});

var chartData = [
      <?php
    require 'conexion.php';

    $sql = $conexion2->query("SELECT count(*) as total1 from personaloperativo where fechaFinalizo2021 between '2022-01-01' and '2022-01-31' and descripcionestructura1 = 'SUBDIRECCION DE ESPECIALIDADES QUIRURGICAS'");
    $row = mysqli_fetch_assoc($sql);

    $sql2 = $conexion2->query("SELECT count(*) as total2 from personaloperativo where fechaFinalizo2021 between '2022-02-01' and '2022-02-28' and descripcionestructura1 = 'SUBDIRECCION DE ESPECIALIDADES QUIRURGICAS'");
    $row2 = mysqli_fetch_assoc($sql2);

    $sql3 = $conexion2->query("SELECT count(*) as total3 from personaloperativo where fechaFinalizo2021 between '2022-03-01' and '2022-03-31' and descripcionestructura1 = 'SUBDIRECCION DE ESPECIALIDADES QUIRURGICAS'");
    $row3 = mysqli_fetch_assoc($sql3);

    $sql4 = $conexion2->query("SELECT count(*) as total4 from personaloperativo where fechaFinalizo2021 between '2022-04-01' and '2022-04-30' and descripcionestructura1 = 'SUBDIRECCION DE ESPECIALIDADES QUIRURGICAS'");
    $row4 = mysqli_fetch_assoc($sql4);

    $sql5 = $conexion2->query("SELECT count(*) as total5 from personaloperativo where fechaFinalizo2021 between '2022-05-01' and '2022-05-31' and descripcionestructura1 = 'SUBDIRECCION DE ESPECIALIDADES QUIRURGICAS'");
    $row5 = mysqli_fetch_assoc($sql5);

    $sql6 = $conexion2->query("SELECT count(*) as total6 from personaloperativo where fechaFinalizo2021 between '2022-06-01' and '2022-06-30' and descripcionestructura1 = 'SUBDIRECCION DE ESPECIALIDADES QUIRURGICAS'");
    $row6 = mysqli_fetch_assoc($sql6);

    $sql7 = $conexion2->query("SELECT count(*) as total7 from personaloperativo where fechaFinalizo2021 between '2022-07-01' and '2022-07-31' and descripcionestructura1 = 'SUBDIRECCION DE ESPECIALIDADES QUIRURGICAS'");
    $row7= mysqli_fetch_assoc($sql7);

    $sql8 = $conexion2->query("SELECT count(*) as total8 from personaloperativo where fechaFinalizo2021 between '0000-00-00' and '0000-00-00' and descripcionestructura1 = 'SUBDIRECCION DE ESPECIALIDADES QUIRURGICAS' and vistoBuenoResultado2021 = 4");
    $row8 = mysqli_fetch_assoc($sql8);
    
    $sql9 = $conexion2->query("SELECT count(*) as total9 from personaloperativo where vistoBuenoResultado2021 = 1 and descripcionestructura1 = 'SUBDIRECCION DE ESPECIALIDADES QUIRURGICAS'");
    $row9 = mysqli_fetch_assoc($sql9);
    
    $sql10 = $conexion2->query("SELECT count(*) as total10 from personaloperativo where vistoBuenoResultado2021 = 2 and descripcionestructura1 = 'SUBDIRECCION DE ESPECIALIDADES QUIRURGICAS'");
    $row10 = mysqli_fetch_assoc($sql10);
    
    $sql11 = $conexion2->query("SELECT count(*) as total11 from personaloperativo where vistoBuenoResultado2021 = 3 and descripcionestructura1 = 'SUBDIRECCION DE ESPECIALIDADES QUIRURGICAS'");
    $row11 = mysqli_fetch_assoc($sql11);
    
    $sql12 = $conexion2->query("SELECT count(*) as total12 from personaloperativo where vistobueno2021 = 4 and descripcionestructura1 = 'SUBDIRECCION DE ESPECIALIDADES QUIRURGICAS' and eliminado = 0");
    $row12 = mysqli_fetch_assoc($sql12);
    ?>
  
];

// Set data
var data = {
  "SUBDIRECCION DE ESPECIALIDADES QUIRURGICAS": {
    "Enero": <?php echo $row['total1']; ?>,
    "Febrero": <?php echo $row2['total2']; ?>,
    "Marzo": <?php echo $row3['total3']; ?>,
    "Abril": <?php echo $row4['total4']; ?>,
    "Mayo": <?php echo $row5['total5']; ?>,
    
    "Autorizado": <?php echo $row9['total9']; ?>,
    "Pendiente de VoBo": <?php echo $row10['total10']; ?>,
    "Rechazado": <?php echo $row11['total11']; ?>,
    "Sin captura": <?php echo $row8['total8']; ?>,
    
    "No capturo metas 2021": <?php echo $row12['total12']; ?>,
 
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
  /*tempArray.sort(function (a, b) {
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
<div id="chartdiv7"></div>

<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv8");

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
      dataItem.set("locationX", 0.2);
    }
  });
});

var chartData = [
      <?php
    require 'conexion.php';

    $sql = $conexion2->query("SELECT count(*) as total1 from personaloperativo where fechaFinalizo2021 between '2022-01-01' and '2022-01-31' and descripcionestructura1 = 'SUBDIRECCION DE TECNOLOGIAS DE LA INFORMACION'");
    $row = mysqli_fetch_assoc($sql);

    $sql2 = $conexion2->query("SELECT count(*) as total2 from personaloperativo where fechaFinalizo2021 between '2022-02-01' and '2022-02-28' and descripcionestructura1 = 'SUBDIRECCION DE TECNOLOGIAS DE LA INFORMACION'");
    $row2 = mysqli_fetch_assoc($sql2);

    $sql3 = $conexion2->query("SELECT count(*) as total3 from personaloperativo where fechaFinalizo2021 between '2022-03-01' and '2022-03-31' and descripcionestructura1 = 'SUBDIRECCION DE TECNOLOGIAS DE LA INFORMACION'");
    $row3 = mysqli_fetch_assoc($sql3);

    $sql4 = $conexion2->query("SELECT count(*) as total4 from personaloperativo where fechaFinalizo2021 between '2022-04-01' and '2022-04-30' and descripcionestructura1 = 'SUBDIRECCION DE TECNOLOGIAS DE LA INFORMACION'");
    $row4 = mysqli_fetch_assoc($sql4);

    $sql5 = $conexion2->query("SELECT count(*) as total5 from personaloperativo where fechaFinalizo2021 between '2022-05-01' and '2022-05-31' and descripcionestructura1 = 'SUBDIRECCION DE TECNOLOGIAS DE LA INFORMACION'");
    $row5 = mysqli_fetch_assoc($sql5);

    $sql6 = $conexion2->query("SELECT count(*) as total6 from personaloperativo where fechaFinalizo2021 between '2022-06-01' and '2022-06-30' and descripcionestructura1 = 'SUBDIRECCION DE TECNOLOGIAS DE LA INFORMACION'");
    $row6 = mysqli_fetch_assoc($sql6);

    $sql7 = $conexion2->query("SELECT count(*) as total7 from personaloperativo where fechaFinalizo2021 between '2022-07-01' and '2022-07-31' and descripcionestructura1 = 'SUBDIRECCION DE TECNOLOGIAS DE LA INFORMACION'");
    $row7= mysqli_fetch_assoc($sql7);

    $sql8 = $conexion2->query("SELECT count(*) as total8 from personaloperativo where fechaFinalizo2021 between '0000-00-00' and '0000-00-00' and descripcionestructura1 = 'SUBDIRECCION DE TECNOLOGIAS DE LA INFORMACION' and vistoBuenoResultado2021 = 4");
    $row8 = mysqli_fetch_assoc($sql8);
    
    $sql9 = $conexion2->query("SELECT count(*) as total9 from personaloperativo where vistoBuenoResultado2021 = 1 and descripcionestructura1 = 'SUBDIRECCION DE TECNOLOGIAS DE LA INFORMACION'");
    $row9 = mysqli_fetch_assoc($sql9);
    
    $sql10 = $conexion2->query("SELECT count(*) as total10 from personaloperativo where vistoBuenoResultado2021 = 2 and descripcionestructura1 = 'SUBDIRECCION DE TECNOLOGIAS DE LA INFORMACION'");
    $row10 = mysqli_fetch_assoc($sql10);
    
    $sql11 = $conexion2->query("SELECT count(*) as total11 from personaloperativo where vistoBuenoResultado2021 = 3 and descripcionestructura1 = 'SUBDIRECCION DE TECNOLOGIAS DE LA INFORMACION'");
    $row11 = mysqli_fetch_assoc($sql11);
    
    $sql12 = $conexion2->query("SELECT count(*) as total12 from personaloperativo where vistobueno2021 = 4 and descripcionestructura1 = 'SUBDIRECCION DE TECNOLOGIAS DE LA INFORMACIO' and eliminado = 0");
    $row12 = mysqli_fetch_assoc($sql12);
    ?>
  
];

// Set data
var data = {
  "SUBDIRECCION DE TECNOLOGIAS DE LA INFORMACION": {
    "Enero": <?php echo $row['total1']; ?>,
    "Febrero": <?php echo $row2['total2']; ?>,
    "Marzo": <?php echo $row3['total3']; ?>,
    "Abril": <?php echo $row4['total4']; ?>,
    "Mayo": <?php echo $row5['total5']; ?>,
   
    "Autorizado": <?php echo $row9['total9']; ?>,
    "Pendiente de VoBo": <?php echo $row10['total10']; ?>,
    "Rechazado": <?php echo $row11['total11']; ?>,
    "Sin captura": <?php echo $row8['total8']; ?>,
    
    "No capturo metas 2021": <?php echo $row12['total12']; ?>,
 
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
  /*tempArray.sort(function (a, b) {
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
<div id="chartdiv8"></div>

</html>