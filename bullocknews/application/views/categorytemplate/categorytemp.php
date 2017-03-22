
<?php
?>
<html>
	<head>
		<title>Bullock</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <!-- Bootstrap -->
              <link href="<?php echo base_url("asset/css/bootstrap.css"); ?>" rel="stylesheet">
              <link href="<?php echo base_url("asset/css/bootstrap.min.css");?>" rel="stylesheet">
                          <link href="<?php echo base_url("asset/css/bootstrap-responsive.css");?>" rel="stylesheet"/>
                  <link href="<?php echo base_url("asset/css/bootstrap-responsive.min.css");?>" rel="stylesheet"/>
                <link href="<?php echo base_url("asset/css/font-awesome.css");?>" rel="stylesheet" type="text/css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
             <script src="<?php echo base_url("asset/js/bootstrap.js");?>"></script>
            <script src="<?php echo base_url("asset/js/bootstrap.min.js");?>"></script>

                
         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

         
 <script src="<?php echo base_url("asset/js/jquery.js")?>" type="text/javascript"></script>
  
  <script src="<?php echo base_url("asset/js/jquery-2.1.4.js");?>"></script>
  <script src="<?php echo base_url("asset/js/jquery-2.1.4.min.js");?>"></script>
  <script src="<?php echo base_url("asset/js/jquery-ui.js");?>"></script>

  
  
         
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo base_url("asset/css/main.css");?>" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="">Bullock</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="nav">
				<ul class="links">
                                    <li><a href="<?php echo base_url("bullocknews/index");?>">Home</a></li>
					<li><a href="generic.html">Opinion</a></li>
					<li><a href="elements.html">Motivation</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<i class="icon fa-diamond"></i>
				<h2>Bullock</h2>
                                <p style="text-align: center; font-weight:bold; font-size: 20px;"><blockquote>Bullock Enterprise is the leading start up business in Nepal. Through the use of information and technology Making difference in the world.</<blockquote></p>
				<ul class="actions">
					<li><a href="#" class="button big special">Learn More</a></li>
				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="inner">
					<?php
                                         foreach ($category as $news){
                                             echo '<article class="feature left">
						<span class="image"><img src="'.base_url($news->image).'" alt="" /></span>
						<div class="content">
							<h2>National News</h2>
							<p>'.$news->shortstory.'</p>
							<ul class="actions">
								<li>
									<a href="'.  base_url("bullocknews/article/$news->AID").'" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>';
                                         }
                                        ?>
					<?php
                                         foreach ($categoryInternational as $news){
                                             echo '<article class="feature right">
						<span class="image"><img src="'.base_url($news->image).'" alt="" /></span>
						<div class="content">
							<h2>International News</h2>
							<p>'.$news->shortstory.'</p>
							<ul class="actions">
								<li>
									<a href="'.  base_url("bullocknews/article/$news->AID").'" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>';
                                         }
                                        ?>
                                    <div class="inner">
					<?php
                                         foreach ($categoryHealth as $news){
                                             echo '<article class="feature left">
						<span class="image"><img src="'.base_url($news->image).'" alt="" /></span>
						<div class="content">
							<h2>Health</h2>
							<p>'.$news->shortstory.'</p>
							<ul class="actions">
								<li>
									<a href="'.  base_url("bullocknews/article/$news->AID").'" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>';
                                         }
                                        ?>
					<?php
                                         foreach ($categorySport as $news){
                                             echo '<article class="feature right">
						<span class="image"><img src="'.base_url($news->image).'" alt="" /></span>
						<div class="content">
							<h2>Sport News</h2>
							<p>'.$news->shortstory.'</p>
							<ul class="actions">
								<li>
									<a href="'.  base_url("bullocknews/article/$news->AID").'" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>';
                                         }
                                        ?>
                                        <div class="inner">
					<?php
                                         foreach ($categoryEntertainment as $news){
                                             echo '<article class="feature left">
						<span class="image"><img src="'.base_url($news->image).'" alt="" /></span>
						<div class="content">
							<h2>Entertainment News</h2>
							<p>'.$news->shortstory.'</p>
							<ul class="actions">
								<li>
									<a href="'.  base_url("bullocknews/article/$news->AID").'" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>';
                                         }
                                        ?>
					<?php
                                         foreach ($categoryBusiness as $news){
                                             echo '<article class="feature right">
						<span class="image"><img src="'.base_url($news->image).'" alt="" /></span>
						<div class="content">
							<h2>Business News</h2>
							<p>'.$news->shortstory.'</p>
							<ul class="actions">
								<li>
									<a href="'.  base_url("bullocknews/article/$news->AID").'" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>';
                                         }
                                        ?>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper special">
				<div class="inner">
					<header class="major narrow">
						<h2>Place</h2>
						<p>Ipsum dolor tempus commodo turpis adipiscing Tempor placerat sed amet accumsan</p>
					</header>
                                    <div class="container-fluid">
                                        <div class="row">
					<?php
                                                                                foreach ($picture as $pic){
                                                                                echo '<div class="col-md-3">
						
						<a href="#" class="image"><img src="'.base_url($pic->image).'" alt="" class="img-responsive" /></a>
					</div>';
                                                                                }
                                                                                ?></div>
                                        <div class="image-grid">
					<ul class="actions">
                                            <li><a href="<?php echo base_url("bullocknews/motivation"); ?>" class="button big alt" style="margin-left: 400px;margin-top:100px; ">See More</a></li>
					</ul>
                                        </div>                  </div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="inner">
					<header class="major narrow	">
						<h2>Opinion</h2>
                                                <p><blockquote>There's Always Money Transfer Around You. YOU just have to make sure where To intercept it</blockquote></p>
					</header>
					<ul class="actions">
						<li><a href="#" class="button big alt">See More</a></li>
					</ul>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>Get in touch</h2>
                                                <p><blockquote>Compliment distract me. Jim Morrison</br>
                                                Any Suggestion and Feedback will be hardly appreciable.</blockquote></p>
					</header>
					<form action="#" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="name" placeholder="Name" type="text" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="email" placeholder="Email" type="email" />
								</div>
								<div class="12u$">
									<textarea name="message" placeholder="Message" rows="4"></textarea>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" class="special" value="Submit" /></li>
							<li><input type="reset" class="alt" value="Reset" /></li>
						</ul>
					</form>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-linkedin">
							<span class="label">LinkedIn</span>
						</a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Bullock.</li>
						<li>Images: <a href="">Unsplash</a>.</li>
						<li>Design: <a href="">Junu Argrawal</a>.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="<?php echo base_url("asset/js/jquery.min.js");?>"></script>
			<script src="<?php echo base_url("asset/js/skel.min.js");?>"></script>
			<script src="<?php echo base_url("asset/js/util.js");?>"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php echo base_url("asset/js/main.js");?>"></script>

	</body>
</html>