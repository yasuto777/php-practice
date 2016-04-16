$(function(){
    $('#send').click(function(){
        //alert("Send!!");
        var user = $(':text[name="user"]').val();
        var message = $(':text[name="message"]').val();
        //alert("user:"+user+"\n"+"message:"+message);
    });
});