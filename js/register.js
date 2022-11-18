$(document).ready(function(){

    //fires when Signup button is clicked
    $("#register").click(function(){
    
        var user = $("#username").val();
        var pass = $("#password").val();
        var email = $("#email").val();
        var gender = $("#gender").val();
        var age = $("#age").val();
        var contact = $("#contact").val();

        //data is sent to php to add to db
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