<!DOCTYPE html><?php include_once $_SERVER["DOCUMENT_ROOT"] . '/configs.php'; ?>
<!-- saved from url=(0062)http://seantheme.com/color-admin-v1.9/admin/html/index_v2.html -->
<html lang="en">
<!--<![endif]-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<!-- 
	<title>Color Admin | Dashboard v2</title>
	 -->

	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	<title><?php echo $web_title; ?></title>
	<link href="<?php echo web_icon_url(); ?>" rel="icon">
	<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/ui/common-head-layout-admin.php"; ?>

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="/ui/admin/flat_000/template_files/css" rel="stylesheet">
	<link href="/ui/admin/flat_000/template_files/jquery-ui.min.css" rel="stylesheet">
	<link href="/ui/admin/flat_000/template_files/bootstrap.min.css" rel="stylesheet">
	<link href="/ui/admin/flat_000/template_files/font-awesome.min.css" rel="stylesheet">
	<link href="/ui/admin/flat_000/template_files/animate.min.css" rel="stylesheet">
	<link href="/ui/admin/flat_000/template_files/style.min.css" rel="stylesheet">
	<link href="/ui/admin/flat_000/template_files/style-responsive.min.css" rel="stylesheet">
	<link href="/ui/admin/flat_000/template_files/blue.css" rel="stylesheet" id="theme">
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
	<link href="/ui/admin/flat_000/template_files/jquery-jvectormap-1.2.2.css" rel="stylesheet">
	<link href="/ui/admin/flat_000/template_files/bootstrap_calendar.css" rel="stylesheet">
	<link href="/ui/admin/flat_000/template_files/jquery.gritter.css" rel="stylesheet">
	<link href="/ui/admin/flat_000/template_files/morris.css" rel="stylesheet">
	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script async src="/ui/admin/flat_000/template_files/analytics.js"></script>
	<script src="/ui/admin/flat_000/template_files/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>

