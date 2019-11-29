

    <footer id="footer"><!--Footer-->
		
		
		<div class="footer-widget">
			<div class="container">
				<div class="row  justify-content-center">
					<div class="col-md-3">
						<div class="single-widget">
							<h2>About FURNITURE</h2>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim nobis minus repellat laborum! Rerum voluptas tempora, ipsa quia rem sit repellendus similique autem iure eaque, distinctio ullam saepe dignissimos. Dolorem.</p>
							
						</div>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-widget">
							<h2>Newsletter</h2>
							<form action="#" class="searchform">
								<input type="email" placeholder="Your email address" required />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: block;"><i class="fa fa-angle-up"></i></a>

    


    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script>
    	$('.slider').slick({
    		dots: true,
    		autoplay: true,
  			autoplaySpeed: 2000
    	});

    	$('.slider-cat').slick({
    		autoplay: true,
  			autoplaySpeed: 2000,
		  	slidesToShow: 8,
		  	arrows: false
    	});


    </script>

     <script>
        $(window).scroll(function(){
            var category = $('.category');
            var card_title = $('.card-title');
            var sticky = $('.category'),
              scroll = $(window).scrollTop();

            if (scroll >= 0) {
                sticky.addClass('navigation_sticky');

            }else {
                sticky.removeClass('navigation_sticky');
            }

            if (scroll == 0) {
                sticky.removeClass('navigation_sticky');

            }
        });
    </script>

    <script>
        var txt = "Search in Bestdeals?";
        var timeOut;
        var txtLen = txt.length;
        var char = 0;
        $('.search-box').attr('placeholder', '|');
        (function typeIt() {
            var humanize = Math.round(Math.random() * (200 - 30)) + 30;
            timeOut = setTimeout(function () {
                char++;
                var type = txt.substring(0, char);
                $('.search-box').attr('placeholder', type + '|');
                typeIt();

                if (char == txtLen) {
                    $('.search-box').attr('placeholder', $('.search-box').attr('placeholder').slice(0, -1)) // remove the '|'
                    clearTimeout(timeOut);
                }

            }, humanize);
        }());
    </script>