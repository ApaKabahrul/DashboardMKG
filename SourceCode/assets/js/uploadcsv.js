$(document).ready(function(){
    load_data()
    $('.satu').removeClass('active');
    $('.dua').removeClass('active');
    $('.tiga').removeClass('active');
    $('.empat').removeClass('active');
    $('.lima').addClass('active');
    $('.enam').removeClass('active');
    $('.tujuh').removeClass('active');
    $('.delapan').removeClass('active');
    function load_data()
    {
        $.ajax({
            url:"admin/load_data",
            method:"POST",

            success:function(data)
            {
                $('#imported_csv_data').html(data);
            }
        });
    }

    $('#import_csv').on('submit', function(event){

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
                alertify.alert('SISTEM DASHBOARD MKG ITERA', 'Upload Berhasil!');
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