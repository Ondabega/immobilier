<!-- debut slider test -->
<section class="real">
		<!-- eh merci le slider claqué***********************  -->
		<div class="container">
			<div class="zap" id="prev"></div>
			<div class="zap" id="nxt"></div>
			<div class="slide-img" id="one">
				<div class="inbanner">
					<a href="javascript:void(0);" onclick="toggle_visibility('popup')">1</a>
				</div>
			</div>
			<div class="slide-img" id="two">
				<div class="inbanner">
					<a href="javascript:void(0)" onclick="toggle_visibility('popup1')">2</a>
				</div>
			</div>
			<div class="slide-img" id="three">
				<div class="inbanner">
					<a href="javascript:void(0)" onclick="toggle_visibility('popup2')">3</a>
				</div>
			</div>
			<div class="slide-img" id="four">
				<div class="inbanner">
					<a href="javascript:void(3)" onclick="toggle_visibility('popup3')">4</a>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			let sliderImages = document.querySelectorAll('.slide-img'),zapNext = document.querySelector('#nxt'), zapPrev = document.querySelector('#prev'), current = 0;

			// nettoie les images
			function reset(){
				for (let i = 0; i < sliderImages.length; i++) {
					sliderImages[i].style.display = 'none'
				}
			}

			// Debut du slide
			function startSlide(){
				reset();
				sliderImages[0].style.display = 'block'
			}

			// image precedente
			function slideLeft(){
				reset();
				sliderImages[current - 1].style.display = 'block';
				current--;
			}

			// image suivante
			function slideRight(){
				reset();
				sliderImages[current + 1].style.display = 'block';
				current++;
			}

			// zap precedent
			zapPrev.addEventListener('click', function(){
				if (current === 0) {
					current = sliderImages.length;
				}
				slideLeft();
			})

			// zap suivant
			zapNext.addEventListener('click', function(){
				if (current === sliderImages.length - 1) {
					current = -1;
				}
				slideRight();
			})

			startSlide();
		</script>

	</section>



<!-- fin de slider test -->
