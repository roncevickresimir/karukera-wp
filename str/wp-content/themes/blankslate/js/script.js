function next(carousel, index){
	if(index == carousel.length-1){
		carousel[index].classList.toggle("flip");
		carousel[index].classList.toggle("flip-reverse");
		carousel[0].classList.toggle("flip-reverse");
		carousel[0].classList.toggle("flip");	
	}
	else {
		carousel[index].classList.toggle("flip");
		carousel[index].classList.toggle("flip-reverse");
		carousel[index+1].classList.toggle("flip-reverse");
		carousel[index+1].classList.toggle("flip");
	}
}
function set(carousel){
	var i;
	for( i = 0; i < carousel.length; i++){
		if(i==0)
			carousel[i].classList.toggle("flip");
		else
			carousel[i].classList.toggle("flip-reverse");
	}
}
window.addEventListener("DOMContentLoaded", function(event){
    window.carousel0 = document.getElementsByClassName( "gallery-one");
	window.carousel0_index = 0;
	set(carousel0);
    window.carousel1 = document.getElementsByClassName( "gallery-two");
	window.carousel1_index = 0;
	set(carousel1);
	Array.from( document.querySelectorAll( ".gallery-one" )).forEach(function(item){
		item.addEventListener("click", function(){
			next(window.carousel0, window.carousel0_index);
			window.carousel0_index++;
			if(window.carousel0_index == window.carousel0.length)
				window.carousel0_index = 0;
		});
	});
	Array.from(document.querySelectorAll(".gallery-two")).forEach(function(item){
		item.addEventListener("click", function(){
			next(window.carousel1, window.carousel1_index);
			window.carousel1_index++;
			if(window.carousel1_index == window.carousel1.length)
				window.carousel1_index = 0;
		});
	});
});