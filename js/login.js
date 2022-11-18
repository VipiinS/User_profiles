$(document).ready(function(){

    //check if the login session is in localStorage
    if(localStorage.getItem('localUser') === null){
        $('#login_btn').click(function(){
            
            // if login session is not in localStorage
            //we get input from the user
            var user = $("#username").val();
            var pass = $("#password").val();
    
            localStorage.setItem('localUser',user);
            localStorage.setItem('localPwd',pass);

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
    }
    else{
        //if the login session is available in localStorage,use it to login automatically
        //by assigning it to the user and pass variables
        var user = localStorage.getItem('localUser');
        var pass = localStorage.getItem('localPwd');
        console.log(user);
        console.log(pass);
        var data = "user=" + user + "&pass=" + pass;
        $.ajax({
            method: "post",
            url: "php/login.php?",
            data : data,
            success: function(data){
                $("#login_error").html(data); 
            }
        })
    }

    
});