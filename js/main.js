$(document).ready(function(){
    var adminref = $('#adminApproval').val();
    var ref = $('#maintanaceCheck').val();
    adminApproveal(adminref);
    maintananceChange(ref);
});

function adminApproveal(data){
    if(data == 'yes'){
        $('#admin-approval-label').show();       
        $('#admin-approval-form').show();       
    } else {
        $('#admin-approval-label').hide();       
        $('#admin-approval-form').hide();
    }
}
function maintananceChange(data){
    if(data == 'no'){
        $('.maintanance').show();
    } else {
        $('.maintanance').hide();
    }
}