
const carousel = {
	slidesContainer: document.getElementById("carousel-slides-container"),
	slide: document.querySelector(".slide"),
	
	timeBetweenSlides: 4000,

	currentSlide: 0,
	
	nextSlide: function() {

		function loop() {
			carousel.currentSlide = 0;
			carousel.slidesContainer.style.scrollBehavior = "auto";
			carousel.slidesContainer.scrollLeft = 0;
			carousel.slidesContainer.style.scrollBehavior = "smooth";
		}

		if (++carousel.currentSlide < carousel.slidesContainer.childElementCount) {
			const slideWidth = carousel.slide.clientWidth;
			carousel.slidesContainer.scrollLeft += slideWidth;
		}
		if (carousel.currentSlide == carousel.slidesContainer.childElementCount - 1) {
			setTimeout(loop, carousel.timeBetweenSlides / 2);
		}
	},
			
	// Reset the slides to the first when reloading
	resetSlide: function() {
		console.log("reset slide");
		carousel.slidesContainer.scrollLeft = 0;
	},	
	
}

setInterval(carousel.nextSlide, carousel.timeBetweenSlides);
	
window.addEventListener("beforeunload", carousel.resetSlide);
