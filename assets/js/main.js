// const swiper = new Swiper('.swiper', {
//   // Optional parameters
//   direction: 'vertical',
//   loop: true,
// 
//   // If we need pagination
//   pagination: {
// 	el: '.swiper-pagination',
//   },
// 
//   // Navigation arrows
//   navigation: {
// 	nextEl: '.swiper-button-next',
// 	prevEl: '.swiper-button-prev',
//   },
// 
//   // And if we need scrollbar
//   scrollbar: {
// 	el: '.swiper-scrollbar',
//   },
// });

document.querySelectorAll('.custom-play-button').forEach(button => {
	button.addEventListener('click', function () {
		// Vind de vm-player naast de knop
		const player = this.nextElementSibling;

		if (player) {
			// Gebruik Vidstack's API om de video af te spelen
			player.play();
		}

		// Optioneel: verberg de afspeelknop nadat de video begint
		this.style.display = 'none';
	});
});


const swiper = new Swiper(".swiper", {
  grabCursor: true,
  initialSlide: 1,
  centeredSlides: true,
  slidesPerView: "auto",
  spaceBetween: 1,
  speed: 1000,
  freeMode: true,
  navigation: {
	nextEl: '.swiper-button-next',
	prevEl: '.swiper-button-prev',
  },
  mousewheel: {
	thresholdDelta: 0,
  },
  pagination: {
	el: ".swiper-pagination",
  },
  simulateTouch: false, // Schakel swiping uit
  allowTouchMove: false, // Voorkom swipen
  on: {
	click(event) {
	  // Voorkom dat de slider naar de geklikte afbeelding springt
	  if (event.target.tagName.toLowerCase() === 'img') {
		event.stopPropagation(); // Stop de click event
	  } else {
		swiper.slideTo(this.clickedIndex); // Alleen navigeren als de klik niet op een afbeelding is
	  }
	},
  },
});







jQuery(window).scroll(function(){
	onScroll();
});


function onScroll() {
	if(window.scrollY > 0){
		if(!jQuery('body').hasClass('on-scroll')){
			jQuery('body').addClass('on-scroll');
		}
	}
	else{
		jQuery('body').removeClass('on-scroll');
	}
}