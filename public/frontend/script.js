/* ===================================
   JQUERY FUNCTIONALITY
   =================================== */

$(document).ready(function () {
    // ===================================
    // OFFCANVAS MENU HANDLING
    // ===================================

    var offcanvasElement = document.getElementById("offcanvasNavbar");

    if (offcanvasElement) {
        offcanvasElement.addEventListener("show.bs.offcanvas", function () {
            console.log("Offcanvas menu opened");
            document.body.style.overflow = "hidden";
        });

        // Use 'hidden.bs.offcanvas' instead of 'hide.bs.offcanvas'
        offcanvasElement.addEventListener("hidden.bs.offcanvas", function () {
            console.log("Offcanvas menu closed");
            document.body.style.overflow = "auto";
        });
    }

    // Close offcanvas when a link is clicked
    document.querySelectorAll(".offcanvas .nav-link").forEach(function (link) {
        link.addEventListener("click", function () {
            var offcanvasInstance =
                bootstrap.Offcanvas.getInstance(offcanvasElement);
            if (offcanvasInstance) {
                offcanvasInstance.hide();
            }
        });
    });

    // ===================================
    // SMOOTH SCROLL FOR NAVIGATION LINKS
    // ===================================

    $('a[href^="#"]').on("click", function (e) {
        e.preventDefault();

        var target = $(this).attr("href");

        if ($(target).length) {
            $("html, body").animate(
                {
                    scrollTop: $(target).offset().top - 80,
                },
                800,
                "easeInOutQuad",
            );
        }
    });

    // ===================================
    // NAVBAR BACKGROUND ON SCROLL
    // ===================================

    $(window).on("scroll", function () {
        var scrollTop = $(this).scrollTop();

        if (scrollTop > 50) {
            $(".navbar").addClass("scrolled");
        } else {
            $(".navbar").removeClass("scrolled");
        }
    });

    // ===================================
    // ACTIVE NAVIGATION LINK HIGHLIGHT
    // ===================================

    $(window).on("scroll", function () {
        var scrollPosition = $(window).scrollTop();

        $("section").each(function () {
            var sectionTop = $(this).offset().top - 100;
            var sectionId = $(this).attr("id");

            if (scrollPosition >= sectionTop) {
                $(".navbar-nav .nav-link").removeClass("active");
                $('.navbar-nav a[href="#' + sectionId + '"]').addClass(
                    "active",
                );
            }
        });
    });

    // ===================================
    // GET STARTED BUTTON CLICK
    // ===================================

    $(".btn-get-started").on("click", function () {
        // Add click animation
        $(this).addClass("btn-clicked");

        setTimeout(function () {
            $(".btn-get-started").removeClass("btn-clicked");
        }, 600);

        // Scroll to contact section or show modal
        console.log("Get Started button clicked");
        // You can add your custom logic here
    });

    // ===================================
    // QUOTE BUTTON CLICK
    // ===================================

    $(".quote-btn").on("click", function (e) {
        e.preventDefault();
        console.log("Get a quote button clicked");
        // You can add modal or redirect logic here
    });

    // ===================================
    // STAT CARDS COUNTER ANIMATION
    // ===================================

    function animateCounters() {
        var hasAnimated = false;

        $(window).on("scroll", function () {
            if (!hasAnimated && $(".stat-card").length) {
                var statCardsTop = $(".stat-card").first().offset().top;
                var windowBottom = $(window).scrollTop() + $(window).height();

                if (windowBottom > statCardsTop) {
                    animateStatCards();
                    hasAnimated = true;
                }
            }
        });
    }

    function animateStatCards() {
        // Animate 24Hrs
        animateValue(".stat-card-24hrs .stat-number", 0, 24, 1500);

        // Animate 500+
        animateValue(".stat-card-500 .stat-number", 0, 500, 1500, "+");

        // Animate 98%
        animateValue(".stat-card-98 .stat-number", 0, 98, 1500, "%");
    }

    function animateValue(element, start, end, duration, suffix = "") {
        var range = end - start;
        var increment = end > start ? 1 : -1;
        var stepTime = Math.abs(Math.floor(duration / range));
        var current = start;

        var timer = setInterval(function () {
            current += increment;

            if (suffix) {
                $(element).text(current + suffix);
            } else {
                $(element).text(current);
            }

            if (current == end) {
                clearInterval(timer);
            }
        }, stepTime);
    }

    animateCounters();

    // ===================================
    // RESPONSIVE NAVBAR TOGGLE
    // ===================================

    $(".navbar-toggler").on("click", function () {
        $(this).toggleClass("active");
    });

    // ===================================
    // HOVER EFFECTS ON STAT CARDS
    // ===================================

    $(".stat-card")
        .on("mouseenter", function () {
            $(this).css({
                transform: "translateY(-10px) scale(1.05)",
                "box-shadow": "0 12px 35px rgba(0, 0, 0, 0.25)",
            });
        })
        .on("mouseleave", function () {
            $(this).css({
                transform: "translateY(0) scale(1)",
                "box-shadow": "0 8px 25px rgba(0, 0, 0, 0.15)",
            });
        });

    // ===================================
    // BUTTON HOVER EFFECTS
    // ===================================

    $(".btn-get-started")
        .on("mouseenter", function () {
            $(this).css({
                transform: "translateY(-3px)",
                "box-shadow": "0 6px 20px rgba(0, 0, 0, 0.4)",
            });
        })
        .on("mouseleave", function () {
            $(this).css({
                transform: "translateY(0)",
                "box-shadow": "0 4px 15px rgba(0, 0, 0, 0.3)",
            });
        });

    // ===================================
    // WINDOW RESIZE HANDLER
    // ===================================

    var resizeTimer;
    $(window).on("resize", function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            // Handle responsive adjustments
            console.log("Window resized");

            // Close offcanvas on resize to desktop
            if ($(window).width() >= 992) {
                var offcanvasInstance =
                    bootstrap.Offcanvas.getInstance(offcanvasElement);
                if (offcanvasInstance) {
                    offcanvasInstance.hide();
                }
            }
        }, 250);
    });

    // ===================================
    // LAZY LOADING IMAGES (if needed)
    // ===================================

    if ("IntersectionObserver" in window) {
        var imageObserver = new IntersectionObserver(function (
            entries,
            observer,
        ) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.add("loaded");
                    observer.unobserve(img);
                }
            });
        });

        document.querySelectorAll("img[data-src]").forEach(function (img) {
            imageObserver.observe(img);
        });
    }

    // ===================================
    // KEYBOARD NAVIGATION
    // ===================================

    $(document).on("keydown", function (e) {
        // ESC key to close offcanvas menu
        if (e.keyCode === 27) {
            var offcanvasInstance =
                bootstrap.Offcanvas.getInstance(offcanvasElement);
            if (offcanvasInstance) {
                offcanvasInstance.hide();
            }
        }
    });

    // ===================================
    // FORM VALIDATION (for future use)
    // ===================================

    function validateForm(formData) {
        var isValid = true;

        $.each(formData, function (key, value) {
            if (!value || value.trim() === "") {
                isValid = false;
                return false;
            }
        });

        return isValid;
    }

    // ===================================
    // UTILITY FUNCTION: DEBOUNCE
    // ===================================

    function debounce(func, wait) {
        var timeout;
        return function executedFunction(...args) {
            var later = function () {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    // ===================================
    // UTILITY FUNCTION: THROTTLE
    // ===================================

    function throttle(func, limit) {
        var inThrottle;
        return function () {
            var args = arguments;
            var context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(function () {
                    inThrottle = false;
                }, limit);
            }
        };
    }

    // ===================================
    // ACCESSIBILITY: FOCUS MANAGEMENT
    // ===================================

    $(".navbar-toggler").on("click", function () {
        if ($(".offcanvas").hasClass("show")) {
            $(".offcanvas .nav-link:first").focus();
        }
    });

    // ===================================
    // OFFCANVAS ANIMATION ENHANCEMENT
    // ===================================

    // Add smooth animation to offcanvas
    var style = document.createElement("style");
    style.textContent = `
        .offcanvas {
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1) !important;
        }
        
        .offcanvas-backdrop {
            transition: opacity 0.3s ease !important;
        }
    `;
    document.head.appendChild(style);

    // ===================================
    // CONSOLE LOG FOR DEBUGGING
    // ===================================

    console.log("ENVERO Landing Page - jQuery initialized successfully");
    console.log("Responsive design with Offcanvas menu active");
    console.log("Bootstrap version: 5.3.0");
    console.log("Mobile menu slides in from the right side");
});

