$(document).ready(function(){
	
	(function(){
		
		var dd=$('dd');
//		dd.hide();
		dd.addClass('.hide');
		dd.filter(':nth-child(n+4)').addClass('hide');
		
		
		//anonymus callback function
		$('dl').on('mouseenter','dt',function(){
			$(this)
				.next()
					.slideDown(300)
					.siblings('dd')
//						.hide();
						.slideUp(300);
//			$(this).next().show();
		});
			
		
		
	})();
	
	
	
});