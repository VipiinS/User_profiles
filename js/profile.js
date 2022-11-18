$(document).ready(function(){
    $("#edit_btn").click(function(){
        // alert("editing" );
        var user = $("#user").text();
        var pass = $("#password").val();
        var id = $("#primary_key").text();
        var gender = $("#gender").val();
        var age = $("#age").val();
        var contact = $("#contact").val();  

        //when edited,changing the old local storage username, password and set it to new username and password
        localStorage.removeItem('localUser');
        localStorage.removeItem('localPwd');

        localStorage.setItem('localUser',user);
        localStorage.setItem('localPwd',pass);

        //sending the data to php to insert into the db
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


    //when logout button is pressed,we clear the local storage
    $("#logout_btn").click(function(){

        //removing login session information
        localStorage.removeItem('localUser');
        localStorage.removeItem('localPwd');

        //moving the window to index page
        window.location.replace("index.html")
    })
});