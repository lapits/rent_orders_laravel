
$(document).ready(function(){
    $('#sendRentRequest').click(function(event){
        event.preventDefault();

        var dataString  = "";
        var fields = $(":input").serializeArray();
        $.each(fields, function(i, field) {
            if (dataString==="") {
                dataString   = dataString+""+field.name+"="+field.value;
            } 
            else {
                dataString   = dataString+"&"+field.name+"="+field.value;
            };
        }
        );

        $.ajax({
            type: "POST",
            url: "sendRentRequest",
            data: dataString,
            success: function(data){
                console.log(data);
            },
            error: function(jqXHR, textStatus){
                console.log(textStatus );
            }
        });
    });
});

$.ajaxSetup({  
    headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
