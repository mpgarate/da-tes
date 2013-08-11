
<!DOCTYPE html>
<html lang="en">
  <head>
		

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="The official release website for the DA/TES by Splotch and Emoticon Dream." />
		<meta name="keywords" content="DA/TES daytes dates d8ts da8s collin peterson michael garate emoticon dream splotch"/>
		<title>DA/TES</title>

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
				<a class="col-lg-12 btn">08-14-13</a>
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

    </div> <!-- /container -->

    <!-- JavaScript plugins (requires jQuery) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/playergrid.js"></script>
  </body>
</html>
