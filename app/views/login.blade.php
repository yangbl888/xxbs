<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="zh"> <!--<![endif]-->
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
     
	
	<!-- BEGIN LOGO -->
	<div class="logo">

		<img src="{{ asset('assets/logo-big.png') }}" alt="" /> 

	</div>

	<!-- END LOGO -->

	<!-- BEGIN LOGIN -->

	<div class="content">

		<!-- BEGIN LOGIN FORM -->	
        
        {{ Form::open(array('url'=>'user/login', 'class'=>'form-vertical login-form')) }}

			<h4 class="form-title">用户登录</h4>

			<div class="alert alert-error hide">

				<button class="close" data-dismiss="alert"></button>

				<span>请输入用户名和密码.</span>

			</div>

			<div class="control-group">

				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->

				<label class="control-label visible-ie8 visible-ie9">用户ID</label>

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-user"></i>

						<input class="m-wrap placeholder-no-fix" type="text" placeholder="用户ID" name="UserId"/>

					</div>

				</div>

			</div>

			<div class="control-group">

				<label class="control-label visible-ie8 visible-ie9">密码</label>

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-lock"></i>

						<input class="m-wrap placeholder-no-fix" type="password" placeholder="密码" name="password"/>

					</div>

				</div>

			</div>

			<div class="form-actions">

				<label class="checkbox">

				<input type="checkbox" name="remember" value="1"/>记住我

				</label>

				<button type="submit" class="btn green pull-right">

				登录 <i class="m-icon-swapright m-icon-white"></i>

				</button>            

			</div>

			<div class="create-account">

				<p>
				

					<a href="javascript:;" id="register-btn" class="">注册用户</a>

				</p>

			</div>

			{{ Form::close() }}

		<!-- END LOGIN FORM -->        

	
    @if(Session::has('message'))
     {{ Session::get('message') }}
    @endif
    
      <ul>
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
  


		<!-- BEGIN REGISTRATION FORM -->

	   {{ Form::open(array('url'=>'user/create', 'class'=>'form-vertical register-form')) }}

  		<h3 class="">注册用户</h3>

			<div class="control-group">

				<label class="control-label visible-ie8 visible-ie9">用户ID</label>

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-user"></i>

						<input class="m-wrap placeholder-no-fix" type="text" placeholder="用户ID" name="UserId"/>

					</div>

				</div>

			</div>

			<div class="control-group">

				<label class="control-label visible-ie8 visible-ie9">密码</label>

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-lock"></i>

						<input class="m-wrap placeholder-no-fix" type="password" id="register_password" placeholder="密码" name="password"/>

					</div>

				</div>

			</div>

			<div class="control-group">

				<label class="control-label visible-ie8 visible-ie9">重输密码</label>

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-ok"></i>

						<input class="m-wrap placeholder-no-fix" type="password" placeholder="重输密码" name="password_confirmation"/>

					</div>

				</div>

			</div>

			<div class="control-group">

				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->

				<label class="control-label visible-ie8 visible-ie9">邮箱</label>

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-envelope"></i>

						<input class="m-wrap placeholder-no-fix" type="text" placeholder="邮箱" name="Email"/>

					</div>

				</div>

			</div>


			<div class="form-actions">

				<button id="register-back-btn" type="button" class="btn">

				<i class="m-icon-swapleft"></i>  返回

				</button>

				<button type="submit" id="register-submit-btn" class="btn green pull-right">

				注册 <i class="m-icon-swapright m-icon-white"></i>

				</button>            

			</div>

	{{ Form::close() }}

		<!-- END REGISTRATION FORM -->

	</div>

	<!-- END LOGIN -->

	<!-- BEGIN COPYRIGHT -->

	<div class="copyright">

		2014 &copy; Daffodil通用信息管理平台.

	</div>
	<!-- END COPYRIGHT -->


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