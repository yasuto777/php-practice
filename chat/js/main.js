$(function(){
    $('#greet').click(function(){
        if(!$('#user').val() || !$('#message').val()) return;
        $.get('bbs.php',{
            user: $('#user').val(),
            message: $('#message').val(),
            mode: "0" // 書き込み
        },function(data){
            $('#result').html(data);
            //scTarget();
        });
    });
    loadLog();
    loadAll();
});

//Load log
function loadLog(){
    $.get('bbs.php',{
        mode:"1" //Load
    },function(data){
        $('result').html(data);
        //scTarget();
    });
}

//Auto reload log
function logAll(){
    setTimeout(function(){
        loadLog();
        logAll();
    },5000); //5,000ms
}