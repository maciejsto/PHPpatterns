$(document).ready(function(){
	//we shouldnd use bind 
	// click refers to on 
	//calling bind still calls on
	
	//live implements event delegation
	//it will attach one even handler to the document 
	
	//in my case live doesn work ?
	
	//delegate undelegate works
	//first set context then invoke delegate 
	$('div.container').delegate('h2','click',function(){	//this will create even handler to each element of type h2
		console.log('clicked');
//		var cloned=$(this).clone();
		$(this).clone().appendTo('.container'); 	//clone(true) ->clone element with event handlers
														//clone(false)-> clone element without event handler
//		console.log(cloned);
	});
	
	
});
