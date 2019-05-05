$(document).ready(function(){

    $('.satu').removeClass('active');
    $('.dua').removeClass('active');
    $('.tiga').removeClass('active');
    $('.empat').removeClass('active');
    $('.lima').addClass('active');
    $('.enam').removeClass('active');
    $('.tujuh').removeClass('active');
    $('.delapan').removeClass('active');


    $('#import_csv').on('submit', function(){

        event.preventDefault();
        $.ajax({
            url:"admin/import",
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
                $('#import_csv_btn').attr('disabled', false);
                $('#import_csv_btn').html('Import Done');

            },
            error: function () {
                alertify.error('upload gagal');
            }

        })
    });

});