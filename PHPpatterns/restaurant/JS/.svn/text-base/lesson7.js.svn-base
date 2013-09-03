$(document).ready(function(){
	(function(){
		
		//puts content on bottom
//		$('article').append('Hello  from javaScript');
		
		
		//puts contents on top
//		$('article').prepend('Hello  from javaScript');
		
//		$('h1').after('Hello from JavaScript');
		
//		$('p').first().before('Hello JavaScript');
		
		
		
		//create tag , and as a second parameter pass an object with parameters for tag
		//minimize html in javascript
		$('<h2></h2>',{
			text: "Hello from JavaScript",
			class: 'myClass',
			
		}).insertBefore('h1');
		
		//moves element from top to bottom
		$('h1').appendTo('article');
		
		//same as 
//		$('p').eq(0).after($('h1'));
		
		//or 
		$('p').eq(0).after(function(){
			return $(this).prev();
		});
		
		
		var co=$('article').find('span.co').each(function(){
			var $this=$(this);
			
			$('<blockquote></blockquote>',{
				class: 'co',
				text: $this.text()
			}).prependTo($this.closest('p'));
		});
		
		
		
	})();
});