// ===================================
// ADDITIONAL JQUERY EASING FUNCTIONS
// ===================================

// Add easeInOutQuad easing function if not available
if (typeof jQuery !== "undefined") {
    jQuery.easing.easeInOutQuad = function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return (c / 2) * t * t + b;
        return (-c / 2) * (--t * (t - 2) - 1) + b;
    };
}

/* ===================================
   JQUERY FUNCTIONALITY FOR SOLUTIONS SECTION
   =================================== */

$(document).ready(function () {
    // ===================================
    // SMOOTH SCROLL FOR NAVIGATION LINKS
    // ===================================

    $('a[href^="#"]').on("click", function (e) {
        e.preventDefault();

        var target = $(this).attr("href");

        if ($(target).length) {
            $("html, body").animate(
                {
                    scrollTop: $(target).offset().top - 80,
                },
                800,
                "easeInOutQuad",
            );
        }
    });

    // ===================================
    // CARD HOVER EFFECTS
    // ===================================

    $(".solutions-feature-card")
        .on("mouseenter", function () {
            $(this).css({
                transform: "translateY(-8px)",
                "box-shadow": "0 12px 24px rgba(0, 0, 0, 0.12)",
            });
        })
        .on("mouseleave", function () {
            $(this).css({
                transform: "translateY(0)",
                "box-shadow": "0 2px 8px rgba(0, 0, 0, 0.08)",
            });
        });

    // ===================================
    // FEATURE LIST ITEM ANIMATION
    // ===================================

    $(".solutions-feature-item").each(function (index) {
        $(this).css({
            opacity: "0",
            transform: "translateX(-20px)",
        });

        $(this)
            .delay(index * 100)
            .animate(
                {
                    opacity: "1",
                },
                600,
                function () {
                    $(this).css("transform", "translateX(0)");
                },
            );
    });

    // ===================================
    // READ MORE BUTTON CLICK HANDLER
    // ===================================

    $(".solutions-read-more-btn").on("click", function (e) {
        e.preventDefault();

        var $button = $(this);
        var originalText = $button.html();

        // Add click animation
        $button.css({
            transform: "scale(0.95)",
            opacity: "0.8",
        });

        setTimeout(function () {
            $button.css({
                transform: "scale(1)",
                opacity: "1",
            });
        }, 150);

        console.log("Read More button clicked");
        // You can add your custom logic here (e.g., show modal, navigate to page)
    });

    // ===================================
    // CARD FEATURE ITEM HOVER EFFECT
    // ===================================

    $(".solutions-feature-item")
        .on("mouseenter", function () {
            $(this).find(".solutions-list-icon").css({
                transform: "rotate(90deg)",
                color: "#333333",
            });
        })
        .on("mouseleave", function () {
            $(this).find(".solutions-list-icon").css({
                transform: "rotate(0)",
                color: "#333333",
            });
        });

    // ===================================
    // INTERSECTION OBSERVER FOR LAZY ANIMATION
    // ===================================

    if ("IntersectionObserver" in window) {
        var observerOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -100px 0px",
        };

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    $(entry.target).addClass("in-view");
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        $(".solutions-feature-card").each(function () {
            observer.observe(this);
        });
    }

    // ===================================
    // WINDOW RESIZE HANDLER
    // ===================================

    var resizeTimer;
    $(window).on("resize", function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            console.log("Window resized - responsive adjustments applied");
        }, 250);
    });

    // ===================================
    // KEYBOARD NAVIGATION
    // ===================================

    $(document).on("keydown", function (e) {
        // Tab key for accessibility
        if (e.keyCode === 9) {
            var $focused = $(":focus");

            if ($focused.hasClass("solutions-read-more-btn")) {
                console.log("Focused on read more button");
            }
        }
    });

    // ===================================
    // SCROLL ANIMATION TRIGGER
    // ===================================

    $(window).on("scroll", function () {
        var scrollPosition = $(window).scrollTop();
        var sectionTop = $(".solutions-wrapper").offset().top;
        var windowHeight = $(window).height();

        if (scrollPosition + windowHeight > sectionTop) {
            $(".solutions-header-block").addClass("animated");
        }
    });

    // ===================================
    // CARD STAGGER ANIMATION ON LOAD
    // ===================================

    function animateCardsOnLoad() {
        var $cards = $(".solutions-card-wrapper");

        $cards.each(function (index) {
            var $card = $(this);
            var delay = index * 150;

            setTimeout(function () {
                $card.css({
                    opacity: "1",
                    transform: "translateY(0)",
                });
            }, delay);
        });
    }

    // Trigger animation on page load
    animateCardsOnLoad();

    // ===================================
    // UTILITY FUNCTION: DEBOUNCE
    // ===================================

    function debounce(func, wait) {
        var timeout;
        return function executedFunction(...args) {
            var later = function () {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    // ===================================
    // UTILITY FUNCTION: THROTTLE
    // ===================================

    function throttle(func, limit) {
        var inThrottle;
        return function () {
            var args = arguments;
            var context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(function () {
                    inThrottle = false;
                }, limit);
            }
        };
    }

    // ===================================
    // ACCESSIBILITY: FOCUS MANAGEMENT
    // ===================================

    $(".solutions-read-more-btn")
        .on("focus", function () {
            $(this).closest(".solutions-feature-card").css({
                outline: "2px solid #333333",
                "outline-offset": "2px",
            });
        })
        .on("blur", function () {
            $(this).closest(".solutions-feature-card").css({
                outline: "none",
            });
        });

    // ===================================
    // DYNAMIC CONTENT LOADING (for future use)
    // ===================================

    function loadCardContent(cardIndex) {
        // This function can be used to dynamically load content
        console.log("Loading content for card: " + cardIndex);
    }

    // ===================================
    // CONSOLE LOG FOR DEBUGGING
    // ===================================

    console.log("Solutions Section - jQuery initialized successfully");
    console.log("Responsive design active");
    console.log("Bootstrap version: 5.3.0");
    console.log("All animations and interactions are ready");
});

