function changeBg() {
	var nav = document.getElementById('nav');
	var scrollValue = window.scrollY;
	if(scrollValue < 150){
		nav.classList.remove('bgColor');
	}
	else{
		nav.classList.add('bgColor');
	}
}
window.addEventListener('scroll', changeBg)