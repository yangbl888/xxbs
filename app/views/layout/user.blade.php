<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>指挥中心动态信息管理系统|用户</title>
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
	<link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }} "/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="index.html">
				<img src="{{ asset('assets/logo.png') }}" alt="logo" />

				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="{{ asset('assets/menu-toggler.png') }}" alt="ffff" />
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->            
				<!-- BEGIN TOP NAVIGATION MENU -->              
				<ul class="nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->   
					<!--li class="dropdown" id="header_notification_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-warning-sign"></i>
						<span class="badge">6</span>
						</a>
						<ul class="dropdown-menu extended notification">
							<li>
								<p>You have 14 new notifications</p>
							</li>
							<li>
								<a href="#">
								<span class="label label-success"><i class="icon-plus"></i></span>
								New user registered. 
								<span class="time">Just now</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-important"><i class="icon-bolt"></i></span>
								Server #12 overloaded. 
								<span class="time">15 mins</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-warning"><i class="icon-bell"></i></span>
								Server #2 not respoding.
								<span class="time">22 mins</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-info"><i class="icon-bullhorn"></i></span>
								Application error.
								<span class="time">40 mins</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-important"><i class="icon-bolt"></i></span>
								Database overloaded 68%. 
								<span class="time">2 hrs</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-important"><i class="icon-bolt"></i></span>
								2 user IP blocked.
								<span class="time">5 hrs</span>
								</a>
							</li>
							<li class="external">
								<a href="#">See all notifications <i class="m-icon-swapright"></i></a>
							</li>
						</ul>
					</li-->
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					<!--li class="dropdown" id="header_inbox_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-envelope"></i>
						<span class="badge">56</span>
						</a>
						<ul class="dropdown-menu extended inbox">
							<li>
								<p>You have 12 new messages</p>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo"><img src="{{ asset('assets/avatar2.jpg') }}" alt="" /></span>
								<span class="subject">
								<span class="from">Lisa Wong</span>
								<span class="time">Just Now</span>
								</span>
								<span class="message">
								Vivamus sed auctor nibh congue nibh. auctor nibh
								auctor nibh...
								</span>  
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo"><img src="{{ asset('assets/avatar3.jpg') }}" alt="" /></span>
								<span class="subject">
								<span class="from">Richard Doe</span>
								<span class="time">16 mins</span>
								</span>
								<span class="message">
								Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
								auctor nibh...
								</span>  
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo"><img src="{{ asset('assets/avatar1.jpg') }}" alt="" /></span>
								<span class="subject">
								<span class="from">Bob Nilson</span>
								<span class="time">2 hrs</span>
								</span>
								<span class="message">
								Vivamus sed nibh auctor nibh congue nibh. auctor nibh
								auctor nibh...
								</span>  
								</a>
							</li>
							<li class="external">
								<a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>
							</li>
						</ul>
					</li-->
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN TODO DROPDOWN -->
					<!--li class="dropdown" id="header_task_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-tasks"></i>
						<span class="badge">5</span>
						</a>
						<ul class="dropdown-menu extended tasks">
							<li>
								<p>You have 12 pending tasks</p>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">New release v1.2</span>
								<span class="percent">30%</span>
								</span>
								<span class="progress progress-success ">
								<span style="width: 30%;" class="bar"></span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">Application deployment</span>
								<span class="percent">65%</span>
								</span>
								<span class="progress progress-danger progress-striped active">
								<span style="width: 65%;" class="bar"></span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">Mobile app release</span>
								<span class="percent">98%</span>
								</span>
								<span class="progress progress-success">
								<span style="width: 98%;" class="bar"></span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">Database migration</span>
								<span class="percent">10%</span>
								</span>
								<span class="progress progress-warning progress-striped">
								<span style="width: 10%;" class="bar"></span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">Web server upgrade</span>
								<span class="percent">58%</span>
								</span>
								<span class="progress progress-info">
								<span style="width: 58%;" class="bar"></span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">Mobile development</span>
								<span class="percent">85%</span>
								</span>
								<span class="progress progress-success">
								<span style="width: 85%;" class="bar"></span>
								</span>
								</a>
							</li>
							<li class="external">
								<a href="#">See all tasks <i class="m-icon-swapright"></i></a>
							</li>
						</ul>
					</li-->
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img alt="" src="{{ asset('assets/avatar1_small.jpg') }}" />
						<span class="username">{{ Auth::user()->UserId }}</span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="inbox.html"><i class="icon-envelope"></i> 消息(3)</a></li>
							<li class="divider"></li>
							<li><a href="{{ url('user/logout', $parameters = array(), $secure = null) }}"><i class="icon-key"></i>退出登录</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU --> 
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->   
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar nav-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->        
			<ul class="page-sidebar-menu">
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li>
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search">
						<div class="input-box">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="搜索" />
							<input type="button" class="submit" value=" " />
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>

				<li class="start active ">
					<a href="javascript:;">
					<i class="icon-user"></i> 
					<span class="title">动态信息管理</span>
					<span class="selected"></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="{{ url('info', $parameters = array(), $secure = null) }}"><i class="icon-comment"></i>
							信息快报</a>
						</li>
						<li >
							<a href="login_soft.html"><i class="icon-coffee"></i>
							治安动态</a>
						</li>		
					</ul>
				</li>
                
				<li class="">
					<a href="javascript:;">
					<i class="icon-cogs"></i> 
					<span class="title">管理中心</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li >

							<a href="javascript:;"><i class="icon-user"></i>
							权限管理
                            <span class="arrow"></span>
                            </a>
                             <ul class="sub-menu">
						     <li >                             
						        <a href="{{ url('users', $parameters = array(), $secure = null) }}"><i class="icon-comment"></i>
							  用户管理</a>
						     </li>
					         <li >
							    <a href="login_soft.html"><i class="icon-coffee"></i>
							  角色管理</a>
						      </li>
                              <li >
							    <a href="login_soft.html"><i class="icon-coffee"></i>
							  组织机构管理</a>
						      </li>
                              <li >
							    <a href="login_soft.html"><i class="icon-coffee"></i>
							  模块管理</a>
						      </li>	
                              <li >
							    <a href="login_soft.html"><i class="icon-coffee"></i>
							  操作权限管理</a>
						      </li>
                              <li >
							    <a href="login_soft.html"><i class="icon-coffee"></i>
							  角色权限管理</a>
						      </li>				
					         </ul>                            
						</li>                        
						<li >
                            <a href="javascript:;"><i class="icon-cogs"></i>
							系统管理
                            <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
						     <li >
						        <a href="login.html"><i class="icon-comment"></i>
							  系统配置</a>
						     </li>
					         <li >
							    <a href="login_soft.html"><i class="icon-coffee"></i>
							  数据字典管理</a>
						      </li>	
					         <li >
							    <a href="login_soft.html"><i class="icon-coffee"></i>
							  操作日志</a>
						      </li>
					         <li >
							    <a href="login_soft.html"><i class="icon-coffee"></i>
							  表字段管理</a>
						      </li>                              	
					         </ul>
						</li>
                        
					</ul>
				</li>
			
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content" style="min-height:820px;">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>portlet Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		    {{ $content }}
		</div>
		<!-- END PAGE -->    
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="footer-inner">
			Copyright &copy; 2013 Daffodil Management Infomation System Ver 1.0&nbsp;&nbsp;</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
		</div>
	</div>
	<!-- END FOOTER -->
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
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
    
<!-- END BODY -->
</html>