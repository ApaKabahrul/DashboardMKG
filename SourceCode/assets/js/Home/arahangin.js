
window.onload = function () {
    //Cara membuat list group yang ada di v_sidebar active sesuai dengan apa yang di pilih.
    $('.satu').removeClass('active');
    $('.dua').removeClass('active');
    $('.tiga').removeClass('active');
    $('.empat').addClass('active');
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
            text: "Arah Angin"
        },
        axisY: {
            title: "",
            titleFontSize: 24,
            suffix: " °"
        },
        exportEnabled: true,
        data: [{
            toolTipContent: "Arah Angin<br/>{x} : {y}&#176 Arah : {label}",
            type: "line",
            yValueFormatString: "",
            dataPoints: dataPoints
        }]});
    //Pengolahan data yang di dapat dari json dibawah
    function addData(data) {
        var dps = data.item;
        for (var i = 0; i < dps.length; i++) {
            //Memasukan value get kedalam array dataPoints
            dataPoints.push({
                x: new Date(dps[i][0]),
                y: dps[i][1],
                label : direction(dps[i][1])
            });
        }
        chart.render();
    }
    //Pengambilan data sensor dan dimasukkan kedalam fungsi addData
    $.getJSON("../home/arahangin", addData);
    //Fungsi untuk melakukan declaration arah mata angin dari data yang ada
    function direction(x){
        var a= parseInt(x);
        if ((a>=0 && a<45)||a==360){
            return "Utara";
        }else if(a>=45&&a<90){
            return "Timur Laut";
        }else if(a>=90&&a<135){
            return "Timur";
        }else if(a>=135&&a<180){
            return "Tenggara";
        }else if(a>=180&&a<225){
            return "Selatan";
        }else if(a>=225&&a<270){
            return "Barat Daya";
        }else if(a>=270&&a<315){
            return "Barat";
        }else if(a>=315&&a<360){
            return "Barat Laut";
        }
    }
    //digunakan untuk render chart.
    chart.render();

};
