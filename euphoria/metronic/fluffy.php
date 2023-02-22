<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>The Fluffy Panda</title>
	
    <link href="<?php echo base_url("assets/fluffy/css/bootstrap.min.css");?>" rel="stylesheet"><!-- Bootstrap core CSS -->
	<link href="<?php echo base_url("assets/fluffy/css/style.css");?>" rel="stylesheet"><!-- Custom CSS -->
	<link href="<?php echo base_url("assets/fluffy/css/responsive.css");?>" rel="stylesheet"><!-- Custom styles for Slider -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="<?php echo base_url("assets/fluffy/js/jquery.min.js");?>"></script>
	<script>
	jQuery.noConflict();
	</script>
	<script src="<?php echo base_url("assets/fluffy/js/bootstrap.min.js");?>"></script>	
	<script src="<?php echo base_url("assets/fluffy/js/tabbedcontent.min.js");?>"></script>
	<script src="<?php echo base_url("assets/fluffy/js/languageswitcher.js");?>"></script>	

	
</head>

<body>
	<div class="main_panel">
		<div class="container">
		
			<div class="logo">
				<a href="<?php echo site_url("/");?>"><img src="<?php echo base_url("assets/fluffy/images/logo.png");?>" /></a>
			</div><!--/logo-->
			
			
			<div class="pull-right left_panel">
				<div class="toggle">
					<span></span>
					<span></span>
					<span></span>
				</div><!--/toggle-->
				
				<div class="lang_change">
					<div id="country-select">
						<form action="server-side-script.php">
							<select id="country-options" name="country-options">
								<option selected="selected" title="United States" value="us">United States</option>
								<option title="" value="uk">United Kingdom</option>
								<option title="" value="fr">France</option>
								<option title="" value="de">Germany</option>
								<option title="" value="nl">Netherlands</option>
							</select>
							<input value="Select" type="submit" />
						</form>
					</div><!--/country-select-->
				</div><!--/lang_change-->
				
				<div class="btns">
					<a href="<?php echo site_url("user/login");?>" class="btn btn-default">Login</a>
					<a href="#" class="btn btn-default cart">Cart<span class="badge">2</span></a>
				</div>
			</div>
			
			<div class="navigation">
				<ul>
					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">SEO / Link Building</a>
							<ul class="dropdown-menu">
								<li><a href="#">• BLOGGER  OUTREACH</a></li>
								<li class="active"><a href="#">• INFOGRAPHIC  OUTREACH</a></li>
								<li><a href="#">• INFOGRAPHIC  DIRECTORIES</a></li>
								<li><a href="#">• PRESS RELEASE  DISTRIBUTION</a></li>
							</ul>
					</li>
					<li><a href="content.html"> Content</a></li>
					<li><a href="clients.html">Clients </a></li>
					<li><a href="about.html">About Us</a></li>
					<!-- <li><a href="index.html">Chat With Us</a></li> -->
				</ul>
			</div><!--/navigation-->
			
		</div><!--/container-->
	</div><!--/main_panel-->
	
	
	
	<?php echo $data;?>
	
	
	
	<div class="main_footer">

		<div class="footer">
			<div class="container">
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_0">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="footer_logo">
						<a href="<?php echo site_url("/");?>"><img src="<?php echo base_url("assets/fluffy/images/logo.png");?>" /></a>
					</div>
					
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Who We Are</a></li>
						<li><a href="#">Content creation</a></li>
						<li><a href="#">Recources</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="<?php echo site_url("user/contact");?>">Contact</a></li>
					</ul>
					
					<ul class="social_icons">
						<img src="<?php echo base_url("assets/fluffy/images/google_plus.png");?>" />
						<img src="<?php echo base_url("assets/fluffy/images/tweet.png");?>" />
						<img src="<?php echo base_url("assets/fluffy/images/fb.png");?>" />
						<img src="<?php echo base_url("assets/fluffy/images/linkedin.png");?>" />
						<img src="<?php echo base_url("assets/fluffy/images/skype.png");?>" />
					</ul><!--/social_icons-->
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="client_blog">
						<img src="<?php echo base_url("assets/fluffy/images/tweet_icon.png");?>" class="tweetss" />
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_0">
							<figure class="col-lg-2 col-md-2 col-sm-2 col-xs-3 padding_0"><img src="<?php echo base_url("assets/fluffy/images/client1.png");?>" /></figure>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-9">
								<h6>Jane smith</h6>
								<label>@Revox</label>
							</div>
							<p>It was some time before he obtained any answer, and the reply, when made, was unpr...</p>
						</div>
						
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_0">
							<figure class="col-lg-2 col-md-2 col-sm-2 col-xs-3 padding_0"><img src="<?php echo base_url("assets/fluffy/images/client1.png");?>" /></figure>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-9">
								<h6>Jane smith</h6>
								<label>@Revox</label>
							</div>
							<p>It was some time before he obtained any answer, and the reply, when made, was unpr...</p>
						</div>
					</div><!--/client_blog-->
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 adds">
							<img src="<?php echo base_url("assets/fluffy/images/add1.png");?>" />
							<img src="<?php echo base_url("assets/fluffy/images/add3.png");?>" />
							<img src="<?php echo base_url("assets/fluffy/images/add4.png");?>" />
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 adds">
							<img src="<?php echo base_url("assets/fluffy/images/add2.png");?>" />
							<img src="<?php echo base_url("assets/fluffy/images/add7.png");?>" />
							<img src="<?php echo base_url("assets/fluffy/images/add5.png");?>" />
							<img src="<?php echo base_url("assets/fluffy/images/add6.png");?>" />
						</div>
				</div>
			</div>
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_0">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 footer_signup">
					<p>Sign up for special offers:</p>
					<form>
							<input type="email" placeholder="Email Address" required="required" />
							<input type="submit" value="SEND" />
						</form>
				</div><!--/footer_signup-->
				
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 copyright">
					<p>Privacy Policy & Terms of Service</p>
					<p><span>Copyright &copy; Get Ideal Limited Trading as Fat Joe. Link Building & Content Creation</span></p>
				</div><!--/copyright-->
			</div>
			
			</div><!--/container-->
		</div><!--/footer-->

	</div><!--/main_footer-->

	<script>
        var tabs;
        jQuery(function($) {
            tabs = $('.tabscontent').tabbedContent({loop: true}).data('api');

            // switch to tab...
            $('a[href=#click-to-switch]').on('click', function(e) {
                var tab = prompt('Tab to switch to (number or id)?');
                if (!tabs.switchTab(tab)) {
                    alert('That tab does not exist :\\');
                }
                e.preventDefault();
            });

            // Next and prev actions
            $('.controls a').on('click', function(e) {
                var action = $(this).attr('href').replace('#', '');
                tabs[action]();
                e.preventDefault();
            });
        });
    </script>
<script>
	$(document).ready(function(){
		$(".toggle").click(function(){
			$(".navigation").slideToggle("slow");
		});
		
		$(".accordion1 h3").click(function(){
			$(".accordion_open1").slideToggle();
		});
		
		$(".accordion2 h3").click(function(){
			$(".accordion_open2").slideToggle("slow");
		});
	});
   
</script>
</body>
</html>