// ===================================
// ADDITIONAL JQUERY EASING FUNCTIONS
// ===================================

// Add easeInOutQuad easing function if not available
if (typeof jQuery !== "undefined") {
    jQuery.easing.easeInOutQuad = function (x, t, b, c, d) {
        if ((t /= d / 2) < 1) return (c / 2) * t * t + b;
        return (-c / 2) * (--t * (t - 2) - 1) + b;
    };
}

// ===================================
// WINDOW LOAD EVENT
// ===================================

$(window).on("load", function () {
    console.log("All resources loaded - page is fully interactive");
});

$(document).ready(function () {
    // View More button hover effect
    $(".view-more-btn").hover(
        function () {
            $(this).find(".btn-icon").css("transform", "translateX(5px)");
        },
        function () {
            $(this).find(".btn-icon").css("transform", "translateX(0)");
        },
    );

    // Add transition to button icon
    $(".btn-icon").css("transition", "all 0.3s ease");

    // Click event for view more buttons
    $(".view-more-btn").on("click", function () {
        const cardTitle = $(this)
            .closest(".service-card")
            .find(".card-title")
            .text();
        alert("View more details about: " + cardTitle);
    });
});

$(document).ready(function () {
    // Smooth scroll animation on load
    $(".project-card-wrapper").each(function (index) {
        $(this).css("opacity", "0").css("transform", "translateY(30px)");
        $(this)
            .delay(index * 100)
            .animate(
                {
                    opacity: 1,
                },
                500,
                function () {
                    $(this).css("transform", "translateY(0)");
                },
            );
    });

    // Click handler for view more buttons
    $(".project-link-btn").on("click", function (e) {
        e.preventDefault();
        const title = $(this)
            .closest(".project-card-wrapper")
            .find(".project-heading")
            .text();
        alert("Opening blog post: " + title);
    });
});

