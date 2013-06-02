<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><? echo $t->pageTitle; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

		<? // FB LOGIN + NAVIGATION ?>
		<div id="fb-root"></div>
		<script>
		  // Additional JS functions here
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : 'YOUR_APP_ID', // App ID
		      channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel File
		      status     : true, // check login status
		      cookie     : true, // enable cookies to allow the server to access the session
		      xfbml      : true  // parse XFBML
		    });
		
		    // Additional init code here
		
		  };
		
		  // Load the SDK asynchronously
		  (function(d){
		     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement('script'); js.id = id; js.async = true;
		     js.src = "//connect.facebook.net/en_US/all.js";
		     ref.parentNode.insertBefore(js, ref);
		   }(document));
		</script>		
		
		
		<div class="navbar navbar-inverse nav">
		    <div class="navbar-inner">
		        <div class="container">
		            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </a>
		            <a class="brand" href="/">CMS</a>
					
		          	<div class="nav-collapse collapse">
		              <ul class="nav">
		                  <li class="divider-vertical"></li>
		                  <li><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
		              </ul>
		              <div class="pull-right">
		                <ul class="nav pull-right">
		                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, User <b class="caret"></b></a>
		                        <ul class="dropdown-menu">
		                            <li><a href="/user/preferences"><i class="icon-cog"></i> Preferences</a></li>
		                            <li><a href="/help/support"><i class="icon-envelope"></i> Contact Support</a></li>
		                            <li class="divider"></li>
		                            <li><a href="/auth/logout"><i class="icon-off"></i> Logout</a></li>
		                        </ul>
		                    </li>
		                </ul>
		              </div>
		            </div>
		        </div>
		    </div>
		</div>
		
		
        <!-- Call your site or application content here -->
        <?
          foreach($template_files as $template_file) {
	          if (file_exists($this->template_dir.$template_file)) {
	            include $this->template_dir.$template_file;
	        	} else {
	            throw new Exception('no template file ' . $template_file . ' present in directory ' . $this->template_dir);
	        	}
		  }
        ?>
        

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
