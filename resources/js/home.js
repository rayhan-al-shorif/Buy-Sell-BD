const { default: axios } = require("axios");
var getCookieColor = "";
$(window).on('resize', function () {
    handleSliderDots();
});
$(document).ready(function () {
    handleMoreServiceDescription();
    handleContactSubmitBtn();
    handleHomeSliderCarousel();
    handleServiceSliderCarousel();
    // customize
    handleDarkOrLightMode();
    handleHeaderColorInScroll();
    handleHeaderColorBtn();
    handleFont();
    handleTopAndHeaderColor();
    handleReadMore();
    // handleNavbarAutoHoverInScroll();

});



function handleHomeSliderCarousel() {
    $('.home-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        // dots
        dots: true,
        dotsEach: true,
        owl2row: true,
        owl2rowTarget: 'item',
        owl2rowContainer: 'owl2row-item',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $(".owl-prev").html('<i class="fas fa-chevron-left"></i>');
    $(".owl-next").html('<i class="fas fa-chevron-right"></i>');
}

function handleServiceSliderCarousel() {
    $('.service-slider').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: true,
        dots: true,
        pagination: false,
        navigation: true,
        responsive: {
            0: {
                items: 1,
            },
            400: {
                items: 1,
            },
            700: {
                items: 1,
            },
            866: {
                items: 2,
            },
            1000: {
                items: 3,
            },
            1500: {
                items: 4,
            }
        }
    });

    $(".owl-prev").html('<i class="fas fa-chevron-left"></i>');
    $(".owl-next").html('<i class="fas fa-chevron-right"></i>');
    handleSliderDots();

    $(".owl-prev").on('click', function () {
        handleSliderDots();
    });
    $(".owl-next").on('click', function () {
        handleSliderDots();
    });


}


function handleReadMore() {
    $('.readMore').on('click', function () {
        var description = $(this).closest('td').find('.getDescription').text();
        $(this).closest('td').find('.descriptionLess').html(description);
        $(this).closest('td').find('.readMore').addClass('d-none');
        $(this).closest('td').find('.readLess').removeClass('d-none');

    });
    $('.readLess').on('click', function () {
        var description = $(this).closest('td').find('.getDescription').text();
        $(this).closest('td').find('.descriptionLess').html(description.substr(0, 150));
        $(this).closest('td').find('.readMore').removeClass('d-none');
        $(this).closest('td').find('.readLess').addClass('d-none');
    });
}

function handleSliderDots() {
    $(".owl-item").map(function (item) {
        if ($(this).hasClass("active")) {
            let nav_id = $(this).find(".service").attr('id');
            // console.log(nav_id);
            if (nav_id != undefined) {
                let spans = $(".slider-dots");
                spans.map(function (sp) {
                    $(this).find('span').map(function (span) {
                        if ($(this).hasClass('nav-6')) {
                            $(this).css("background-color", "yellow");
                        }
                    });


                });
            }
        }
    });
}




function htmlEntities(str) {
    return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
}
function handleMoreServiceDescription() {
    $(document).on("click", ".service", function () {
        let title = $(this).find(".serviceTitle").text();
        let description = $(this).find(".getDescription").text();
        let image = $(this).find("img").attr("src");
        Swal.fire({
            title: title,
            text: description,
            imageUrl: image,
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: "Custom image",
            showCancelButton: false,
            showConfirmButton: false,
            showCloseButton: true
        });
        handleGetCookieColor();
    });

}

