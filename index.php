
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="The official release website for DA/TES by Splotch and Emoticon Dream." />
		<meta name="keywords" content="DA/TES daytes dates d8ts da8s collin peterson michael garate emoticon dream splotch"/>
		<meta property="og:image" content="img/d8tshtmlheader.jpg" />
		<title>DA/TES</title>

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="grid.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
    <div class="header-hide">
      <div class="row header">
        <img src="img/d8tshtmlheader.jpg" class="img-responsive"/>
      </div>
      <?php include 'dates.php'; ?>
		</div><!-- .header-hide -->
			<div class="row release-date">
				<a class="col-12 col-lg-12 btn">08-14-13</a>
			</div>
			<div class="row boxes-row">
				<div class="boxes hidden-sm col-sm-4 col-lg-4 boxes-left"></div>
				<div class="boxes hidden-sm col-sm-4 col-lg-4 boxes-left"></div>
				<div class="boxes hidden-sm col-sm-4 col-lg-4 boxes-left"></div>
			</div>
			<div class="row player">
				<div class="boxes hidden-sm col-sm-4 col-lg-4 boxes-left">
						<!-- Color grid is inserted here with JS -->
				</div><!-- .boxes -->
					<div class="bc-col col-12 col-sm-4 col-lg-4">
						<!-- Bandcamp Player is inserted here with JS -->
					</div>
				<div class="boxes hidden-sm col-sm-4 col-lg-4 boxes-right">
						<!-- Color grid is inserted here with JS -->
				</div><!-- .boxes -->
			</div>

			<div class="row boxes-row">
				<div class="hidden-sm boxes col-lg-4 col-sm-4 boxes-left"></div>
				<div class="hidden-sm boxes col-lg-4 col-sm-4 boxes-left"></div>
				<div class="hidden-sm boxes col-lg-4 col-sm-4 boxes-left"></div>
			</div>

			<div class="row social-row">
				<div class="col-4 col-lg-offset-5 col-sm-offset-4 ">
					<!-- AddThis Button BEGIN -->
					<div class="addthis_toolbox addthis_default_style ">
					<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
					<a class="addthis_button_tweet"></a>
					</div>
					<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5202e0eb332120df"></script>
					<!-- AddThis Button END -->
				</div>
				<div class="row links-row">
				<div class="col-4 col-lg-offset-5 col-sm-offset-3 ">
				<a href="https://www.facebook.com/thisissplotch">Splotch</a> | 
				<a href="http://emoticondream.com/waterstates/">Emoticon Dream</a>
				</div>
				</div>
			</div>

    </div> <!-- /container -->



    <!-- JavaScript plugins (requires jQuery) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/playergrid.js"></script>
    <!-- Google Analytics start -->
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-2515841-14', 'emoticondream.com');
	  ga('send', 'pageview');
	</script>
    <!-- Google Analytics end -->
  </body>
</html>
