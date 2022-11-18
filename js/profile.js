$(document).ready(function(){
    $("#edit_btn").click(function(){
        // alert("editing" );
        var user = $("#user").text();
        var pass = $("#password").val();
        var id = $("#primary_key").text();
        var gender = $("#gender").val();
        var age = $("#age").val();
        var contact = $("#contact").val();  

        //when edited,changing th elocal storage username and password also
        localStorage.removeItem('localUser');
        localStorage.removeItem('localPwd');

        localStorage.setItem('localUser',user);
        localStorage.setItem('localPwd',pass);


        var data = "user=" + user + "&pass=" + pass + "&id=" + id + "&gender=" + gender + "&age=" + age + "&contact=" + contact;
            $.ajax({
                method: "post",
                url: "php/profile.php?",
                data : data,
                success: function(data){
                    $("#edit_error").html(data); 
                }
            })
    });



    $("#logout_btn").click(function(){
        // alert("out");

        //removing login session information
        localStorage.removeItem('localUser');
        localStorage.removeItem('localPwd');

        window.location.replace("index.html")
    })
});