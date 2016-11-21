

$(document).ready(function(){
    showHideVisibilityChangeServiceType();
    showHideVisibilityChangeTenantCategory();
    
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
    
    $('#service_type').on('click', function(event){
        showHideVisibilityChangeServiceType();
    });

    $('#need_address').on('click', function(event){
        showHideVisibilityChangeNeedAddress();
    });
    
    $('#period_payment').on('click', function(event){
        showHideVisibilityChangePeriodPayment();
    });
    
    $('#tenant_category').on('click', function(event){
        showHideVisibilityChangeTenantCategory();
    });
    
    
});

function showHideVisibilityChangeServiceType() {
    var selectServiceVal        = $('select#service_type').val();
    var needAddressGroup        = $('#need_address_group');
    var agreeClientPayGroup     = $('#agree_client_pay_group');
    var periodPaymentGroup      = $('#period_payment_group');
    var monthPaymentSummaGroup   = $('#month_payment_summa_group');
    
    if ((needAddressGroup!==undefined) && ((selectServiceVal==="2") || (selectServiceVal==="3"))) {
        needAddressGroup.fadeIn(1000);
        agreeClientPayGroup.fadeIn(1000);
    }
    else {
        needAddressGroup.fadeOut(1000);
        agreeClientPayGroup.fadeOut(1000);
    };
    if (selectServiceVal==="2") {
        periodPaymentGroup.fadeIn(1000);
        monthPaymentSummaGroup.fadeIn(1000);
    }
    else {
        periodPaymentGroup.fadeOut(1000);
        monthPaymentSummaGroup.fadeOut(1000);
    }
}; // showHideVisibilityChangeServiceType

function showHideVisibilityChangeNeedAddress() {
    var selectNeedAddress     = $('select#need_address').val();
    var agreeClientPayGroup    = $('#agree_client_pay_group');
    var tenantCategoryGroup    = $('#tenant_category_group');
    
    if ((agreeClientPayGroup!==undefined) && (selectNeedAddress==="1")) {
        agreeClientPayGroup.fadeIn(1000);
        tenantCategoryGroup.fadeIn(1000);
    }
    else {
        agreeClientPayGroup.fadeOut(1000);
        tenantCategoryGroup.fadeOut(1000);
    };
    
    showHideVisibilityChangeTenantCategory();
    
}; // showHideVisibilityChangeNeedAddress

function showHideVisibilityChangePeriodPayment() {
    var monthPaymentSummaGroup      = $('#month_payment_summa_group');
    var selectServiceVal            = $('select#service_type').val();
    var selectPeriodPaymentVal      = $('select#period_payment').val();
    if ((monthPaymentSummaGroup!==undefined) && (selectPeriodPaymentVal==="1") && (selectServiceVal==="2")) {
        monthPaymentSummaGroup.fadeIn(1000);
    }
    else {
        monthPaymentSummaGroup.fadeOut(1000);
    };
    
}; // showHideVisibilityChangePeriodPayment

function showHideVisibilityChangeTenantCategory() {
    var selectNeedAddressVal            = $('#need_address').val();
    var selectTenantCategoryVal         = $('#tenant_category').val();
    
    var dateContractGroup        = $('#date_contract_group');
    var sectionTenantCategory1   = $('#section_tenant_category_1');
    var sectionTenantCategory2   = $('#section_tenant_category_2');
    var sectionTenantCategory3   = $('#section_tenant_category_3');
    
    if (selectNeedAddressVal==="1") {
        dateContractGroup.fadeIn(1000);
        sectionTenantCategory1.fadeIn(1000);
        sectionTenantCategory2.fadeIn(1000);
        sectionTenantCategory3.fadeIn(1000);
    }
    else {
        dateContractGroup.fadeOut(1000);
        sectionTenantCategory1.fadeOut(1000);
        sectionTenantCategory2.fadeOut(1000);
        sectionTenantCategory3.fadeOut(1000);
    };
}  // showHideVisibilityChangeTenantCategory

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
