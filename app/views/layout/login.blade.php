<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Daffodil通用信息管理平台 | 登录</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
{{ stylesheet_link_tag('bootstrap.min.css') }}
{{ stylesheet_link_tag('bootstrap-responsive.min.css') }}
{{ stylesheet_link_tag('font-awesome.min.css') }}
{{ stylesheet_link_tag('style-metro.css') }}
{{ stylesheet_link_tag('style.css') }}
{{ stylesheet_link_tag('style-responsive.css') }}
{{ stylesheet_link_tag('default.css') }}
{{ stylesheet_link_tag('uniform.default.css') }}
	<!-- END GLOBAL MANDATORY STYLES -->
 {{ stylesheet_link_tag('login.css') }}
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
    @yield('content')    
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	{{ javascript_include_tag('jquery-1.10.1.min.js') }}
	{{ javascript_include_tag('jquery-migrate-1.2.1.min.js') }}
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	{{ javascript_include_tag('jquery-ui-1.10.1.custom.min.js') }}      
	{{ javascript_include_tag('bootstrap.min.js') }}
	<!--[if lt IE 9]>
	{{ javascript_include_tag('excanvas.min.js') }}
	{{ javascript_include_tag('respond.min.js') }}  
	<![endif]-->   
	{{ javascript_include_tag('jquery.slimscroll.min.js') }}
	{{ javascript_include_tag('jquery.blockui.min.js') }}  
	{{ javascript_include_tag('jquery.cookie.min.js') }}
	{{ javascript_include_tag('jquery.uniform.min.js') }}
	<!-- END CORE PLUGINS -->
	    
        {{ javascript_include_tag('app.js') }}  
       	{{ javascript_include_tag('login.js') }}
        {{ javascript_include_tag('jquery.validate.min.js') }}    
	<script>
		jQuery(document).ready(function() {    
		   App.init();
           Login.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>    
<!-- END BODY -->
</html>