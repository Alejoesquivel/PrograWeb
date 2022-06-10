var height = $('#header').height();

window.addEventListener("scroll", function(){
		var navbar = document.querySelector(".navegacion");
		if(window.scrollY > height){
			navbar.classList.add("arreglado");
		} else {
			navbar.classList.remove("arreglado");
		}
})
