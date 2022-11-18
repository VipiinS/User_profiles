$(document).ready(function(){
    $('#login_btn').click(function(){
        // alert("logging in");

        var user = $("#username").val();
        var pass = $("#password").val();

        var data = "user=" + user + "&pass=" + pass;
        $.ajax({
            method: "post",
            url: "php/login.php?",
            data : data,
            success: function(data){
                $("#login_error").html(data); 
            }
        })
    });
});