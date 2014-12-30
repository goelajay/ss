
var page_id = "447862671929762"; // whatever

window.fbAsyncInit = function () {
            FB.init({
                appId: '670124346331380', // App ID  670124346331380
                channelUrl: 'http://wip.swayspa.com/', // Channel File
                status: true, // check login status
                cookie: true, // enable cookies to allow the server to access the session
                xfbml: true  // parse XFBML
            });

FB.login(function(response) {

    //do whatever you need to do after a (un)successfull login
    FB.api("me/likes/page_id", function(response) {
    if ( response.data.length === 1 ) { //there should only be a single value inside "data"
        console.log('You like it');
    } else {
        console.log("You don't like it");
    }
});

}, { scope: 'user_likes' });

// Load the SDK asynchronously
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/all.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));}
