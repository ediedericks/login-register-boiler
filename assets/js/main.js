
// LOGIN & REGISTER TOGGLE
// TOGGLE REGISTER
$('#register-link').click(function(){
    $('#login-div').hide();
    $('#register-div').show();
});
// VALIDATE EMAIL FUNCTION
function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}





// TOGGLE LOGIN
$('#login-link').click(function(){
    $('#register-div').hide();
    $('#login-div').show();
});



// LOGIN & REGISTER BUTTONS CLICKED
// LOGIN
$('#login-btn').click(function(){
    var email = $('#login-email').val();
    var password = $('#login-password').val();


    if(isEmail(email) && password != ''){
        $.ajax({
            url: 'functions/security.php',
            dataType: 'text',
            type: 'post',
            // contentType: 'application/x-www-form-urlencoded',
            data: { email: email, password: password, login: 1},
            success: function( data, textStatus, jQxhr ){
                console.log(data);

                if(data == 'true'){ 
                    window.location = 'index.php';
                } else {
                    $('#login-error').show();
                    setTimeout(function(){ $('#login-error').hide(); }, 3000);
                };
                
            },
            error: function( jqXhr, textStatus, errorThrown ){
                console.log( errorThrown );
            }
        });
    } else {
        $('#login-error').show();
        setTimeout(function(){ $('#login-error').hide(); }, 3000);
    }

});

// REGISTER
$('#register-btn').click(function(){

    var email = $('#register-email').val();
    var password = $('#reg-password').val();
    var confirmPassword = $('#reg-password-confirm').val();

    if(isEmail(email) && (password != '' && confirmPassword != '') && (password == confirmPassword)){
        $.ajax({
            url: 'functions/security.php',
            dataType: 'text',
            type: 'post',
            // contentType: 'application/x-www-form-urlencoded',
            data: { email: email, password: password, confirmPassword: confirmPassword, login: 0},
            success: function( data, textStatus, jQxhr ){
                console.log(data);
                if(data == 'true'){ 
                    
                    $('#login-div').show();
                    $('#register-div').hide();
                    $('#reg-success').show();
                    setTimeout(function(){ $('#reg-success').hide(); }, 3000);
                };
                
            },
            error: function( jqXhr, textStatus, errorThrown ){
                // console.log( errorThrown );
            }
        });
    } else {
        $('#reg-error').show();
        setTimeout(function(){ $('#reg-error').hide(); }, 3000);
    };

    
    

});
