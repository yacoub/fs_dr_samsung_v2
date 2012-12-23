$(document).ready(function(){
    function SubInit(msgTitle, msgBody){    
    $('.activator-btn').click(function(e){
        e.preventDefault();
        $('#overlay').fadeIn('fast',function(){
            $('#box').animate({
                'top':'160px'
            },500);
        });
    });
    };
});