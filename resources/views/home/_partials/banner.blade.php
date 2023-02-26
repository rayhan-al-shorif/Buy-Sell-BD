<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
<section id="banner" class="home_banner">
    <div class="container">
        <div class="owl-carousel owl-theme owl-carousel-banner">
            <div class="item">
                <div class="row">
                    <div class="col-lg-7 mb-3">
                        <div class="banner_text">
                            <h1 class="sal-animate">
                                Unlock Exclusive Perks: <br />
                                Join Our Membership Program Today!
                            </h1>
                            <span class="sal-animate text-justify animation_text" id="type" style="font-size: 14px;text-align: justify;">
                                Membership services provide a range of benefits and exclusive access to members. These services can include discounts on
                                products or services, access to events, personalized support, and more. By becoming a member, individuals can enjoy a
                                range of benefits that are not available to non-mem- bers. Membership services can be an excellent way to enhance
                                customer loy- alty, build a community, and generate recurring revenue for businesses. Whether you are a business owner
                                or a customer, membership services can offer an exceptional value proposition.
                            </span>
                            <a href="#contact_us" class="browse_btn mt-3 sal-animate" data-sal-delay="300" data-sal-duration="800"
                                data-sal-easing="ease">Contact Us &nbsp;<i class="fa-solid fa-comment"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-3">
                        <div class="banner_img">
                            <img class="img-fluid homebanner-thumb video_thumb sal-animate" id="bannerImage"
                            src="{{asset('web/assets/images/Sliders/Membership.png')}}"
                                alt="Home Banner| Icon">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-7 mb-3">
                        <div class="banner_text">
                            <h1 class="sal-animate">
                                License: <br />
                                Streamline Your Licensing Process: Sell and Renew Licenses with Ease
                            </h1>
                            <span class="sal-animate text-justify animation_text" id="type" style="font-size: 14px;text-align: justify;">
                                Our company is committed to providing a hassle-free license sell and renew service to our valued customers. We
                                understand the importance of having a valid license for various products and services, and we strive to make the process
                                as smooth as possible.
                            </span>
                            <p></p>
                            <a href="#contact_us" class="browse_btn mt-3 sal-animate" data-sal-delay="300" data-sal-duration="800"
                                data-sal-easing="ease">Contact Us &nbsp;<i class="fa-solid fa-comment"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-3">
                        <div class="banner_img">
                            <img class="img-fluid homebanner-thumb video_thumb sal-animate" id="bannerImage"
                            src="{{asset('web/assets/images/Sliders/License.png')}}"
                                alt="Home Banner| Icon">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-7 mb-3">
                        <div class="banner_text">
                            <h1 class="sal-animate">
                                Property: <br />
                                Stunning Property for Sale: Your Dream Home Awaits!
                            </h1>
                            <span class="sal-animate text-justify animation_text" id="type" style="font-size: 14px;text-align: justify;">
                                We are excited to present a stunning property that is now available for sale. This property is a true gem, featuring a
                                prime location and top-notch amenities that make it an ideal choice for anyone looking to invest in real estate.
                            </span>
                            <p></p>
                            <a href="#contact_us" class="browse_btn mt-3 sal-animate" data-sal-delay="300" data-sal-duration="800"
                                data-sal-easing="ease">Contact Us &nbsp;<i class="fa-solid fa-comment"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-3">
                        <div class="banner_img">
                            <img class="img-fluid homebanner-thumb video_thumb sal-animate" id="bannerImage"
                            src="{{asset('web/assets/images/Sliders/ticket.png')}}"
                                alt="Home Banner| Icon">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-7 mb-3">
                        <div class="banner_text">
                            <h1 class="sal-animate">
                                Ticket: <br />
                                Get Your Ticket to the Ultimate Experience...!!!
                            </h1>
                            <span class="sal-animate text-justify animation_text" id="type" style="font-size: 14px;text-align: justify;">
                                Our ticket service provides a hassle-free solution for purchasing tickets to your favorite events. Whether you're
                                looking to attend a concert, sporting event, or theater production, our user-friendly platform makes it easy to find and
                                purchase tickets online.
                            </span>
                            <p></p>
                            <a href="#contact_us" class="browse_btn mt-3 sal-animate" data-sal-delay="300" data-sal-duration="800"
                                data-sal-easing="ease">Contact Us &nbsp;<i class="fa-solid fa-comment"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-3">
                        <div class="banner_img">
                            <img class="img-fluid homebanner-thumb video_thumb sal-animate" id="bannerImage"
                            src="{{asset('web/assets/images/Sliders/ticket.png')}}"
                                alt="Home Banner| Icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>

    $(document).ready(function(){
        $('.owl-carousel-banner').owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            dots: true,
            responsive:{
                0:{
                items:1
                },
                600:{
                items:1
                },
                1000:{
                items:1
                }
            }
        });
    });

</script>