// Form validation and submission
const contactForm = document.getElementById("contactForm");

// contactForm.addEventListener('submit', function (e) {
//     e.preventDefault();

//     // Get form values
//     const fullName = document.getElementById('fullName').value.trim();
//     const email = document.getElementById('email').value.trim();
//     const phone = document.getElementById('phone').value.trim();
//     const subject = document.getElementById('subject').value;
//     const message = document.getElementById('message').value.trim();
//     const terms = document.getElementById('terms').checked;

//     // Validation
//     if (!fullName) {
//         alert('Please enter your full name');
//         document.getElementById('fullName').focus();
//         return false;
//     }

//     if (!email) {
//         alert('Please enter your email address');
//         document.getElementById('email').focus();
//         return false;
//     }

//     const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//     if (!emailRegex.test(email)) {
//         alert('Please enter a valid email address');
//         document.getElementById('email').focus();
//         return false;
//     }

//     if (!phone) {
//         alert('Please enter your phone number');
//         document.getElementById('phone').focus();
//         return false;
//     }

//     const phoneRegex = /^[\d\s\-\+\(\)\.]+$/;
//     if (!phoneRegex.test(phone) || phone.replace(/\D/g, '').length < 7) {
//         alert('Please enter a valid phone number');
//         document.getElementById('phone').focus();
//         return false;
//     }

