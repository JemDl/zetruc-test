
const page_change = {
	buttons: document.getElementsByClassName("main-service-selector-button"),
	slidesContainer: document.getElementById("page-slides-container"),
	
	removeActiveFromOthers: function(currentButton) {
		for(let el of page_change.buttons) {
			if(currentButton.id != el.id) {
				el.classList.remove("active");
			}
		}
	},
	
	buttonClicked: function(id, el) {
		page_change.removeActiveFromOthers(el);
		el.classList.add("active");
		
		const pageId = "page-" + id.split('-')[1];
		
		for(let el of page_change.slidesContainer.children) {
			if(el.id == pageId) {
				el.style.display = "block";
			} else {
				el.style.display = "none";
			}
			
		}
		
	},
	
	resetPage: function() {
		console.log("reset page");
	},
		
}

for(let el of page_change.buttons) {
	el.addEventListener("click", () => page_change.buttonClicked(el.id, el));
}

window.addEventListener("beforeunload", page_change.resetPage);