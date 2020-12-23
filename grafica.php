<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>amCharts examples</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="css/estilo.css">  
        <script src="amcharts/amcharts.js" type="text/javascript"></script>
        <script src="amcharts/serial.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/gigi.png">

        <script>
            var chart;
            var graph;

            var chartData = [
                {
                    "year": "1950",
                    "value": -0.307
                },
                {
                    "year": "1951",
                    "value": -0.168
                },
                {
                    "year": "1952",
                    "value": -0.073
                },
                {
                    "year": "1953",
                    "value": -0.027
                },
                {
                    "year": "1954",
                    "value": -0.251
                },
                {
                    "year": "1955",
                    "value": -0.281
                },
                {
                    "year": "1956",
                    "value": -0.348
                },
                {
                    "year": "1957",
                    "value": -0.074
                },
                {
                    "year": "1958",
                    "value": -0.011
                },
                {
                    "year": "1959",
                    "value": -0.074
                },
                {
                    "year": "1960",
                    "value": -0.124
                },
                {
                    "year": "1961",
                    "value": -0.024
                },
                {
                    "year": "1962",
                    "value": -0.022
                },
                {
                    "year": "1963",
                    "value": 0
                },
                {
                    "year": "1964",
                    "value": -0.296
                },
                {
                    "year": "1965",
                    "value": -0.217
                },
                {
                    "year": "1966",
                    "value": -0.147
                },
                {
                    "year": "1967",
                    "value": -0.15
                },
                {
                    "year": "1968",
                    "value": -0.16
                },
                {
                    "year": "1969",
                    "value": -0.011
                },
                {
                    "year": "1970",
                    "value": -0.068
                },
                {
                    "year": "1971",
                    "value": -0.19
                },
                {
                    "year": "1972",
                    "value": -0.056
                },
                {
                    "year": "1973",
                    "value": 0.077
                },
                {
                    "year": "1974",
                    "value": -0.213
                },
                {
                    "year": "1975",
                    "value": -0.17
                },
                {
                    "year": "1976",
                    "value": -0.254
                },
                {
                    "year": "1977",
                    "value": 0.019
                },
                {
                    "year": "1978",
                    "value": -0.063
                },
                {
                    "year": "1979",
                    "value": 0.05
                },
                {
                    "year": "1980",
                    "value": 0.077
                },
                {
                    "year": "1981",
                    "value": 0.12
                },
                {
                    "year": "1982",
                    "value": 0.011
                },
                {
                    "year": "1983",
                    "value": 0.177
                },
                {
                    "year": "1984",
                    "value": -0.021
                },
                {
                    "year": "1985",
                    "value": -0.037
                },
                {
                    "year": "1986",
                    "value": 0.03
                },
                {
                    "year": "1987",
                    "value": 0.179
                },
                {
                    "year": "1988",
                    "value": 0.18
                },
                {
                    "year": "1989",
                    "value": 0.104
                },
                {
                    "year": "1990",
                    "value": 0.255
                },
                {
                    "year": "1991",
                    "value": 0.21
                },
                {
                    "year": "1992",
                    "value": 0.065
                },
                {
                    "year": "1993",
                    "value": 0.11
                },
                {
                    "year": "1994",
                    "value": 0.172
                },
                {
                    "year": "1995",
                    "value": 0.269
                },
                {
                    "year": "1996",
                    "value": 0.141
                },
                {
                    "year": "1997",
                    "value": 0.353
                },
                {
                    "year": "1998",
                    "value": 0.548
                },
                {
                    "year": "1999",
                    "value": 0.298
                },
                {
                    "year": "2000",
                    "value": 0.267
                },
                {
                    "year": "2001",
                    "value": 0.411
                },
                {
                    "year": "2002",
                    "value": 0.462
                },
                {
                    "year": "2003",
                    "value": 0.47
                },
                {
                    "year": "2004",
                    "value": 0.445
                },
                {
                    "year": "2005",
                    "value": 0.47
                }
            ];


            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();

                chart.dataProvider = chartData;
                chart.marginLeft = 10;
                chart.categoryField = "year";
                chart.dataDateFormat = "YYYY";

                // listen for "dataUpdated" event (fired when chart is inited) and call zoomChart method when it happens
                chart.addListener("dataUpdated", zoomChart);

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
                categoryAxis.minPeriod = "YYYY"; // our data is yearly, so we set minPeriod to YYYY
                categoryAxis.dashLength = 3;
                categoryAxis.minorGridEnabled = true;
                categoryAxis.minorGridAlpha = 0.1;

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.axisAlpha = 0;
                valueAxis.inside = true;
                valueAxis.dashLength = 3;
                chart.addValueAxis(valueAxis);

                // GRAPH
                graph = new AmCharts.AmGraph();
                graph.type = "smoothedLine"; // this line makes the graph smoothed line.
                graph.lineColor = "#d1655d";
                graph.negativeLineColor = "#637bb6"; // this line makes the graph to change color when it drops below 0
                graph.bullet = "round";
                graph.bulletSize = 8;
                graph.bulletBorderColor = "#FFFFFF";
                graph.bulletBorderAlpha = 1;
                graph.bulletBorderThickness = 2;
                graph.lineThickness = 2;
                graph.valueField = "value";
                graph.balloonText = "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>";
                chart.addGraph(graph);

                // CURSOR
                var chartCursor = new AmCharts.ChartCursor();
                chartCursor.cursorAlpha = 0;
                chartCursor.cursorPosition = "mouse";
                chartCursor.categoryBalloonDateFormat = "YYYY";
                chart.addChartCursor(chartCursor);

                // SCROLLBAR
                var chartScrollbar = new AmCharts.ChartScrollbar();
                chart.addChartScrollbar(chartScrollbar);

                chart.creditsPosition = "bottom-right";

                // WRITE
                chart.write("chartdiv");
            });

            // this method is called when chart is first inited as we listen for "dataUpdated" event
            function zoomChart() {
                // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
                chart.zoomToDates(new Date(1972, 0), new Date(1984, 0));
            }
        </script>
    </head>

    <body>
    <header>
       <?php include_once('encabezado.php');?>
   </header>
        <div id="chartdiv" style="width:100%; height:400px;"></div>

        <footer>
       <!-- Llamamos al pie de pagina por medio de include_once -->
        <?php include_once('footer.php');?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

</html>