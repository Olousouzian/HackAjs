<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
	<head>
	    <!-- Meta-Information -->
	    <title>HackAjs</title>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="HackAjs">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Vendor: Bootstrap Stylesheets http://getbootstrap.com -->
	    <link rel="stylesheet" href="/static/lib/bootstrap/3.2.0/css/bootstrap.min.css">
	    <link rel="stylesheet" href="/static/lib/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	    <link rel="stylesheet" href="/static/lib/font-awesome-4.3.0/css/font-awesome.min.css">
	    <link rel="stylesheet" type="text/css" href="/static/style/css/main.css" media="all" />
	</head>
	<body ng-app="HackAjsApp">
	    <!--[if lt IE 7]>
	    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
	        your browser</a> to improve your experience.</p>
	    <![endif]-->

	    <!-- Our Website Content Goes Here -->
	    <div ng-include='"<?php echo $viewArgs["viewBaseUrl"];?>/partials/header.html"'></div>
	    <div class="container body_page" ng-view autoscroll="true">
	    </div>
	    <div ng-include='"<?php echo $viewArgs["viewBaseUrl"];?>/partials/footer.html"'></div>

	    <!-- Vendor: Javascripts -->
	    <script src="/static/lib/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	    <script src="/static/lib/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	    <!-- Vendor: Angular, followed by our custom Javascripts -->
	    <script src="/static/lib/ajax/libs/angularjs/1.2.18/angular.min.js"></script>
	    <script src="/static/lib/ajax/libs/angularjs/1.2.18/angular-touch.js"></script>
	    <script src="/static/lib/ajax/libs/angularjs/1.2.18/angular-route.min.js"></script>

	    <script type="text/javascript">
	    	window.pathView = "<?php echo $viewArgs["viewBaseUrl"];?>";
	    </script>
	    <script src="<?php echo $viewArgs["viewBaseUrl"];?>project.js"></script>
	    <script src="<?php echo $viewArgs["viewBaseUrl"];?>../Controller/home.ctrl.js"></script>
	</body>
</html>
