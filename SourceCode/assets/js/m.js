$(function(){
        $(".form-edit").validationEngine();
        $(".form-add").validationEngine();
        $(".date").datepicker({format: "yyyy-mm-dd"});
        $("#dataTable1").DataTable();
        
        var config = {
            '.chosen-select'           : {max_selected_options: 12},
            '.chosen-select-deselect'  : {allow_single_deselect:true},
            '.chosen-select-no-single' : {disable_search_threshold:10},
            '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
            '.chosen-select-width'     : {width:"95%"}
            }
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
    });   

      