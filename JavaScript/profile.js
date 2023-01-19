$(function(){
    $('#btn-signout').on('click', function(){
        $.ajax({
            method:'POST',
            url:'postLogout.php'
        }).done(function(){
            window.location.href = 'index.php';
        });
    });
    $('#btnLogout').on('click', function(){
        $.ajax({
            method:'POST',
            url:'postLogout.php'
        }).done(function(){
            window.location.href = 'index.php';
        });
    });
    $('#btnChgPass').on('click', function(){
        window.location.href = 'changePass.php';
    });
    $('#btnEditProf').on('click', function(){
        window.location.href = 'editProfile.php';
    });
})