/**
 * Execute when jQuery has loaded
 */
$(document).ready(function(){
    /* Menu Code */
    $('.openClose').click(function(){
        if($('ul.topNav').css('display')=='none')
        {
            $('ul.topNav').slideDown();
        }
        else
        {
            $('ul.topNav').slideUp();
        }
    });
});