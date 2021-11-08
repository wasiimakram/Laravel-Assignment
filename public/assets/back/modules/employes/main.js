
$(document).ready(function() {
        
        $(document).on('click', '#edit_record', function(e) {
            e.preventDefault();
            var get_id = $(this).attr('data-id');
            var url = route('property_features.edit',get_id)
            $.get(url, function(data) {
                $('#update_form_id').val(data.id);
                $('#u_title').val(data.title);
                $('#updateModal').modal('show');
            });
        }); // edit_record Event End

        $(document).on('change','.changeModuleSts',function(e){
            e.preventDefault();
            var id= $(this).attr('data-id');
            var data={id:id,model:'App\\Models\\Back\\Employe',column_name:'active'}
            change_module_sts_js(data);
        });   // Change Module Status End
        $(document).on('click', '#delete_record', function(e) {
            e.preventDefault();
            var get_id = $(this).attr('data-id');
            var get_tr = $(this).closest('tr');
            var url= adminUrl+'employes/'+get_id;
            $.confirm({
                title: 'Alert!'
                , content: 'Do you want delete this record?'
                , type: 'red'
                , typeAnimated: true
                , backgroundDismiss: true
                , buttons: {
                    tryAgain: {
                        text: 'Yes'
                        , btnClass: 'btn-red'
                        , action: function() {
                            delete_module_record(get_id, get_tr,url); // This method is available in Footer
                        }
                    }
                    , close: {
                        text: 'No'
                        , btnClass: 'btn-blue'
                        , action: function() {}
                    }
                , }
            });
        }); // delete_record Event End

    }); // Document Ready Ends here


