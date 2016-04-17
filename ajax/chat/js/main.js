$(function(){
    $('#send').click(function(){
        var user = $(':text[name="user"]').val();
        var message = $(':text[name="message"]').val();
        $.ajax({
            type: 'POST',
            url: "main.php",
            dataType: 'html',
            data: {
                user: user,
                message: message
            },
            success: function(data){
                //送信成功時の処理
                $('.outputField').append(data);
                $('#message').val("");
            }
        });
    });
});