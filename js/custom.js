



function sendAjaxMessage(blockSelector, method, modalInner = false){
    const form = $(blockSelector + " form");
    $(blockSelector +' .sendmessage').hide().text('');
    $(blockSelector +' .errormessage').hide().text('');

    let str = form.serialize();
    str += '&action=' + method;

    $.ajax({
        type: 'POST',
        url: adminAjaxObj.ajaxUrl,
        dataType: 'json',
        data: str,
        success: function(data) {
            if(data.success == true) {
            	if(modalInner){
            		$(blockSelector + ' form .modalInner').hide();
            	}
            	else {
            		form.hide();
            	}
                
                $(blockSelector +' .sendmessage').fadeIn().html(data.output);
            }
            else {
                  
                $(blockSelector +' .errormessage').fadeIn().html(data.output);                        
            }
        }
    });
  
}

$(document).ready(function()
{

  	$('body').on('keyup', '#ysm-smart-search', function() {


		$(".smart-search-results").hide();
		$(".smart-search-suggestions").html("");
		const phrase = $(this).val();
		
		if (phrase.length > 1)
		{
			$.ajax({
			  type: "POST",
			  url: adminAjaxObj.ajaxUrl,
			  data: {phrase, action: 'search_products'},
			  success: function(data)
			  {
				if (data)
				{
					$(".smart-search-results").show();
					$(".smart-search-suggestions").html(data);

					$('html').click(function() {
						$(".smart-search-results").hide();
						$(".smart-search-suggestions").html("");
					});
					$('.smart-search-results').click(function(event){
					  event.stopPropagation();
					});
				}
				
			  }
			});
		}
		
	});

	$('#orderRing form').submit(function(e) {
	  	e.preventDefault();
	  	sendAjaxMessage('#orderRing', 'order_apply', true);
	    
	});

	$('#orderApply form').submit(function(e) {
	  	e.preventDefault();
	  	sendAjaxMessage('#orderApply', 'order_apply', true);
	    
	});

	$('#orderMessage form').submit(function(e) {
	  	e.preventDefault();
	  	sendAjaxMessage('#orderMessage', 'order_message');
	    
	});


	

  
});



