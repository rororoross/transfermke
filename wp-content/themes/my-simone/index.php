<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package my-simone
 */

get_header(); ?>

	<div id="primary" class="content-area">
				<div id="calendar">
				<div id="calendar-header">Live Music</div>
			<?php
    $options = array(
	'limit' => 5,
	'scope' => 'upcoming',
	'show_tours' => 'no',
	'group_artists' => 'no',
	'artist_order' => 'alphabetical',
	'artist' => '',
	'time' => '',
	'tour' => '',
	'venue' => '',
	'show_feeds' => 'no',
	'link_text' => ''
    );
    echo gigpress_sidebar($options);
?>

			</div>
		</div> <!-- End of Calendar -->

<div id="modal-container">
		 <!-- Modal HTML embedded directly into document -->
  <div id="ex1" style="display:none;">
    <p><span>Thursday, October 30th at 7:30pm -</span> Eric Schoor Trio</p>
    <p><span>Thursday, November 6th at 7:30pm -</span> Eric Schoor Trio</p>
    <p><span>Thursday, November 13th at 7:30pm -</span> The Cherry Trio</p>
    <p><span>Thursday, November 20th at 7:30pm -</span> Eric Schoor Trio</p>
    <p><span>Thursday, November 27th -</span> Closed for Thanksgiving</p>
    <p><span>Thursday, December 4th at 7:30pm -</span> Eric Schoor Trio</p>
    <p><span>Thursday, December 18th at 7:30pm -</span> Eric Schoor Trio</p>
    <p><span>Thursday, January 29th at 7:30pm -</span> New Galaxy Quartet</p>
    <p><span>Thursday, March 5th at 7:30pm -</span> George Braith Quartet</p>
     <a href="#" rel="modal:close" class="close-modal"></a>
  </div>

  <!-- Link to open the modal -->

