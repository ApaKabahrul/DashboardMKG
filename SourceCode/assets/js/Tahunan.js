window.onload = function () {

    var chart = new CanvasJS.Chart("PanasMatahari", {
        animationEnabled: true,
        title: {
            text: "Panas Matahari"
        },
        axisX: {
            minimum: new Date(2015, 01, 25),
            maximum: new Date(2017, 02, 15),
            valueFormatString: "MMM YY"
        },
        axisY: {
            title: "Number of Sales",
            titleFontColor: "#4F81BC",
            suffix: "mn"
        },
        data: [{
            indexLabelFontColor: "darkSlateGray",
            name: "views",
            type: "area",
            yValueFormatString: "#,##0.0mn",
            dataPoints: [
                { x: new Date(2015, 02, 1), y: 74.4, label: "Q1-2015" },
                { x: new Date(2015, 05, 1), y: 61.1, label: "Q2-2015" },
                { x: new Date(2015, 08, 1), y: 47.0, label: "Q3-2015" },
    { x: new Date(2015, 11, 1), y: 48.0, label: "Q4-2015" },
    { x: new Date(2016, 02, 1), y: 74.8, label: "Q1-2016" },
    { x: new Date(2016, 05, 1), y: 51.1, label: "Q2-2016" },
    { x: new Date(2016, 08, 1), y: 40.4, label: "Q3-2016" },
    { x: new Date(2016, 11, 1), y: 45.5, label: "Q4-2016" },
    { x: new Date(2017, 02, 1), y: 78.3, label: "Q1-2017", indexLabel: "Highest", markerColor: "red" }
]
}]
});
    chart.render();
    var chart1 = new CanvasJS.Chart("CurahHujan", {
        animationEnabled: true,
        title: {
            text: "Panas Matahari"
        },
        axisX: {
            minimum: new Date(2015, 01, 25),
            maximum: new Date(2017, 02, 15),
            valueFormatString: "MMM YY"
        },
        axisY: {
            title: "Number of Sales",
            titleFontColor: "#4F81BC",
            suffix: "mn"
        },
        data: [{
            indexLabelFontColor: "darkSlateGray",
            name: "views",
            type: "area",
            yValueFormatString: "#,##0.0mn",
            dataPoints: [
                { x: new Date(2015, 02, 1), y: 74.4, label: "Q1-2015" },
                { x: new Date(2015, 05, 1), y: 61.1, label: "Q2-2015" },
                { x: new Date(2015, 08, 1), y: 47.0, label: "Q3-2015" },
    { x: new Date(2015, 11, 1), y: 48.0, label: "Q4-2015" },
    { x: new Date(2016, 02, 1), y: 74.8, label: "Q1-2016" },
    { x: new Date(2016, 05, 1), y: 51.1, label: "Q2-2016" },
    { x: new Date(2016, 08, 1), y: 40.4, label: "Q3-2016" },
    { x: new Date(2016, 11, 1), y: 45.5, label: "Q4-2016" },
    { x: new Date(2017, 02, 1), y: 78.3, label: "Q1-2017", indexLabel: "Highest", markerColor: "red" }
]
}]
});
    chart1.render();
    var chart2 = new CanvasJS.Chart("Suhu", {
        animationEnabled: true,
        title: {
            text: "Panas Matahari"
        },
        axisX: {
            minimum: new Date(2015, 01, 25),
            maximum: new Date(2017, 02, 15),
            valueFormatString: "MMM YY"
        },
        axisY: {
            title: "Number of Sales",
            titleFontColor: "#4F81BC",
            suffix: "mn"
        },
        data: [{
            indexLabelFontColor: "darkSlateGray",
            name: "views",
            type: "area",
            yValueFormatString: "#,##0.0mn",
            dataPoints: [
                { x: new Date(2015, 02, 1), y: 74.4, label: "Q1-2015" },
                { x: new Date(2015, 05, 1), y: 61.1, label: "Q2-2015" },
                { x: new Date(2015, 08, 1), y: 47.0, label: "Q3-2015" },
    { x: new Date(2015, 11, 1), y: 48.0, label: "Q4-2015" },
    { x: new Date(2016, 02, 1), y: 74.8, label: "Q1-2016" },
    { x: new Date(2016, 05, 1), y: 51.1, label : "Q2-2016" },
    { x: new Date(2016, 08, 1), y: 40.4, label: "Q3-2016" },
    { x: new Date(2016, 11, 1), y: 45.5, label: "Q4-2016" },
    { x: new Date(2017, 02, 1), y: 78.3, label: "Q1-2017", indexLabel: "Highest", markerColor: "red" }
]
}]
});
    chart2.render();
    var chart3 = new CanvasJS.Chart("WindSpeed", {
        animationEnabled: true,
        title: {
            text: "Panas Matahari"
        },
        axisX: {
            minimum: new Date(2015, 01, 25),
            maximum: new Date(2017, 02, 15),
            valueFormatString: "MMM YY"
        },
        axisY: {
            title: "Number of Sales",
            titleFontColor: "#4F81BC",
            suffix: "mn"
        },
        data: [{
            indexLabelFontColor: "darkSlateGray",
            name: "views",
            type: "area",
            yValueFormatString: "#,##0.0mn",
            dataPoints: [
                { x: new Date(2015, 02, 1), y: 74.4, label: "Q1-2015" },
                { x: new Date(2015, 05, 1), y: 61.1, label: "Q2-2015" },
                { x: new Date(2015, 08, 1), y: 47.0, label: "Q3-2015" },
    { x: new Date(2015, 11, 1), y: 48.0, label: "Q4-2015" },
    { x: new Date(2016, 02, 1), y: 74.8, label: "Q1-2016" },
    { x: new Date(2016, 05, 1), y: 51.1, label: "Q2-2016" },
    { x: new Date(2016, 08, 1), y: 40.4, label: "Q3-2016" },
    { x: new Date(2016, 11, 1), y: 45.5, label: "Q4-2016" },
    { x: new Date(2017, 02, 1), y: 78.3, label: "Q1-2017", indexLabel: "Highest", markerColor: "red" }
]
}]
});
    chart3.render();
    var chart4 = new CanvasJS.Chart("Pressure", {
        animationEnabled: true,
        title: {
            text: "Panas Matahari"
        },
        axisX: {
            minimum: new Date(2015, 01, 25),
            maximum: new Date(2017, 02, 15),
            valueFormatString: "MMM YY"
        },
        axisY: {
            title: "Number of Sales",
            titleFontColor: "#4F81BC",
            suffix: "mn"
        },
        data: [{
            indexLabelFontColor: "darkSlateGray",
            name: "views",
            type: "area",
            yValueFormatString: "#,##0.0mn",
            dataPoints: [
                { x: new Date(2015, 02, 1), y: 74.4, label: "Q1-2015" },
                { x: new Date(2015, 05, 1), y: 61.1, label: "Q2-2015" },
                { x: new Date(2015, 08, 1), y: 47.0, label: "Q3-2015" },
    { x: new Date(2015, 11, 1), y: 48.0, label: "Q4-2015" },
    { x: new Date(2016, 02, 1), y: 74.8, label: "Q1-2016" },
    { x: new Date(2016, 05, 1), y: 51.1, label : "Q2-2016" },
    { x: new Date(2016, 08, 1), y: 40.4, label: "Q3-2016" },
    { x: new Date(2016, 11, 1), y: 45.5, label: "Q4-2016" },
    { x: new Date(2017, 02, 1), y: 78.3, label: "Q1-2017", indexLabel: "Highest", markerColor: "red" }
]
}]
});
    chart4.render();

}
