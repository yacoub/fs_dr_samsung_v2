$(document).ready(function(){
    if(flag == "yes"){
        SubInit("msgTitle", "msgBody");
        $('#overlay').fadeIn('fast',function(){
            $('.box').animate({
                'top':'160px'
            },500);
        });    
    }
});

function SubInit(msgTitle, msgBody){    
    $('.activator-btn').click(function(e){
        e.preventDefault();
        $('#overlay').fadeIn('fast',function(){
            $('.box').animate({
                'top':'160px'
            },500);
        });
    });
    $('.box .boxclose, .box .close-button').click(function(e){
        e.preventDefault();
        $('.box').animate({
            'top':'-400px'
        },500,function(){
            $('#overlay').fadeOut('fast');
        });
    });
    $('.no-button').click(function(e){
        e.preventDefault();
        $('.box').animate({
            'top':'-400px'
        },500,function(){
            $('#overlay').fadeOut('fast');
        });
    });
    $('.yes-button').click(function(e){
        e.preventDefault();
        if(!terminateScript){
            terminateScript = true;
            $('#sub_form').submit();
        }
    });
//$(".box .msg-title").html(msgTitle);
//$(".box .msg-body").html(msgBody);
}