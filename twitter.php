<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Olivia Chow</title>

<!-- Twitter -->
	<meta name="twitter:card" value="">
	<meta name="twitter:site" content="">
	<meta name="twitter:title" content="">
	<meta name="twitter:creator" content="">

<!-- Open Graph -->
	<meta property="og:title" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content="" />

<!-- Icons -->
	<link rel="icon" type="image/png" href="">
	<link rel="apple-touch-icon" href="">
	<link rel="apple-touch-icon" sizes="72x72" href="">

<!-- Styles -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="styles/css/application.css" rel="stylesheet" type="text/css" media="screen">

<!-- TypeKit Goodness -->
	<script src="//use.typekit.net/oau0xfl.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div id="app-twitterfeed"></div>
	<script id="app-tweets" type="text/x-handlebars-template">
		<div class="tweet">
			<p>
				{{{formatTweet text}}}
				{{#if entities.media}}
					{{#each entities.media}}
						<a href="{{media_url}}" target="_blank"><i class="fa fa-camera-retro"></i></a> 
					{{/each}}
				{{/if}}
				<br>
				<a href="http://twitter.com/{{user.screen_name}}/status/{{id_str}}"><i class="fa fa-retweet"></i></a>

				<br><small>{{dateFormat created_at}}</small>					
			</p>
		</div>

	</script>
	


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>

	<script src="/scripts/min/application-min.js" type="text/javascript"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
		    app = new AppRouter();
		    Backbone.history.start({pushState: false});
		});
	</script>

</body>
</html>