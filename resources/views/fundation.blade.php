@extends('layouts.master')

@section ('content')

<!-- Revolution Slider -->
	<div class="tp-banner-container">
		<div class="tp-banner" >
			<ul>
					
				<!-- SLIDE  -->
				<li data-transition="fade" data-masterspeed="500" >
					<!-- MAIN IMAGE -->
					<img src="{{URL::asset('assets/img/mock.jpg')}}" alt="Slider Image 1" data-bgposition="left center" data-kenburns="on" data-duration="14000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="130" data-bgpositionend="right center">
					<!-- LAYERS -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption fadeout sfr sport-rs-boxed sport-rs-heading"
						data-x="0" data-hoffset="0"
						data-y="155" data-voffset="0"
						data-captionhidden="off"
						data-speed="800"
						data-start="500"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut">
						Our Blood, Our Sweat,<br/> 
						Your Tears <div>- CLUB MOTTO</div>
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption fadeout sfr sport-rs-boxed sport-rs-text"
						data-x="0" data-hoffset="0"
						data-y="280" data-voffset="0"
						data-captionhidden="off"
						data-speed="800"
						data-start="750"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut">
						Cum sociis natoque penatibus et magnis dis parturient montes,<br/> 
						nascetur ridiculus mus. Maecenas sed diam eget risus varius<br/>
						 blandit sit amet non magna... 
					</div>
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption fadeout sfr tp-resizeme"
						data-x="0" data-hoffset="0"
						data-y="400" data-voffset="0"
						data-speed="800"
						data-start="1000"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut">
						<a class="btn" href="pricing1.html">Join Our Club Today</a>&nbsp; <a class="btn-2" href="about.html">Read More</a>
					</div>
				</li>
				
				<!-- SLIDE  -->
				<li data-transition="fade" data-masterspeed="500" >
					<!-- MAIN IMAGE -->
					<img src="{{URL::asset('assets/img/mock2.jpg')}}" alt="Slider Image 1" data-bgposition="left center" data-kenburns="on" data-duration="14000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="130" data-bgpositionend="right center">
					<!-- LAYERS -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption fadeout sfr sport-rs-boxed sport-rs-heading"
						data-x="0" data-hoffset="0"
						data-y="155" data-voffset="0"
						data-captionhidden="off"
						data-speed="800"
						data-start="500"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut">
						Our Blood, Our Sweat,<br/> 
						Your Tears <div>- CLUB MOTTO</div>
					</div>
					<!-- LAYER NR. 2 -->
					<div class="tp-caption fadeout sfr sport-rs-boxed sport-rs-text"
						data-x="0" data-hoffset="0"
						data-y="280" data-voffset="0"
						data-captionhidden="off"
						data-speed="800"
						data-start="750"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut">
						Cum sociis natoque penatibus et magnis dis parturient montes,<br/> 
						nascetur ridiculus mus. Maecenas sed diam eget risus varius<br/>
						 blandit sit amet non magna... 
					</div>
					<!-- LAYER NR. 3 -->
					<div class="tp-caption fadeout sfr tp-resizeme"
						data-x="0" data-hoffset="0"
						data-y="400" data-voffset="0"
						data-speed="800"
						data-start="1000"
						data-easing="Power4.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.05"
						data-endelementdelay="0.1"
						data-endspeed="1000"
						data-endeasing="Power1.easeOut">
						<a class="btn" href="pricing1.html">Join Our Club Today</a>&nbsp; <a class="btn-2" href="about.html">Read More</a>
					</div>
				</li>
				
			</ul>
		</div>
	</div>
   			
    	
    	
    	
    	
    	
    			
    	
	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper body-wrapper">		
		<div class="wrapper ad-pad clearfix">
			
			<!-- Column -->
			<div class="col-1-4">
				<h3>Our Club</h3>
				<p class="lead">Cras justo odio, dapisonec  elit non mi porta gravida curab blait tempus.</p>
				<p>Morbi leo risus, porta ac conse ctetur ac, vestibulum at erosite. Aenean lacinia bibendum nulsed consectetur. Nullam quis risusa eget urna mollis s lacus vel augue laoreet rutrum fauci leo Duis mollis, est non commodo luctus, nisi erat porttito. Fusce dapibus, tellus ac cursus commodo, tortor mauris condi. Nulla vitae elit libero, a phaugue. 
				&#8230;<a class="read-more" href="about.html">More</a></p>    					
			</div>
			
			
			<!-- Column -->
			<div class="col-1-4">
				<h3>Latest News</h3>
				<div class="mosaic-block circle">
					<a href="post.html" class="mosaic-overlay link" title="Insert Your Title"></a><div class="mosaic-backdrop">
					<div class="corner date">26 Aug</div><img src="{{URL::asset('assets/img/fill-3.jpg')}}" alt="Mock" /></div>
				</div>
				<h6 class="title"><a href="post.html">Nominated club of the year</a></h6>
				<p>Morbi leo risus, porta ac conse ctetur ac, vestiosite Duis mollis, est non commodo luctus, nisi erat porttitor ligula. Maecenas sed diam eget risus varius blandit sit amet non magna
				&#8230;<a href="post.html" class="read-more">More</a></p>
			</div>
			
			
			<!-- Column -->
			<div class="col-1-2 last">
				<h3>Upcoming Events</h3>
				<ul class="widget-event-list">
					<li>
						<img class="left stay" src="{{URL::asset('assets/img/thumb-2.jpg')}}" alt="mock" />
						<div class="date">26 Aug</div>
						<h6 class="title"><a href="event.html">Sydney VS Our Team - Away Game</a></h6>
						<p>Morbi leo risus, porta ac conse ctetur ac, vestibulum at erosite. Aenean lacinia bibendum nulsed consectetur
						&#8230;<a href="event.html" class="read-more">More</a></p>
					</li>
					
					<li>
						<img class="left stay" src="{{URL::asset('assets/img/thumb-3.jpg')}}" alt="mock" />
						<div class="date">18 Sept</div>
						<h6 class="title"><a href="event.html">Sydney VS Our Team - Away Game</a></h6>
						<p>Morbi leo risus, porta ac conse ctetur ac, vestibulum at erosite. Aenean lacinia bibendum nulsed consectetur
						&#8230;<a href="event.html" class="read-more">More</a></p>
					</li>
					
					<li>
						<img class="left stay" src="{{URL::asset('assets/img/thumb-1.jpg')}}" alt="mock" />
						<div class="date">29 Sept</div>
						<h6 class="title"><a href="event.html">Sydney VS Our Team - Away Game</a></h6>
						<p>Morbi leo risus, porta ac conse ctetur ac, vestibulum at erosite. Aenean lacinia bibendum nulsed consectetur
						&#8230;<a href="event.html" class="read-more">More</a></p>
					</li>
				</ul>		
			</div>
			
			
		</div>
	</div>
    	
    	
    	
    	
    	
    	
    	
	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper divider"></div>
	
	
	<!-- Start Outter Wrapper -->										
	<div class="outter-wrapper centered paralax-block" style="background-image: url(assets/img/parallax-bg2.jpg);" data-stellar-background-ratio="0.75">		
		<div class="wrapper clearfix">
			<blockquote>“An athlete cannot run with money in his pockets. He must run with hope in his heart and dreams in his head ”
			<cite>Emil Zatopek</cite>
			</blockquote>
		</div>
	</div>
	

	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper divider"></div>
    	




    	
    	
    	
	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper">
		<div class="wrapper ad-padx2 clearfix">
		
			<div class="clearfix">
				<h3 class="left">Game Highlights</h3>
    			<ul class="option-set right" id="filter" data-option-key="filter">
    			 	<li><a href="#show-all" data-option-value="*" class="selected"><em class="fa">&#xf0c9;</em></a></li>
    			 	<li><a href="#cat-1" data-option-value=".cat-1">1st Half</a></li>
    			 	<li><a href="#cat-2" data-option-value=".cat-2">2nd Half</a></li>
    			</ul>
    		</div>	
			
			<!-- Start Isotope -->
			<div class="col-1-1 thumb-gallery super-list variable-sizes clearfix" id="thumb-gallery">
    	   		
    	   		<!--
    	   		!-- Start Thumbnail --
    	   		<div class="col-1-5 element cat-1">
    	   			<div class="mosaic-block circle"><a href="img/fill-3.jpg" class="mosaic-overlay fancybox" data-fancybox-group="gallery" title="Insert Title"></a>
    	   			<div class="mosaic-backdrop"><img src="img/fill-3.jpg" alt="Mock" /></div></div>
    	   		</div>
    	   		
    	   		!-- Start Thumbnail --
    	   		<div class="col-1-5 element cat-1">
    	   			<div class="mosaic-block circle"><a href="img/fill-4.jpg" class="mosaic-overlay fancybox" data-fancybox-group="gallery" title="Insert Title"></a>
    	   			<div class="mosaic-backdrop"><img src="img/fill-4.jpg" alt="Mock" /></div></div>
    	   		</div>
    	   		
    	   		<!-- Start Thumbnail --
    	   		<div class="col-1-5 element cat-2">
    	   			<div class="mosaic-block circle"><a href="img/fill-5.jpg" class="mosaic-overlay fancybox" data-fancybox-group="gallery" title="Insert Title"></a>
    	   			<div class="mosaic-backdrop"><img src="img/fill-5.jpg" alt="Mock" /></div></div>
    	   		</div>
    	   		
    	   		<!-- Start Thumbnail --
    	   		<div class="col-1-5 element cat-1">
    	   			<div class="mosaic-block circle"><a href="img/fill-6.jpg" class="mosaic-overlay fancybox" data-fancybox-group="gallery" title="Insert Title"></a>
    	   			<div class="mosaic-backdrop"><img src="img/fill-6.jpg" alt="Mock" /></div></div>
    	   		</div>
    	   		
    	   		<!-- Start Thumbnail --
    	   		<div class="col-1-5 element cat-2">
    	   			<div class="mosaic-block circle"><a href="img/fill-7.jpg" class="mosaic-overlay fancybox" data-fancybox-group="gallery" title="Insert Title"></a>
    	   			<div class="mosaic-backdrop"><img src="img/fill-7.jpg" alt="Mock" /></div></div>
    	   		</div>
    	   		
    	   		<!-- Start Thumbnail --
    	   		<div class="col-1-5 element cat-1">
    	   			<div class="mosaic-block circle"><a href="img/fill-8.jpg" class="mosaic-overlay fancybox" data-fancybox-group="gallery" title="Insert Title"></a>
    	   			<div class="mosaic-backdrop"><img src="img/fill-8.jpg" alt="Mock" /></div></div>
    	   		</div>
    	   		
    	   		<!-- Start Thumbnail --
    	   		<div class="col-1-5 element cat-2">
    	   			<div class="mosaic-block circle"><a href="img/fill-9.jpg" class="mosaic-overlay fancybox" data-fancybox-group="gallery" title="Insert Title"></a>
    	   			<div class="mosaic-backdrop"><img src="img/fill-9.jpg" alt="Mock" /></div></div>
    	   		</div>
    	   		
    	   		<!-- Start Thumbnail --
    	   		<div class="col-1-5 element cat-1">
    	   			<div class="mosaic-block circle"><a href="img/fill-10.jpg" class="mosaic-overlay fancybox" data-fancybox-group="gallery" title="Insert Title"></a>
    	   			<div class="mosaic-backdrop"><img src="img/fill-10.jpg" alt="Mock" /></div></div>
    	   		</div>
    	   		
    	   		<!-- Start Thumbnail --
    	   		<div class="col-1-5 element cat-2">
    	   			<div class="mosaic-block circle"><a href="img/fill-11.jpg" class="mosaic-overlay fancybox" data-fancybox-group="gallery" title="Insert Title"></a>
    	   			<div class="mosaic-backdrop"><img src="img/fill-11.jpg" alt="Mock" /></div></div>
    	   		</div>
    	   		
    	   		<!-- Start Thumbnail --
    	   		<div class="col-1-5 element cat-1">
    	   			<div class="mosaic-block circle"><a href="img/fill-12.jpg" class="mosaic-overlay fancybox" data-fancybox-group="gallery" title="Insert Title"></a>
    	   			<div class="mosaic-backdrop"><img src="img/fill-12.jpg" alt="Mock" /></div></div>
    	   		</div>

    	   		-->
    	   		
    	   		<!-- Start Thumbnail -->
    	   		<div class="col-1-5 element cat-2">
    	   			<div class="mosaic-block circle"><a href="{{URL::asset('assets/img/fill-1.jpg')}}" class="mosaic-overlay fancybox" data-fancybox-group="gallery" title="Insert Title"></a>
    	   			<div class="mosaic-backdrop"><img src="{{URL::asset('assets/img/fill-1.jpg')}}" alt="Mock" /></div></div>
    	   		</div>
    	   		
    	   		<!-- Start Thumbnail -->
    	   		<div class="col-1-5 element cat-1">
    	   			<div class="mosaic-block circle"><a href="{{URL::asset('assets/img/fill-3.jpg')}}" class="mosaic-overlay fancybox" data-fancybox-group="gallery" title="Insert Title"></a>
    	   			<div class="mosaic-backdrop"><img src="{{URL::asset('assets/img/fill-3.jpg')}}" alt="Mock" /></div></div>
    	   		</div>
    	   		
    	   		<!-- Start Thumbnail -->
    	   		<div class="col-1-5 element cat-2">
    	   			<div class="mosaic-block circle"><a href="{{URL::asset('assets/img/fill-6.jpg')}}" class="mosaic-overlay fancybox" data-fancybox-group="gallery" title="Insert Title"></a>
    	   			<div class="mosaic-backdrop"><img src="{{URL::asset('assets/img/fill-6.jpg')}}" alt="Mock" /></div></div>
    	   		</div>
    	   		
    	   		<!-- Start Thumbnail -->
    	   		<div class="col-1-5 element cat-1">
    	   			<div class="mosaic-block circle"><a href="{{URL::asset('assets/img/fill-2.jpg')}}" class="mosaic-overlay fancybox" data-fancybox-group="gallery" title="Insert Title"></a>
    	   			<div class="mosaic-backdrop"><img src="{{URL::asset('assets/img/fill-2.jpg')}}" alt="Mock" /></div></div>
    	   		</div>
    	   		
    	   		<!-- Start Thumbnail -->
    	   		<div class="col-1-5 element cat-2">
    	   			<div class="mosaic-block circle"><a href="{{URL::asset('assets/img/fill-8.jpg')}}" class="mosaic-overlay fancybox" data-fancybox-group="gallery" title="Insert Title"></a>
    	   			<div class="mosaic-backdrop"><img src="{{URL::asset('assets/img/fill-8.jpg')}}" alt="Mock" /></div></div>
    	   		</div>
    	   		
    	   </div>
			
		</div>
	</div>
    	
    	
    	
    	
    	
    	
    	
	<!-- Start Outter Wrapper -->
	<div class="outter-wrapper divider"></div>
	
	<!-- Start Outter Wrapper -->	
	<div class="outter-wrapper social-block centered">
		<div class="main-container">
			<div class="wrapper">
				<h3>Over 200 members and growing, <span>We love our team.</span></h3>
			</div>
			
			<div class="clearfix">  	              
    			<!-- Start Main Content -->

    			<div class="wrapper">	
    				<a href="pricing2.html" class="btn">Join Our Club</a> <a href="contact.html" class="btn-2">Make Donations</a>
    				<ul class="social-thumbs">
    				  <li><img src="{{URL::asset('assets/img/face.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face2.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face3.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face4.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face5.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face6.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face7.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face8.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face9.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face10.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face11.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face2.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face3.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face4.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face5.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face6.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face7.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face8.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face9.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face10.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face11.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face2.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face3.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face4.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face5.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face6.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face7.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face8.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face9.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face10.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face11.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face2.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face3.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face4.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face5.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face6.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face7.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face8.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face9.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face10.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face11.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face2.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face3.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face4.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face5.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face6.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face7.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face8.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face9.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face10.jpg')}}" alt="mock" /></li>
    				  <li><img src="{{URL::asset('assets/img/face11.jpg')}}" alt="mock" /></li>
  				  </ul>
    			
	    			<div class="share-this-btns">
		    			<!-- Share This -->
		    			<span class='st_facebook_hcount'></span>
		    			<span class='st_twitter_hcount'></span>
		    			<span class='st_googleplus_hcount'></span>
		    			<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		    			<script type="text/javascript">stLight.options({publisher: "ur-b4a0aaec-9733-1e85-1341-6dfcd856f67", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>
		    			<!-- End Share This -->
	    			</div>
    			
    			</div>

			</div>
		</div> 
	</div>

@stop					