<?php
	include_once('include/header.php');
?>
        <section class="slider_area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Just Start From Here Fillup your hunger</h2>
					</div>
					<div class="col-md-12">
						<form action="#" method="POST">
                                    <input type="hidden" name="Submit" value="1">
                                    <div class="search_container">
                                        <table>
                                            <tbody><tr>
                                                <td class="address_container">
                                                    <div class="address_field">
                                                        <input type="text" name="address_auto_complete" id="address" placeholder="Enter Your Address" autocomplete="off"><input id="lng" name="lng" type="hidden"><input id="lat" name="lat" type="hidden"><input id="country" name="country" type="hidden"><input id="state" name="state" type="hidden"><input id="city" name="city" type="hidden"><input id="zip" name="zip" type="hidden"><input type="hidden" name="google_first_result"><input type="hidden" name="address" placeholder="Enter Your Address" autocomplete="off" id="hidden_address" style="position: absolute; top: -1000em;">
                                                    </div>
                                                    <div class="warning_search_box"></div>
                                                </td>
                                                <td class="search_type_container">
                                                    <div class="search_type_field">
                                                        <select id="dtype">
                                                            <option value="delivery + pickup">Delivery &amp; Pickup</option>
                                                            <option value="delivery">Delivery</option>
                                                            <option value="pickup">Pickup</option>
                                                        </select>
                                                        <div class="select_arrow"></div>
                                                        <input type="checkbox" id="delivery" class="hidden" value="delivery" checked="checked">
                                                        <input type="checkbox" id="pickup" class="hidden" value="pickup" checked="checked">
                                                    </div>
                                                </td>
                                                <td class="submit_button_container">
                                                    <button ua-action="Find Restaurants" ua-label="">Find Your Nearest Restaurant <i class="fa fa-play"></i><div class="arrow_right"></div></button>
                                                </td>
                                            </tr>
                                            </tbody></table>
                                    </div>
					</div>
				</div>
			</div>	
		</section>
		<section class="help_area">
		  	<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2><i>Need help ordering? Call us at</i> <b>01959886650 or 01959886651</b></h2>
					</div>
				</div>
			</div>	
		</section>

		<section class="ads_area">
		  	<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="ads">
							<img src="img/ads_1.png">
						</div>
					</div>

					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">	
								<div class="ads_1">
									<img src="img/ads_6.jpg">
								</div>
							</div>	

							<div class="col-md-12">	
								<div class="ads_3">
									<img src="img/ads_2.png">
								</div>
								<div class="ads_3">
									<img src="img/ads_3.png">
								</div>	
								<div class="ads_3">
									<img src="img/ads_4.png">
								</div>	
								<div class="ads_3">
									<img src="img/ads_5.png">
								</div>	
							</div>
						</div>	
					</div>
				</div>	
			</div>	
		</section>
		<section class="order-add-food">
			<div class="container">
				<div class="row">
					<div class="top-text-box">
						<div class="section-heading recipe">
							<div class="blog_heading blog-text">
								<h2>Enjoy your food with us</h2>
							</div>
						</div>
						
						<p>Weekly deliveries of farm fresh ingredients and delicious recipes to your doorstep!</p>
					</div>
				</div>
				<div class="row">
					<div class="order-food-box">
						<div class="col-md-4">
							<div class="single-order-box">
								<div class="food-image">
									<img src="img/spe.jpg" alt="" />
								</div>
								<div class="food-details">
									<h3 class="big-name">Executive</h3>
									<h3 class="small-text">Lunch Box</h3>
								</div>
								<div class="extra-details">
									<ul>
										<li><i class="fa fa-check-circle" aria-hidden="true"></i> check For executive</li>
										<li><i class="fa fa-check-circle" aria-hidden="true"></i> check Fits 2 or 4 adults</li>
									</ul>
								</div>
								<div class="price-btn-box">
									<ul>
										<li class="price-text">TK. 65/meal</li>
										<li>
											<div class="food-order-btn">
												<a href="form65.php">order Box</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-order-box">
								<div class="food-image">
									<img src="img/spe.jpg" alt="" />
								</div>
								<div class="food-details">
									<h3 class="big-name">Premium</h3>
									<h3 class="small-text">Lunch Box</h3>
								</div>
								<div class="extra-details">
									<ul>
										<li><i class="fa fa-check-circle" aria-hidden="true"></i> check For Premium</li>
										<li><i class="fa fa-check-circle" aria-hidden="true"></i> check Fits 2 or 4 adults</li>
									</ul>
								</div>
								<div class="price-btn-box">
									<ul>
										<li class="price-text">TK. 85/meal</li>
										<li>
											<div class="food-order-btn">
												<a href="form85.php">order Box</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-order-box">
								<div class="food-image">
									<img src="img/spe.jpg" alt="" />
								</div>
								<div class="food-details">
									<h3 class="big-name">Exclusive</h3>
									<h3 class="small-text">Lunch Box</h3>
								</div>
								<div class="extra-details">
									<ul>
										<li><i class="fa fa-check-circle" aria-hidden="true"></i> check For Exclusive</li>
										<li><i class="fa fa-check-circle" aria-hidden="true"></i> check Fits 2 or 4 adults</li>
									</ul>
								</div>
								<div class="price-btn-box">
									<ul>
										<li class="price-text">TK. 100/meal</li>
										<li>
											<div class="food-order-btn">
												<a href="form95.php">order Box</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="home_order_area">
		  	<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="home_order_figure">
						  	 <img src="img/home_order_one.png" class="home_order_one wow bounceInLeft" data-wow-delay="300ms">
							 <img src="img/home_order_two.png" class="home_order_two wow bounceInUp" data-wow-delay="1s">
							 <img src="img/home_order_three.png" class="home_order_three wow bounceInLeft" data-wow-delay="2s">
						</div>
					</div>
					<div class="col-md-4 home_order">
						<h2><span>Enjoy</span><br>
						    Deshi Foods With<br>
							Mr.Food</h2>

						<a href="#"><button type="button" class="btn-order">Order Now</button></a>	
					</div>
				</div>
			</div>	
		</section>

		<section class="home_slideshow_area">
		  	<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#myCarousel" data-slide-to="1"></li>
						    <li data-target="#myCarousel" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img src="img/frame1.png">
						    </div>

						    <div class="item">
						      <img src="img/frame2.png">
						    </div>

						    <div class="item">
						      <img src="img/frame3.png">
						    </div>
						  </div>			 
						</div>
					</div>
					<div class="col-md-4">
						<div class="table-area">
							<h2>Latest Order</h2>	
						 <table class="table table-hover">
						 	<thead>
						        <tr class="wow fadeIn" data-wow-delay="100ms">
						          <th>Name</th>
						          <th>Area</th>
						          <th>Box Type</th>
						        </tr>
						    </thead>
						    <tbody>
							<?php
								$sql ="SELECT `name`,`receivearea`,`foodname` FROM `orders` ORDER BY `id` DESC LIMIT 6 ";
								$sql = mysqli_query($conn, $sql);
								while($row = mysqli_fetch_array($sql)){	
									$name = $row['name'];
									$area = $row['receivearea'];
									$food = $row['foodname'];
							?>
						      <tr class="wow fadeInUp" data-wow-delay="200ms">
						        <td><?php echo $name;?></td>
						        <td><?php echo $area;?></td>
						        <td><?php echo $food;?></td>
						      </tr>
							  <?php	
							  }
							  mysqli_close($conn);
							  ?>
						    </tbody>
						  </table>
						</div>  
					</div>
				</div>
			</div>	
		</section>

		<section class="food_counting_area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading wow bounceIn">
							<div class="heading">
	<h2><span class="spanbold">MR.FOOD</span> is easy like Counting <span class="wow fadeInUp" data-wow-delay="1s">1</span>.<span class="wow fadeInUp" data-wow-delay="2s">2</span>.<span class="wow fadeInUp" data-wow-delay="3s">3</span>...</span></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
				<div class="order-process-row">
					<div class="col-md-3">
						<div class="order-process-box wow zoomIn" data-wow-delay=".3s" data-wow-duration="2s">
							<div class="order-process-img">
								<img src="img/map.png" alt="" />
							</div>
							<p class="boldtext">1. Search</p>
							<p class="bolddetails">
							Find restaurants that deliver </br> to you by entering your address</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="order-process-box wow zoomIn" data-wow-delay=".3s" data-wow-duration="2s">
							<div class="order-process-img">
								<img src="img/cup.png" alt="" />
							</div>
							<p class="boldtext">2. Choose</p>
							<p class="bolddetails">
							Browse hundreds of menus
							</br> to find the food you like</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="order-process-box wow zoomIn" data-wow-delay=".3s" data-wow-duration="2s">
							<div class="order-process-img">
								<img src="img/card.png" alt="" />
							</div>
							<p class="boldtext">3. Pay</p>
							<p class="bolddetails">
							Pay fast & secure online or
							</br> on delivery</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="order-process-box wow zoomIn" data-wow-delay=".3s" data-wow-duration="2s">
							<div class="order-process-img">
								<img src="img/delivery.png" alt="" />
							</div>
							<p class="boldtext">4. Enjoy</p>
							<p class="bolddetails">
							Food is prepared & delivered
							</br> to your door</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="restaurant_directory_area">
		  	<div class="container restaurant_directory">

				<div class="row">
					<div class="col-md-4 restaurants-ranking">
						<h3>A Global Ranking</h3>
						<h4>of <span>Restaurants</span></h4> 
						<a href="#">Join the Program</a>
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-2">
								<img src="img/logo-tr.png">
							</div>
							<div class="col-md-2">
								<img src="img/logo-outback.png">
							</div>
							<div class="col-md-2">
								<img src="img/logo-tr.png">
							</div>
							<div class="col-md-2">
								<img src="img/logo-seasons.png">
							</div>
							<div class="col-md-2">
								<img src="img/logo-outback.png">
							</div>
							<div class="col-md-2">
								<img src="img/logo-tr.png">
							</div>
						</div>

						<div class="row">
							<div class="col-md-2">
								<img src="img/logo-seasons.png">
							</div>
							<div class="col-md-2">
								<img src="img/logo-tr.png">
							</div>
							<div class="col-md-2">
								<img src="img/logo-outback.png">
							</div>
							<div class="col-md-2">
								<img src="img/logo-tr.png">
							</div>
							<div class="col-md-2">
								<img src="img/logo-seasons.png">
							</div>
							<div class="col-md-2">
								<img src="img/logo-outback.png">
							</div>
						</div>
					</div>
				</div>

				
			</div>	
		</section>

		<section class="best_app_area">
		  	<div class="container">
				<div class="row">
					<div class="col-md-6">
						<img src="img/img_screenshots.png">
					</div>
					<div class="col-md-6">
						<h2>The Best Food Delivery App</h2>
						<p>Now you can make food happen pretty much<br> wherever you are thanks to the free easy-to-use Mr.Food<br> Delivery & Takeout App for desktop and mobile.</p>

						<a href="#">Get This Apps Now   <i class="fa fa-play"></i></a>
					</div>
				</div>
		 	</div>
		</section>

		<section class="email_subscribe_area">
		  	<div class="container email_subscribe">
				<div class="row">
					<div class="col-md-12">
						<h2>Want coupons, love notes, deep thoughts about bacon? Get our weekly email:</h2>
					</div>
					
					<div class="col-md-3"></div>
					<div class="col-md-6">	
						<form name="iterable_optin" method="POST">
			                <div class="input_container">
			                    <input id="iterable_email" class="input_email" type="text" name="email" size="22" placeholder="Enter your email">
			                </div>
			                <input class="button" name="go" type="submit" value="Sign Up">
			            </form>
					</div>
					<div class="col-md-3"></div>	
				</div>
		 	</div>
		</section>


		<section class="home_blog_area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading wow bounceIn">
							<div class="blog_heading">
								<h2>Discussion About Food</h2>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="blog-post-home">
	                        <img src="img/mandarinka.jpg" class="image wow fadeInRight">
	                        <div class="info">
	                            <div class="diamond">
	                                <div class="background"></div>
	                                <div class="icon"><i class="fa fa-picture-o"></i></div>
	                            </div>
	                            <div class="stats">
	                                <div class="stat uppercase pull-left wow fadeInUp" data-wow-delay="300ms"><i class="fa fa-calendar"></i>12 Feb</div>
	                                <div class="stat uppercase pull-left wow fadeInUp" data-wow-delay="600ms"><i class="fa fa-eye"></i>1,345</div>
	                                <div class="stat uppercase pull-left wow fadeInUp" data-wow-delay="900ms"><i class="fa fa-comments-o"></i>113</div>
	                            </div>
	                            <div class="arrow"></div>
	                        </div>
	                        <div class="content">
	                            <div class="sub-heading wow flipInY" data-wow-delay="300ms">জেনে নিন কমলার রসের দারুণ ...</div>
	                            <span class="line"></span>
	                            <p class="wow flipInY" data-wow-delay="600ms">কমলা একটি সুস্বাদু ও সহজলভ্য ফল। বিশেষ করে এখনই কমলার সেরা মৌসুম। চোখ ধাধানো রঙ ও পুষ্টিগুণে ভরপুর বলে এই ফলটি সবারই খুব পছন্দ। ফল হিসেবে, জুস করে কিংবা অনেক রান্নাতেও কমলা ব্যবহার করা হয়। প্রতিদিন কমলা খেলে শরীরের নানান সমস্যা ও রোগ বালাই থেকে দূরে থাকা যায়।</p>
	                        </div>
	                        <a href="#"><button type="button" class="btn-small wow fadeInUp" data-wow-delay="900ms">Read more</button></a>	
	                    </div>
					</div>

					<div class="col-md-4">
						<div class="blog-post-home">
	                        <img src="img/hit.jpg" class="image wow fadeInRight">
	                        <div class="info">
	                            <div class="diamond">
	                                <div class="background"></div>
	                                <div class="icon"><i class="fa fa-picture-o"></i></div>
	                            </div>
	                            <div class="stats">
	                                <div class="stat uppercase pull-left wow fadeInUp" data-wow-delay="300ms"><i class="fa fa-calendar"></i>12 Feb</div>
	                                <div class="stat uppercase pull-left wow fadeInUp" data-wow-delay="600ms"><i class="fa fa-eye"></i>1,345</div>
	                                <div class="stat uppercase pull-left wow fadeInUp" data-wow-delay="900ms"><i class="fa fa-comments-o"></i>113</div>
	                            </div>
	                            <div class="arrow"></div>
	                        </div>
	                        <div class="content">
	                            <div class="sub-heading wow flipInY" data-wow-delay="300ms">হিট স্ট্রোক হলে কি করবেন?...</div>
	                            <span class="line"></span>
	                            <p class="wow flipInY" data-wow-delay="600ms">রতিবছর গরম আরো বেড়ে চলেছে। পৃথিবী উষ্ণতর হচ্ছে; কিন্তু মানবদেহে অভ্যন্তরীণভাবে তাপমাত্রা নিয়ন্ত্রিত হয়ে থাকে। পরিবেশের তাপমাত্রা বেড়ে গেলেও শরীর চেষ্টা করে নিজের তাপমাত্রা বজায় রাখতে। তখন শরীর ঘামতে শুরু করে। ঘাম বাষ্পীভূত হয়ে উবে গিয়ে শরীরকে শীতল করে।</p>
	                        </div>
	                        <a href="#"><button type="button" class="btn-small wow fadeInUp" data-wow-delay="900ms">Read more</button></a>	
	                    </div>
					</div>

					<div class="col-md-4">
						<div class="blog-post-home">
	                        <img src="img/mata.jpg" class="image wow fadeInRight">
	                        <div class="info">
	                            <div class="diamond">
	                                <div class="background"></div>
	                                <div class="icon"><i class="fa fa-picture-o"></i></div>
	                            </div>
	                            <div class="stats">
	                                <div class="stat uppercase pull-left wow fadeInUp" data-wow-delay="300ms"><i class="fa fa-calendar"></i>12 Feb</div>
	                                <div class="stat uppercase pull-left wow fadeInUp" data-wow-delay="600ms"><i class="fa fa-eye"></i>1,345</div>
	                                <div class="stat uppercase pull-left wow fadeInUp" data-wow-delay="900ms"><i class="fa fa-comments-o"></i>113</div>
	                            </div>
	                            <div class="arrow"></div>
	                        </div>
	                        <div class="content">
	                            <div class="sub-heading wow flipInY" data-wow-delay="300ms">গরমে পান করুন ঘোল বা মাঠার...</div>
	                            <span class="line"></span>
	                            <p class="wow flipInY" data-wow-delay="600ms">গরমকালে দিনের দৈর্ঘ্য বৃদ্ধি পায় ও সূর্য রশ্মির তাপে শরীর থেকে প্রচুর পানি বাহির হয়ে যায়। এই পানির ঘাটতি পূরণের জন্য অনেক বেশি তরল পান করা প্রয়োজন। আর এই ঘাটতি পূরণের জন্য ঘোল হতে পারে আদর্শ। তাই ঘোল তৈরি করার কয়েকটি রেসিপি জেনে নেই আসুন।</p>
	                        </div>
	                       <a href="#"><button type="button" class="btn-small wow fadeInUp" data-wow-delay="900ms">Read more</button></a>	
	                    </div>
					</div>
				</div>	

				<div class="row">
					<div class="col-md-4">
						<div class="blog-post-home">
	                        <img src="img/yoga.jpg" class="image wow fadeInRight">
	                        <div class="info">
	                            <div class="diamond">
	                                <div class="background"></div>
	                                <div class="icon"><i class="fa fa-picture-o"></i></div>
	                            </div>
	                            <div class="stats">
	                                <div class="stat uppercase pull-left wow fadeInUp" data-wow-delay="300ms"><i class="fa fa-calendar"></i>12 Feb</div>
	                                <div class="stat uppercase pull-left wow fadeInUp" data-wow-delay="600ms"><i class="fa fa-eye"></i>1,345</div>
	                                <div class="stat uppercase pull-left wow fadeInUp" data-wow-delay="900ms"><i class="fa fa-comments-o"></i>113</div>
	                            </div>
	                            <div class="arrow"></div>
	                        </div>
	                        <div class="content">
	                            <div class="sub-heading wow flipInY" data-wow-delay="300ms">স্বাস্থ্যকর জীবন যাপনের সহজ উপায়</div>
	                            <span class="line"></span>
	                            <p class="wow flipInY" data-wow-delay="600ms">স্বাস্থ্যসম্মত জীবন ধারন মানে আপনার সমগ্র জীবনধারাকে ঢেলে সাজানো বোঝায় না। কখনও কখনও সহজ কিছু পরিবর্তন এনেও আপনি ফিরে আসতে পারেন স্বাস্থ্যকর জীবন ধারায় । এখানে আছে এমন কিছু টিপস যা অনুসরণ করে আপনিও একটি ভাল ও স্বাস্থ্যকর জীবন</p>
	                        </div>
	                        <a href="#"><button type="button" class="btn-small wow fadeInUp" data-wow-delay="900ms">Read more</button></a>	
	                    </div>
					</div>

					<div class="col-md-4">
						<div class="blog-post-home">
	                        <img src="img/gdgas.jpg" class="image wow fadeInRight">
	                        <div class="info">
	                            <div class="diamond">
	                                <div class="background"></div>
	                                <div class="icon"><i class="fa fa-picture-o"></i></div>
	                            </div>
	                            <div class="stats">
	                                <div class="stat uppercase pull-left wow fadeInUp" data-wow-delay="300ms"><i class="fa fa-calendar"></i>12 Feb</div>
	                               <div class="stat uppercase pull-left wow fadeInUp" data-wow-delay="600ms"><i class="fa fa-eye"></i>1,345</div>
	                                <div class="stat uppercase pull-left wow fadeInUp" data-wow-delay="900ms"><i class="fa fa-comments-o"></i>113</div>
	                            </div>
	                            <div class="arrow"></div>
	                        </div>
	                        <div class="content">
	                            <div class="sub-heading wow flipInY" data-wow-delay="300ms">রান্নাকে সহজ ও সুস্বাদু করে .......</div>
	                            <span class="line"></span>
	                            <p class="wow flipInY" data-wow-delay="600ms">রান্নাকে সহজ করার জন্য কত রকমের কৌশল অবলম্বন করা হয়। কিন্তু সব কৌশল সব সময় কাজ করে না। কিছু কৌশল আছে যা রান্নাকে সহজ করার পাশাপাশি রান্নাকে করে তোলে সুস্বাদু। আসুন জেনে নিই এমনই কিছু কৌশলের কথা। ১। বিভিন্ন মশলা ঠান্ডা, শুকানো </p>
	                        </div>
	                       <a href="#"><button type="button" class="btn-small wow fadeInUp" data-wow-delay="900ms">Read more</button></a>	
	                    </div>
					</div>

					<div class="col-md-4">
						<div class="blog-post-home">
	                        <img src="img/jal.jpg" class="image wow fadeInRight">
	                        <div class="info">
	                            <div class="diamond">
	                                <div class="background"></div>
	                                <div class="icon"><i class="fa fa-picture-o"></i></div>
	                            </div>
	                            <div class="stats">
	                                <div class="stat uppercase pull-left wow fadeInUp" data-wow-delay="300ms"><i class="fa fa-calendar"></i>12 Feb</div>
	                                <div class="stat uppercase pull-left wow fadeInUp" data-wow-delay="600ms"><i class="fa fa-eye"></i>1,345</div>
	                                <div class="stat uppercase pull-left wow fadeInUp" data-wow-delay="900ms"><i class="fa fa-comments-o"></i>113</div>
	                            </div>
	                            <div class="arrow"></div>
	                        </div>
	                        <div class="content">
	                            <div class="sub-heading wow flipInY" data-wow-delay="300ms">মালাই ফিশ টিক্কা রেসিপি যা ....</div>
	                            <span class="line"></span>
	                            <p class="wow flipInY" data-wow-delay="600ms">এই ঠাণ্ডা ঠাণ্ডা মৌসুমে কাবাব জাতীয় খাবার খেতে সকলেরই ভালো লাগে। চিকেন বা বিফ কাবাব খেতে খেতে বিরক্ত? তাহলে আজ জেনে নিন ফিশ টিক্কা তৈরি করার রেসিপি। যে কোন মাংসের চাইতে অনেক কম সময় লাগবে এই খাবারটি তৈরিতে। তৈরি করুন ঝটপট আর মজা</p>
	                        </div>
	                       <a href="#"><button type="button" class="btn-small wow fadeInUp" data-wow-delay="900ms">Read more</button></a>	
	                    </div>
					</div>
				</div>	
			</div>
		</section>
<?php
	include_once('include/footer.php');
?>
