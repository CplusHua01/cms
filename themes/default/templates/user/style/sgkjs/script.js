$(document).ready(function(){
	
	$('select.makeMeFancy').tzSelect({
		render : function(option){
			return $('<li>',{
				html:	'<img src="'+option.data('icon')+'" /><span>'+
						option.data('html-text')+'</span>'
			});
		},
		className : 'hasDetails'
	});
	
	// Calling the default version of the dropdown
	$('select.regularSelect').tzSelect();

});