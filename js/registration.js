$(document).ready(function () {
    toggleFields(); // call this first so we start out with the correct visibility depending on the selected form values
    // this will call our toggleFields function every time the selection value of our other field changes
    $("#branch").change(function () {
        toggleFields();
    });

});
// this toggles the visibility of other server
function toggleFields() {
    if ($("#branch").val() === "other")
        $("#otherType").show();
    else
        $("#otherType").hide();
}

$(document).ready(function() {
$('#password').keyup(function() {
$('#result').html(checkStrength($('#password').val()))
})});