function handleContactSubmitBtn() {
    $(document).on("click", ".contactSubmitBtn", function () {
        let Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener("mouseenter", Swal.stopTimer);
                toast.addEventListener("mouseleave", Swal.resumeTimer);
            },
        });
        let name = $("#fullName").val();
        let email = $("#email").val();
        let message = $("#message").val();

        // email validation
        let emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!emailReg.test(email)) {
            Toast.fire({
                icon: "error",
                title: "Invalid email address!",
            });
            return;
        }

        if (name == "" || email == "" || message == "") {
            Toast.fire({
                icon: "error",
                title: "All fields are required!",
            });
            return;
        }

        let data = {
            name: name,
            email: email,
            message: message,
        };
        axios.post("/contact/store", data).then((response) => {
            if (response.data.status == true) {
                Toast.fire({
                    icon: "success",
                    title: "Message sent successfully!",
                });
                $("#fullName").val("");
                $("#email").val("");
                $("#message").val("");
            } else {
                Toast.fire({
                    icon: "error",
                    title: "Something went wrong!",
                });
            }
        });
    });
}

// customize

function handleDarkOrLightMode() {
    handleGetCookieDarkLight();
    handleTopAndHeaderColor();
    $(document).on("click", ".fa-sun", function () {
        $(this).removeClass("fa-sun");
        $(this).addClass("fa-moon");
        $("body").addClass("body-dark");
        handleGetCookieColor();
        let data = {
            name: "dark-light",
            color: "dark"
        };
        axios.post("/set-cookie", data);
    });

    $(document).on("click", ".fa-moon", function () {
        $(this).removeClass("fa-moon");
        $(this).addClass("fa-sun");
        $("body").removeClass("body-dark");
        handleGetCookieColor();
        let data = {
            name: "dark-light",
            color: "light"
        };
        axios.post("/set-cookie", data);
    });
}

function handleHeaderColorInScroll() {

    handleGetCookieColor();
    $(window).scroll(function () {
        let isSticky = $(".sticky-wrapper").hasClass("is-sticky");
        if (isSticky) {
            $(".card-container .header-color span").each(function () {
                if ($(this).hasClass("selected")) {
                    let color = $(this).attr("data-color");
                    $(".js-sticky-header").css("background-color", color);
                    return false;
                } else {
                    $(".js-sticky-header").css("background-color", "rgb(255, 87, 51)");
                }
            });
        } else {
            handleTopAndHeaderColor();
        }
    });
}


function handleTopAndHeaderColor() {
    $(".card-container .header-color span").each(function () {
        if ($(this).hasClass("selected")) {
            let color = $(this).attr("data-color");
            color = convertHexToRgbA(color, 0.4);
            $(".js-sticky-header").css("background-color", color);
            $(".site-navbar-wrap").css("background-color", color);

            return false;
        } else {
            $(".js-sticky-header").css("background-color", "rgb(255, 87, 51, 0.4)");
            $(".site-navbar-wrap").css("background-color", "rgb(255, 87, 51, 0.4)");
        }
    });
}



function handleHeaderColorBtn() {
    $(".card-container .header-color span").each(function () {
        let color = $(this).attr("data-color");
        $(this).css({
            "background-color": color,
            "color": color
        });
    });


    $(document).on("click", ".card-container .header-text-color span", function () {
        let color = $(this).attr("data-color");
        $(".site-menu li a").css("color", color);
        $(".site-navbar-top .container .row a").css("color", color);
        $(".fa-regular").css("color", color, "important");
        $(".site-menu li a").css("font-weight", "600");


        // set cookie
        let data = {
            name: "header-text-color",
            color: color
        };
        axios.post("/set-cookie", data);
    });

    $(document).on("click", ".card-container .header-color span", function () {

        if ($(this).hasClass("selected")) {
            $(this).removeClass("selected");
            $(this).css({
                "border": "none",
                "transform": "scale(1)",
            });
            $(".sticky-wrapper.is-sticky .site-navbar").css("background-color", "#ff5733");
            return;
        }

        $(".card-container .header-color span").each(function () {
            $(this).css({
                "border": "none",
                "transform": "scale(1)",
            });
            $(this).removeClass("selected");
        });



        $(this).addClass("selected");
        $(this).css({
            "border": "2px solid #fff",
            "transform": "scale(1.2)",
        });
        let color = $(this).attr("data-color");
        $(".sticky-wrapper.is-sticky .site-navbar").css("background-color", color);
        handleTextAndBtnColor(color);

        // set cookie
        let data = {
            name: "color",
            color: color
        };
        axios.post("/set-cookie", data);
        handleTopAndHeaderColor();

    });
}

