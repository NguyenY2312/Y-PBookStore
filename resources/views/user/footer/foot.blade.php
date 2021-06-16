<style>
	.time-dialog{
		width:60px;
		height:30px
	}
</style>
<!--jQuery-->
<script src="{{ asset('user/js/jquery-2.2.3.min.js') }}"></script>
	<script>
		$(document).ready(function () {
			$("#myModal").modal();
		});
	</script>
	<!-- // modal -->
	<!--search jQuery-->
	<script src="{{ asset('user/js/modernizr-2.6.2.min.js') }}"></script>
	<script src="{{ asset('user/js/classie-search.js') }}"></script>
	<script src="{{ asset('user/js/demo1-search.js') }}"></script>
	<!--//search jQuery-->
	<!-- cart-js -->
	<script src="{{ asset('user/js/minicart.js') }}"></script>
	<script src="{{ asset('user/js/Youtube.min.js') }}"></script>
	<script src="{{ asset('user/js/Youtube.js') }}"></script>
	<script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
	<script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
	<script>
		googles.render();

		googles.cart.on('googles_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- Setup video.js -->
	<script>
		var myPlayer = videojs('my-player');
		myPlayer.src({type: 'video/mp4', src: '//vjs.zencdn.net/v/oceans.mp4'});
		myPlayer.dimensions(1200, 500);
		function setTime() {
			var time = myPlayer.currentTime();
			var itime = parseInt(time);
			alert(itime);
		}
		/* myPlayer.setTimeout(setTime, 11000);
		myPlayer.setTimeout(setTime, 21000); */
		myPlayer.on('play', function() {
			var time = myPlayer.currentTime();
			var hour = parseInt(time/3600);
			var minute = parseInt((time%3600)/60);
			var sec = parseInt(time-minute*60-hour*3600);
			var itime = hour + "h:" + minute + "m:" + sec + "s";
			var showTime = document.getElementById('showTime');
			showTime.value = itime;
		});
		function Play(){
			myPlayer.pause();
			var hour = document.getElementById('hour').value;
			var min = document.getElementById('min').value;
			var sec = document.getElementById('sec').value;
			if(hour === "" ) hour = 0;
			if(min === "" ) min = 0;
			if(sec === "" ) sec = 0;
			var timePlay = parseInt(hour)*3600 + parseInt(min)*60 + parseInt(sec);
			myPlayer.currentTime(timePlay);
			myPlayer.play();
		}
	</script>
	<!-- //cart-js -->
	<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
	</script>
	>
	<!--quantity-->
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<!--close-->
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {
				$('.rem1').fadeOut('slow', function (c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close2').on('click', function (c) {
				$('.rem2').fadeOut('slow', function (c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close3').on('click', function (c) {
				$('.rem3').fadeOut('slow', function (c) {
					$('.rem3').remove();
				});
			});
		});
	</script>
	<!--//close-->
	<!-- carousel -->
	<!-- price range (top products) -->
	<script src="{!! asset('user/js/jquery-ui.js') !!}"></script>
		<script>
			//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 700000,
					values: [0, 150000],
					slide: function (event, ui) {
						$("#amount").val( ui.values[0] +"đ" + " - " + ui.values[1]+ "đ");
					}
				});
				$("#amount").val( $("#slider-range").slider("values", 0)+"đ" + " - " + $("#slider-range").slider("values", 1)+"đ" );

			}); //]]>
		</script>
	<!--// Count-down -->
	<script src="{{ asset('user/js/owl.carousel.js') }}"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					900: {
						items: 3,
						nav: false
					},
					1000: {
						items: 4,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>

	<!-- //end-smooth-scrolling -->
		<!-- single -->
		<script src="{!! asset('user/js/imagezoom.js') !!}"></script>
		<!-- single -->
		<!-- script for responsive tabs -->
		<script src="{!! asset('user/js/easy-responsive-tabs.js') !!}"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
		<!-- FlexSlider -->
		<script src="{!! asset('user/js/jquery.flexslider.js') !!}"></script>
		<script>
			// Can also be used with $(document).ready()
			$(window).load(function () {
				$('.flexslider1').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				});
			});
		</script>
		<!-- //FlexSlider-->

	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
  <script src="{{ asset('user/js/move-top.js') }}"></script>
    <script src="{{ asset('user/js/easing.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->

	<script src="{{ asset('user/js/bootstrap.js') }}"></script>
	<!-- js file -->