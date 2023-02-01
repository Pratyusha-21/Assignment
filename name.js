$(document).ready(function() {
    var firstname = "";
    var lastname = "";
    $("#firstname").keyup(function() {
        firstname = $("#firstname").val();
        $("#editText").val(firstname + " " + lastname);
    });
    $("#lastname").keyup(function() {
        lastname = $("#lastname").val();
        $("#editText").val(firstname + " " + lastname);
    });
});