</div>
		<div class="social">
			<a href="http://www.facebook.com/transferMKE" target="_blank">
			
			<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
			<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
			<svg version="1.1" class="social-icons" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="28px" height="28px" viewBox="29 29 42 42" enable-background="new 29 29 42 42" xml:space="preserve">
			<path class="social-fill" id="Facebook" fill="#FFFFFF" d="M44.376,37.166c0,1.063,0,5.805,0,5.805h-4.253v7.099h4.253v21.094h8.737V50.07h5.862
				c0,0,0.55-3.404,0.815-7.125c-0.763,0-6.645,0-6.645,0s0-4.129,0-4.854c0-0.726,0.953-1.701,1.895-1.701c0.939,0,2.923,0,4.76,0
				c0-0.967,0-4.306,0-7.39c-2.452,0-5.242,0-6.473,0C44.161,29,44.376,36.105,44.376,37.166z"/>
			</svg></a>
			
			<a href="http://www.twitter.com/transferMKE" target="_blank">
			
			<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
			<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
			<svg version="1.1" class="social-icons" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="28px" height="28px" viewBox="29 29 42 42" enable-background="new 29 29 42 42" xml:space="preserve">
			<path class="social-fill" id="Twitter__x28_alt_x29_" fill="#FFFFFF" d="M66.27,47.976c2.345-0.193,3.936-1.259,4.548-2.706
				c-0.846,0.52-3.473,1.086-4.922,0.547c-0.071-0.34-0.15-0.664-0.229-0.957c-1.104-4.057-4.888-7.325-8.852-6.931
				c0.32-0.13,0.646-0.251,0.971-0.358c0.436-0.156,2.996-0.573,2.592-1.477c-0.339-0.794-3.467,0.602-4.056,0.783
				c0.777-0.293,2.063-0.795,2.201-1.688c-1.191,0.164-2.36,0.726-3.264,1.545c0.326-0.351,0.573-0.778,0.626-1.239
				c-3.177,2.029-5.032,6.121-6.534,10.09c-1.179-1.143-2.224-2.043-3.161-2.543c-2.63-1.41-5.775-2.882-10.712-4.715
				c-0.152,1.634,0.808,3.807,3.572,5.25c-0.599-0.08-1.693,0.099-2.57,0.309c0.357,1.871,1.522,3.412,4.676,4.158
				c-1.441,0.096-2.187,0.424-2.861,1.13c0.656,1.301,2.258,2.833,5.14,2.519c-3.204,1.381-1.306,3.938,1.301,3.557
				c-4.447,4.593-11.458,4.257-15.485,0.413c10.512,14.326,33.363,8.473,36.769-5.325c2.552,0.022,4.051-0.884,4.981-1.882
				C69.529,48.704,67.399,48.445,66.27,47.976z"/>
			</svg></a>

			<a href="http://www.instagram.com/transferMKE" target="_blank">
			
			<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
			<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
			<svg version="1.1" class="social-icons" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="28px" height="28px" viewBox="29 29 42 42" enable-background="new 29 29 42 42" xml:space="preserve">
			<path class="social-fill" fill="#FFFFFF" d="M62.877,29.008H37.116c-4.475,0-8.116,3.64-8.116,8.115v8.572v17.191C29,67.36,32.641,71,37.116,71h25.762
				c4.475,0,8.114-3.64,8.114-8.114V45.694v-8.572C70.991,32.647,67.352,29.008,62.877,29.008z M65.204,33.847l0.929-0.003v0.924v6.194
				l-7.094,0.023l-0.024-7.117L65.204,33.847z M44.002,45.694c1.346-1.861,3.527-3.081,5.994-3.081s4.648,1.22,5.992,3.081
				c0.875,1.214,1.399,2.7,1.399,4.31c0,4.076-3.318,7.389-7.393,7.389c-4.075,0-7.391-3.313-7.391-7.389
				C42.605,48.394,43.128,46.908,44.002,45.694z M66.9,62.884c0,2.22-1.805,4.023-4.023,4.023H37.116c-2.22,0-4.024-1.804-4.024-4.023
				v-17.19h6.268c-0.542,1.332-0.845,2.786-0.845,4.31c0,6.33,5.15,11.482,11.482,11.482s11.482-5.152,11.482-11.482
				c0-1.523-0.307-2.978-0.848-4.31h6.27V62.884z"/>
			</svg></a>
			
			<a href="http://www.pinterest.com/transferMKE" target="_blank">
			
			<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
			<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
			<svg version="1.1" class="social-icons" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="28px" height="28px" viewBox="29 29 42 42" enable-background="new 29 29 42 42" xml:space="preserve">
			<path class="social-fill" fill="#FFFFFF" d="M51.258,29C39.785,29,34,37.225,34,44.085c0,4.153,1.572,7.848,4.944,9.223
				c0.553,0.229,1.049,0.009,1.209-0.604c0.111-0.422,0.375-1.492,0.493-1.938c0.161-0.605,0.098-0.817-0.348-1.346
				c-0.972-1.146-1.595-2.63-1.595-4.735c0-6.102,4.566-11.565,11.888-11.565c6.486,0,10.049,3.962,10.049,9.252
				c0,6.963-3.082,12.84-7.656,12.84c-2.526,0-4.416-2.088-3.811-4.651c0.726-3.059,2.131-6.359,2.131-8.569
				c0-1.976-1.062-3.625-3.256-3.625c-2.582,0-4.657,2.672-4.657,6.25c0,2.279,0.771,3.821,0.771,3.821s-2.643,11.197-3.106,13.158
				c-0.922,3.905-0.139,8.692-0.072,9.174c0.039,0.288,0.407,0.357,0.575,0.141c0.237-0.311,3.314-4.107,4.358-7.902
				c0.297-1.074,1.699-6.637,1.699-6.637c0.839,1.602,3.291,3.008,5.898,3.008c7.762,0,13.029-7.075,13.029-16.547
				C66.543,35.67,60.477,29,51.258,29z"/>
			</svg></a>
		</div> <!-- End of Social -->

    <section id="home">
      <div class="slide" id="slidemain">
			<div id="gallery" class="cycle-slideshow" 
			    data-cycle-slides="div" data-cycle-speed="1100" data-cycle-timeout="4400" >
			    <style type="text/css">
				    #first_slide {
	  					background-image: url("http://transfermke.com/wp-content/uploads/2014/12/slider-1-bg-21.jpg");
	  				}

	  				#second_slide {
	  					background-image: url("http://transfermke.com/wp-content/uploads/2014/12/slider-2-bg1.jpg");
	  				}

	  				#third_slide {
	  					background-image: url("http://transfermke.com/wp-content/uploads/2014/12/slider-3-bg.jpg");
	  				}

					@media screen and (max-width: 868px) {
						#first_slide {
	 						background-image: url('<?php the_field('slider_1_image_medium'); ?>');
						}

						#second_slide {
	 						background-image: url('<?php the_field('slider_2_image_medium'); ?>');
						}

						#third_slide {
	 						background-image: url('<?php the_field('slider_3_image_medium'); ?>');
						}
					}

					@media screen and (max-width: 420px) {
						#gallery div { 
    						height: 420px; 
 						}

						#first_slide {
	 						background-image: url('<?php the_field('slider_1_image_small'); ?>');
						}

						#second_slide {
	 						background-image: url('<?php the_field('slider_2_image_small'); ?>');
						}

						#third_slide {
	 						background-image: url('<?php the_field('slider_3_image_small'); ?>');
						}		
					}
				</style>
			    <div id="first_slide"><p class="slider-progress"></p></div>
			    <div id="second_slide"><p class="slider-progress-2"></div>
			    <div id="third_slide"><p class="slider-progress-3"></div>
			</div>
		</div><!-- end of 'slide' -->
    </section>

 <section id="specials">
    	<div class="section-container">
    		<img class="specials-banner" src="<?php bloginfo( 'template_url' ); ?>/images/specials-banner-3.png">
			<div id="horizontalTab">
            	<ul class="resp-tabs-list">
	                <li>Mon</li>
	                <li>Tue</li>
	                <li>Wed</li>
	                <li>Thu</li>
	                <li>Sat</li>
	                <li>Sun</li>
	                <li>Happy Hour</li>
            	</ul>

            	<div class="resp-tabs-container">
	                <div class="animated fadeIn">
				<p>
	                    <?php the_field('monday_special',1853); ?>
	                    </p>
	                </div>

	                <div class="animated fadeIn">
	                    <p>
	                    <?php the_field('tuesday_special',1853); ?>
	                    </p>
	                </div>

	                <div class="animated fadeIn">
	                    <p>
	                    <?php the_field('wednesday_special',1853); ?>
	                    </p>
	                </div>

	                <div class="animated fadeIn">
	                    <p>
	                    <?php the_field('thursday_special',1853); ?>
	                    </p>
	                </div>

	                <div class="animated fadeIn">
	                   <p>
	                    <?php the_field('saturday_special',1853); ?>
	                    </p>
	                </div>

	                <div class="animated fadeIn">
	                   <p>
	                    <?php the_field('sunday_special',1853); ?>
	                    </p>
	                </div>

	                <div class="animated fadeIn">
	                   <p>
	                    <?php the_field('happy_hour_special',1853); ?>
	                    </p>
	                </div>
				</div> <!-- End of resp-tabs-container -->
			</div> <!-- End of horizontalTab div -->
		</div> <!-- End of section-container -->
    </section> <!-- End of Specials section -->

 <section id="food">
       <div class="section-container">
       		<h3 class="food-title-mobile">FOOD MENU</h3>
       	      <div id="verticalTab">
            <ul class="resp-tabs-list">
                <li>Antipasti</li>
                <li>Salads</li>
                <li>Pizzas</li>
                <li>Pastas</li>
                <li>Panini</li>
                <li>Gluten Free</li>
            </ul>
            <div class="resp-tabs-container vert-class">
                <div class="animated fadeIn food-style">
                    
                    <?php the_field('antipasti_items',1857); ?>

                    
				

					
                </div>
                <div class="animated fadeIn food-style">
                    <?php the_field('salad_items',1863); ?>

	
                </div>
                <div class="animated fadeIn food-style">
                    <p>
                    	<ul class="tabs">
						    <li><a href="#view1">Garlic</a></li>
						    <li><a href="#view2">Traditional</a></li>
						    <li><a href="#view3">Veggie</a></li>
						    <li><a href="#view4">Seafood</a></li>
						    <li><a href="#view5">Special</a></li>
						</ul>
						<div class="tabcontents">
						    <div id="view1" class="animated fadeIn">
			                    <?php the_field('garlic_pizza_items',1866); ?>
						    </div>
						    <div id="view2" class="animated fadeIn">
			                    <?php the_field('traditional_pizza_items',1872); ?>
						    </div>
						    <div id="view3" class="animated fadeIn">
			                    		<?php the_field('veggie_pizza_items',1878); ?>
						    </div>
						    <div id="view4" class="animated fadeIn">
			                    		<?php the_field('seafood_pizza_items',1881); ?>
						    </div>
						    <div id="view5" class="animated fadeIn">
			                    		<?php the_field('special_pizza_items',1885); ?>
						    </div>
						</div>
                    </p>
                </div>
                <div class="food-style animated fadeIn">
			        <?php the_field('pasta_items',1888); ?>
                </div>
                <div class="food-style animated fadeIn">
			        <?php the_field('panini_items',1891); ?>		
                </div>
                <div class="food-style animated fadeIn">
			        <?php the_field('gluten-text',1895); ?>
                </div>
            </div>
        </div>
		</div> <!-- End of tabs-container -->
    </section>

