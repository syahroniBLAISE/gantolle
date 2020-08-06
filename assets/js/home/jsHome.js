$(document).ready(function(){
	 // var index = 0,
	 // 	 items = $('.container div'),
	 // 	 total = items.length;

	 function slide(num){
	 	// var item = $('.container div').eq(index);
	 	// items.slideUp();
	 	// item.slideDown();
	 	// var	num = num + '40px';

	 	if($('.container2').css('marginLeft') == '-1640px')
	 	$('.container2').css('marginLeft', '-40px');
	 else
	 	$('.container2').animate({marginLeft: num});

	 }

	 var autoslide = setInterval(function(){
	 	// index += 1;
	 	// if(index > total -1) index=0;
	 	// slide();

 
	 	slide('-=400px');
	 	}, 1000);

	 $('#next').click(function(){
	 	// index += 1;
	 	// if(index > total -1) index=0;
	 	// slide();


	 	slide('-=400px');
	 	clearInterval(autoslide);


	 });

	 $('#prev').click(function(){
	 	// index -= 1;
	 	// if(index > total -1) index=0;
	 	// slide();


	 	slide('+=400px');
	 	clearInterval(autoslide);
	 });

	
});