$(function(){
    $('#btn').click(function(){
        //クリック時にしたい処理
        var timestamp = $.now();
        //alert(timestamp);
        $.get('./time.php',{
            val: timestamp
        },function(data){
            $("#output").html(data);
        });
    });
});