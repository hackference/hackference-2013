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
    /**
     * MixPanel Code
     */
    /* Speaker Profile */
    $('.speaker-profile').click(function(){
        var speakerName = $(this).html();
        mixpanel.track("View "+speakerName+" Profile");
    });
});