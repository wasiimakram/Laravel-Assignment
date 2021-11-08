$(document).ready(function () {
    $('.sidebar-menu').tree();
    // Make Slug of Any Input
    
    $( ".mainString" ).change(function() {
          var str = $('.mainString').val();
          
          $('.slugString').val(222);
          str = str.replace(/^\s+|\s+$/g, ''); // trim
          str = str.toLowerCase();
          // remove accents, swap ñ for n, etc
          var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
          var to   = "aaaaaeeeeeiiiiooooouuuunc------";
          for (var i=0, l=from.length ; i<l ; i++) {
            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
          }
          str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
            .replace(/\s+/g, '-') // collapse whitespace and replace by -
            .replace(/-+/g, '-'); // collapse dashes
          
            $('.slugString').val(str);
    });// End Make Slug of Any Input

});

  $(document).ajaxStart(function() { Pace.restart(); });	
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    $(".select2-clickAdd").select2({
      tags: true,
      tokenSeparators: [',', ' ']
    })
  });
  $(document).ajaxStart(function () {
    Pace.restart()
  })
  $('.ajax').click(function () {
    $.ajax({
      url: '#', success: function (result) {
        $('.ajax-content').html('<hr>Ajax Request Completed !')
      }
    })
  });

// Toaster Plugin Function 
function make_toaster_alert(type,message){
    if(type == 'success'){
        $.toast({
          heading: 'Success',
          text: message,
          showHideTransition: 'slide',
          icon: 'success'
        })
    }else if(type == 'error'){
        $.toast({
          heading: 'Error',
          text: message,
          showHideTransition: 'slide',
          icon: 'error'
        });
    }else if(type == 'info'){
      $.toast({
          heading: 'Information',
          text: message,
          showHideTransition: 'slide',
          icon: 'info'
      })
    }
}

// Change any Module Status Function
function change_module_sts_js(data){
    console.log(data);
    // var url=route('changeModuleSts');
    var url=adminUrl+'changeModuleSts';
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $.post(url,data)
      .done(function( data ) {
          console.log(data);
          if(data.status == 'success'){
            // do nothing
            make_toaster_alert('success','Status Updated Successfully!')
          }else{
            alert('Something Went Wrong');
          }
      })
}
// Change Any Module Record Function
function delete_module_record(id, tr,url) {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $.ajax({
         url: url,
         type: "DELETE", 
         success: function(data) {
          if (data.status == "success") {
            tr.fadeOut('slow');
            make_toaster_alert('success',data.message);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
              alert('Error adding / update data');
              console.log(jqXHR);
              console.log(textStatus);
              console.log(errorThrown);
          }
      });
  }