<section id="drinks">
		<div class="section-container">
		    <h3 class="food-title-mobile">DRINKS MENU</h3>
		       	<div id="verticalTab-2">
		            <ul class="resp-tabs-list">
		                <li>Wine</li>
		                <li>Birra</li>
		                <li>Cocktails</li>
		                <li>Spirits</li>
		                <li>Digestivi</li>
		            </ul>
		            <div class="resp-tabs-container vert-class drinks-class">
		                <div class="animated fadeIn drinks-style">
							<?php while ( have_posts() ) : the_post(); ?>
			        		<?php the_field('wine_glass_items'); ?>
							<?php endwhile; // end of the loop. ?>
							
							

		        		</div> <!-- End of Wine -->

		        		<div class="animated fadeIn drinks-style">
							<?php while ( have_posts() ) : the_post(); ?>
			        		<?php the_field('birra_items'); ?>
							<?php endwhile; // end of the loop. ?>
						
						
		        		</div> <!-- End of Birra -->

						<div class="animated fadeIn drinks-style">
							<?php while ( have_posts() ) : the_post(); ?>
			        		<?php the_field('cocktail_items'); ?>
							<?php endwhile; // end of the loop. ?>


		        		</div> <!-- End of Seasonal Drinks -->

		        

		        		<div class="animated fadeIn drinks-style columner">
		        			<?php while ( have_posts() ) : the_post(); ?>
			        		<?php the_field('spirits_items'); ?>
							<?php endwhile; // end of the loop. ?>

						

							
						
							
		        		</div> <!-- End of Spirits -->

		        		<div class="animated fadeIn drinks-style digestivi">
							<?php while ( have_posts() ) : the_post(); ?>
			        		<?php the_field('digestivi_items_1'); ?>
							<?php endwhile; // end of the loop. ?>

						</div>





		        	</div> <!-- End of resp-tabs-container -->
		        </div> <!-- End of verticalTab-2 -->
		</div> <!-- End of section-container -->
    </section>

    <section id="contact">
   	 		<div id="map_canvas"></div>

			<div id="contact-info-container">
				<div class="contact-info join">
					<strong><p>Join us!</p>
					<a href="http://eepurl.com/1N9cn">Join our Email List</a></br>
					


