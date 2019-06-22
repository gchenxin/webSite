
/*=============================================
=            Third party plugin list            =
=============================================

01. Send Verify Code

/*=====  End of Third party plugin list  ======*/



/*=============================================
=            01. Send Verify Code            =
=============================================*/

function timeCutDown(sendObj){
    /**
     * 发送验证码
     */
    var timeLimit = 60;
    var timer = setInterval(function(){
        sendObj.off('click');
        sendObj.val(timeLimit);
        timeLimit--;
        if(timeLimit<0){
            sendObj.val('发送验证码');
            clearInterval(timer);
            sendObj.on('click',function () {
                timeCutDown(sendObj);
            });
        }
    },1000);
}

$('.sendVerifyCode').on('click',function(){
    timeCutDown($(this));
});

$('.useVerifyLogin').click(function(){
    var hide = $('.notShow');
    var show = $('.show');
    hide.removeClass('notShow').addClass('show');
    show.removeClass('show').addClass('notShow');
    var labels = show.attr('data-label');
    $(this).text(labels);
});

/*=====  End of 01. Mean Menu  ======*/



