$(document).ready(function () {
    // Add smooth scrolling to all links
    $("a").on('click', function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();
            // Store hash
            var hash = this.hash;
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
    //Nav BG and TopBTN function
    (function scrollFn() {
        if ($(document).scrollTop() >= 1) {
            $(".up-scroll").addClass("display");
            setTimeout(function () {
                $(".up-scroll").addClass("active");
            }, 100);
        };
        $(document).scroll(function () {
            if ($(this).scrollTop() >= 1) {
                $(".up-scroll").addClass("display");
                setTimeout(function () {
                    $(".up-scroll").addClass("active");
                }, 10);
            } else {
                $(".up-scroll").removeClass("active");
            };
        });
    })();

    
});

