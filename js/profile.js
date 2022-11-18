$(document).ready(function(){
    $("#edit_btn").click(function(){
        // alert("editing" );
        // var user = $("#username").val();
        var user = $("#user").text();
        var pass = $("#password").val();
        var id = $("#primary_key").text();
        var gender = $("#gender").val();
        var age = $("#age").val();
        var contact = $("#contact").val();  

        var data = "user=" + user + "&pass=" + pass + "&id=" + id + "&gender=" + gender + "&age=" + age + "&contact=" + contact;
            $.ajax({
                method: "post",
                url: "php/profile2.php?",
                data : data,
                success: function(data){
                    $("#edit_error").html(data); 
                }
            })
    });
});