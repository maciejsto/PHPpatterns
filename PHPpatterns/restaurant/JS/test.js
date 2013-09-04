$(document).ready(function(){
	
//	var div=config.div;
//	var div2=$('#container');
	//var button=config.button;
	
	var Actors={
			init:function(config){
				this.config=config;
				//this.bindEvents();
			},
			bindEvents:function(event){
				if(event=='click'){
					this.config.button.on(event,this.testButton());
				}else{
					console.log('no or wrong event type');
				}
			},
			testButton:function(){
				var self=Actors;
//				console.log(self.config.div.html());
				
//				return;
				$.ajax({
					url:'index.phtml',
					type:'POST',
					data:self.config.div.serialize(),
					dataType:'json',
					success:function(results){
						console.log('finished retriving div contents');
						console.log(results);
					}
				});
				
				
				
				
//				console.log(this);
				
//					console.log('this is div '+config.div);
//					console.log("button ok ");
					
			},
			hoverOverDivToShowToolTip:function(){
				var self=Actors;
				var div=self.config.div;
				
				self.config.div.mouseenter(function(){
					console.log('mouseover');
				});
				
				self.config.div.mouseleave(function(){
					console.log('mouseleave');
				});
				
			}
			
	
	};
	
	
	//init function
	Actors.init({
		button:$('#night'),
		div:$('#container')
	});
	
	config.button.on('click',function(){
			Actors.bindEvents('click');
		
	});
	config.div.hover(function(){
		Actors.hoverOverDivToShowToolTip();
	});
	
	
	
	
	
	
	
	
	
	
	
	
//	var btn=$('button');
//	btn.on('click',function(config){
//		
//		console.log('this is div '+config.div);
//	});
	
	
});





var config={
	  div:$('#container'),
	  button:$('#night'),
	  input:$('input')
};

