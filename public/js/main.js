
$(document).ready(function(){
    $('#sendRentRequest').click(function(){
       alert($(this).text());
    });
});

$.ajaxSetup({  
    headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
