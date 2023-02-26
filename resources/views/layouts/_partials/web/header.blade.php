<header id="header">
    <section id="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="topbar_text">
                        <a data-sal="slide-left" data-sal-delay="200" data-sal-duration="800" data-sal-easing="ease"
                            href="tel:01923988380">
                            <span><img src="{{asset('web/assets/images/call.png')}}" alt="icon" /></span>
                            01923988380</a>
                        <a data-sal="slide-left" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease"
                            href="mailto:admin@gmail.com" class="sal-animate"><span>
                                <img src="{{asset('web/assets/images/top-mail.png')}}" alt="icon"></span>
                            admin@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <nav id="navbar" class="d-none d-lg-block  navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a href="/" data-sal="zoom-in" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease"
                class="navbar-brand sal-animate" style="
    margin: 0 -12px;
">
                <img src="{{asset('web/assets/images/logo.png')}}" style="max-height: 52px" alt="Logo">
            </a>
            <div class="navbar-collapse collapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 main_menu navbar-nav">
                    <li class="nav-item sal-animate" data-sal="slide-right" data-sal-delay="300" data-sal-duration="800"
                        data-sal-easing="ease">
                        <a href="/" data-rr-ui-event-key="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item sal-animate" data-sal="slide-right" data-sal-delay="300" data-sal-duration="800"
                        data-sal-easing="ease">
                        <a href="#about" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item sal-animate" data-sal="slide-right" data-sal-delay="300" data-sal-duration="800"
                        data-sal-easing="ease">
                        <a href="#whatWeDo" class="nav-link">What We Do?</a>
                    </li>
                    <li class="nav-item sal-animate" data-sal="slide-right" data-sal-delay="300" data-sal-duration="800"
                        data-sal-easing="ease">
                        <a href="service" data-rr-ui-event-key="service" class="nav-link">Service</a>
                    </li>
                    <div class="navbar_btn nav-item">
                        <span class="sal-animate dark-mode">
                            <i class="fa-solid fa-moon"></i>
                            <i class="fa-solid fa-sun d-none"></i>
                        </span>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- OffCanvas Menu Start-->
    <div class="sm_menu d-lg-none">
        <div class="offcanvas_menu">
            <div class="bars">
                <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                    aria-controls="offcanvasExample">
                    <i class="fa-solid fa-bars sideBarIcon"></i>
                </a>
            </div>
            <div class="logo">
                <a href="/">
                    <img src="{{asset('web/assets/images/logo.png')}}" alt="Logo">
                </a>
            </div>
        </div>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel"
            style="background: #020B0F no-repeat center; background-size: cover;">
            <div class="offcanvas-body">
                <div class="offcanvas-header justify-content-end">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <ul class="justify-content-center flex-column text-center ms-auto mb-2 mb-lg-0 main_menu navbar-nav">
                    <li class="nav-item">
                        <a href="home" data-rr-ui-event-key="home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-rr-ui-event-key="#" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-rr-ui-event-key="#" class="nav-link">Contact</a>
                    </li>
                    <div class="navbar_btn text-center nav-item">
                        <a href="#">
                            <img src="#" alt="icon"><i class="fa fa-angle-down ps-2"></i></a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End-->
</header>
<style>
</style>