function handleGetCookieColor() {

    axios.post("/get-cookie", {
        name: "header-text-color"
    }).then((response) => {
        let testColor = response.data;
        $(".site-menu li a").css("color", testColor);
        $(".site-navbar-top .container .row a").css("color", testColor);
        $(".fa-regular").css("color", testColor, "important");
        $(".site-menu li a").css("font-weight", "600");
    });


    axios.post("/get-cookie", {
        name: "color"
    }).then((response) => {
        getCookieColor = response.data;
        // set the color
        $(".card-container .header-color span").each(function () {
            let color = $(this).attr("data-color");
            if (color == getCookieColor) {
                $(this).addClass("selected");
                $(this).css({
                    "border": "2px solid #fff",
                    "transform": "scale(1.2)",
                });
                $(".sticky-wrapper.is-sticky .site-navbar").css("background-color", color);
                return false;
            } else {
                $(this).removeClass("selected");
                $(this).css({
                    "border": "none",
                    "transform": "scale(1)",
                });
                $(".sticky-wrapper.is-sticky .site-navbar").css("background-color", "#ff5733");
            }
        });
        handleTextAndBtnColor(getCookieColor);
    });
}

function handleGetCookieDarkLight() {
    axios.post("/get-cookie", {
        name: "dark-light"
    }).then((response) => {
        getCookieDarkLight = response.data;
        if (getCookieDarkLight == "dark") {
            $(".fa-sun").removeClass("fa-sun");
            $(".fa-sun").addClass("fa-moon");
            $("body").addClass("body-dark");
        } else {
            $(".fa-moon").removeClass("fa-moon");
            $(".fa-moon").addClass("fa-sun");
            $("body").removeClass("body-dark");
        }
    });
}

function handleTextAndBtnColor(color = "#ff5733") {
    $(".sub-title").css("color", color);
    $(".btn").css("background-color", color);
    $(".btn").css("border-color", color);
    $(".footer-heading").css("color", color);
    $(".fa-brands").hover(function () {
        $(this).css("color", color);
    });
    $(".fa-brands").mouseleave(function () {
        $(this).css("color", "#fff");
    });
    $(".sunAndMoonIcon").hover(function () {
        $(this).css("transform", "scale(1.2)");
    });
    $(".sunAndMoonIcon").mouseleave(function () {
        $(this).css("transform", "scale(1)");
    });


    $(".body-dark .site-nav-wrap .active").css("color", color);


    $(document).on("hover", ".site-nav-wrap a", function () {
        $(this).css("color", color);
    });
    $(".contactSubmitBtn").on('click', function () {
        $(this).css("color", color);
        $(this).css("background-color", "#fff");
    });
    $(".contactSubmitBtn").on('hover', function () {
        $(this).css("color", "#fff");
        $(this).css("background-color", color);
    });

    $(".owl-prev").hover(function () {
        $(this).css("background-color", color);
    });
    $(document).on("click", ".owl-prev", function () {
        $(this).css("background-color", color);
        console.log("yes click");
    });
    $(".owl-prev").mouseleave(function () {
        $(this).css("background-color", "#000000");
    });
    $(".owl-next").hover(function () {
        $(this).css("background-color", color);
    });
    $(".owl-next").mouseleave(function () {
        $(this).css("background-color", "#000000");
    });



    // sweet alert

    if ($("body").hasClass("body-dark")) {
        $(".swal2-popup").css("background-color", "#1A1A1A");
        $(".swal2-popup").css("color", "#fff");
    } else {
        $(".swal2-popup").css("background-color", "#ffffff");
        $(".swal2-popup").css("color", "#000000");
    }
    $(".swal2-popup button").css("color", color);
    $(".swal2-popup button").css("background-color", "#ffffff");
    $(".swal2-popup button").hover(function () {
        $(this).css("color", "#ffffff");
        $(this).css("background-color", color);
    });
}


