var height = $('#header').height();

window.addEventListener("scroll", function(){
		var navbar = document.querySelector(".navbar");
		if(window.scrollY > height){
			navbar.classList.add("fixed");
		} else {
			navbar.classList.remove("fixed");
		}
})
