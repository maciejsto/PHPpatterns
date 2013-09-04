$(document).ready(function(){
	
	(function(){
		
		$('html').addClass('js');
		
		var contactForm={
				
				container:$('#contact'),
				
//				slideDown
//				slideUp
//				fadeIn
//				fadeOut
//				fadeToggle
				
				config:{
					effect: 'slideToggle',
					speed:500
				},
				
				
				
				init:function(config){
					
					//target object on the left , on the right anything that will be overwriten
					$.extend(this.config,config);
					$('<button></button>',{
						text:'Contact Me'
					})
					
						.insertAfter('article:first')
						.on('click',this.show)
				},
		
		
		
				/**
				 * this function
				 */
				show:function(){
					var cf=contactForm,
						container=cf.container,
						config=cf.config;
//					contactForm.close.call(contactForm.container);
					if(container.is(':hidden')){
						contactForm.close.call(container);
//						console.log('showing');
						
						//this does not refer to contactForm object
//						contactForm.container.show();
//						contactForm.container[contactForm.config.effect](contactForm.config.speed);
						container[config.effect](config.speed);
					}
					
					
				},
				
				
				/**
				 * close function
				 */
				close:function(){
					 var $this=$(this);	//#contact
					 if($this.find('span.close').length) return ;
					$('<span class =close>X</span>')
				
				//this is contatct div
					.prependTo(this)
					.on('click',function(){
						//this refers to span
//						$this.hide();
						$this[contactForm.config.effect](contactForm.config.speed);
					})
				}
		};
		
		
		
		
		
		
		contactForm.init({
			effect: 'fadeToggle',
			speed:300
		});
		
	})();
	
});
