
    $(document).ready(function() {
        // $('#record-table').DataTable();

        // Store New Record
        $(document).on('submit','#addCompanyForm',function(e){
            e.preventDefault();
            var btnText=$(".subm").html(); 
            var url = $(this).attr('action');
            $(".subm").attr('disabled',true);
            $(".subm").html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Processing');
            
            $.ajax({
                type: "POST",
                timeout: 200000,
                url: url,
                //data: parameters,
                data: new FormData(document.getElementById("addCompanyForm")),
                contentType:false,
                cache: false,             // To unable request pages to be cached
                processData:false, 
                beforeSend: function(){},
                success: function(data){
                    $(".subm").attr('disabled',false);
                    $(".subm").html(btnText);
                    if(data.status=="success"){
                        swal('Success!',data.message,'success');
                        window.setTimeout(function(){location.reload()},1000)
                    }    
                },
                error: function(xhr, textStatus, errorThrown) {
                    $(".subm").attr('disabled',false);
                    $(".subm").html(btnText);
                    var html='';
                    var response = JSON.parse(xhr.responseText); 
                    $.each(response.errors, function(key, value) {
                        var str = '{"' + key + '":"'+value[0]+'"}';
                        html += value[0]+" \r\n";
                    });
                    swal('Error!',html,'error');
                }

                });
        
        });   // Jquery Event End

        $(document).on('click', '#edit_record', function(e) {
            e.preventDefault();
            var get_id = $(this).attr('data-id');
            var url = adminUrl+'companies/'+get_id+'/edit';
            $.get(url, function(data) {
                $('#update_form_id').val(data.id);
                $('#u_name').val(data.name);
                $('#u_email').val(data.email);
                $('#u_website').val(data.website);
                var url = baseUrl+'uploads/property/'+data.image_path;
                if(!data.image_path == null || !data.image_path == "")
                {
                    var image = '<div class="image_simple"><img src="'+url+'"><div class="top_links"><a href="javascript:;" id="ajaxRemoveImage" data-id="'+data.id+'"><i class="fa fa-trash"></i> </a></div></div>';
                    $('.oldThumb').show();
                    $('.ajaxImageShowDiv').html('');
                    $('.ajaxImageShowDiv').append(image);
                }
                $('#updateModal').modal('show');
            });
        }); // edit_record Event End

        $(document).on('click','#ajaxRemoveImage',function(e){
            e.preventDefault();
            if (confirm('Are you sure to delete this data?')) {
                var url = route('ajaxRemoveModuleImg');
                var get_id=$(this).attr('data-id');
                var data={id:get_id,model:'App\\Models\\Back\\Property\\PopularPlace',column_name:'image_path',
                            folder:'property',whereColumn:'id'}
                $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
                $.post(url,data)
                .done(function( data ) {
                if(data.status == 'success'){
                    $('.oldThumb').fadeOut('slow');
                    make_toaster_alert('success','Image Deleted Successfully!');
                }
                else{
                    alert('Something Went Wrong');
                }
                });
            }
        });   // ajaxRemoveImage Event End

        $(document).on('click', '#delete_record', function(e) {
            e.preventDefault();
            var get_id = $(this).attr('data-id');
            var get_tr = $(this).closest('tr');
            // var url= route('companies.destroy',get_id);
            var url= adminUrl+'companies/'+get_id;  
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
    }); // document ends here


