<!-- View for Home Page-->
<!DOCTYPE html>
<html lang="en-GB">
<head>

	<meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="ROBOTS" content="NOINDEX,NOFOLLOW"> 
	<title>Full Service Digital Agency | Cambridgeshire & Norfolk | Netmatters</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- below files are used for the carosels using jquery and slick plugin-->
	<script src="javascript/jquery-3.7.1.min.js"></script>
	<script src="javascript/slick-1.8.1/slick-1.8.1/slick/slick.js"></script>
	<script src="javascript/slick-1.8.1/slick-1.8.1/slick/slick.min.js"></script>
	<link rel="stylesheet" type="text/css" href="javascript/slick-1.8.1/slick-1.8.1/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="javascript/slick-1.8.1/slick-1.8.1/slick/slick-theme.css">
</head>
<body>

<!-- all header and footer and navigation and cookies are seperated into partials and required -->
<?php require('partials/cookie.php');
require('partials/sidenav.php'); 

?>

<div class="website">
<!-- header-->
<div class="head">
<?php require('partials/header.php');
require('partials/nav.php');

?>
</div>

<!-- banner-->
<div class="banner">
	<div class="banner-slide banner1">
		<div class="content"> 
			<div class="container">
				<h1>
			 	The East Of England's Leading Technology Company
				</h1>
				<p>
				Performance-driven digital and technology services <br>
				with complete transparency.
				</p>
				<a class="button-banner company-button" href="#"> Why Choose Us? <span class="icon-arrow-right"></span></a>
			</div>
		</div>
	</div>
	<div class="banner-slide banner2">
		<div class="content"> 
			<div class="container">
				<h1>
			 	Bespoke Software
				</h1>
				<p>
				Delivering expert bespoke software<br>
				solutions across a range of industries.
				</p>
				<a class="button-banner bespoke-button" href="#"> Find Out More <span class="icon-arrow-right"></span></a>
			</div>
		</div>
	</div>
	<div class="banner-slide banner3">
		<div class="content"> 
			<div class="container">
				<h1>
			 	IT Support
				</h1>
				<p>
				Fast and cost-effective IT support<br>
				services for your business
				</p>
				<a class="button-banner itsupport-button" href="#"> Find Out More <span class="icon-arrow-right"></span></a>
			</div>
		</div>
	</div>
	<div class="banner-slide banner4">
		<div class="content"> 
			<div class="container">
				<h1>
			 	Digital Marketing
				</h1>
				<p>
				Generating your new business through <br>
				results-driven marketing activities.
				</p>
				<a class="button-banner digitalmarketing-button" href="#"> Find Out More <span class="icon-arrow-right"></span></a>
			</div>
		</div>
	</div>
	<div class="banner-slide banner5">
		<div class="content"> 
			<div class="container">
				<h1>
			 	Telecoms Services
				</h1>
				<p>
				>A new approach to connectivity, see<br>
				how we can help your business.
				</p>
				<a class="button-banner telecomservices-button" href="#"> Find Out More <span class="icon-arrow-right"></span></a>
			</div>
		</div>
	</div>
	<div class="banner-slide banner6">
		<div class="content"> 
			<div class="container">
				<h1>
			 	Web Design
				</h1>
				<p>
				For businesses looking to make a strong <br>
				and effective first impression.
				</p>
				<a class="button-banner webdesign-button" href="#"> Find Out More <span class="icon-arrow-right"></span></a>
			</div>
		</div>
	</div>
	<div class="banner-slide banner7">
		<div class="content"> 
			<div class="container">
				<h1>
			 	Cyber Security
				</h1>
				<p>
				Keeping businesses and their customers <br>
				sensitive information protected.
				</p>
				<a class="button-banner cybersecurity-button" href="#"> Find Out More <span class="icon-arrow-right"></span></a>
			</div>
		</div>
	</div>
</div>

