    /*
    * 文本框闪烁提示
    */

    function normal(id,times)
    {
        $('#' + id).css('border','1px solid lightgray');
        if(times<0)
        {
            $('#' + id).css({'border':'1px solid darkred'}).focus();
            return;
        }
        times=times-1;
        setTimeout(function(){error(id,times);},100);
    }
    function error(id,times)
    {
        $('#' + id).css('border','1px solid darkred');
        times=times-1;
        setTimeout(function(){normal(id,times);},150);
    }