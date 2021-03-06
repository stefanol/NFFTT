<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <title>Not Far From The Tree</title>

  <link rel="shortcut icon" href="images/favicon.png"> 
  <link rel="apple-itouch-icon" href="images/favicon.png">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <!-- Stylesheets -->
  <link rel="stylesheet" href="styles/reset.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="styles/main.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="styles/dropdown-nav.css" type="text/css" media="screen" />
  <link rel="stylesheet" type="text/css" href="styles/jquery.fancybox.css?v=2.1.5" media="screen" />
  <link rel="stylesheet" type="text/css" href="styles/jquery.fancybox-buttons.css?v=1.0.5" />
  <link rel="stylesheet" href="styles/print.css" type="text/css" media="print" >


  <script>

	  $(document).ready(function(){
	    $("#menu").click(function(){
	      $("nav").slideToggle();
	    });
	});

  </script>
</head>
<body>
<!--Nav-->
	<!--Header-->

<!-- 	<div></div> -->

	<header id="mainHeader">   
    	<div id="menu"><img src="images/pics/menu.svg"></div>
    	<a href="index.html"><img src="images/logos/logo.png" height="70" width="130"></a>
    	<!-- <p id="menu">Menu</p> -->
    	        <nav id="mainNav">
	        <ul class="dropdown">
		        <li><a href="#containMain" class="smoothScroll">Home</a></li>
		        <li>
		        	<a href="#aboutUsWrap" class="smoothScroll">About Us</a>
		        	<ul>
		        		<li><a href="#whatWeDo" class="smoothScroll">What We Do</a></li>
		        		<li><a href="#ourTeam" class="smoothScroll">Who We Are</a></li>
		        	</ul>
		        </li>
		        <li><a href="#gallery" class="smoothScroll">Gallery</a></li>
		        <li><a href="#getInvolved" class="smoothScroll">Get Involved</a></li>
		        <li><a href="#blog" class="smoothScroll">Blog</a></li>
		        <li><form id="paypalBtn" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
			<input type="hidden" name="cmd" value="_donations">
			<input type="hidden" name="business" value="nfftt@gmail.com">
			<input type="hidden" name="lc" value="US">
			<input type="hidden" name="item_name" value="Not Far From The Tree">
			<input type="hidden" name="no_note" value="0">
			<input type="hidden" name="currency_code" value="CAD">
			<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
			<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="paypal" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form></li>
	        </ul>
    <!--Paypal button insert-->

		</nav>           
    </header>

	<!---Home-->
	<div id="containMain" data-stellar-background-ratio=".3">
	<section id="left">
		<div id="mission">
			<h1>We're Not Too Far</h1>
			<p>Not Far From The Tree puts Toronto’s fruit to good use by picking and sharing the bounty. When a homeowner can’t keep up with the abundant harvest produced by their tree, they let us know and we mobilize our volunteers to pick the bounty.</p>
			<a href="#"><input class="topBtn" type="button" value="View more" /></a>
		</div>
	</section>

	<section id="treeDonate">
		<a href="#getInvolved" class="smoothScroll"><img src="images/pics/donateTree.png"></a>
	</section>

	<section id="right">
		<div id="totalPicked">
			<h1>Total Picked This Year</h1>
			<h2><span class="emphasis">22,154 lbs!</span></h2>
			<p>Picked so far: sweet cherries, pears, apricots, sour cherries, mulberries, serviceberries, grapes, crab apples, plums, apples, dogwood cherries, ginkgo and walnuts!</p>
			<a href="#"><input class="topBtn" type="button" value="View more" /></a>
		</div>
	</section>
	</div><!--end div containMain-->

	<!--About-->
	<div id="aboutUsWrap" data-stellar-background-ratio=".3">
		<section id="aboutUs">
			<h1>About Not Far From The Tree</h1>
			<p>Not Far From The Tree puts Toronto’s fruit to good use by picking and sharing the bounty.

			When a homeowner can’t keep up with the abundant harvest produced by their tree, they let us know and we mobilize our volunteers to pick the bounty. The harvest is split three ways: 1/3 is offered to the tree owner, 1/3 is shared among the volunteers, and 1/3 is delivered by bicycle to be donated to food banks, shelters, and community kitchens in the neighbourhood so that we’re putting this existing source of fresh fruit to good use. It’s a win-win-win situation!

			This simple act has profound impact. With an incredible crew of volunteers, we’re making good use of healthy food, addressing climate change with hands-on community action, and building community by sharing the urban abundance.

			As a project of Tides Canada Initiatives Society, Not Far From The Tree is committed to the principles of dignity, independence, integration and equal opportunity. We believe that helping to create a country, and an organization, where every person can fully participate benefits our people, our partners and our communities.

			Tides Canada’s Accessibility Policy and Plan outline the various considerations our staff, volunteers and contractors need to take into account when communicating with an individual with a disability. They also outline our guidelines regarding training, what to do in the case of a temporary disruption and how we accept feedback regarding the way Tides Canada has interacted with a person with a disability.</p>
		</section>

	<!--Donors-->
	<aside id="donors">
		<h1>Our Donors</h1>
		<ul>
			<li><a href="https://fef.td.com/" target="_blank"><img src="images/donors/TD.jpg" height="75" width="200"></a></li>
			<li><a href="http://metcalffoundation.com/" target="_blank"><img src="images/donors/Metcalf.jpg" height="75" width="200"></a></li>
			<li><a href="http://www.otf.ca/en/" target="_blank"><img src="images/donors/OTFHORIZ.jpg" height="75" width="200"></a></li>
			<li><a href="http://www.kpmg.com/Ca/en/Pages/default.aspx" target="_blank"><img src="images/donors/KPMG.jpg" height="75" width="200"></a></li>
			<li><a href="https://tcf.ca/" target="_blank"><img src="images/donors/TCF.jpg" height="75" width="200"></a></li>
			<li><a href="http://www.sprottfoundation.com/" target="_blank"><img src="images/donors/sprott.jpg" height="75" width="200"></a></li>

			<li><a href="http://www.earthday.ca/" target="_blank"><img src="images/donors/EDC.jpg" height="75" width="200"></a></li>
			<li><a href="http://www.toronto.ca/livegreen/index.htm" target="_blank"><img src="images/donors/LiveGreen.jpg" height="75" width="200"></a></li>
			<li><a href="http://www.greenlivingonline.com/" target="_blank"><img src="images/donors/greenLiving.jpg" height="75" width="200"></a></li>
			<li><a href="http://www.toskanfoundation.org/" target="_blank"><img src="images/donors/Toskan.jpg" height="75" width="200"></a></li>
			<li><a href="http://www.bernardin.ca/" target="_blank"><img src="images/donors/Bernardin.jpg" height="75" width="200"></a></li>
		</ul>
	</aside>
	</div><!--end aboutUsWrap-->

	<!--What We Do section explaining what NFFTT does-->
	<div id="ourJobWrap" data-stellar-background-ratio=".3">
		<section id="whatWeDo">
			<h1>What We Do</h1>
			<p>Not Far From The Tree puts Toronto’s fruit to good use by picking and sharing the bounty.

			When a homeowner can’t keep up with the abundant harvest produced by their tree, they let us know and we mobilize our volunteers to pick the bounty. The harvest is split three ways: 1/3 is offered to the tree owner, 1/3 is shared among the volunteers, and 1/3 is delivered by bicycle to be donated to food banks, shelters, and community kitchens in the neighbourhood so that we’re putting this existing source of fresh fruit to good use. It’s a win-win-win situation!

			This simple act has profound impact. With an incredible crew of volunteers, we’re making good use of healthy food, addressing climate change with hands-on community action, and building community by sharing the urban abundance.</p>
		</section>

		<div id="wardImg">
			<a href="images/pics/wards.jpg" class="fancybox-effects-b" title="Wards we have picked in"><img src="images/pics/wards.jpg" height="500" width="300"></a>
		</div><!--end wardImg div-->
	</div><!--end ourJobWrap-->

	<!--A list of important team members-->
	<div id="ourTeamWrap" data-stellar-background-ratio=".3">
		<section id="ourTeam">
			<h1>Our Team</h1>
			<ul>
				<li><span class="position">Founder</span>
				<span class="name">Laura Reinsborough</span></li>
				 
				<li><span class="position">Interim Project Director</span>
				<span class="name">Danielle Goldfinger</span></li>
				 
				<li><span class="position">Community Engagement Specialist</span>
				<span class="name">Becky Thomas</span></li>
				 
				<li><span class="position">Picking Coordinator</span>
				<span class="name">Marc Michalak</span></li>
				 
				<li><span class="position">Events Coordinator</span>
				<span class="name">Kari Pederson</span></li>
				 
				<li><span class="position">Graphic Design</span>
				<span class="name">Eleven Ideas</span></li>
				 
				<li><span class="position">Steering Committee</span>
				<span class="name">Chris Chen, Chair</span></li>
				<li><span class="name steerCom">Jordy Gold</span></li>
				<li><span class="name steerCom">Jodi Lastman</span></li>
				<li><span class="name steerCom">Joshna Maharaj, Vice-Chair</span></li>
				<li><span class="name steerCom">Ben Marans</span></li>
				<li><span class="name steerCom">Ravenna Nuaimy-Barker</span></li>
				 
				<li><span class="position">Charitable Organization</span>
				<span class="name">Tides Canada Initiatives Society</span></li>
				 
				<li><span class="position">Original artwork for logo by</span> <span class="name">Gregory Alan Elliott</span></li>
			</ul>
		</section>

	<!--History of Not Far From The Tree-->
		<section id="history">
			<h1>Our History</h1>
			<p>A beautiful orchard lay in a Toronto neighbourhood, teeming with fruit grown mostly for show. Laura Reinsborough, then working at the AGO, was asked to harvest those apples and put them to good use. She started bringing the fruit to the nearby Wychwood Barns Farmer’s Market, at that time just getting started. From that point on, Laura saw her neighbourhood differently as fruit trees became visible in every nook and cranny.

			Not Far From The Tree was born, launching its first full season in 2008. Then picking in one neighbourhood and run entirely on volunteer power, the project amassed a crew of 150 volunteers and picked a total of 3,003 lbs of fruit by the end of the season.	
			</p>

			<p>Not Far From The Tree is now a project of Tides Canada Initiatives Society, a registered Canadian charity.

			For the 2011 season, Not Far From The Tree has doubled its scope from the year previous from 7 to 14 neighbourhoods across the city. The plans have been laid to scale this high-impact and award-winning program across the city, growing by a handful of neighbourhoods each year.</p>
		</section>
	</div><!--end ourTeamWrap-->


	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				closeBtn  : true,

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});
			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>

	<!--Gallery-->
	<section id="gallery">
		<h1>Photo Gallery</h1>
		<ul>
			<li><a class="fancybox-effects-c" href="images/gallery/img1_b.jpg"  rel="group1" title="End of Season Celebration 2013, Photo courtesy of Frances Beatty"><img src="images/gallery/img1_s.jpg" alt="" /></a></a></li>
			<li><a class="fancybox-effects-c" href="images/gallery/img2_b.jpg" rel="group1" title="End of Season Celebration 2013, Photo courtesy of Frances Beatty"><img src="images/gallery/img2_s.jpg" alt="" /></a></li>
			<li><a class="fancybox-effects-c" href="images/gallery/img3_b.jpg" rel="group1" title="End of Season Celebration 2013, Photo courtesy of Frances Beatty"><img src="images/gallery/img3_s.jpg" alt="" /></a></li>
			<li><a class="fancybox-effects-c" href="images/gallery/img4_b.jpg" rel="group1" title="End of Season Celebration 2013, Photo courtesy of Frances Beatty"><img src="images/gallery/img4_s.jpg" alt="" /></a></li>
			<li><a class="fancybox-effects-c" href="images/gallery/img5_b.jpg" rel="group1" title="End of Season Celebration 2013, Photo courtesy of Frances Beatty"><img src="images/gallery/img5_s.jpg" alt="" /></a></li>
			<li><a class="fancybox-effects-c" href="images/gallery/img6_b.jpg" rel="group1" title="End of Season Celebration 2013, Photo courtesy of Frances Beatty"><img src="images/gallery/img6_s.jpg" alt="" /></a></li>
			<li><a class="fancybox-effects-c" href="images/gallery/img7_b.jpg" rel="group1" title="End of Season Celebration 2013, Photo courtesy of Frances Beatty"><img src="images/gallery/img7_s.jpg" alt="" /></a></li>
			<li><a class="fancybox-effects-c" href="images/gallery/img8_b.jpg" rel="group1" title="End of Season Celebration 2013, Photo courtesy of Frances Beatty"><img src="images/gallery/img8_s.jpg" alt="" /></a></li>
			<li><a class="fancybox-effects-c" href="images/gallery/img9_b.jpg" rel="group1" title="End of Season Celebration 2013, Photo courtesy of Frances Beatty"><img src="images/gallery/img9_s.jpg" alt="" /></a></li>
			<li><a class="fancybox-effects-c" href="images/gallery/img10_b.jpg" rel="group1" title="End of Season Celebration 2013, Photo courtesy of Frances Beatty"><img src="images/gallery/img10_s.jpg" alt="" /></a></li>
			<li><a class="fancybox-effects-c" href="images/gallery/img11_b.jpg" rel="group1" title="End of Season Celebration 2013, Photo courtesy of Frances Beatty"><img src="images/gallery/img11_s.jpg" alt="" /></a></li>
			<li><a class="fancybox-effects-c" href="images/gallery/img12_b.jpg" rel="group1" title="End of Season Celebration 2013, Photo courtesy of Frances Beatty"><img src="images/gallery/img12_s.jpg" alt="" /></a></li>
			<li><a class="fancybox-effects-c" href="images/gallery/img13_b.jpg" rel="group1" title="End of Season Celebration 2013, Photo courtesy of Frances Beatty"><img src="images/gallery/img13_s.jpg" alt="" /></a></li>
			<li><a class="fancybox-effects-c" href="images/gallery/img14_b.jpg" rel="group1" title="End of Season Celebration 2013, Photo courtesy of Frances Beatty"><img src="images/gallery/img14_s.jpg" alt="" /></a></li>
			<li><a class="fancybox-effects-c" href="images/gallery/img15_b.jpg" rel="group1" title="End of Season Celebration 2013, Photo courtesy of Frances Beatty"><img src="images/gallery/img15_s.jpg" alt="" /></a></li>
		</ul>

		<a href="http://www.flickr.com/photos/notfarfromthetree/" target="_blank"><input class="topBtn" type="button" value="More pictures" /></a>

	</section>

	<!--Get Involved page-->
	<div id="getInvolvedWrap" data-stellar-background-ratio=".3">
		<section id="getInvolved">
			<div id="mailing">
				<h1>Donate by Mail!</h1>
				<p class="centerIt">A cheque addressed to “Tides Canada Initiatives Society – Not Far From The Tree” and mail it to:</p>
				<p class="info">Not Far From The Tree</p>
				<p class="info">401 Richmond Street West</p>
				<p class="info"> Toronto, Ontario M5V 3A8</p> <p class="info">Mail Box 365</p>
				<p class="centerIt">Your donation will be put to work immediately by stewarding Toronto’s urban orchard, building community, and making use of an existing 
				source of fresh fruit for those who are most in need.</p>

				<h1>Need to contact us directly?</h1>
				<p id="emailUs">Email us at <span class="underline">info@notfarfromthetree.org</span></p>
				<p id="callUs">Or call us at 647.774.7425</p>


			</div><!--end mailing div-->
		</section>

	<!--Donate A Tree Form-->
		<section class="formgroup">
			<h1>Donate A Tree</h1>
	    	<form parsley-validate>

	      		<div class="formgroup">
	        		<label>Full Name</label>
	        		<input type="text" name="fullname" required />
	      		</div>

	      		<div class="formgroup">
	        		<label>Email</label>
	        		<input type="text" name="email" required />
	      		</div>

	      		<div class="formgroup">
	        		<label>Phone Number</label>
	        		<input type="text" name="phonenumber" required />
	      		</div>

	      		<div class="formgroup">
	        		<label>Tree Address</label>
	        		<input type="text" name="treeaddress" required />
	      		</div>

	      		<div class="formgroup">
	        		<label>City Ward</label>
	        		<select name="cityward">
						<option value="Etobicoke">Etobicoke</option>
						<option value="North Etobicoke">North Etobicoke</option>
						<option value="York">York</option>
					</select>
	     		</div>

	      		<div class="formgroup">
	      			<label>Tree Type</label>
	      			<select name="treetype">
						<option value="Apple">Apple</option>
						<option value="Apricot">Apricot</option>
						<option value="Crab Apple">Crap Apple</option>
						<option value="Dogwood Cherry">Dogwood Cherry</option>
						<option value="Ginkgo">Ginkgo</option>
						<option value="Grape">Grape</option>
						<option value="Mulberry">Mulberry</option>
						<option value="Peach">Peach</option>
						<option value="Plum">Plum</option>
						<option value="Serviceberry">Serviceberry</option>
						<option value="Sweet Cherry">Sweet Cherry</option>
						<option value="Sour Cherry">Sour Cherry</option>
						<option value="Pear">Pear</option>
						<option value="Walnut">Walnut</option>
					</select>
		  		</div>

		  		<div class="formgroup">
		  			<label>Are you the owner?</label>
		  			<input type="radio" name="yesno" value="yes"><span class="radioColor">Yes</span></input>
					<input type="radio" name="yesno" value="no"><span class="radioColor">No</span></input>
		  		</div>

		  		<div class="formgroup">
		  			<label>How much of the picked fruit are you willing to donate?<br></label>
		  			<input type="radio" name="yesno" value="yes"><span class="radioColor">1/3rd</span></input>
					<input type="radio" name="yesno" value="no"><span class="radioColor">1/2</span></input>
					<input type="radio" name="yesno" value="no"><span class="radioColor">All</span></input>
		  		</div>

		  		<div class="formgroup">
		  			<label>Would you like to sign up for our newsletter? (It's free!)<br></label>
		  			<input type="radio" name="yesno" value="yes"><span class="radioColor">Yes</span></input>
					<input type="radio" name="yesno" value="no"><span class="radioColor">No</span></input>
		  		</div>
	      		
	      		<div class="formgroup">
	        		<input type="submit" class="btn">
	      		</div>

	    	</form>
	  	</section>

	</div><!--End getInvolvedWrap-->

  	<!--Blog Section-->
	 <section id="blog">	     
	     <div id="post1">
	       <h1>Don’t miss your chance to win big this Friday!</h1>
	       <img src="images/pics/post1.jpg">
	       <p class="author">Not Far From The Tree posted on November 2nd, 2013</p>
	       <p class="post">Whether you’re celebrating your birthday or a bachelorette party, throwing axes will bring the festivities to a boastfully badass level. We won’t be heaving any hatchets at this Friday’s End of Season Celebration – but we will be raff... <a href="blog.php">Read more</a></p>
	     </div>
	 
	     <div id="post2">
	       <h1>Crab apple concoctions</h1>
	       <img src="images/pics/post2.jpg">
	       <p class="author">Not Far From The Tree posted on November 2nd, 2013</p>
	       <p class="post">Recently I found myself with a small mountain of crab apples from a late season pick. I’ve always been a fan of these underdog edibles. Sure crab apples don’t make a great first impression when sampled raw or pelted at you... <a href="#">Read more</a></p>
	     </div>

	     <div id="post3">
	       <h1>We came, we saw, we celebrated!</h1>
	       <img src="images/pics/post3.jpg">
	       <p class="author">Not Far From The Tree posted on November 2nd, 2013</p>
	       <p class="post">Last Friday night, friends and supporters of Not Far From The Tree came together at our End of Season Celebration and raised a glass to mark the end of our 6th successful urban harvest season.  If you ask us, we did it right... <a href="#">Read more</a></p>
	     </div>
	 
   </section>
 
 <form action="thankyou.php" method="post">

 <form action="thankyou.php" method="post">

    <!--Footer-->
	<footer class="bottomFooter">
	<ul>
		<li><a href="https://www.facebook.com/NFFTT?ref=stream&hc_location=stream" target="_blank"><img src="images/pics/facebook.png"></a></li>
		<li><a href="https://twitter.com/NFFTT" target="_blank"><img src="images/pics/twitter.png"></a></li>
		<li><a href="http://www.flickr.com/photos/notfarfromthetree/" target="_blank"><img src="images/pics/flickr.png"></a></li>
	</ul>
		<h2>Copyright Not Far From The Tree</h2>
	</footer>
	
</body>

  </script>
	
	<!--adding plugins and other fun stuff-->
	<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
	<script type="text/javascript" language="javascript" src="js/hoverIntent.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.dropdown.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="js/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/parsley.js"></script>
	<script type="text/javascript" src="js/stellar.min.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
</html>