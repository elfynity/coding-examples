class Slider {
	
	constructor(seconds) {
		this.seconds = seconds;
		
		this.slidesContainers = document.querySelectorAll("#slides-container");
		this.init();
	}

	init() {
		this.slidesContainers.forEach(slidesContainer => {
			slidesContainer.scrollLeft = 0;

			const slide = document.querySelector(".slide");

			const prevButton = slidesContainer.parentNode.querySelector("#slide-arrow-prev");
			const nextButton = slidesContainer.parentNode.querySelector("#slide-arrow-next");

			nextButton.addEventListener("click", () => {
				const slideWidth = slide.clientWidth;
				if (slidesContainer.scrollLeft + slidesContainer.clientWidth >= slidesContainer.scrollWidth) {
					slidesContainer.scrollLeft = 0;
				} else {
					slidesContainer.scrollLeft += slideWidth;
				}
			});

			prevButton.addEventListener("click", () => {
				const slideWidth = slide.clientWidth;
				if (slidesContainer.scrollLeft === 0) {
					slidesContainer.scrollLeft = slidesContainer.scrollWidth - slidesContainer.clientWidth;
				} else {
					slidesContainer.scrollLeft -= slideWidth;
				}
			});

			slidesContainer.addEventListener("mouseenter", () => {
				clearInterval(this.intervalId);
			});

			slidesContainer.addEventListener("mouseleave", () => {
				this.intervalId = setInterval(() => {
					nextButton.click();
				}, this.seconds * 1000);
			});

			this.intervalId = setInterval(() => {
				nextButton.click();
			}, this.seconds * 1000);
		});
	}
}

