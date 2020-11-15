function next(x){
    var carousel = document.getElementsByClassName(x);
    var i;
    var n_of_items = carousel.length;
    for (i = 0; i < n_of_items; i++) {

        if((i == 0) && (carousel[(n_of_items - 1)].classList.contains("flip-reverse"))){
            carousel[(n_of_items - 1)].classList.toggle("flip-reverse");
        }
        
        if(carousel[i].classList.contains("active")){

            carousel[i].classList.toggle("flip-reverse");
            carousel[i].classList.toggle("active");
            
            if(i == carousel.length-1){
                carousel[0].classList.toggle("active");
                carousel[0].classList.toggle("flip");
                carousel[i].classList.toggle("flip");
                carousel[i-1].classList.toggle("flip-reverse");
                break;
            }else {
                carousel[i+1].classList.toggle("active");
                carousel[i+1].classList.toggle("flip");
                carousel[i].classList.toggle("flip");
                carousel[i-1].classList.toggle("flip-reverse");
                break;
            }
    }
}
}
window.addEventListener("DOMContentLoaded", function(event){
	
	Array.from( document.querySelectorAll( ".gallery-one" )).forEach(function(item){
		item.addEventListener("click", function(){next("gallery-one");});
	});
	
});