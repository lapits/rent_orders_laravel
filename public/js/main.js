
$(document).ready(function(){
    $('#sendRentRequest').on('click', function(event){
        event.preventDefault();
        var sendMsgButton   = $("#sendRentRequest");
        sendMsgButton.attr('disabled',true);
        sendMsgButton.text("Идет отправка...");
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
            success: function(msg){
                console.log(msg);
                processOk();
            },
            error: function(jqXHR, textStatus){
                console.log(textStatus );
                processFail();
            }
        });
        sendMsgButton.removeAttr('disabled');
        sendMsgButton.text("Отправить");
        
    });
});

function processOk(){
$('#element_send_ok').bPopup({
    appendTo: 'form'
    , zIndex: 2
    , autoClose: 3000
    });
};

function processFail(){
$('#element_send_fail').bPopup({
    appendTo: 'form'
    , zIndex: 2
    });
};

$.ajaxSetup({  
    headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
