$(document).ready(function(){
    $("#register").click(function(){
        // alert("registering..");
    
        var user = $("#username").val();
        var pass = $("#password").val();
        var email = $("#email").val();
        var gender = $("#gender").val();
        var age = $("#age").val();
        var contact = $("#contact").val();

        var data = "user=" + user + "&pass=" + pass + "&email=" + email +"&gender=" + gender + "&age=" + age + "&contact=" + contact;

        $.ajax({
            method : "post",
            url : "php/register.php?",
            data : data,
            success : function(data)
            {
                $("#register_output").html(data);
            }
        });
    });
});