
window.onload = function () {
    $('.satu').removeClass('active');
    $('.dua').addClass('active');
    $('.tiga').removeClass('active');
    $('.empat').removeClass('active');
    $('.lima').removeClass('active');
    $('.enam').removeClass('active');
    $('.tujuh').removeClass('active');
    $('.delapan').removeClass('active');
    var dataPoints = [];
    var chart = new CanvasJS.Chart("Id", {
        animationEnabled: true,
        // theme: "light2",
        zoomEnabled: true,
        title: {
            text: "Suhu"
        },
        axisY: {
            title: "",
            titleFontSize: 24,
            prefix: "C   "
        },
        exportEnabled: true,
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
    $.getJSON("../home/suhu", addData);

    chart.render();

};