<a href="#mc_form_pop" class="fancybox">Join our Birthday Club</a>

<div style="display:none" class="fancybox-hidden">
	<div id="mc_form_pop">

		<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>

<div id="mc_embed_signup">
<form action="//gogeddit.us2.list-manage.com/subscribe/post?u=4c27f09ab6a622c6340c21d60&amp;id=6504bc6858" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>Sign-up for Transfer's Birthday Club</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Last Name </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
<div class="mc-field-group">
	<label for="mce-BIRTHDAY">Birthday</label>
	<div class="datefield">
		<span class="subfield monthfield"><input class="birthday required" type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="BIRTHDAY[month]" id="mce-BIRTHDAY-month"></span> / 
		<span class="subfield dayfield"><input class="birthday required" type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="BIRTHDAY[day]" id="mce-BIRTHDAY-day"></span> 
		<span class="small-meta nowrap">( mm / dd )</span>
	</div></div>
<div class="mc-address-group">
	<div class="mc-field-group">
	    <label for="mce-ADDRESS-addr1">Address  <span class="asterisk">*</span>
</label>
		<input type="text" value="" maxlength="70" name="ADDRESS[addr1]" id="mce-ADDRESS-addr1" class="required">
	</div>
	<div class="mc-field-group">
	    <label for="mce-ADDRESS-addr2">Address Line 2</label>
		<input type="text" value="" maxlength="70" name="ADDRESS[addr2]" id="mce-ADDRESS-addr2">		
	</div>
	<div class="mc-field-group size1of2">
	    <label for="mce-ADDRESS-city">City</label>
		<input type="text" value="" maxlength="40" name="ADDRESS[city]" id="mce-ADDRESS-city" class="required">
	</div>
	<div class="mc-field-group size1of2">
	    <label for="mce-ADDRESS-state">State/Province/Region</label>
	<input type="text" value="" maxlength="20" name="ADDRESS[state]" id="mce-ADDRESS-state" class="required">
	</div>
	<div class="mc-field-group size1of2">
	    <label for="mce-ADDRESS-zip">Postal / Zip Code</label>
		<input type="text" value="" maxlength="10" name="ADDRESS[zip]" id="mce-ADDRESS-zip" class="required">
	</div>
	<div class="mc-field-group size1of2">
	    <label for="mce-ADDRESS-country">Country</label>
		<select name="ADDRESS[country]" id="mce-ADDRESS-country" class="required"><option value="164" selected>USA</option><option value="286">Aaland Islands</option><option value="274">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="178">American Samoa</option><option value="4">Andorra</option><option value="5">Angola</option><option value="176">Anguilla</option><option value="175">Antigua And Barbuda</option><option value="6">Argentina</option><option value="7">Armenia</option><option value="179">Aruba</option><option value="8">Australia</option><option value="9">Austria</option><option value="10">Azerbaijan</option><option value="11">Bahamas</option><option value="12">Bahrain</option><option value="13">Bangladesh</option><option value="14">Barbados</option><option value="15">Belarus</option><option value="16">Belgium</option><option value="17">Belize</option><option value="18">Benin</option><option value="19">Bermuda</option><option value="20">Bhutan</option><option value="21">Bolivia</option><option value="22">Bosnia and Herzegovina</option><option value="23">Botswana</option><option value="181">Bouvet Island</option><option value="24">Brazil</option><option value="180">Brunei Darussalam</option><option value="25">Bulgaria</option><option value="26">Burkina Faso</option><option value="27">Burundi</option><option value="28">Cambodia</option><option value="29">Cameroon</option><option value="30">Canada</option><option value="31">Cape Verde</option><option value="32">Cayman Islands</option><option value="33">Central African Republic</option><option value="34">Chad</option><option value="35">Chile</option><option value="36">China</option><option value="185">Christmas Island</option><option value="37">Colombia</option><option value="204">Comoros</option><option value="38">Congo</option><option value="183">Cook Islands</option><option value="268">Costa Rica</option><option value="275">Cote D'Ivoire</option><option value="40">Croatia</option><option value="276">Cuba</option><option value="298">Curacao</option><option value="41">Cyprus</option><option value="42">Czech Republic</option><option value="318">Democratic Republic of the Congo</option><option value="43">Denmark</option><option value="44">Djibouti</option><option value="186">Dominica</option><option value="289">Dominica</option><option value="187">Dominican Republic</option><option value="45">Ecuador</option><option value="46">Egypt</option><option value="47">El Salvador</option><option value="48">Equatorial Guinea</option><option value="49">Eritrea</option><option value="50">Estonia</option><option value="51">Ethiopia</option><option value="189">Falkland Islands</option><option value="191">Faroe Islands</option><option value="52">Fiji</option><option value="53">Finland</option><option value="54">France</option><option value="193">French Guiana</option><option value="277">French Polynesia</option><option value="56">Gabon</option><option value="57">Gambia</option><option value="58">Georgia</option><option value="59">Germany</option><option value="60">Ghana</option><option value="194">Gibraltar</option><option value="61">Greece</option><option value="195">Greenland</option><option value="192">Grenada</option><option value="196">Guadeloupe</option><option value="62">Guam</option><option value="198">Guatemala</option><option value="270">Guernsey</option><option value="63">Guinea</option><option value="65">Guyana</option><option value="200">Haiti</option><option value="66">Honduras</option><option value="67">Hong Kong</option><option value="68">Hungary</option><option value="69">Iceland</option><option value="70">India</option><option value="71">Indonesia</option><option value="278">Iran</option><option value="279">Iraq</option><option value="74">Ireland</option><option value="322">Isle of Man</option><option value="75">Israel</option><option value="76">Italy</option><option value="202">Jamaica</option><option value="78">Japan</option><option value="288">Jersey  (Channel Islands)</option><option value="79">Jordan</option><option value="80">Kazakhstan</option><option value="81">Kenya</option><option value="203">Kiribati</option><option value="82">Kuwait</option><option value="83">Kyrgyzstan</option><option value="84">Lao People's Democratic Republic</option><option value="85">Latvia</option><option value="86">Lebanon</option><option value="87">Lesotho</option><option value="88">Liberia</option><option value="281">Libya</option><option value="90">Liechtenstein</option><option value="91">Lithuania</option><option value="92">Luxembourg</option><option value="208">Macau</option><option value="93">Macedonia</option><option value="94">Madagascar</option><option value="95">Malawi</option><option value="96">Malaysia</option><option value="97">Maldives</option><option value="98">Mali</option><option value="99">Malta</option><option value="207">Marshall Islands</option><option value="210">Martinique</option><option value="100">Mauritania</option><option value="212">Mauritius</option><option value="241">Mayotte</option><option value="101">Mexico</option><option value="102">Moldova, Republic of</option><option value="103">Monaco</option><option value="104">Mongolia</option><option value="290">Montenegro</option><option value="294">Montserrat</option><option value="105">Morocco</option><option value="106">Mozambique</option><option value="242">Myanmar</option><option value="107">Namibia</option><option value="108">Nepal</option><option value="109">Netherlands</option><option value="110">Netherlands Antilles</option><option value="213">New Caledonia</option><option value="111">New Zealand</option><option value="112">Nicaragua</option><option value="113">Niger</option><option value="114">Nigeria</option><option value="217">Niue</option><option value="214">Norfolk Island</option><option value="272">North Korea</option><option value="116">Norway</option><option value="117">Oman</option><option value="118">Pakistan</option><option value="222">Palau</option><option value="282">Palestine</option><option value="119">Panama</option><option value="219">Papua New Guinea</option><option value="120">Paraguay</option><option value="121">Peru</option><option value="122">Philippines</option><option value="221">Pitcairn</option><option value="123">Poland</option><option value="124">Portugal</option><option value="253">Puerto Rico</option><option value="126">Qatar</option><option value="315">Republic of Kosovo</option><option value="127">Reunion</option><option value="128">Romania</option><option value="129">Russia</option><option value="130">Rwanda</option><option value="205">Saint Kitts and Nevis</option><option value="206">Saint Lucia</option><option value="237">Saint Vincent and the Grenadines</option><option value="132">Samoa (Independent)</option><option value="227">San Marino</option><option value="255">Sao Tome and Principe</option><option value="133">Saudi Arabia</option><option value="134">Senegal</option><option value="266">Serbia</option><option value="135">Seychelles</option><option value="136">Sierra Leone</option><option value="137">Singapore</option><option value="302">Sint Maarten</option><option value="138">Slovakia</option><option value="139">Slovenia</option><option value="223">Solomon Islands</option><option value="140">Somalia</option><option value="141">South Africa</option><option value="257">South Georgia and the South Sandwich Islands</option><option value="142">South Korea</option><option value="311">South Sudan</option><option value="143">Spain</option><option value="144">Sri Lanka</option><option value="293">Sudan</option><option value="146">Suriname</option><option value="225">Svalbard and Jan Mayen Islands</option><option value="147">Swaziland</option><option value="148">Sweden</option><option value="149">Switzerland</option><option value="285">Syria</option><option value="152">Taiwan</option><option value="260">Tajikistan</option><option value="153">Tanzania</option><option value="154">Thailand</option><option value="233">Timor-Leste</option><option value="155">Togo</option><option value="232">Tonga</option><option value="234">Trinidad and Tobago</option><option value="156">Tunisia</option><option value="157">Turkey</option><option value="287">Turks &amp; Caicos Islands</option><option value="159">Uganda</option><option value="161">Ukraine</option><option value="162">United Arab Emirates</option><option value="262">United Kingdom</option><option value="163">Uruguay</option><option value="165">Uzbekistan</option><option value="239">Vanuatu</option><option value="166">Vatican City State (Holy See)</option><option value="167">Venezuela</option><option value="168">Vietnam</option><option value="169">Virgin Islands (British)</option><option value="238">Virgin Islands (U.S.)</option><option value="188">Western Sahara</option><option value="170">Yemen</option><option value="173">Zambia</option><option value="174">Zimbabwe</option></select>
	</div>

	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_4c27f09ab6a622c6340c21d60_6504bc6858" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
	</div>
</div>
				</div>

				<div class="contact-info comments">
					<strong>Comments, suggestions, inquiries: <span><a href="mailto:shout@transfermke.com" target="_blank">shout@transfermke.com</a></span></strong></br></br>
				</div>

				<div class="contact-info staff">
					<strong>General Manager:  
					<span><a href="mailto:maggie@transfermke.com" target="_blank">Maggie McCanna</a></span></strong></br></br>
				</div>

				<div class="contact-info staff">
					<strong>Co-Owner:  
					<span> <a href="mailto:jro@transfermke.com" target="_blank">John Rossetto</a></span></strong></br></br>
				</div>

				<div class="contact-info staff">
					<strong>Co-Owner: 
					<span> <a href="mailto:russelletto@transfermke.com" target="_blank">Russell Rossetto</a></span></strong></br></br>
				</div>
			</div>
					
    </section>
<div class="bottom-logo">
		<img class="logo-img" src="<?php bloginfo( 'template_url' ); ?>/images/LautobusTransfer.png">
	</div>
	</div><!-- #primary -->

<section id="calendara"><div class="calendar2">
<?php echo do_shortcode('[ai1ec view="monthly"]'); ?>
</div>
</div>







<?php get_footer(); ?>