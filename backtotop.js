// Get the button


// Setup function to control my button scroll
window.onscroll = function() {scrollFunction()};


function scrollFunction() {
	let mybutton = document.getElementById("myBtn");
	
	if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
		mybutton.style.display = "block";
	} else { 
	  mybutton.style.display = "none";
	}
}


function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}