<!-- Middle-->
<div class="middle">
	<div class="section">
	<div class="container">
		<div class="services-list">
			<div class="services-row">
				<div class="services-header">
					<h2>Our Services</h2>
					<h1><a href="#">View Our Work <em class="icon-arrow-right"></em></a></h1>
				</div>
				<div class="services-gridbox">
					<div id="panel1" class="services-panel">
						<a href="#" class="panel-CD">
							<span class="icon1">
								<span class="icon-laptop"></span>
							</span>
							<h2>Consultancy & Development</h2>
							<p>Bespoke software solutions & consultancy for all your business needs including integrations and reporting.</p>
							<span class="button-container">
								<span class="button-CD">
									Read More
								</span>
							</span>
						</a>
					</div>
					<div id="panel2" class="services-panel">
						<a href="#" class="panel-IT">
							<span class="icon1">
								<span class="icon-display"></span>
							</span>
							<h2>IT Support</h2>
							<p>Fully managed IT support and consultancy packages tailored to meet your exact business needs.</p>
							<span class="button-container">
								<span class="button-IT">
									Read More
								</span>
							</span>
						</a>
					</div>
					<div id="panel3" class="services-panel">
						<a href="#" class="panel-DM">
							<span class="icon1">
								<span class="icon-bar-graph"></span>
							</span>
							<h2>Digital Marketing</h2>
							<p>Driven brand awareness & ROI through creative digital marketing campagins.</p>
							<span class="button-container">
								<br>
								<span class="button-DM">
									Read More
								</span>
							</span>
						</a>
					</div>
					<div id="panel4" class="services-panel">
						<a href="#" class="panel-TS">
							<span class="icon1">
									<span class="icon-phone_in_talk"></span>
							</span>
							<h2>Telecoms Services</h2>
							<p>Bussiness Telephony solutions including mobile & connectivity solutions.</p>
							<span class="button-container">
								<span class="button-TS">
									Read More
								</span>
							</span>
						</a>
					</div>
					<div id="panel5" class="services-panel">
						<a href="#" class="panel-WD">
							<span class="icon1">
								<span class="icon-code"></span>
							</span>
							<h2>Web Design</h2>
							<p>User-centric design for bussinesses looking to make a lasting impression.</p>
							<span class="button-container">
								<span class="button-WD">
									Read More
								</span>
							</span>
						</a>
					</div>
					<div id="panel6" class="services-panel">
						<a href="#" class="panel-CS">
							<span class="icon1">
							<span class="icon-security"></span>
							</span>
							<h2>Cyber Security</h2>
							<p>Prevention, testing, consultancy & breach management services.</p>
							<span class="button-container">
								<span class="button-CS">
									Read More
								</span>
							</span>
						</a>
					</div>
					<div id="panel7" class="services-panel">
						<a href="#" class="panel-DT">
							<span class="icon1">
								<span class="icon-school"></span>
							</span>
							<h2>Developer Training</h2>
							<p>Web design & software training courses desgined to secure a job in tech.</p>
							<span class="button-container">
								<span class="button-DT">
									Read More
								</span>
							</span>
							</a>
					</div>
				</div>
					<div class="hidden-view-work">
						<h3><a href="#">View Our Work <em class="icon-arrow-right"></em></a></h3>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Partners-->
<div class="partners">
	<div class="section">
		<div class="sliding-imgs">
			<div class="sliding-list">
				<div class="sliding-img-box">
					<img src="images/partners/cyber-essentials-colour.png" alt="">
				</div>
				<div class="sliding-img-box">
					<img src="images/partners/google-partner.png" alt="">
				</div>
				<div class="sliding-img-box">
					<img src="images/partners/GBC-colour.png" alt="">
				</div>
				<div class="sliding-img-box">
					<img src="images/partners/norfolk_prohelp.png" alt="">
				</div>
				<div class="sliding-img-box">
					<img src="images/partners/investing-in-future-growth.png" alt="">
				</div>
				<div class="sliding-img-box">
					<img src="images/partners/norfolk-carbon-charter.png" alt="">
				</div>
				<div class="sliding-img-box">
					<img src="images/partners/PPC_logo.png" alt="">
				</div>
				<div class="sliding-img-box">
					<img src="images/partners/princess-royal-training.png" alt="">
				</div>
				<div class="sliding-img-box">
					<img src="images/partners/future-50.png" alt="">
				</div>
				<div class="sliding-img-box">
					<img src="images/partners/qms.png" alt="">
				</div>
				<div class="sliding-img-box">
					<img src="images/partners/iso-27001.png" alt="">
				</div>
				<div class="sliding-img-box">
					<img src="images/partners/skills-of-tomorrow.png" alt="">
				</div>
			</div>
		</div>
	</div>
</div>

