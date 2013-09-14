function showSearch() {
    $('#search').fadeIn(250);
    $('#search input').focus();
}
function hideSearch() {
    $('#search').fadeOut(250);
}

$(document).ready(function() {
	
    $('.social_share').click(function() {
	    $(this).parent().find('.third_party').fadeToggle(250);
	    return false;
	});
	
	$('footer .more').click(function() {
	    $(this).toggleClass('close');
	    if ($('#browse').is(':visible')) {
	        $(this).next().slideUp(250);
	    }
	    else {
            $(this).next().show();
            $('html, body').animate({ 
                scrollTop: $(document).height()-$(window).height()
            }, 250);
	    }
	    return false;
	});
	
	$('#search_link').click(function() {
	    showSearch();
	    return false;
	});
	
	$('#search').click(function(e) {
	    if (e.target.nodeName != 'INPUT') {
	        hideSearch();
	    }
	});
	
	$(document).bind('keydown', 'f', function() {
	    if (!$('#search').is(':visible')) {
	        showSearch();
	    }
	    return false;
	});
	
  new peep.Peep('.share', {
    theme: 'none'
  });
  
});