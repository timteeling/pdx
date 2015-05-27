<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Track Our Location | Boot Scootin' 2 PDX</title>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Karla:400,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/wp-content/themes/pdx/style.css">

</head>
<body class="location-page">
		<header class="header" role="banner">
		<a class="logo" href="/" rel="home">Boot Scootin’ 2 <span>PDX</span></a>
	</header>
	<?php include('location.php'); ?>
	
	<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo $location; ?>&zoom=9&key=AIzaSyC5IPlMdb9AFfpRtOSC7OFwAEkBku4B8SU"></iframe>
	
<div class="container">
	<div class="row">
		<div class="onehalf">
			<h1>Track Our Location</h1>
		</div>
		<div class="onehalf last">
			<h3>Last check in</h3>
			<p><?php echo $location; ?></p>
			<h3>Last updated</h3>
			<p><?php echo $time; ?></p>
		</div>
	</div>
		  	
</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63450139-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>