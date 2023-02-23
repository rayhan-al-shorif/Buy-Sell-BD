<section id="banner" class="home_banner">
    <div class="container">
        <div class="row align-items-center m-auto text-center">
            <div class="col-lg-9 m-auto justify-content-center mb-3">
                <div class="banner_text">
                    <h2 data-sal="slide-left" data-sal-delay="200" data-sal-duration="700" data-sal-easing="ease"
                        class="sal-animate">
                        Unlock Exclusive Perks: <br />
                        Join Our Membership Program Today!
                    </h2>
                    <span class="sal-animate text-justify" id="type" style="font-size: 22px;"></span>
                    <p></p>
                    <a href="#contact_us" class="browse_btn sal-animate" data-sal-delay="300" data-sal-duration="800"
                        data-sal-easing="ease">Contact Us &nbsp;<i class="fa-solid fa-comment"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 m-auto justify-content-center">
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

    var i = 0;
    var target = "";
    var html = "";
    var speed = 100;
    var beforeHtml = '';
    var text = `
        Membership services provide a range of benefits and exclusive access to members. These services can include discounts on
        products or services, access to events, personalized support, and more. By becoming a member, individuals can enjoy a
        range of benefits that are not available to non-mem- bers. Membership services can be an excellent way to enhance
        customer loy- alty, build a community, and generate recurring revenue for businesses. Whether you are a business owner
        or a customer, membership services can offer an exceptional value proposition.
    `;

    $(document).ready(function(){
        $("#type").html('<span class="description"></span><span class="cursor"></span>');
        description = $("#type").find(".description");
        cursor = $("#type").find(".cursor");
        cursor.html('|');
        typeWriter();
    });
    function typeWriter() {
        if (i < text.length)
        {
            beforeHtml = description.html();
            description.html(`${beforeHtml}${text.charAt(i)}`);
            i++;
            setTimeout(typeWriter, speed);
        }else{
            target.html('');
            text = "loremsdcjn sadjncsnk dancskda ncknkn";
            i = 0;
            typeWriter();
        }
    }
</script>
