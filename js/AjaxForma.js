$(document).ready(function(){
    $('#submit').click(function(){
        var email = $('#email').val();
        var message = $('#message').val();
        var emailReg=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(email === '')
        {
            $('#error_message').html("Morate popuniti polje za e-mail adresu");
        }
        else if(!emailReg.test(email)){
            $('#error_message').html("E-mail adresa nije u dozvoljenom formatu");
        }
        else
        {
            $('#error_message').html('');
            $.ajax({
                url:"mail.php",
                method:"POST",
                data:{email:email, message:message},
                success:function(data){
                    $("form").trigger("reset");
                    $('#success_message').fadeIn().html(data);
                    setTimeout(function(){
                        $('#success_message').fadeOut("Slow");
                    }, 3000);
                }
            });
        }
    });
});

