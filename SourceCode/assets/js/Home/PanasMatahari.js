
window.onload = function () {
    $('.satu').addClass('active');
    $('.dua').removeClass('active');
    $('.tiga').removeClass('active');
    $('.empat').removeClass('active');
    $('.lima').removeClass('active');
    $('.enam').removeClass('active');
    $('.tujuh').removeClass('active');
    $('.delapan').removeClass('active');
    var dataPoints = [];
    var chart = new CanvasJS.Chart("PanasMatahari", {
        animationEnabled: true,
        // theme: "light2",
        zoomEnabled: true,
        title: {
            text: "Panas Matahari"
        },
        exportEnabled: true,
        axisY: {
            title: "",
            titleFontSize: 24,
            prefix: "W/m2   "
        },
        data: [{
            type: "line",
            yValueFormatString: "",
            dataPoints: dataPoints
        }]});
//

    function addData(data) {
        var dps = data.item;
        console.log(dps.length);
        for (var i = 0; i < dps.length; i++) {
            dataPoints.push({
                x: new Date(dps[i][0]),
                y: dps[i][1]
            });
        }
        chart.render();
    }
    $.getJSON("Home/panasmatahari", addData);

    chart.render();

};
