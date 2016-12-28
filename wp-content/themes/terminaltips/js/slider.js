$(window).load(function() {
	$(".anim-slider").animateSlider(
	 	{
	 		autoplay	:false,
	 		interval	:4800,
	 		animations 	: 
			{
				0	: 	//Slide No1
				{
					
 					".two":
 					{
 						show 	  : "fadeIn",
						hide 	  : "slideOutLeft"
 					},
 					".three" 	:
 					{
						show   	  : "fadeInDown",
						hide 	  : "fadeOutRightBig",
						delayShow : "delay0-5s"
 					},
 					".four" 	:
 					{
						show   	  : "fadeInUp",
						hide 	  : "fadeOutRightBig",
						delayShow : "delay1s"
 					},
 					".five" 	:
 					{
						show   	  : "fadeInUp",
						hide 	  : "fadeOutRightBig",
						delayShow : "delay1-5s"
 					}
				},
				1	: 	//Slide No2
				{
					
 					".two":
 					{
 						show 	  : "fadeIn",
						hide 	  : "slideOutLeft"
 					},
 					".three" 	:
 					{
						show   	  : "fadeInDown",
						hide 	  : "fadeOutRightBig",
						delayShow : "delay0-5s"
 					},
 					".four" 	:
 					{
						show   	  : "fadeInUp",
						hide 	  : "fadeOutRightBig",
						delayShow : "delay1s"
 					},
 					".five" 	:
 					{
						show   	  : "fadeInUp",
						hide 	  : "fadeOutRightBig",
						delayShow : "delay1-5s"
 					}, 					
 					".six" :
 					{
 						show   	  : "slideInLeft",
						hide 	  : "sldieOutRight",
						delayShow : "delay1s"
 					}
				},
				2	: 	//Slide No3
				{
					
 					".two":
 					{
 						show 	  : "fadeIn",
						hide 	  : "slideOutLeft"
 					},
 					".three" 	:
 					{
						show   	  : "fadeInDown",
						hide 	  : "fadeOutRightBig",
						delayShow : "delay0-5s"
 					},
 					".four" 	:
 					{
						show   	  : "fadeInUp",
						hide 	  : "fadeOutRightBig",
						delayShow : "delay1s"
 					},
 					".five" 	:
 					{
						show   	  : "fadeInUp",
						hide 	  : "fadeOutRightBig",
						delayShow : "delay1-5s"
 					}
				}
			}
	 	}
	);
});


