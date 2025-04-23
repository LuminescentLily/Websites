// Setup the Slideshow, and where to start (0), and slideshow interval
let slides = document.querySelectorAll('#slides .slide');
let currentSlide = 0;
let slideInterval = setInterval(nextSlide, 8000);

function nextSlide(){
	slides[currentSlide].className = 'slide';

	// % Modulus Operator allows the slides to start over when reaches end of slide array so that is wraps around back to 0	
	currentSlide = (currentSlide+1)%slides.length; 

	slides[currentSlide].className = 'slide showing';
}