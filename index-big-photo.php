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
	<link href="styles/css/application-new.css" rel="stylesheet" type="text/css" media="screen">

<!-- TypeKit Goodness -->
	<script src="//use.typekit.net/oau0xfl.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<section id="top">
		<h1 class="text-center">Olivia Chow</h1>
	</section>
	
	<section id="banner-photo">
		<img src="images/ChowBanner2.jpg" class="img-responsive" alt="ChowBanner1">
	</section>
	
	<section id="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="biography">
						<p class="lead">In a political career that began in 1985, Olivia Chow has been one of Toronto's most effective leaders – on the Board of Education, at Toronto City Hall, in Parliament, and on the national stage.</p>

						<p>Olivia was born in Hong Kong in 1957, grew up in Toronto, studied philosophy and art. She worked as a college professor, an ESL teacher, counselor for new immigrants and a sculptor. She won her first election in 1985 and served on the Toronto Board of Education for six years. Working with other school trustees, Olivia transformed a troubled school into the successful Rosedale Heights Secondary School. She also worked hard to elevate the academic performance of all students, no matter what background they were from.</p>

						<p>In 1991, Olivia was the first Asian woman elected as a Metro Toronto Councillor. She was re-elected five times, serving with distinction for 14 years before winning election to Parliament in 2006.</p>

						<p>While at City Hall, Olivia served as Chair of the Community Services Committee and Vice Chair of the Toronto Transit Commission (TTC), among other senior responsibilities.</p>

						<p>Olivia was central in forging nine consecutive balanced budgets...</p>

						<p><a href="" class="btn btn-sm btn-outline btn-outline--textblack">Full Biography</a></p>
					</div>

				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<div class="twitter">
						<div id="app-twitterfeed-1"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<script id="app-tweets" type="text/x-handlebars-template">
		
		<div class="tweet">
			<p>{{{formatTweet text}}} &mdash; <small>{{dateFormat created_at}}</small> <a href="http://twitter.com/{{user.screen_name}}/status/{{id_str}}" class="action"><i class="fa fa-retweet"></i></a> </p>
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

		</div> <!-- /content -->
		
</body>
</html>