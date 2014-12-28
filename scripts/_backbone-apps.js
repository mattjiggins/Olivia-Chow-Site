BackboneChowFront = Backbone.Router.extend({
	routes: {
		'':'start'
	},
	initialize: function(){		
		this.twitterView = new TweetView({
			collection: tweets
		});
		this.instagramView = new InstagramsView({
			collection: instagrams
		});
	},
	start: function(){
		// console.log ("Twitter App Starting");
		var $twitterContainer = $('#app-twitterfeed-1');
		$twitterContainer.empty();
		$twitterContainer.append(this.twitterView.render().el);

		// console.log ("Instagram App Starting");
		var $instagramContainer = $('#app-instagramfeed');
		$instagramContainer.empty();
		$instagramContainer.append(this.instagramView.render().el);
	},
});