//     if (!subject) {
//         alert('Please select a subject');
//         document.getElementById('subject').focus();
//         return false;
//     }

//     if (!message) {
//         alert('Please enter your message');
//         document.getElementById('message').focus();
//         return false;
//     }

//     if (!terms) {
//         alert('Please accept the terms and conditions');
//         document.getElementById('terms').focus();
//         return false;
//     }

//     // Success
//     alert('Thank you! Your message has been sent successfully. We will get back to you soon.');
//     contactForm.reset();
// });

// Focus effects
const inputs = document.querySelectorAll(".form-control, .form-select");
inputs.forEach((input) => {
    input.addEventListener("focus", function () {
        this.style.borderColor = "#ff6b35";
    });
    input.addEventListener("blur", function () {
        this.style.borderColor = "#e5e5e5";
    });
});

// Tab switching functionality - vanilla JavaScript (no jQuery required)
document.addEventListener("DOMContentLoaded", function () {
    const toggleButtons = document.querySelectorAll(".toggle-btn");

    toggleButtons.forEach((button) => {
        button.addEventListener("click", function (e) {
            e.preventDefault();

            // Get the section name
            const sectionName = this.getAttribute("data-section");

            // Remove active class from all buttons and sections
            toggleButtons.forEach((btn) => btn.classList.remove("active"));
            document.querySelectorAll(".content-section").forEach((section) => {
                section.classList.remove("active");
            });

            // Add active class to clicked button and show corresponding section
            this.classList.add("active");
            const targetSection = document.getElementById(sectionName);
            if (targetSection) {
                targetSection.classList.add("active");
            }
        });
    });
});

$(document).ready(function () {
    // Primary button click animation
    $(".cta-btn-primary").on("click", function () {
        $(this).css({
            transform: "scale(0.98)",
            transition: "transform 0.1s ease",
        });

        setTimeout(() => {
            $(this).css({
                transform: "scale(1)",
                transition: "transform 0.3s ease",
            });
        }, 100);
    });

    // Scroll animation for elements
    function scrollAnimation() {
        var scrollPosition = $(window).scrollTop();
        var windowHeight = $(window).height();

        $(".cta-headline").each(function () {
            var elementOffset = $(this).offset().top;
            if (scrollPosition + windowHeight > elementOffset) {
                $(this).css("opacity", "1");
            }
        });
    }

    $(window).on("scroll", function () {
        scrollAnimation();
    });

    // Initial animation on page load
    scrollAnimation();

    // Console log for debugging
    console.log("CTA Section - jQuery initialized successfully");
});

$(document).ready(function () {
    $("#loader").hide();
});

function showServices(type) {
    // Hide all images
    const images = document.querySelectorAll(".services-image");
    images.forEach((img) => img.classList.remove("active"));

    // Remove active class from all items
    const items = document.querySelectorAll(".services-item");
    items.forEach((item) => item.classList.remove("active"));

    // Show selected image
    document.querySelector(".services-image-" + type).classList.add("active");

    // Add active class to clicked item
    event.target.closest(".services-item").classList.add("active");
}

// $(document).ready(function () {
//     $('.FAQ-faq-item').click(function () {
//         // Close other items
//         $('.FAQ-faq-item').not(this).removeClass('FAQ-active');
//         // Toggle current item
//         $(this).toggleClass('FAQ-active');
//     });

//     // Close button
//     $('.FAQ-close-btn').click(function () {
//         alert('Close button clicked');
//     });
// });

$(document).ready(function () {
    // ===================================
    // FAQ ACCORDION ITEM CLICK HANDLER
    // ===================================

    $(".FAQ-faq-item").on("click", function () {
        // Close other items
        $(".FAQ-faq-item").not(this).removeClass("FAQ-active");

        // Toggle current item
        $(this).toggleClass("FAQ-active");
    });

    // ===================================
    // FAQ CLOSE BUTTON HANDLER
    // ===================================

    $(".FAQ-close-btn").on("click", function (e) {
        e.preventDefault();
        e.stopPropagation();

        // Close the FAQ item
        $(".FAQ-faq-item").removeClass("FAQ-active");

        console.log("Close button clicked");
    });
});
