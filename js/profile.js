$(document).ready(function(){
    $("#edit_btn").click(function(){
        // alert("editing" );

        var user = $("#username").val();
        var pass = $("#password").val();

        var data = "user=" + user + "&pass=" + pass;
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