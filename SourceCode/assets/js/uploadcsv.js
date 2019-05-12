$(document).ready(function(){
    //Cara membuat list group yang ada di v_sidebar active sesuai dengan apa yang di pilih.
    $('.satu').removeClass('active');
    $('.dua').removeClass('active');
    $('.tiga').removeClass('active');
    $('.empat').removeClass('active');
    $('.lima').addClass('active');
    $('.enam').removeClass('active');
    $('.tujuh').removeClass('active');
    $('.delapan').removeClass('active');
    $('.sembilan').removeClass('active');
    //Fungsi yang aktif ketika form dengan id import_csv mengirimkan data dengan type sumbit di tekan.
    $('#import_csv').on('submit', function(){

        event.preventDefault();
        $.ajax({
            //url untuk memanggil dan menerima output dari fungsi import pada controller admin
            url:"import",
            method:"POST",
            data:new FormData(this),
            contentType:false,
            cache:false,
            processData:false,
            beforeSend:function(data){
                $('#import_csv_btn').html('Importing...');
            },
            success:function(data)
            {
                //Menerima hasil dari fungsi import
                // Jika Success maka akan tampil upload berhasil dan gagal akan tampil upload gagal
                if(data == '"success"'){
                    //keperluan testing
                    alertify.alert('SISTEM DASHBOARD MKG ITERA', 'Upload Berhasil');
                    // alert("Upload Berhasil");
                }else if(data == '"error"'){
                    // keperluan testing
                    alertify.alert('SISTEM DASHBOARD MKG ITERA','Upload Gagal');
                    // alert("Upload Gagal");
                }
                $('#import_csv')[0].reset();

            },
            error: function () {
                //Pesan yang digunakan jika 'url: import' diatas tidak dapat ditemukan
                alertify.error('Function Tidak ditemukan');
            }

        })
    });

});