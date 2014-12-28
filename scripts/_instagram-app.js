// MODELS

Instagrams = Backbone.Model.extend({});

InstagramsCollection = Backbone.Collection.extend({
    model:Instagrams,
    url:"/inc/instagram.php",
});

instagrams = new InstagramsCollection([
  // Bootstrap all the records for all the pages here
], { mode: "client" });


// VIEWS

InstagramsView = Backbone.View.extend({		
	className: 'instagrams',

	template: Handlebars.compile($("#app-instagram-gram").html()),

    initialize:function (e) {
		this.listenTo(this.collection,'reset', this.renderList);
    },

	renderList : function(instagrams){
		var grams = instagrams.models[0].attributes.data
		
        _.each(grams, function (grams) {
            $(this.el).append(this.template(grams));
        }, this);
		
		return this;
	},
});

allGramsView = InstagramsView.extend({ });




// THE APP

// var InstagramAppRouter = Backbone.Router.extend({
//
//     initialize:function () {
//     },
//
//     routes:{
// 		"":"home"
//     },
//
// 	home: function() {
// 		this.instagramList = new InstagramsCollection();
// 		this.instagramList.fetch({
// 			success:function () {
// 				var instagrams = instagramapp.instagramList.models[0].attributes.data;
// 				instagramapp.showView('#app-instagramfeed', new InstagramView({model:instagrams}));
// 			},
// 			error:function(){
// 				console.log("Error");
// 			}
// 		});
// 	},
//     showView:function (selector, view) {
//         if (this.currentView) {
// 			this.currentView.remove();
// 			this.currentView.close();
//         }
//         $(selector).html(view.render().el);
//         this.currentView = view;
//         return view;
//     },
//
// });