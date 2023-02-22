<section id="iso">
    <div class="container">
        <div class="section_heading3">
            <h2>About On CEO</h2>
            <p class="text-justify">Buysellbd is a personalized service for buying and selling Club Membership of Exclusive Clubs. Gaining access to a Club
            like Dhaka Club, Gulshan Club, Banani Club, Uttara Club are very exclusive and time consuming. On the other hand finding
            someone eligible to handover existing membership is sometime very difficult. BuySellBD brings the only exclusive
            platform to make these transactions easier.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-delay="300" data-sal-duration="1000"
                data-sal-easing="ease">
                <div class="iso_image"><img class="img-fluid w-100"
                        src="{{asset('web/assets/images/about/about_ceo.jpg')}}"
                        alt="about image"></div>
            </div>
            <div class="col-lg-7 offset-lg-1 col-md-6 sal-animate" data-sal="slide-down" data-sal-delay="300"
                data-sal-duration="1000" data-sal-easing="ease">
                <div class="iso_text">
                    <p>
                    @if($about)
                    <p class="mb-4 description">
                        {!! Str::limit($about->description,2000) !!}
                    </p>
                    @endif
                    <p>
                        <span class="btn btn-primary btn-lg rounded-0" data-toggle="modal" data-target="#readMoreAboutUs">Read
                            More About Us</span>
                    </p></p>
                </div>
            </div>
        </div>
    </div>
</section>
