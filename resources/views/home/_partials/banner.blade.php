<section id="banner" class="home_banner">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-9 m-auto justify-content-start mb-3">
                <div class="banner_text animate__animated">
                    <h4 class="sal-animate">
                        Unlock Exclusive Perks: <br />
                        Join Our Membership Program Today!
                    </h4>
                    <span class="sal-animate text-justify animation_text" id="type" style="font-size: 14px;"></span>
                    <p></p>
                    <a href="#contact_us" class="browse_btn sal-animate" data-sal-delay="300" data-sal-duration="800"
                        data-sal-easing="ease">Contact Us &nbsp;<i class="fa-solid fa-comment"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 m-auto justify-content-start">
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




        $(".animation_text").addClass("animate__backInLeft");
        $(".banner_text").addClass("animate__backInLeft");
        $(".animation_text").html(`
            Membership services provide a range of benefits and exclusive access to members. These services can include discounts on
            products or services, access to events, personalized support, and more. By becoming a member, individuals can enjoy a
            range of benefits that are not available to non-mem- bers. Membership services can be an excellent way to enhance
            customer loy- alty, build a community, and generate recurring revenue for businesses. Whether you are a business owner
            or a customer, membership services can offer an exceptional value proposition.
        `);

        setTimeout(() => {
            $(".animation_text").removeClass("animate__backInLeft");
            $(".animation_text").addClass("animate__backOutLeft");
            $(".banner_text").removeClass("animate__backInLeft");
            $(".banner_text").addClass("animate__backOutLeft");
            setTimeout(() => {
                $(".animation_text").removeClass("animate__backOutLeft");
                $(".animation_text").addClass("animate__backInLeft");
                $(".banner_text").removeClass("animate__backOutLeft");
                $(".banner_text").addClass("animate__backInLeft");
            }, 1000);
        }, 5000);


    });

</script>
