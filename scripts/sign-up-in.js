
// HIDE Sign-In form && SHOW Sign-Up form



$(document).ready(function(){
    
    $( "#sign-up" ).hide();

    $("#sign-up-button").click(function(){
        $("#sign-in").hide()
        $("#sign-up").show();
        return false;
    });

    $("#sign-in-button").click(function(){
        $("#sign-up").hide();
        $("#sign-in").show();
        return false;
    });

    if($( '#sign-in' ).is(":visible"))
    {
        $( '#sign-up' ).fadeOut();
    } 
    else
    {
        $( '#sign-in' ).fadeIn();
    }
    
    
});

