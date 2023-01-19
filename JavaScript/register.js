$(this).ready(function(){

    $('#submit').click(function(){
        var dataSend = $('#register-form').serialize();
        $.ajax({
            type: 'POST',
            url: 'write.php',
            data: dataSend,
            dataType: 'html',
            success: function(result){
                $('#register-form').html(result);
                $('#submit').hide();
            }
        })
    });
})