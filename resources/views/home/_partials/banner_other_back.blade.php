<section id="banner" class="home_banner">
    <div class="container">
        <div id="example1" class="slider-pro">
            <div class="sp-slides">
                <div class="sp-slide">
                    <img class="sp-image" src="../src/css/images/blank.gif"
                        data-src="https://bqworks.net/slider-pro/images/image1_medium.jpg"
                        data-retina="https://bqworks.net/slider-pro/images/image1_large.jpg" />

                    <p class="sp-layer sp-white sp-padding" data-horizontal="50" data-vertical="50" data-show-transition="left"
                        data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
                        Lorem ipsum
                    </p>

                    <p class="sp-layer sp-black sp-padding hide-small-screen" data-horizontal="180" data-vertical="50"
                        data-show-transition="left" data-hide-transition="up" data-show-delay="600" data-hide-delay="100">
                        dolor sit amet
                    </p>

                    <p class="sp-layer sp-white sp-padding hide-medium-screen" data-horizontal="315" data-vertical="50"
                        data-show-transition="left" data-hide-transition="up" data-show-delay="800">
                        consectetur adipisicing elit.
                    </p>
                </div>

                <div class="sp-slide">
                    <img class="sp-image" src="../src/css/images/blank.gif"
                        data-src="https://bqworks.net/slider-pro/images/image2_medium.jpg"
                        data-retina="https://bqworks.net/slider-pro/images/image2_large.jpg" />

                    <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="10%"
                        data-show-transition="left" data-hide-transition="left">
                        Lorem ipsum dolor sit amet
                    </h3>

                    <p class="sp-layer sp-white sp-padding hide-medium-screen" data-horizontal="40" data-vertical="22%"
                        data-show-transition="left" data-show-delay="200" data-hide-transition="left" data-hide-delay="200">
                        consectetur adipisicing elit
                    </p>

                    <p class="sp-layer sp-black sp-padding hide-small-screen" data-horizontal="40" data-vertical="34%"
                        data-width="350" data-show-transition="left" data-show-delay="400" data-hide-transition="left"
                        data-hide-delay="500">
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>

            <div class="sp-thumbnails">
                <div class="sp-thumbnail">
                    <div class="sp-thumbnail-title">Lorem ipsum</div>
                    <div class="sp-thumbnail-description">Dolor sit amet, consectetur adipiscing elit sed</div>
                </div>

                <div class="sp-thumbnail">
                    <div class="sp-thumbnail-title">Do eiusmod</div>
                    <div class="sp-thumbnail-description">Tempor incididunt ut labore et dolore magna aliqua</div>
                </div>
            </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="https://unpkg.com/slider-pro/dist/css/slider-pro.min.css" />
<script type="text/javascript" src="https://unpkg.com/slider-pro/dist/js/jquery.sliderPro.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
		$('#example1').sliderPro({
			width: 960,
			height: 500,
			arrows: true,
			buttons: false,
			waitForLayers: true,
			thumbnailWidth: 200,
			thumbnailHeight: 100,
			thumbnailPointer: true,
			autoplay: false,
			autoScaleLayers: false,
			breakpoints: {
				500: {
					thumbnailWidth: 120,
					thumbnailHeight: 50
				}
			}
		});
	});
</script>
