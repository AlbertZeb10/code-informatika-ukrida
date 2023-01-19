$(this).ready(function(){

    $('#submit').click(function(){
        var dataSend = $('#login-form').serialize();
        $.ajax({
            type: 'POST',
            url: 'postLogin.php',
            data: dataSend,
            dataType: 'html',
            success: function(result){
                $('#login-form').html(result);
                $('#submit').hide();
            }
        })
    });
    $('#back').click(function(){
        window.location.href='index.php';})
})