<section id="banner" class="home_banner">
    <div class="container">
        <div class="row align-items-center m-auto text-center">
            <div class="col-lg-12 m-auto justify-content-center mb-3">
                <div class="banner_text">
                    <h2 data-sal="slide-left" data-sal-delay="200" data-sal-duration="700" data-sal-easing="ease"
                        class="sal-animate">
                        Title Of Banner
                    </h2>
                    <span class="sal-animate" id="type" style="font-size: 22px;"></span>
                    <p></p>
                    <a href="#contact_us" class="browse_btn sal-animate" data-sal-delay="300" data-sal-duration="800"
                        data-sal-easing="ease">Contact Us &nbsp;<i class="fa-solid fa-comment"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-12 m-auto justify-content-center">
                <div class="banner_img">
                     <img
                        class="img-fluid homebanner-thumb video_thumb sal-animate" id="bannerImage" src="https://picsum.photos/800/500"
                        alt="Home Banner| Icon">
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function(){
        var app = document.getElementById('type');

        var typewriter = new Typewriter(app, {
        loop: true,
        delay: 75,
        });

        typewriter
        .typeString('A simple yet powerful native javascript')
        .pauseFor(2500)
        .deleteAll()
        .start();
    });
</script>
