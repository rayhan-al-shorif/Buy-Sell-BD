<section id="banner" class="home_banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="banner_text">
                    <h5 data-sal="slide-left" data-sal-delay="200" data-sal-duration="700" data-sal-easing="ease"
                        class="sal-animate"><span>
                            <img src="{{asset('web/assets/images/Check.png')}}" alt="icon"></span>
                        something
                    </h5><img src="{{asset('web/assets/images/shape.png')}}"
                        alt="victor_dot" class="dot_shape_banner">
                    <span class="sal-animate" id="type">
                        sdkjnskdnc
                    </span>
                    <p>something</p>
                    <a target="_blank" href="/our-courses" class="browse_btn sal-animate"
                        data-sal="slide-left" data-sal-delay="300" data-sal-duration="800"
                        data-sal-easing="ease"><span><img src="#"
                                alt="icon"></span>Button</a><a target="_blank" href="/our-courses"
                        class="d-inline-block d-sm-none" data-sal="slide-left" data-sal-delay="300"
                        data-sal-duration="800" data-sal-easing="ease"><span><img
                                src="#" alt="icon"></span>Button<span class="ms-2 angle"><i class="fa fa-angle-down"></i></span></a><a target="_blank"
                        class="join_btn sal-animate" href="/free-seminar" data-sal="slide-right" data-sal-delay="300"
                        data-sal-duration="800" data-sal-easing="ease"><span><img
                                src="#" alt="icon"></span>Button</a>
                    <ul>

                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner_img">

                     <img
                            class="img-fluid homebanner-thumb video_thumb sal-animate" id="bannerImage" src=""
                            alt="Home Banner| Icon" data-sal="zoom-in" data-sal-delay="200" data-sal-duration="700"
                            data-sal-easing="ease">
                    <div class="plus"><img class="img-fluid"
                            src="https://creativeitinstitute.com/banner_background/shape-2.png" alt="Victor plus"></div>
                    <div class="dot_2"><img class="img-fluid"
                            src="https://creativeitinstitute.com/banner_background/shape-3.png" alt="victor dot"></div>
                    <div class="dot_3"><img class="img-fluid"
                            src="https://creativeitinstitute.com/banner_background/shape-4.png" alt="victor dot"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
        setInterval(() => {
            $("#bannerImage").attr("src","https://picsum.photos/800/500");
        }, 1000);
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
