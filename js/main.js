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
    /* Fixed Header */
    // This function will be executed when the user scrolls the page.
    $(window).scroll(function(e) {
        // Get the position of the location where the scroller starts.
        var scroller_anchor = $("#flashMessageAnchor").offset().top;

        // Check if the user has scrolled and the current position is after the scroller start location and if its not already fixed at the top 
        if ($(this).scrollTop() >= scroller_anchor && $('#scroller').css('position') != 'fixed') 
        {    // Change the CSS of the scroller to hilight it and fix it at the top of the screen.
            $('#flashMessage').css({
                'position': 'fixed',
                'width' : '100%',
                'top': '0px'
            });
            // Changing the height of the scroller anchor to that of scroller so that there is no change in the overall height of the page.
            $('#flashMessageAnchor').css('height', $('#flashMessage').css('height'));
        } 
        else if ($(this).scrollTop() < scroller_anchor && $('#flashMessage').css('position') != 'relative') 
        {    // If the user has scrolled back to the location above the scroller anchor place it back into the content.

            // Change the height of the scroller anchor to 0 and now we will be adding the scroller back to the content.
            $('#flashMessageAnchor').css('height', '0px');

            // Change the CSS and put it back to its original position.
            $('#flashMessage').css({
                'position': 'relative'
            });
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
    /* Hackathon Profile */
    $('.hackinfo').click(function(){
        var speakerName = $(this).attr('title');
        mixpanel.track("View "+speakerName+" Hack Profile");
    });
    /**
     * 
     */
    $('.hackinfo').each(function(){
        var $this = $(this);
        var unaddedLink = $this.attr('href');
        $this.attr('href',unaddedLink+'?wrapper=no');
    });
	$(".hackinfo").fancybox({
        maxWidth	: 900,
        maxHeight	: 700,
        fitToView	: false,
        width		: '80%',
        height		: '80%',
        autoSize	: false,
        closeClick	: false,
        openEffect	: 'none',
        closeEffect	: 'none'
	});
});