<!--Weclome to Netmatters/About Us-->
<div class="about-us">
	<div class="section">
	<div class="container">
		<div class="about-row">
			<div class="about-info">
				<h2><strong>Welcome To Netmatters</strong></h2>
				<p><strong>Netmatters is a leading <a href="#">Bespoke Software</a>, <a href="#">IT Support</a>, 
					and <a href="#">Digital Marketing</a> company based in the East of England 
					with offices in <a href="#">Cambridge</a>, <a href="#">Wymondham</a>, and <a href="#">Great Yarmouth</a>.</strong>
				</p>
				<p>
					We aren't tied into contracts with third-party providers, 
					so you know that our recommendations for your business are based purely with one benefit in mind: 
					to help improve your business with the most appropriate solutions.
				</p>
				<p>
					We pride ourselves on being an ethical business and have a unique business offering and cost model
					 that ensures you get the most from our relationship in an upfront manner.
				</p>
				<div class="about-buttons"> 
					<a class="aboutus-btn button-about" href="#">
						Why Choose Us? <em class="icon-arrow-right"></em>
					</a>
					<a class="aboutus-btn button-about"> 
						Our Culture <em class="icon-arrow-right"></em>
					</a>
				</div>
			</div>
			<div class="about-info">
				<h2><strong>What Our Clients Think</strong></h2>
				<div class="star-rating">
					<div class="icon-star-full"></div>
					<div class="icon-star-full"></div>
					<div class="icon-star-full"></div>
					<div class="icon-star-full"></div>
					<div class="icon-star-full"></div>
				</div>
				<p class="quote">
					Netmatters stood out from the start. Great guys and very easy to work with. Both the build and digital marketing teams are clearly skilled 
					-they know their stuff! They delivered a website to our (high!) 
					expectations and went over and above to ensure we were satisfied clients 
					- and we are!
				</p>
				<p class="quote-author">
					Eleanor Bishop, Head of Marketing - <a href="#">Ashcroft Partnership LLP</a>
				</p>
				<div class="review-buttons"> 
					<a class="aboutus-btn button-about-google"> 
						Google Reviews <em class="icon-arrow-right"></em>
					</a>
					<a class="aboutus-btn button-about-trustpilot"> 
						TrustPilot Reviews <em class="icon-arrow-right"></em>
					</a>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>

<!--news-->
<div class="news">
	<div class="container">
		<div class="news-header">
			<h2><strong>Latest News</strong></h2>
			<h3><a href="#">View All <strong><em class="icon-arrow-right"></em></strong></a></h3>
		</div>
			<div class="news-row">
					<!-- Here I use a foreach loop to pull the data from the array as each row and echo each value to the corrisponding section of the below container and since it is a foreach loop the container will be repeated for each row in database -->
					<!-- Article Class value is used for media queries with css and Button_color will determine the buttons color class for the css to work with these containers-->
				<?php foreach ($allNews as $row): ?>
				<div class="news-article">
						<a href="#" class="<?= htmlspecialchars($row['Article_Class']) ?>">
							<div class="article-img">
								<span class="insights"><?= htmlspecialchars($row['Tag']) ?></span>
								<span class="article-img-box">
									<img src="<?= htmlspecialchars($row['Image']) ?>" alt="<?= htmlspecialchars($row['Alt']) ?>">
								</span>
							</div>
							<div class="article-description">
								<h3>
									<?= htmlspecialchars($row['Title']) ?>
								</h3>
								<p>
								<?= htmlspecialchars($row['Description']) ?>	
								</p>
								<span class="news-btn <?= htmlspecialchars($row['Button_Color']) ?>">
									Read More
								</span>
								<div class="article-author">
									<div class="article-author-img">
										<img src="<?= htmlspecialchars($row['Author_Image']) ?>" alt="<?= htmlspecialchars($row['Author_Alt']) ?>">
									</div>
									<div class="article-author-name">
										<strong><?= htmlspecialchars($row['Author_Name']) ?></strong>
										<br>
										<?= htmlspecialchars($row['Date']) ?>	
									</div>
								</div>
							</div>
							</a>
					</div>
				<?php endforeach; ?>
		<div class="hidden-view-all">
			<h3><a href="#">View All <strong><em class="icon-arrow-right"></em></strong></a></h3>
		</div>
	</div>
</div>

