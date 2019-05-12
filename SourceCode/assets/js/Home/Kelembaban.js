
window.onload = function () {
    //Cara membuat list group yang ada di v_sidebar active sesuai dengan apa yang di pilih.
    $('.satu').removeClass('active');
    $('.dua').removeClass('active');
    $('.tiga').addClass('active');
    $('.empat').removeClass('active');
    $('.lima').removeClass('active');
    $('.enam').removeClass('active');
    $('.tujuh').removeClass('active');
    $('.delapan').removeClass('active');
    $('.sembilan').removeClass('active');
    //deklarasi datapoints untuk menampung data
    var dataPoints = [];
    //Library Chart Js diaktifkan berdasarkan 'Id' pada .Chart("Id" yang di ambil di halaman tampilannya
    var chart = new CanvasJS.Chart("Id", {
        animationEnabled: true,
        // theme: "light2",
        zoomEnabled: true,
        title: {
            text: "Kelembaban Udara"
        },
        axisY: {
            title: "",
            titleFontSize: 24,
            suffix: " RH"
        },
        exportEnabled: true,
        data: [{
            type: "line",
            yValueFormatString: "",
            dataPoints: dataPoints
        }]});
    //Pengolahan data yang di dapat dari json dibawah
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
    //Pengambilan data sensor dan dimasukkan kedalam fungsi addData
    $.getJSON("../home/kelembaban", addData);
    //digunakan untuk render chart.
    chart.render();

};
