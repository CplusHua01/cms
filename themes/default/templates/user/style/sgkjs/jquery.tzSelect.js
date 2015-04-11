(function($){
	
	$.fn.tzSelect = function(options){
		options = $.extend({
			render : function(option){
				return $('<li>',{
					html : option.text()
				});
			},
			className : ''
		},options);
		
		return this.each(function(){
			
			// The "this" points to the current select element:
			
			var select = $(this);
		
			var selectBoxContainer = $('<div>',{
				width		: select.outerWidth(),
				className	: 'tzSelect',
				html		: '<div class="selectBox"></div>'
			});
		
			var dropDown = $('<ul>',{className:'dropDown'});
			var selectBox = selectBoxContainer.find('.selectBox');
			
			// Looping though the options of the original select element

			if(options.className){
				dropDown.addClass(options.className);
			}
			
			select.find('option').each(function(i){
				var option = $(this);
		
				if(i==select.attr('selectedIndex')){
					selectBox.html(option.text());
				}
				
				// As of jQuery 1.4.3 we can access HTML5 
				// data attributes with the data() method.
				
				if(option.data('skip')){
					return true;
				}
				
				// Creating a dropdown item according to the
				// data-icon and data-html-text HTML5 attributes:
				
				var li = options.render(option);

				li.click(function(){
					
					selectBox.html(option.text());
					dropDown.trigger('hide');
					
					// When a click occurs, we are also reflecting
					// the change on the original select element:
					select.val(option.val());
					
					return false;
				});
		
				dropDown.append(li);
			});
			
			selectBoxContainer.append(dropDown.hide());
			select.hide().after(selectBoxContainer);
			
			// Binding custom show and hide events on the dropDown:
			
			dropDown.bind('show',function(){
				
				if(dropDown.is(':animated')){
					return false;
				}
				
				selectBox.addClass('expanded');
				dropDown.slideDown();
				
			}).bind('hide',function(){
				
				if(dropDown.is(':animated')){
					return false;
				}
				
				selectBox.removeClass('expanded');
				dropDown.slideUp();
				
			}).bind('toggle',function(){
				if(selectBox.hasClass('expanded')){
					dropDown.trigger('hide');
				}
				else dropDown.trigger('show');
			});
			
			selectBox.click(function(){
				dropDown.trigger('toggle');
				return false;
			});
		
			// If we click anywhere on the page, while the
			// dropdown is shown, it is going to be hidden:
			
			$(document).click(function(){
				dropDown.trigger('hide');
			});

		});
	}
	
})(jQuery);