<body class=" pace-done">
	<div class="pace  pace-inactive">
		<div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
			<div class="pace-progress-inner"></div>
		</div>
		<div class="pace-activity"></div>
	</div>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in hide"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed in">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="/admin.php" class="navbar-brand" title="Trang Qu???n Tr??? C???a N???i B??? Nh??n Vi??n">
						<!-- Admin Panel -->
						<img src="<?php echo web_logo_url(); ?>" width="40" height="40" style="display:inline ;margin-right: 10px;" />Admin Backend
					</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->

				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					<!-- 
					<li>
						<form class="navbar-form full-width">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Enter keyword">
								<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</li>
					 -->
					<li>
						<a href="/index.php" title="Trang Ch??? D??nh Cho Kh??ch" target="_blank"><i class="fa fa-home"></i>&nbsp;Home Frontend</a>
					</li>
					<!-- 
					<li class="dropdown">
						<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14" aria-expanded="false">
							<i class="fa fa-bell-o"></i>
							<span class="label">5</span>
							<i class="fa fa-comments-o"></i>
							<span class="label">5</span>
						</a>
					</li>
					 -->
					<li class="dropdown navbar-user">
					<li><a href="/admin-logout.php" title="????ng Tho??t Kh???i Trang Qu???n Tr???"><i class="fa fa-sign-out fa-lg"></i>&nbsp;Log Out</a></li>
					<!--
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<img src="/ui/admin/flat_000/template_files/user-13.jpg" alt=""> 
							<span class="hidden-xs">Adam Schwartz</span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
							<li><a href="javascript:;">Edit Profile</a></li>
							<li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
							<li><a href="javascript:;">Calendar</a></li>
							<li><a href="javascript:;">Setting</a></li>
							<li class="divider"></li>
							<li><a href="javascript:;">Log Out</a></li>
						</ul>
						-->
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->

		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div class="slimScrollDiv" style="position: relative; text-align: start; overflow: hidden; width: auto; height: 100%;">
				<div data-scrollbar="true" data-height="100%" data-init="true" style="overflow: hidden; width: auto; height: 100%;">
					<!-- begin sidebar user -->
					<ul class="nav" style="height:150px; background-color: #1A2229;">
						<li class="nav-profile" style="width:100%; height:100px;">
							<div class="image">
								<a href="/admin/user-edit.php?user_id=<?php echo user_id(); ?>"><img src="<?php echo user_image();?>" width="100%" height="100%" alt=""></a>
							</div>
							<div class="info">
							<h4 style="color:white;"><?php echo user_username(); ?></h4>
								<small><?php echo user_fullname(); ?></small>
							</div>
						</li>
					</ul>
					<!-- end sidebar user -->
					<!-- begin sidebar nav -->
					<ul class="nav">
						<!-- 
					<li class="<?php if ($active_page_admin == ACTIVE_PAGE_ADMIN_DASHBOARD) echo "active"; ?>">
						<a href="/admin/dashboard.php">
						    <i class="fa fa-laptop"></i>
						    <span>Dashboard</span>
					    </a>
					</li>
					-->

						<!-- fa-puzzle-piece,fa-product-hunt -->
						<li class="<?php if ($active_page_admin == ACTIVE_PAGE_ADMIN_PRODUCT) echo "active"; ?>">
							<a href="/admin/product.php">
								<i class="fa fa-puzzle-piece fa-fw"></i><span>S???n ph???m</span>
							</a>
						</li>
						<li class="<?php if ($active_page_admin == ACTIVE_PAGE_ADMIN_MANUFACTURER) echo "active"; ?>">
							<a href="/admin/manufacturer.php" title="Nh?? S???n Xu???t, Nh?? Cung C???p D???ch V???">
								<i class="fa fa-copyright fa-fw"></i><span>Nh?? S???n Xu???t</span>
							</a>
						</li>
						<li class="<?php if ($active_page_admin == ACTIVE_PAGE_ADMIN_CATEGORY) echo "active"; ?>">
							<a href="/admin/category.php" title="Danh M???c, Ph??n Lo???i S???n Ph???m">
								<i class="fa fa-tags"></i><span>Danh M???c</span>
							</a>
						</li>
						<li style="padding: 8 20">
							<hr>
						</li><!-- d???i ph??n c??ch -->

						<li class="<?php if ($active_page_admin == ACTIVE_PAGE_ADMIN_CUSTOMER) echo "active"; ?>">
							<a href="/admin/customer.php" title="Kh??ch H??ng">
								<i class="fa fa-users fa-fw"></i><span>Kh??ch H??ng</span>
							</a>
						</li>

						<li class="<?php if ($active_page_admin == ACTIVE_PAGE_ADMIN_ORDER) echo "active"; ?>">
							<a href="/admin/order.php" title="????n H??ng">
								<i class="fa fa-shopping-cart fa-fw"></i><span>????n H??ng</span>
							</a>
						</li>

						<li class="<?php if ($active_page_admin == ACTIVE_PAGE_ADMIN_CONTACT) echo "active"; ?>">
							<a href="/admin/contact.php" title="G??p ??, Ph???n H???i, Khi???u N???i t??? Kh??ch H??ng">
								<i class="fa fa-envelope fa-fw"></i><span>Ph???n H???i</span>
							</a>
						</li>



						<li>
							<hr>
						</li> <!-- d???i ph??n c??ch -->

						<li class="<?php if ($active_page_admin == ACTIVE_PAGE_ADMIN_USER) echo "active"; ?>">
							<a href="/admin/user.php" title="Admin User">
								<i class="fa fa-user fa-fw"></i><span>Qu???n Tr??? Vi??n</span>
							</a>
						</li>

						<li class="<?php if ($active_page_admin == ACTIVE_PAGE_ADMIN_BANNER) echo "active"; ?>">
							<a href="/admin/banner-image.php" title="Banners">
								<i class="fa fa-slideshare fa-fw"></i><span>???nh Qu???ng C??o</span>
							</a>
						</li>

						<li class="<?php if ($active_page_admin == ACTIVE_PAGE_ADMIN_SETTINGS) echo "active"; ?>">
							<a href="/admin/setting-edit.php" title="System Settings">
								<i class="fa fa-cogs fa-fw"></i> <span>C??i ?????t H??? Th???ng</span>
							</a>
						</li>
						

						<!--
					<li><hr></li>

					
                    <li class="<?php if ($active_page_admin == ACTIVE_PAGE_ADMIN_POST) echo "active"; ?>">
				     <a href="/admin/post.php" title="Tin T???c, B??i Vi???t">
				      <i class="fa fa-newspaper-o fa-fw"></i><span>B??i Vi???t</span>
				     </a>
					</li>

                    <li class="<?php if ($active_page_admin == ACTIVE_PAGE_ADMIN_POST_CATEGORY) echo "active"; ?>">
						<a href="/admin/post_category.php" title="Danh M???c, Ph??n Lo???i B??i Vi???t">
						     <i class="fa fa-tags"></i><span>Lo???i Tin</span>
						</a>
					</li>
					-->

						

						<!-- <li class="has-sub <?php if ($active_page_admin == ACTIVE_PAGE_ADMIN_SYSTEM) echo "active"; ?>">
							<a href="javascript:;" title="H??? Th???ng">
								<span class="caret pull-right"></span>
								<i class="fa fa-cog fa-fw"></i>
								<span>H??? Th???ng</span>
							</a>
							<ul class="sub-menu" style="">
								<li class="<?php if ($active_page_admin == ACTIVE_PAGE_ADMIN_SETTINGS) echo "active"; ?>">
									<a href="/admin/setting-edit.php" title="Settings">
										<i class="fa fa-cogs fa-fw"></i> <span>Settings</span>
									</a>
								</li>
								<li class="<?php if ($active_page_admin == ACTIVE_PAGE_ADMIN_BANNER) echo "active"; ?>">
									<a href="/admin/banner-image.php" title="Banners">
										<i class="fa fa-slideshare fa-fw"></i><span>???nh Banners</span>
									</a>
								</li>

								 ?????ng ????a Qu???n L?? File ???nh v??o ????y v?? giao di???n c???a n?? kh??ng c?? layout !
						    tr??? khi t???o file admin/images.php s??? d???ng layout v?? d??ng filemanager.php l??m giao 
						    di???n ri??ng.
						    <li class="<?php if ($active_page_admin == ACTIVE_PAGE_ADMIN_FILEMANAGER) echo "active"; ?>">
							 <a href="/admin/filemanager.php" title="Qu???n L?? ???nh">
							  <i class="fa fa-commenting-o fa-fw"></i><span>Qu???n L?? ???nh</span>
							 </a>
							</li>
							

								
							<li class="<?php if ($active_page_admin == ACTIVE_PAGE_ADMIN_TESTIMONIAL) echo "active"; ?>">
							 <a href="/admin/testimonial.php" title="L???i Ch???ng Th???c T??? Kh??ch H??ng">
							  <i class="fa fa-commenting-o fa-fw"></i><span>L???i Ch???ng Th???c</span>
							 </a>
							</li>
						    

							</ul>
						</li> -->








						<!-- begin sidebar minify button -->
						<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
						<!-- end sidebar minify button -->
					</ul>
					<!-- end sidebar nav -->
				</div>
				<div class="slimScrollBar ui-draggable" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 576.086px; background: rgb(0, 0, 0);"></div>
				<div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div>
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->

		<!-- begin #content -->
		<div id="content" class="content">
			<?php include_once $web_content; ?>
		</div>
		<!-- end #content -->

		<!-- begin theme-panel -->
		<div class="theme-panel">
			<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
			<div class="theme-panel-content">
				<h5 class="m-t-0">Color Theme</h5>
				<ul class="theme-list clearfix">
					<li class=""><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default" data-original-title="" title="">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red" data-original-title="" title="">&nbsp;</a></li>
					<li class="active"><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue" data-original-title="" title="">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple" data-original-title="" title="">&nbsp;</a></li>
					<li class=""><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange" data-original-title="" title="">&nbsp;</a></li>
					<li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black" data-original-title="" title="">&nbsp;</a></li>
				</ul>
				<div class="divider"></div>
				<div class="row m-t-10">
					<div class="col-md-5 control-label double-line">Header Styling</div>
					<div class="col-md-7">
						<select name="header-styling" class="form-control input-sm">
							<option value="1">default</option>
							<option value="2">inverse</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-5 control-label">Header</div>
					<div class="col-md-7">
						<select name="header-fixed" class="form-control input-sm">
							<option value="1">fixed</option>
							<option value="2">default</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-5 control-label double-line">Sidebar Styling</div>
					<div class="col-md-7">
						<select name="sidebar-styling" class="form-control input-sm">
							<option value="1">default</option>
							<option value="2">grid</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-5 control-label">Sidebar</div>
					<div class="col-md-7">
						<select name="sidebar-fixed" class="form-control input-sm">
							<option value="1">fixed</option>
							<option value="2">default</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-5 control-label double-line">Sidebar Gradient</div>
					<div class="col-md-7">
						<select name="content-gradient" class="form-control input-sm">
							<option value="1">disabled</option>
							<option value="2">enabled</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-5 control-label double-line">Content Styling</div>
					<div class="col-md-7">
						<select name="content-styling" class="form-control input-sm">
							<option value="1">default</option>
							<option value="2">black</option>
						</select>
					</div>
				</div>
				<div class="row m-t-10">
					<div class="col-md-12">
						<a href="http://seantheme.com/color-admin-v1.9/admin/html/index_v2.html#" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage"><i class="fa fa-refresh m-r-3"></i> Reset Local Storage</a>
					</div>
				</div>
			</div>
		</div>
		<!-- end theme-panel -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/ui/admin/flat_000/template_files/jquery-1.9.1.min.js"></script>
	<script src="/ui/admin/flat_000/template_files/jquery-migrate-1.1.0.min.js"></script>
	<script src="/ui/admin/flat_000/template_files/jquery-ui.min.js"></script>
	<script src="/ui/admin/flat_000/template_files/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/ui/admin/flat_000/template_files/jquery.slimscroll.min.js"></script>
	<script src="/ui/admin/flat_000/template_files/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/ui/admin/flat_000/template_files/raphael.min.js"></script>
	<script src="/ui/admin/flat_000/template_files/morris.js"></script>
	<script src="/ui/admin/flat_000/template_files/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="/ui/admin/flat_000/template_files/jquery-jvectormap-world-merc-en.js"></script>
	<script src="/ui/admin/flat_000/template_files/bootstrap_calendar.min.js"></script>
	<script src="/ui/admin/flat_000/template_files/jquery.gritter.js"></script>
	<script src="/ui/admin/flat_000/template_files/dashboard-v2.min.js"></script>
	<script src="/ui/admin/flat_000/template_files/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			DashboardV2.init();
		});
	</script>
	<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-53034621-1', 'auto');
		ga('send', 'pageview');
	</script>



	<div class="jvectormap-label" style="display: none; left: 1220px; top: 304px;">Russia</div>
</body>

</html>