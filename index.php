<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Sport Template</title>

	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/lightbox.css">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,300italic,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,700italic,700,400italic' rel='stylesheet' type='text/css'>
	
	<script src="js/jquery-1.9.1.js" type="text/javascript"></script>
	<script src="js/js.js" type="text/javascript"></script>
	    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <!-- Default Theme -->
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <!-- Include js plugin -->
    <script src="owl-carousel/owl.carousel.js"></script>
    <script src="js/countdown.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/lightbox.js" type="text/javascript" charset="utf-8"></script>
    <!--[if IE]>
    	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  	<![endif]-->	
</head>
<body>
	<header>
		<nav>
			<div class="logo">
				<a href="index-2.html"><img src="img/logo.png" alt="Sport Template"></a>
			</div>

			<ul>
				<li class="active"><a href="index-2.html">Home</a></li>
				<li><a href="#">Pages</a>
					<ul>
						<li><a href="about.html">About</a></li>	
						<li><a href="gallery.html">Gallery</a></li>	
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="404.html">404</a></li>
						<li><a href="soon.html">Comming soon</a></li>
					</ul>				
				</li>
				<li><a href="blog.html">Blog</a>
					<ul>
						<li><a href="blog-post.html">Blog Post</a></li>
					</ul>	
				</li>
				<li><a href="#">Shortcodes</a>
					<ul>
						<li><a href="modules.html">Modules</a></li>
						<li><a href="accordion.html">Accordion</a></li>
						<li><a href="blockquote.html">Blockquote</a></li>
						<li><a href="buttons.html">Buttons</a></li>
						<li><a href="sliders.html">Sliders</a></li>
						<li><a href="icon-box.html">Icon Box</a></li>
						<li><a href="feature-icons.html">Feature Icons</a></li>
						<li><a href="alerts.html">Alerts</a></li>
						<li><a href="price-table.html">Pricing Tables</a></li>
						<li><a href="tabs.html">Tabs</a></li>
						<li><a href="tagline-boxes.html">Tagline Boxes</a></li>
						<li><a href="full-width.html">Typography</a></li>					
					</ul>				
				</li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="#">Events</a>
					<ul>
						<li><a href="add-events.html">Add Events</a></li>
						<li><a href="view-events.html">View Events</a></li>				
					</ul>				
				</li>
				<li><a href="register.php">Register</a></li>
				<?php
            session_start();

            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                // If the user is logged in, display the logout button
                echo '<li><a href="logout.php" class="button yellow-bg small">Logout</a></li>';
            } else {
                // If the user is not logged in, display the login button
                echo '<li><a href="login.php" class="button yellow-bg small">Login</a></li>';
            }
            ?>
			</ul>
		</nav>

		<div class="nav-mobile">
			<ul class="nav-mobile-menu">
				<li class="active"><a href="index-2.html">Home</a></li>			
				<li><div>Pages <i class="fa fa-chevron-right"></i></div>
					<ul>
						<li><a href="about.html">About</a></li>	
						<li><a href="gallery.html">Gallery</a></li>	
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="404.html">404</a></li>
						<li><a href="soon.html">Comming soon</a></li>
					</ul>				
				</li>
				<li><div>Blog <i class="fa fa-chevron-right"></i></div>
					<ul>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="blog-post.html">Blog Post</a></li>
					</ul>	
				</li>
				<li><div>Shortcodes <i class="fa fa-chevron-right"></i></div>
					<ul>
						<li><a href="modules.html">Modules</a></li>
						<li><a href="accordion.html">Accordion</a></li>
						<li><a href="blockquote.html">Blockquote</a></li>
						<li><a href="buttons.html">Buttons</a></li>
						<li><a href="sliders.html">Sliders</a></li>
						<li><a href="icon-box.html">Icon Box</a></li>
						<li><a href="feature-icons.html">Feature Icons</a></li>
						<li><a href="alerts.html">Alerts</a></li>
						<li><a href="price-table.html">Pricing Tables</a></li>
						<li><a href="tabs.html">Tabs</a></li>
						<li><a href="tagline-boxes.html">Tagline Boxes</a></li>
						<li><a href="full-width.html">Typography</a></li>					
					</ul>				
				</li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="register.php">Register</a></li>
				<?php
            // session_start();

            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                // If the user is logged in, display the logout button
                echo '<li><a href="logout.php" class="button yellow-bg small">Logout</a></li>';
            } else {
                // If the user is not logged in, display the login button
                echo '<li><a href="login.php" class="button yellow-bg small">Login</a></li>';
            }
            ?>
			</ul>	
			<ul class="button-menu">			
				<li>
					<i class="fa fa-bars"></i>
				</li>
			</ul>								
		</div>

		<div class="clearfix header-content">
			<h1>Sports Club</h1>
			<h2>We Manage Sport Events</h2>
			<p>Welcome to our Sports Club website! We're dedicated to organizing exciting and memorable sporting events for enthusiasts of all ages and interests.</p>
			<a href="#" class="button yellow-bg">Watch our video</a>
		</div>

	</header>

	<section class="sport-news">

		<div class="m-02">
			<div class="sport-menu">
				<div class="sport-content sport-title">
					<span><i class="fa fa-chevron-right sport-icon"></i>See All Sports</span>					
				</div>			
				<div class="m-08 all-sport-menu">
						<ul class="m-02">
							<li class="title"><h3>Sport Section 01</h3></li>
							<li><a href="sport.html">Football</a></li>
							<li><a href="sport.html">Formula 1</a></li>
							<li><a href="sport.html">Cricket</a></li>
							<li><a href="sport.html">Rugby U</a></li>
							<li><a href="sport.html">Rugby L</a></li>
						</ul>
						<ul class="m-02">
							<li class="title"><h3>Sport Section 01</h3></li>
							<li><a href="sport.html">Tennis</a></li>
							<li><a href="sport.html">Golf</a></li>
							<li><a href="sport.html">Athletics</a></li>
							<li><a href="sport.html">Cycling</a></li>
							<li><a href="sport.html">Boxing</a></li>
						</ul>
						<ul class="m-02">
							<li class="title"><h3>Sport Section 01</h3></li>
							<li><a href="sport.html">Snooker</a></li>
							<li><a href="sport.html">Darts</a></li>
							<li><a href="sport.html">Racing</a></li>
							<li><a href="sport.html">NFL</a></li>
							<li><a href="sport.html">Tennis</a></li>
							<li><a href="sport.html">Motor Sport</a></li>
						</ul>
						<ul class="m-02">
							<li class="title"><h3>Sport Section 01</h3></li>
							<li><a href="sport.html">Ice Hockey</a></li>
							<li><a href="sport.html">Netball</a></li>
							<li><a href="sport.html">Speedway</a></li>
							<li><a href="sport.html">UFC</a></li>
							<li><a href="sport.html">WWE</a></li>
							<li><a href="sport.html">Basketball</a></li>
						</ul>																		
				</div>
			</div>				
		</div>

		<div class="m-01 sport">
			<div class="sport-content"><a href="sport.html">Football</a></div>
		</div>
		<div class="m-01 sport">
			<div class="sport-content"><a href="sport.html">Formula 1</a></div>
		</div>
		<div class="m-01 sport">
			<div class="sport-content"><a href="sport.html">Cricket</a></div>
		</div>			
		<div class="m-01 sport">
			<div class="sport-content"><a href="sport.html">Rugby U</a></div>
		</div>		
		<div class="m-01 sport">
			<div class="sport-content"><a href="sport.html">Tennis</a></div>
		</div>	
		<div class="m-01 sport">
			<div class="sport-content"><a href="sport.html">Golf</a></div>
		</div>	
		<div class="m-01 sport">
			<div class="sport-content"><a href="sport.html">Athletics</a></div>
		</div>	
		<div class="m-01 sport">
			<div class="sport-content"><a href="sport.html">Cycling</a></div>
		</div>	
		<div class="m-01 sport">
			<div class="sport-content"><a href="sport.html">Boxing</a></div>
		</div>	
		<div class="m-01 sport">
			<div class="sport-content"><a href="sport.html">Snooker</a></div>
		</div>													
	</section>

	<section class="bg-orange">
		<div class="m-12">

			<div class="m-06 bg-03">
				<div class="module-content content">
					<a href="blog-post.html"><h1>Blues can silence critics - Carney </h1></a>
					<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
					<div class="info">
						<ul>
							<li class="date"><i class="fa fa-calendar"></i>31 Mar 2014</li>
							<li class="tag"><a href="#"><i class="fa fa-tag"></i>Football</a></li>
						</ul>
					</div>		
				</div>							
			</div>	

			<div class="m-06 bg-orange">						
				<div class="owl-carousel owl-theme" data-items="1" data-auto-play="true">

					<div class="item">				
						<div class="m-12 bg-06">
							<div class="module-content content">
								<a href="blog-post.html"><h1>Blues can silence critics - Carney </h1></a>
								<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
								<div class="info">
									<ul>
										<li class="date"><i class="fa fa-calendar"></i>31 Mar 2014</li>
										<li class="tag"><a href="#"><i class="fa fa-tag"></i>Football</a></li>
									</ul>
								</div>		
							</div>							
						</div>
					</div>
					
					<div class="item">				
						<div class="m-12 bg-03">
							<div class="module-content content">
								<a href="blog-post.html"><h1>Blues can silence critics - Carney </h1></a>
								<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
								<div class="info">
									<ul>
										<li class="date"><i class="fa fa-calendar"></i>31 Mar 2014</li>
										<li class="tag"><a href="#"><i class="fa fa-tag"></i>Football</a></li>
									</ul>
								</div>		
							</div>							
						</div>
					</div>	
					
					<div class="item">				
						<div class="m-12 bg-02">
							<div class="module-content content">
								<a href="blog-post.html"><h1>Blues can silence critics - Carney </h1></a>
								<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
								<div class="info">
									<ul>
										<li class="date"><i class="fa fa-calendar"></i>31 Mar 2014</li>
										<li class="tag"><a href="#"><i class="fa fa-tag"></i>Football</a></li>
									</ul>
								</div>		
							</div>							
						</div>
					</div>	

					
					<div class="item">				
						<div class="m-12 bg-04">
							<div class="module-content content">
								<a href="blog-post.html"><h1>Blues can silence critics - Carney </h1></a>
								<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
								<div class="info">
									<ul>
										<li class="date"><i class="fa fa-calendar"></i>31 Mar 2014</li>
										<li class="tag"><a href="#"><i class="fa fa-tag"></i>Football</a></li>
									</ul>
								</div>		
							</div>							
						</div>
					</div>																									
				</div>
			</div>	

		</div>

		<div class="m-12">

			<div class="m-06 bg-01">
				<div class="module-content content">
					<a href="blog-post.html"><h1>Blues can silence critics - Carney </h1></a>
					<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
					<div class="info">
						<ul>
							<li class="date"><i class="fa fa-calendar"></i>31 Mar 2014</li>
							<li class="tag"><a href="#"><i class="fa fa-tag"></i>Football</a></li>
						</ul>
					</div>		
				</div>							
			</div>		

			<div class="m-06 bg-04">
				<div class="module-content content">
					<a href="blog-post.html"><h1>Blues can silence critics - Carney </h1></a>
					<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
					<div class="info">
						<ul>
							<li class="date"><i class="fa fa-calendar"></i>31 Mar 2014</li>
							<li class="tag"><a href="#"><i class="fa fa-tag"></i>Football</a></li>
						</ul>
					</div>						
				</div>									
			</div>	

		</div>							
	</section>

	<section>
		<div class="m-12">
			<div class="m-03">
				<div class="module-content">							
					<a href="blog-post.html"><h2>Blues can silence critics - Carney </h2></a>				
					<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
					<div class="info">
						<ul>
							<li class="date"><i class="fa fa-calendar"></i>31 Mar 2014</li>
							<li class="tag"><a href="#"><i class="fa fa-tag"></i>Football</a></li>
						</ul>
					</div>						
				</div>			
			</div>

			<div class="m-03 bg-orange">
				<div class="module-content">							
					<a href="blog-post.html"><h2>Blues can silence critics - Carney </h2></a>				
					<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
					<div class="info">
						<ul>
							<li class="date"><i class="fa fa-calendar"></i>31 Mar 2014</li>
							<li class="tag"><a href="#"><i class="fa fa-tag"></i>Football</a></li>
						</ul>
					</div>						
				</div>			
			</div>

			<div class="m-03">
				<div class="module-content">							
					<a href="blog-post.html"><h2>Blues can silence critics - Carney </h2></a>				
					<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
					<div class="info">
						<ul>
							<li class="date"><i class="fa fa-calendar"></i>31 Mar 2014</li>
							<li class="tag"><a href="#"><i class="fa fa-tag"></i>Football</a></li>
						</ul>
					</div>						
				</div>			
			</div>

			<div class="m-03 bg-orange">
				<div class="module-content">							
					<a href="blog-post.html"><h2>Blues can silence critics - Carney </h2></a>				
					<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
					<div class="info">
						<ul>
							<li class="date"><i class="fa fa-calendar"></i>31 Mar 2014</li>
							<li class="tag"><a href="#"><i class="fa fa-tag"></i>Football</a></li>
						</ul>
					</div>						
				</div>			
			</div>								
		</div>
	</section>

	<section>
		<div class="m-12 bg-dark-blue">
			<div class="m-06 bg-05">
				<div class="module-content">
					<div class="title-default">
						<h2>F1 Soon</h2>	
					</div>		
					<table class="table-scores">
						<tr class="t-header">
							<td colspan="2" class="score-teams-soon">F1 Italian Grand Prix</td>
						</tr>
						<tr>
							<td class="countdown-table-soon"><div class="countdown countdown-white" data-countdown="2014/11/27"></div></td>
							<td class="score-tv"><a href="#"><i class="fa fa-ticket"></i></a></td>
						</tr>
						<tr class="t-header">
							<td colspan="2" class="score-teams-soon">F1 Rolex Australian Grand Prix</td>
						</tr>						
						<tr>
							<td class="countdown-table-soon"><div class="countdown countdown-white" data-countdown="2016/04/09"></div></td>
							<td class="score-tv"><a href="#"><i class="fa fa-ticket"></i></a></td>
						</tr>																										
					</table>						
				</div>		
			</div>	

			<div class="m-03">
				<div class="tagline-box t-box-dark-blue">
					<div class="module-content">
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, pariatur praesentium eius maxime. Ex, veniam, natus, assumenda, vel praesentium dicta eligendi doloribus quibusdam rem Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet iure illum quisquam saepe autem cumque officiis!</p>
						<a href="#" class="button green-bg">Button</a>
					</div>
				</div>
			</div>


			<div class="m-03 bg-dark-blue">
				<div class="module-content">
					<div class="title-default">
						<h2>Scores Table</h2>	
					</div>				
					<table class="table-scores">
						<tr class="t-header">
							<td>Pos</td>
							<td>Team</td>
							<td>P</td>
							<td>Pts</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Man City</td>
							<td>31</td>
							<td>70</td>
						</tr>	
						<tr>
							<td>2</td>
							<td>Man City</td>
							<td>25</td>
							<td>65</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Man City</td>
							<td>23</td>
							<td>62</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Man City</td>
							<td>21</td>
							<td>59</td>
						</tr>
						<tr>
							<td>5</td>
							<td>Man City</td>
							<td>19</td>
							<td>53</td>
						</tr>																																																																																				
					</table>	
				</div>		
			</div>	

		</div>
	</section>
	
	<section class="bg-10">
		<div class="m-12">
			<div class="module-content">

				<div class="title-default">
					<h2>Soon</h2>	
				</div>

				<div class="m-04">
					<div class="leftTeam">
						<img src="img/left-team.png" alt="" />
						<img src="img/left-team-logo.png" alt="" class="leftTeamLogo" />
					</div> <!-- End Left Team -->
				</div>

				<div class="m-04">
					<div class="soon-countdown">
						<ul>
							<li>Team 01</li>
							<li>vs</li>
							<li>Team 02</li>
						</ul>
						<div class="countdown-big countdown-white" data-countdown="2016/04/09"></div>
					</div>
				</div>

				<div class="m-04">
					<div class="rightTeam">
						<img src="img/right-team.png" alt="" />
						<img src="img/right-team-logo.png" alt="" class="rightTeamLogo" />
					</div> <!-- End Right Team -->					
				</div>	

			</div>
		</div>
	</section>

	<section class="bg-dark-blue">
		<div class="m-06 bg-orange">						
			<div class="owl-carousel owl-theme" data-items="2" data-auto-play="true">
				<div class="item">				
					<div class="module-content content">							
						<a href="blog-post.html"><h1>Blues can silence critics - Carney </h1></a>
						<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
						<div class="info">
							<ul>
								<li class="date"><i class="fa fa-calendar"></i>31 Mar 2014</li>
								<li class="tag"><a href="#"><i class="fa fa-tag"></i>Football</a></li>
							</ul>
						</div>						
					</div>
				</div>

				<div class="item">				
					<div class="module-content content">						
						<a href="blog-post.html"><h1>Blues can silence critics - Carney </h1></a>
						<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
						<div class="info">
							<ul>
								<li class="date"><i class="fa fa-calendar"></i>31 Mar 2014</li>
								<li class="tag"><a href="#"><i class="fa fa-tag"></i>Football</a></li>
							</ul>
						</div>						
					</div>
				</div>

				<div class="item">				
					<div class="module-content content">						
						<a href="blog-post.html"><h1>Blues can silence critics - Carney </h1></a>
						<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
						<div class="info">
							<ul>
								<li class="date"><i class="fa fa-calendar"></i>31 Mar 2014</li>
								<li class="tag"><a href="#"><i class="fa fa-tag"></i>Football</a></li>
							</ul>
						</div>						
					</div>
				</div>

				<div class="item">				
					<div class="module-content content">						
						<a href="blog-post.html"><h1>Blues can silence critics - Carney </h1></a>
						<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
						<div class="info">
							<ul>
								<li class="date"><i class="fa fa-calendar"></i>31 Mar 2014</li>
								<li class="tag"><a href="#"><i class="fa fa-tag"></i>Football</a></li>
							</ul>
						</div>						
					</div>
				</div>

				<div class="item">				
					<div class="module-content content">						
						<a href="blog-post.html"><h1>Blues can silence critics - Carney </h1></a>
						<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
						<div class="info">
							<ul>
								<li class="date"><i class="fa fa-calendar"></i>31 Mar 2014</li>
								<li class="tag"><a href="#"><i class="fa fa-tag"></i>Football</a></li>
							</ul>
						</div>						
					</div>
				</div>

				<div class="item">				
					<div class="module-content content">						
						<a href="blog-post.html"><h1>Blues can silence critics - Carney </h1></a>
						<p>Birmingham City's Karen Carney says they have proved critics wrong by reaching the Women's Champions League semi-finals. </p>
						<div class="info">
							<ul>
								<li class="date"><i class="fa fa-calendar"></i>31 Mar 2014</li>
								<li class="tag"><a href="#"><i class="fa fa-tag"></i>Football</a></li>
							</ul>
						</div>						
					</div>
				</div>																
			</div>
		</div>	

		<div class="m-06 bg-dark-blue">
			<div class="module-content">

				<div class="title-default">
					<h2>Scores Table</h2>	
				</div>

				<div class="tab-dark-blue">
					<div class="m-03">
						<ul class="vertical tab-nav click-tab">
							<li><h4>Yesterday</h4></li>
							<li><h4>Today</h4></li>
							<li><h4>Tomorrow</h4></li>
						</ul>
					</div>
					<div class="m-09">
						<div class="tab-content ">
							<div>			
								<table class="table-scores">
									<tr>
										<td>12:45</td>
										<td>Man City</td>
										<td><span>4-1</span></td>
										<td>Southampton</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
									<tr>
										<td>12:45</td>
										<td>A Villa</td>
										<td><span>1-2</span></td>
										<td>Fulham</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
									<tr>
										<td>12:45</td>
										<td>Cardiff</td>
										<td><span>0-3</span></td>
										<td>C Palace</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>	
									<tr>
										<td>12:45</td>
										<td>Man City</td>
										<td><span>4-1</span></td>
										<td>Southampton</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
									<tr>
										<td>12:45</td>
										<td>A Villa</td>
										<td><span>1-2</span></td>
										<td>Fulham</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
								</table>	
							</div>
							<div>
								<table class="table-scores">
									<tr>
										<td>12:45</td>
										<td>Man City</td>
										<td><span>4-1</span></td>
										<td>Southampton</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
									<tr>
										<td>12:45</td>
										<td>A Villa</td>
										<td><span>1-2</span></td>
										<td>Fulham</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
								</table>
							</div>
							<div>
								<table class="table-scores">
									<tr>
										<td>12:45</td>
										<td>Cardiff</td>
										<td><span>0-3</span></td>
										<td>C Palace</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>	
									<tr>
										<td>12:45</td>
										<td>Man City</td>
										<td><span>4-1</span></td>
										<td>Southampton</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>
									<tr>
										<td>12:45</td>
										<td>A Villa</td>
										<td><span>1-2</span></td>
										<td>Fulham</td>
										<td><a href="#"><i class="fa fa-file-text"></i></a></td>
									</tr>																																													
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>																										
	</section>

	<section class="radio-news">
		<div class="m-03">
			<div class="radio-content radio-title">
				<p><i class="fa fa-signal"></i><span>Radio Programmes</span></p>
				<span>See All<i class="fr fa fa-chevron-right radio-icon"></i></span>
				<ul class="radio-menu">
					<li><a href="#"><i class="fa fa-volume-up"></i>Radio 01</a></li>
					<li><a href="#"><i class="fa fa-volume-up"></i>Radio 02</a></li>
					<li><a href="#"><i class="fa fa-volume-up"></i>Radio 03</a></li>
				</ul>
			</div>
		</div>

		<div class="m-03 radio">
			<div class="radio-content">
				<a href="#"><i class="fa fa-volume-up"></i>Sports World </a>
				<p>Commentary & interviews from the English Premier League </p>
			</div>
		</div>
		<div class="m-03 radio">
			<div class="radio-content">
				<a href="#"><i class="fa fa-volume-up"></i>Sports News</a>
				<p>Latest international sports news and results</p>
			</div>
		</div>
		<div class="m-03 radio">
			<div class="radio-content">
				<a href="#"><i class="fa fa-volume-up"></i>World Football </a>
				<p>The stories behind the world’s most popular sport </p>
			</div>
		</div>				
	</section>

	<footer class="clearfix">
		<div class="m-12">
			<div class="m-02">
				<div class="module-content">
					<h4>Learn more</h4>
					<ul>					
						<li><a href="#">Tour</a></li>
						<li><a href="#">Features</a></li>
						<li><a href="#">Pricing & Plans</a></li>
					</ul>
				</div>
			</div>
			<div class="m-02">
				<div class="module-content">
					<h4>Support</h4>
					<ul>
						<li><a href="#">Terms of Service</a></li>
						<li><a href="#">Security</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>
				</div>
			</div>
			<div class="m-02">
				<div class="module-content">
					<h4>About</h4>					
					<ul>
						<li><a href="#">Company</a></li>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Blog</a></li>
					</ul>				
				</div>
			</div>
			<div class="m-03 bg-grey">
				<div class="module-content">
					<h4>Social</h4>
					<ul class="social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="m-03 bg-orange">
				<div class="module-content">
					<div class="subscribe subscribe-form">
						<h1>Subscribe</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<form novalidate="novalidate" method="post" action="#">
							<input type="email" name="email" placeholder="Enter your email here..." class="required email">
							<div id="btnSubmit">
								<input type="submit" name="submit" id="send" value="Subscribe">
							</div>
						</form>	
					</div>	
				</div>
			</div>
		</div>
	</footer>
	<script src="js/fluidvids.js"></script>	
</body>


</html>