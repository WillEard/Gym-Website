
// HIDE Sign-In form && SHOW Sign-Up form
$(document).ready(function(){
    $("#sign-up-button").click(function(){
        $("#sign-in").hide();
        $("#sign-up").show();
    });

    $("#sign-in-button").click(function(){
        $("#sign-up").hide();
        $("#sign-in").show();
    });
});
