$(this).ready(function(){

    $('#submit').click(function(){
        var dataSend = $('#admlogin-form').serialize();
        $.ajax({
            type: 'POST',
            url: 'postLogAdmin.php',
            data: dataSend,
            dataType: 'html',
            success: function(result){
                $('#admlogin-form').html(result);
                $('#submit').hide();
            }
        })
    });
    $('#back').click(function(){
        window.location.href='home.php';})
})