function handleFont() {
    $(document).on("click", ".header-font input", function () {
        let selectedFont = $(this).val();
        // all class of body
        let allClass = $("body").attr("class");
        allClass = allClass.split(" ");
        allClass.forEach((item) => {
            if (item !== "body-dark") {
                $("body").removeClass(item);
            }
        });
        $("body").addClass(selectedFont);

    });
}



function convertHexToRgbA(hexVal, opacity) {
    var ret;
    if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hexVal)) {
        ret = hexVal.slice(1);
        ret = ret.split('');
        if (ret.length == 3) {
            var ar = [];
            ar.push(ret[0]);
            ar.push(ret[0]);
            ar.push(ret[1]);
            ar.push(ret[1]);
            ar.push(ret[2]);
            ar.push(ret[2]);
            ret = ar;
        }
        ret = '0x' + ret.join('');
        var r = (ret >> 16) & 255;
        var g = (ret >> 8) & 255;
        var b = ret & 255;
        return 'rgba(' + [r, g, b].join(',') + ',' + opacity + ')';
    }
}

function hexToComplimentary(hex) {

    // Convert hex to rgb
    // Credit to Denis http://stackoverflow.com/a/36253499/4939630
    var rgb = 'rgb(' + (hex = hex.replace('#', '')).match(new RegExp('(.{' + hex.length / 3 + '})', 'g')).map(function (l) { return parseInt(hex.length % 2 ? l + l : l, 16); }).join(',') + ')';

    // Get array of RGB values
    rgb = rgb.replace(/[^\d,]/g, '').split(',');

    var r = rgb[0], g = rgb[1], b = rgb[2];

    // Convert RGB to HSL
    // Adapted from answer by 0x000f http://stackoverflow.com/a/34946092/4939630
    r /= 255.0;
    g /= 255.0;
    b /= 255.0;
    var max = Math.max(r, g, b);
    var min = Math.min(r, g, b);
    var h, s, l = (max + min) / 2.0;

    if (max == min) {
        h = s = 0;  //achromatic
    } else {
        var d = max - min;
        s = (l > 0.5 ? d / (2.0 - max - min) : d / (max + min));

        if (max == r && g >= b) {
            h = 1.0472 * (g - b) / d;
        } else if (max == r && g < b) {
            h = 1.0472 * (g - b) / d + 6.2832;
        } else if (max == g) {
            h = 1.0472 * (b - r) / d + 2.0944;
        } else if (max == b) {
            h = 1.0472 * (r - g) / d + 4.1888;
        }
    }

    h = h / 6.2832 * 360.0 + 0;

    // Shift hue to opposite side of wheel and convert to [0-1] value
    h += 180;
    if (h > 360) { h -= 360; }
    h /= 360;

    // Convert h s and l values into r g and b values
    // Adapted from answer by Mohsen http://stackoverflow.com/a/9493060/4939630
    if (s === 0) {
        r = g = b = l; // achromatic
    } else {
        var hue2rgb = function hue2rgb(p, q, t) {
            if (t < 0) t += 1;
            if (t > 1) t -= 1;
            if (t < 1 / 6) return p + (q - p) * 6 * t;
            if (t < 1 / 2) return q;
            if (t < 2 / 3) return p + (q - p) * (2 / 3 - t) * 6;
            return p;
        };

        var q = l < 0.5 ? l * (1 + s) : l + s - l * s;
        var p = 2 * l - q;

        r = hue2rgb(p, q, h + 1 / 3);
        g = hue2rgb(p, q, h);
        b = hue2rgb(p, q, h - 1 / 3);
    }

    r = Math.round(r * 255);
    g = Math.round(g * 255);
    b = Math.round(b * 255);

    // Convert r b and g values to hex
    rgb = b | (g << 8) | (r << 16);
    return "#" + (0x1000000 | rgb).toString(16).substring(1);
}






