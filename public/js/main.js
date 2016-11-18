
$(document).ready(function(){
    $('#sendRentRequest').click(function(){
       var fname    = "12345";
       var lname    = "refdfcvfgtt";
       $.post('sendRentRequest', {firstname:fname, lastname:lname}, function(data){
           console.log(data);
       });
    });
});

$.ajaxSetup({  
    headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
