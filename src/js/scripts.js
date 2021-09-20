import $ from "jquery";
import 'owl.carousel';

(function(funcName, baseObj) {
    // The public function name defaults to window.docReady
    // but you can pass in your own object and own function name and those will be used
    // if you want to put them in a different namespace
    funcName = funcName || "docReady";
    baseObj = baseObj || window;
    var readyList = [];
    var readyFired = false;
    var readyEventHandlersInstalled = false;

    // call this when the document is ready
    // this function protects itself against being called more than once
    function ready() {
        if (!readyFired) {
            // this must be set to true before we start calling callbacks
            readyFired = true;
            for (var i = 0; i < readyList.length; i++) {
                // if a callback here happens to add new ready handlers,
                // the docReady() function will see that it already fired
                // and will schedule the callback to run right after
                // this event loop finishes so all handlers will still execute
                // in order and no new ones will be added to the readyList
                // while we are processing the list
                readyList[i].fn.call(window, readyList[i].ctx);
            }
            // allow any closures held by these functions to free
            readyList = [];
        }
    }

    function readyStateChange() {
        if ( document.readyState === "complete" ) {
            ready();
        }
    }

    // This is the one public interface
    // docReady(fn, context);
    // the context argument is optional - if present, it will be passed
    // as an argument to the callback
    baseObj[funcName] = function(callback, context) {
        if (typeof callback !== "function") {
            throw new TypeError("callback for docReady(fn) must be a function");
        }
        // if ready has already fired, then just schedule the callback
        // to fire asynchronously, but right away
        if (readyFired) {
            setTimeout(function() {callback(context);}, 1);
            return;
        } else {
            // add the function and context to the list
            readyList.push({fn: callback, ctx: context});
        }
        // if document already ready to go, schedule the ready function to run
        if (document.readyState === "complete") {
            setTimeout(ready, 1);
        } else if (!readyEventHandlersInstalled) {
            // otherwise if we don't have event handlers installed, install them
            if (document.addEventListener) {
                // first choice is DOMContentLoaded event
                document.addEventListener("DOMContentLoaded", ready, false);
                // backup is window load event
                window.addEventListener("load", ready, false);
            } else {
                // must be IE
                document.attachEvent("onreadystatechange", readyStateChange);
                window.attachEvent("onload", ready);
            }
            readyEventHandlersInstalled = true;
        }
    }
})("docReady", window);

// Dom is ready
docReady(function() {
	navToggle();
	sliderBanner();
	howItWorksSlider();
	accordion();
	testimonialSlider();
});

// Window onload
window.onload = function() {
	setTimeout(function(){
		// $('#preloader').removeClass('animate');
		const noScollJs = document.querySelector('.no-scroll_js');
		if (noScollJs) {
			noScollJs.classList.remove('no-scroll_js');
		}

		setTimeout(function() {
			var sal = require('sal.js');

			sal({
				threshold: 0.5,
				once: true,
			});
		}, 200);

	}, 500);
}

// Window onresize
window.onresize = reportWindowSize;

// Function lists.
function navToggle() {
	const menuHamburder = document.getElementById('menu-hamburger');
	if (menuHamburder) {
		menuHamburder.addEventListener('click', function(e) {
			e.preventDefault();
		
			if ( document.body.classList.contains('active-header_js') ) {
				document.body.classList.remove('active-header_js');
				
				setTimeout(function(){
					document.body.classList.remove('no-scroll_js');
				},1000);
	
			} else {
				document.body.classList.add('active-header_js');
				document.body.classList.add('no-scroll_js');
			}
		});
	}
}

function sliderBanner() {
	$('#slider-banner .owl-carousel').owlCarousel({
		items: 1,
		loop: true,
		dots: true,
		autoplay: true,
		smartSpeed: 700,
	});
}

function testimonialSlider() {
	$('#testimonials .owl-carousel').owlCarousel({
		items: 2,
		loop: true,
		margin: 30,
		smartSpeed: 700,
		responsive:{
			0:{
				items:1,
				margin: 0,
			},
			600:{
				items:1,
				dots: true,
				margin: 0,
			},
			1000:{
				items:2,
				margin: 0,
			}
		}
	});
}

function howItWorksSlider() {
	$('#how-it-works .owl-carousel, #service .owl-carousel').owlCarousel({
		smartSpeed: 700,
		responsive:{
			0:{
				items:1,
				dots: true
			},
			600:{
				items:2,
			},
			1000:{
				items:4,
			}
		}
	});
}

function accordion() {
	const accordion = document.querySelector('#faq .content-acc');

	if (accordion === null) {
		return;
	}

	const items = accordion.querySelectorAll('.acc-item');

	items.forEach((item) => {
		const openCloseBtn = item.querySelector('#open-close-btn');
		const title = item.querySelector('.acc-title');
		openCloseBtn.textContent = '+';
		
		title.addEventListener('click', (e) => {
			e.preventDefault();
			
			checkToggleItem(item);
			toggle_item(item); 
		});

		openCloseBtn.addEventListener('click', (e) => {
			e.preventDefault();
			
			checkToggleItem(item);
			toggle_item(item); 
		});
	});

	const checkToggleItem = (item) => {
		const opened_item = accordion.querySelector('.is-open');

		if (opened_item && opened_item !== item) {
			toggle_item(opened_item);
		}
	}

	const toggle_item = (item) => {
		const button = item.querySelector('#open-close-btn');

		if (item.classList.contains('is-open')) {
			item.classList.remove('is-open');
			button.textContent = '+';
		} else {
			item.classList.add('is-open');
			button.textContent = '-';
		}
	}
}

function reportWindowSize() {
  if (window.innerWidth > 1024) {
	  document.body.classList.remove('active-header_js')
  }
}