<!--clients-->
<!-- ran out of time so couldnt fix nesting here-->
<div class="clients">
	<div class="section">
		<div class="sliding-imgs">
			<div class="sliding-list">
				<div class="sliding-img-box">
					<div class="logo-tooltip">
					<div class="logo-description">
						<h3>Sweetzy
						</h3>
						<p>
							Sweetzy are an online sweets retailer, based in Wymondham.
						</p>
						<a href="#" class="tooltip-button logo-buttonG">
							View Our Case Study<em class="icon-arrow-right"></em>
						</a>
						<div class="arrow"></div>
					</div>
					</div>
					<img src="images/clients/sweetzy_logo.png" alt="">
				</div>
				<div class="sliding-img-box">
					<div class="logo-tooltip">
					<div class="logo-description">
						<h3>Howes Percival
						</h3>
						<div class="arrow"></div>
					</div></div>
					<img src="images/clients/howespercivallogo.png" alt="">
				</div>
				<div class="sliding-img-box">
					<div class="logo-tooltip">
					<div class="logo-description">
						<h3>GDST
						</h3>
						<p>
							The <a href="#">Girls' Day School Trust (GDST)</a> is the UK's leading family of 25 independant girls' schools.
						</p>
						<a href="#" class="tooltip-button logo-buttonG">
							View Our Case Study<em class="icon-arrow-right"></em>
						</a>
						<div class="arrow"></div>
					</div></div>
					<img src="images/clients/girls_day_school_trust_logob.png" alt="">
				</div>
				<div class="sliding-img-box">
					<div class="logo-tooltip">
					<div class="logo-description">
						<h3>Ashcroft Partnership LLP
						</h3>
						<p>
                        Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnership LLP in 2020 and
                        are one of the top chartered accountancy firms in Cambridge, advising entrepreneurs and
                        families.
						</p>
						<a href="#" class="tooltip-button logo-buttonP">
							View Our Case Study<em class="icon-arrow-right"></em>
						</a>
						<div class="arrow"></div>
					</div></div>
					<img src="images/clients/ashcroftlogo_landscape_goldblack_DP60P-small.png" alt="">
				</div>
				<div class="sliding-img-box">
					<div class="logo-tooltip">
					<div class="logo-description">
						<h3>One Traveller
						</h3>
						<p>
							<a href="#" target="_blank">One Traveller</a>, 
							founded in 2007, is a leading provider of solo holidays for over 50s.                    
						</p>
						<a href="#" class="tooltip-button logo-buttonP">
							View Our Case Study<em class="icon-arrow-right"></em>
						</a>
						<div class="arrow"></div>
					</div>
					</div>
					<img src="images/clients/onetravellerlogo_white_figuire.png" alt="">
				</div>
				<div class="sliding-img-box">
					<div class="logo-tooltip">
					<div class="logo-description">
						<h3>Searles Leisure Resort
						</h3>
						<p>
                        Searles Leisure Resort, on the beautiful North Norfolk coast, is an award-winning UK holiday
                        resort for families.
						</p>
						<a href="#" class="tooltip-button logo-buttonG">
							View Our Case Study<em class="icon-arrow-right"></em>
						</a>
						<div class="arrow"></div>
					</div>
					</div>
					<img src="images/clients/searles_logo.png" alt="">
				</div>
				<div class="sliding-img-box">
					<div class="logo-tooltip">
					<div class="logo-description">
						<h3>Busseys
						</h3>
						<p>
							One of the UK's leading Ford dealerships.
						</p>
						<div class="arrow"></div>
					</div>
					</div>
					<img src="images/clients/busseys_logo.png" alt="">
				</div>
				<div class="sliding-img-box">
					<div class="logo-tooltip">
					<div class="logo-description">
						<h3>Crane Garden Buildings
						</h3>
						<p>
                        Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in
                        the UK.
						</p>
						<div class="arrow"></div>
					</div></div>
					<img src="images/clients/crane_logo.png" alt="">
				</div>
				<div class="sliding-img-box">
					<div class="logo-tooltip">
					<div class="logo-description">
						<h3>Swan Care Group
						</h3>
						<p>
                        Black Swan Care Group own and manage 21 high-quality care and residential homes with a focus on
                        putting the needs of their residents first.
						</p>
						<a href="#" class="tooltip-button logo-buttonO">
							View Our Case Study<em class="icon-arrow-right"></em>
						</a>
						<div class="arrow"></div>
					</div>
					</div>
					<img src="images/clients/black_swan_logo.png" alt="">
				</div>
				<div class="sliding-img-box">
					<div class="logo-tooltip">
					<div class="logo-description">
						<h3>Xupes
						</h3>						
						<div class="arrow"></div>
					</div>
					</div>
					<img src="images/clients/xupes_logo.png" alt="">
				</div>
				<div class="sliding-img-box">
					<div class="logo-tooltip">
					<div class="logo-description">
						<h3>Beat
						</h3>
						<p>
							The UK's eating disorder charity founded in 1989.
						</p>
						<div class="arrow"></div>
					</div></div>
					<img src="images/clients/beat_logo.png" alt="">
				</div>
				<div class="sliding-img-box">
					<div class="logo-tooltip">
					<div class="logo-description">
						<h3>Survey Solutions
						</h3>
						<div class="arrow"></div>
					</div>
					</div>
					<img src="images/clients/survey_solutions_logo.png" alt="">
				</div>
				<div class="sliding-img-box">
					<div class="logo-tooltip">
					<div class="logo-description">
						<h3>Girl Guiding Angelia
						</h3>
						<p>
                        Girl Guiding Anglia is part of Girlguiding, the UK's leading charity for girls and young women in
                        the UK.
						</p>
						<a href="#" class="tooltip-button logo-buttonB">
							View Our Case Study<em class="icon-arrow-right"></em>
						</a>
						<div class="arrow"></div>
					</div>
					</div>
					<img src="images/clients/girl_guides_anglia.png" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
</div> <!--bottom of middle-->

<?php require('partials/footer.php');

?>
</div>
</div>

<?php require('partials/stickyheader.php');

?>

<!--javascript files thaqt load after the page has loaded-->
<script defer src="javascript/carousels.js"></script>
<script defer src="javascript/cookie.js"></script>
<script defer src="javascript/side-menu.js"></script>
<script defer src="javascript/sticky-head.js"></script>
</body>
</html>