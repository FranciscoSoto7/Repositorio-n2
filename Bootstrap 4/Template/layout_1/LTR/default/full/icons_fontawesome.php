<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../../../../global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="../../../../global_assets/css/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="../../../../global_assets/js/main/jquery.min.js"></script>
	<script src="../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="assets/js/app.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
				<img src="../../../../global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="d-md-none ml-2">Git updates</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Git updates</span>
							<a href="#" class="text-default"><i class="icon-sync"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Drop the IE <a href="#">specific hacks</a> for temporal inputs
										<div class="text-muted font-size-sm">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>
									</div>
									
									<div class="media-body">
										Add full font overrides for popovers and tooltips
										<div class="text-muted font-size-sm">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
										<div class="text-muted font-size-sm">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
										<div class="text-muted font-size-sm">Dec 18, 18:36</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>
									
									<div class="media-body">
										Have Carousel ignore keyboard events
										<div class="text-muted font-size-sm">Dec 12, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All updates</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Users</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Users online</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
										<span class="d-block text-muted font-size-sm">UX expert</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All users</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Messages</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Messages</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">James Alexander</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>

										<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Margo Baker</span>
												<span class="text-muted float-right font-size-sm">12:16</span>
											</a>
										</div>

										<span class="text-muted">That was something he was unable to do because...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Jeremy Victorino</span>
												<span class="text-muted float-right font-size-sm">22:48</span>
											</a>
										</div>

										<span class="text-muted">But that would be extremely strained and suspicious...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Beatrix Diaz</span>
												<span class="text-muted float-right font-size-sm">Tue</span>
											</a>
										</div>

										<span class="text-muted">What a strenuous career it is that I've chosen...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Richard Vango</span>
												<span class="text-muted float-right font-size-sm">Mon</span>
											</a>
										</div>
										
										<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Victoria</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">Victoria Baker</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index.html" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Dashboard
									<span class="d-block font-weight-normal opacity-50">No active orders</span>
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Layouts</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="index.html" class="nav-link active">Default layout</a></li>
								<li class="nav-item"><a href="../../../../layout_2/LTR/default/full/index.html" class="nav-link">Layout 2</a></li>
								<li class="nav-item"><a href="../../../../layout_3/LTR/default/full/index.html" class="nav-link">Layout 3</a></li>
								<li class="nav-item"><a href="../../../../layout_4/LTR/default/full/index.html" class="nav-link">Layout 4</a></li>
								<li class="nav-item"><a href="../../../../layout_5/LTR/default/full/index.html" class="nav-link">Layout 5</a></li>
								<li class="nav-item"><a href="../../../../layout_6/LTR/default/full/index.html" class="nav-link disabled">Layout 6 <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Themes</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>
								<li class="nav-item"><a href="../../../LTR/material/full/index.html" class="nav-link">Material</a></li>
								<li class="nav-item"><a href="../../../LTR/dark/full/index.html" class="nav-link disabled">Dark <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item"><a href="../../../LTR/clean/full/index.html" class="nav-link disabled">Clean <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stack"></i> <span>Starter kit</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
								<li class="nav-item"><a href="../seed/layout_nav_horizontal.html" class="nav-link">Horizontal navigation</a></li>
								<li class="nav-item"><a href="../seed/sidebar_none.html" class="nav-link">No sidebar</a></li>
								<li class="nav-item"><a href="../seed/sidebar_main.html" class="nav-link">1 sidebar</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">2 sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="../seed/sidebar_secondary.html" class="nav-link">Secondary sidebar</a></li>
										<li class="nav-item"><a href="../seed/sidebar_right.html" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">3 sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="../seed/sidebar_right_hidden.html" class="nav-link">Right sidebar hidden</a></li>
										<li class="nav-item"><a href="../seed/sidebar_right_visible.html" class="nav-link">Right sidebar visible</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="../seed/sidebar_content_left.html" class="nav-link">Left sidebar</a></li>
										<li class="nav-item"><a href="../seed/sidebar_content_right.html" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="../seed/layout_boxed.html" class="nav-link">Boxed layout</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_main.html" class="nav-link">Fixed main navbar</a></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_secondary.html" class="nav-link">Fixed secondary navbar</a></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_both.html" class="nav-link">Both navbars fixed</a></li>
								<li class="nav-item"><a href="../seed/layout_fixed.html" class="nav-link">Fixed layout</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="changelog.html" class="nav-link">
								<i class="icon-list-unordered"></i>
								<span>Changelog</span>
								<span class="badge bg-blue-400 align-self-center ml-auto">2.2</span>
							</a>
						</li>
						<li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link"><i class="icon-width"></i> <span>RTL version</span></a></li>
						<!-- /main -->

						<!-- Forms -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Forms</div> <i class="icon-menu" title="Forms"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Form components</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form components">
								<li class="nav-item"><a href="form_inputs.html" class="nav-link">Basic inputs</a></li>
								<li class="nav-item"><a href="form_checkboxes_radios.html" class="nav-link">Checkboxes &amp; radios</a></li>
								<li class="nav-item"><a href="form_select2.html" class="nav-link">Select2 selects</a></li>
								<li class="nav-item"><a href="form_multiselect.html" class="nav-link">Bootstrap multiselect</a></li>
								<li class="nav-item"><a href="form_input_groups.html" class="nav-link">Input groups</a></li>
								<li class="nav-item"><a href="form_controls_extended.html" class="nav-link">Extended controls</a></li>
								<li class="nav-item"><a href="form_floating_labels.html" class="nav-link">Floating labels</a></li>
								<li class="nav-item"><a href="form_tag_inputs.html" class="nav-link">Tag inputs</a></li>
								<li class="nav-item"><a href="form_dual_listboxes.html" class="nav-link">Dual Listboxes</a></li>
								<li class="nav-item"><a href="form_validation.html" class="nav-link">Validation</a></li>
								<li class="nav-item"><a href="form_wizard.html" class="nav-link">Form wizard</a></li>
								<li class="nav-item"><a href="form_actions.html" class="nav-link">Form actions</a></li>
								<li class="nav-item"><a href="form_inputs_grid.html" class="nav-link">Inputs grid</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-file-css"></i> <span>JSON forms</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="JSON forms">
								<li class="nav-item"><a href="alpaca_basic.html" class="nav-link">Basic inputs</a></li>
								<li class="nav-item"><a href="alpaca_advanced.html" class="nav-link">Advanced inputs</a></li>
								<li class="nav-item"><a href="alpaca_controls.html" class="nav-link">Controls</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-spell-check"></i> <span>Text editors</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Text editors">
								<li class="nav-item"><a href="editor_summernote.html" class="nav-link">Summernote editor</a></li>
								<li class="nav-item"><a href="editor_ckeditor.html" class="nav-link">CKEditor</a></li>
								<li class="nav-item"><a href="editor_trumbowyg.html" class="nav-link">Trumbowyg editor</a></li>
								<li class="nav-item"><a href="editor_code.html" class="nav-link">Code editor</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-select2"></i> <span>Pickers</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Pickers">
								<li class="nav-item"><a href="picker_date.html" class="nav-link">Date &amp; time pickers</a></li>
								<li class="nav-item"><a href="picker_color.html" class="nav-link">Color pickers</a></li>
								<li class="nav-item"><a href="picker_location.html" class="nav-link">Location pickers</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Form layouts</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form layouts">
								<li class="nav-item"><a href="form_layout_vertical.html" class="nav-link">Vertical form</a></li>
								<li class="nav-item"><a href="form_layout_vertical_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="form_layout_horizontal.html" class="nav-link">Horizontal form</a></li>
								<li class="nav-item"><a href="form_layout_horizontal_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<!-- /forms -->

						<!-- Components -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Components</div> <i class="icon-menu" title="Components"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid"></i> <span>Basic components</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic components">
								<li class="nav-item"><a href="components_modals.html" class="nav-link">Modals</a></li>
								<li class="nav-item"><a href="components_dropdowns.html" class="nav-link">Dropdown menus</a></li>
								<li class="nav-item"><a href="components_tabs.html" class="nav-link">Tabs component</a></li>
								<li class="nav-item"><a href="components_pills.html" class="nav-link">Pills component</a></li>
								<li class="nav-item"><a href="components_collapsible.html" class="nav-link">Collapsible</a></li>
								<li class="nav-item"><a href="components_navs.html" class="nav-link">Navs</a></li>
								<li class="nav-item"><a href="components_buttons.html" class="nav-link">Buttons</a></li>
								<li class="nav-item"><a href="components_popups.html" class="nav-link">Tooltips and popovers</a></li>
								<li class="nav-item"><a href="components_alerts.html" class="nav-link">Alerts</a></li>
								<li class="nav-item"><a href="components_pagination.html" class="nav-link">Pagination</a></li>
								<li class="nav-item"><a href="components_badges.html" class="nav-link">Badges</a></li>
								<li class="nav-item"><a href="components_progress.html" class="nav-link">Progress</a></li>
								<li class="nav-item"><a href="components_breadcrumbs.html" class="nav-link">Breadcrumbs</a></li>
								<li class="nav-item"><a href="components_media.html" class="nav-link">Media objects</a></li>
								<li class="nav-item"><a href="components_scrollspy.html" class="nav-link">Scrollspy</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-puzzle2"></i> <span>Content styling</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Content styling">
								<li class="nav-item"><a href="content_page_header.html" class="nav-link">Page header</a></li>
								<li class="nav-item"><a href="content_page_footer.html" class="nav-link disabled">Page footer <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="content_cards.html" class="nav-link">Cards</a></li>
								<li class="nav-item"><a href="content_cards_content.html" class="nav-link">Card content</a></li>
								<li class="nav-item"><a href="content_cards_layouts.html" class="nav-link">Card layouts</a></li>
								<li class="nav-item"><a href="content_cards_header.html" class="nav-link">Card header elements</a></li>
								<li class="nav-item"><a href="content_cards_footer.html" class="nav-link">Card footer elements</a></li>
								<li class="nav-item"><a href="content_cards_draggable.html" class="nav-link">Draggable cards</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="content_text_styling.html" class="nav-link">Text styling</a></li>
								<li class="nav-item"><a href="content_typography.html" class="nav-link">Typography</a></li>
								<li class="nav-item"><a href="content_helpers.html" class="nav-link">Helper classes</a></li>
								<li class="nav-item"><a href="content_helpers_flex.html" class="nav-link">Flex utilities</a></li>
								<li class="nav-item"><a href="content_syntax_highlighter.html" class="nav-link">Syntax highlighter</a></li>
								<li class="nav-item"><a href="content_grid.html" class="nav-link">Grid system</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-gift"></i> <span>Extra components</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Extra components">
								<li class="nav-item"><a href="extra_pnotify.html" class="nav-link">PNotify notifications</a></li>
								<li class="nav-item"><a href="extra_jgrowl_noty.html" class="nav-link">jGrowl and Noty notifications</a></li>
								<li class="nav-item"><a href="extra_sweetalert.html" class="nav-link">SweetAlert notifications</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="extra_sliders_noui.html" class="nav-link">NoUI sliders</a></li>
								<li class="nav-item"><a href="extra_sliders_ion.html" class="nav-link">Ion range sliders</a></li>
								<li class="nav-item"><a href="extra_trees.html" class="nav-link">Dynamic tree views</a></li>
								<li class="nav-item"><a href="extra_context_menu.html" class="nav-link">Context menu</a></li>
								<li class="nav-item"><a href="extra_fab.html" class="nav-link">Floating action buttons</a></li>
								<li class="nav-item"><a href="extra_session_timeout.html" class="nav-link">Session timeout</a></li>
								<li class="nav-item"><a href="extra_idle_timeout.html" class="nav-link">Idle timeout</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-droplet2"></i> <span>Color system</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Color system">
								<li class="nav-item"><a href="colors_primary.html" class="nav-link">Primary palette</a></li>
								<li class="nav-item"><a href="colors_danger.html" class="nav-link">Danger palette</a></li>
								<li class="nav-item"><a href="colors_success.html" class="nav-link">Success palette</a></li>
								<li class="nav-item"><a href="colors_warning.html" class="nav-link">Warning palette</a></li>
								<li class="nav-item"><a href="colors_info.html" class="nav-link">Info palette</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="colors_pink.html" class="nav-link">Pink palette</a></li>
								<li class="nav-item"><a href="colors_violet.html" class="nav-link">Violet palette</a></li>
								<li class="nav-item"><a href="colors_purple.html" class="nav-link">Purple palette</a></li>
								<li class="nav-item"><a href="colors_indigo.html" class="nav-link">Indigo palette</a></li>
								<li class="nav-item"><a href="colors_blue.html" class="nav-link">Blue palette</a></li>
								<li class="nav-item"><a href="colors_teal.html" class="nav-link">Teal palette</a></li>
								<li class="nav-item"><a href="colors_green.html" class="nav-link">Green palette</a></li>
								<li class="nav-item"><a href="colors_orange.html" class="nav-link">Orange palette</a></li>
								<li class="nav-item"><a href="colors_brown.html" class="nav-link">Brown palette</a></li>
								<li class="nav-item"><a href="colors_grey.html" class="nav-link">Grey palette</a></li>
								<li class="nav-item"><a href="colors_slate.html" class="nav-link">Slate palette</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-spinner2 spinner"></i> <span>Animations</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Animations">
								<li class="nav-item"><a href="animations_css3.html" class="nav-link">CSS3 animations</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Velocity animations</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="animations_velocity_basic.html" class="nav-link">Basic usage</a></li>
										<li class="nav-item"><a href="animations_velocity_ui.html" class="nav-link">UI pack effects</a></li>
										<li class="nav-item"><a href="animations_velocity_examples.html" class="nav-link">Advanced examples</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
							<a href="#" class="nav-link"><i class="icon-thumbs-up2"></i> <span>Icons</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Icons">
								<li class="nav-item"><a href="icons_icomoon.html" class="nav-link">Icomoon</a></li>
								<li class="nav-item"><a href="icons_material.html" class="nav-link">Material</a></li>
								<li class="nav-item"><a href="icons_fontawesome.html" class="nav-link active">Font awesome</a></li>
							</ul>
						</li>
						<!-- /components -->

						<!-- Layout -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Layout</div> <i class="icon-menu" title="Layout options"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Page layouts</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Page layouts">
								<li class="nav-item"><a href="layout_fixed_navbar.html" class="nav-link">Fixed navbar</a></li>
								<li class="nav-item"><a href="layout_fixed_sidebar_custom.html" class="nav-link">Fixed sidebar - custom scroll</a></li>
								<li class="nav-item"><a href="layout_fixed_sidebar_native.html" class="nav-link">Fixed sidebar - native scroll</a></li>
								<li class="nav-item"><a href="layout_fixed_hideable_navbar.html" class="nav-link">Hideable navbar</a></li>
								<li class="nav-item"><a href="layout_fixed_footer.html" class="nav-link">Fixed footer</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="layout_boxed_default.html" class="nav-link">Boxed with default sidebar</a></li>
								<li class="nav-item"><a href="layout_boxed_mini.html" class="nav-link">Boxed with mini sidebar</a></li>
								<li class="nav-item"><a href="layout_boxed_full.html" class="nav-link">Boxed full width</a></li>
								<li class="nav-item"><a href="layout_boxed_content.html" class="nav-link">Boxed content</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-indent-decrease2"></i> <span>Sidebars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Sidebars">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Main sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_default_collapse.html" class="nav-link">Default collapsible</a></li>
										<li class="nav-item"><a href="sidebar_default_hide.html" class="nav-link">Default hideable</a></li>
										<li class="nav-item"><a href="sidebar_default_hidden.html" class="nav-link">Default hidden</a></li>
										<li class="nav-item"><a href="sidebar_mini_collapse.html" class="nav-link">Mini collapsible</a></li>
										<li class="nav-item"><a href="sidebar_mini_hide.html" class="nav-link">Mini hideable</a></li>
										<li class="nav-item"><a href="sidebar_mini_hidden.html" class="nav-link">Mini hidden</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_default_color_light.html" class="nav-link">Light color</a></li>
										<li class="nav-item"><a href="sidebar_default_color_custom.html" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Secondary sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_secondary_after.html" class="nav-link">After default</a></li>
										<li class="nav-item"><a href="sidebar_secondary_before.html" class="nav-link">Before default</a></li>
										<li class="nav-item"><a href="sidebar_secondary_hidden.html" class="nav-link">Hidden by default</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_secondary_color_dark.html" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_secondary_color_custom.html" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Right sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_right_default_collapse.html" class="nav-link">Show - collapse main</a></li>
										<li class="nav-item"><a href="sidebar_right_default_hide.html" class="nav-link">Show - hide main</a></li>
										<li class="nav-item"><a href="sidebar_right_default_toggle.html" class="nav-link">Show - fix default width</a></li>
										<li class="nav-item"><a href="sidebar_right_mini_toggle.html" class="nav-link">Show - fix mini width</a></li>
										<li class="nav-item"><a href="sidebar_right_secondary_hide.html" class="nav-link">Show - hide secondary</a></li>
										<li class="nav-item"><a href="sidebar_right_visible.html" class="nav-link">Visible by default</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_right_color_dark.html" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_right_color_custom.html" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_content_left.html" class="nav-link">Left position</a></li>
										<li class="nav-item"><a href="sidebar_content_left_stretch.html" class="nav-link">Left stretched</a></li>
										<li class="nav-item"><a href="sidebar_content_left_hidden.html" class="nav-link">Left hidden</a></li>
										<li class="nav-item"><a href="sidebar_content_right.html" class="nav-link">Right position</a></li>
										<li class="nav-item"><a href="sidebar_content_right_stretch.html" class="nav-link">Right stretched</a></li>
										<li class="nav-item"><a href="sidebar_content_right_hidden.html" class="nav-link">Right hidden</a></li>
										<li class="nav-item"><a href="sidebar_content_sections.html" class="nav-link">Sectioned sidebar</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_content_color_dark.html" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_content_color_custom.html" class="nav-link">Custom color</a></li>
										<li class="nav-item"><a href="sidebar_content_color_sections_custom.html" class="nav-link">Custom sections color</a></li>
									</ul>
								</li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="sidebar_components.html" class="nav-link">Sidebar components</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-menu3"></i> <span>Navbars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Navbars">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Single navbar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_single_top_static.html" class="nav-link">Single top static</a></li>
										<li class="nav-item"><a href="navbar_single_top_fixed.html" class="nav-link">Single top fixed</a></li>
										<li class="nav-item"><a href="navbar_single_bottom_static.html" class="nav-link">Single bottom static</a></li>
										<li class="nav-item"><a href="navbar_single_bottom_fixed.html" class="nav-link">Single bottom fixed</a></li>
										<li class="nav-item"><a href="navbar_single_header_before.html" class="nav-link">Before page header</a></li>
										<li class="nav-item"><a href="navbar_single_header_after.html" class="nav-link">After page header</a></li>
										<li class="nav-item"><a href="navbar_single_content_after.html" class="nav-link">After page content</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Multiple navbars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_multiple_top_static.html" class="nav-link">Multiple top static</a></li>
										<li class="nav-item"><a href="navbar_multiple_top_fixed.html" class="nav-link">Multiple top fixed</a></li>
										<li class="nav-item"><a href="navbar_multiple_bottom_static.html" class="nav-link">Multiple bottom static</a></li>
										<li class="nav-item"><a href="navbar_multiple_bottom_fixed.html" class="nav-link">Multiple bottom fixed</a></li>
										<li class="nav-item"><a href="navbar_multiple_top_bottom.html" class="nav-link">Multiple - top and bottom</a></li>
										<li class="nav-item"><a href="navbar_multiple_secondary_sticky.html" class="nav-link">Multiple - secondary sticky</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content navbar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_component_single.html" class="nav-link">Single navbar</a></li>
										<li class="nav-item"><a href="navbar_component_multiple.html" class="nav-link">Multiple navbars</a></li>
									</ul>
								</li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="navbar_colors.html" class="nav-link">Color options</a></li>
								<li class="nav-item"><a href="navbar_sizes.html" class="nav-link">Sizing options</a></li>
								<li class="nav-item"><a href="navbar_hideable.html" class="nav-link">Hide on scroll</a></li>
								<li class="nav-item"><a href="navbar_components.html" class="nav-link">Navbar components</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-sort"></i> <span>Vertical navigation</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Vertical navigation">
								<li class="nav-item"><a href="navigation_vertical_collapsible.html" class="nav-link">Collapsible menu</a></li>
								<li class="nav-item"><a href="navigation_vertical_accordion.html" class="nav-link">Accordion menu</a></li>
								<li class="nav-item"><a href="navigation_vertical_bordered.html" class="nav-link">Bordered navigation</a></li>
								<li class="nav-item"><a href="navigation_vertical_right_icons.html" class="nav-link">Right icons</a></li>
								<li class="nav-item"><a href="navigation_vertical_badges.html" class="nav-link">Badges</a></li>
								<li class="nav-item"><a href="navigation_vertical_disabled.html" class="nav-link">Disabled items</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-transmission"></i> <span>Horizontal navigation</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Horizontal navigation">
								<li class="nav-item"><a href="navigation_horizontal_click.html" class="nav-link">Submenu on click</a></li>
								<li class="nav-item"><a href="navigation_horizontal_hover.html" class="nav-link">Submenu on hover</a></li>
								<li class="nav-item"><a href="navigation_horizontal_elements.html" class="nav-link">With custom elements</a></li>
								<li class="nav-item"><a href="navigation_horizontal_tabs.html" class="nav-link">Tabbed navigation</a></li>
								<li class="nav-item"><a href="navigation_horizontal_disabled.html" class="nav-link">Disabled navigation links</a></li>
								<li class="nav-item"><a href="navigation_horizontal_mega.html" class="nav-link">Horizontal mega menu</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>Menu levels</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> Second level</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link"><i class="icon-firefox"></i> Second level with child</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-android"></i> Third level</a></li>
										<li class="nav-item nav-item-submenu">
											<a href="#" class="nav-link"><i class="icon-apple2"></i> Third level with child</a>
											<ul class="nav nav-group-sub">
												<li class="nav-item"><a href="#" class="nav-link"><i class="icon-html5"></i> Fourth level</a></li>
												<li class="nav-item"><a href="#" class="nav-link"><i class="icon-css3"></i> Fourth level</a></li>
											</ul>
										</li>
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-windows"></i> Third level</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> Second level</a></li>
							</ul>
						</li>
						<!-- /layout -->

						<!-- Data visualization -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Data visualization</div> <i class="icon-menu" title="Data visualization"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-graph"></i> <span>Echarts library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="ECharts library">
								<li class="nav-item"><a href="echarts_lines.html" class="nav-link">Line charts</a></li>
								<li class="nav-item"><a href="echarts_areas.html" class="nav-link">Area charts</a></li>
								<li class="nav-item"><a href="echarts_columns_waterfalls.html" class="nav-link">Columns and waterfalls</a></li>
								<li class="nav-item"><a href="echarts_bars_tornados.html" class="nav-link">Bars and tornados</a></li>
								<li class="nav-item"><a href="echarts_scatter.html" class="nav-link">Scatter charts</a></li>
								<li class="nav-item"><a href="echarts_pies_donuts.html" class="nav-link">Pies and donuts</a></li>
								<li class="nav-item"><a href="echarts_funnels_calendars.html" class="nav-link">Funnels and calendars</a></li>
								<li class="nav-item"><a href="echarts_candlesticks_others.html" class="nav-link">Candlesticks and others</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-statistics"></i> <span>D3 library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="D3 library">
								<li class="nav-item"><a href="d3_lines_basic.html" class="nav-link">Simple lines</a></li>
								<li class="nav-item"><a href="d3_lines_advanced.html" class="nav-link">Advanced lines</a></li>
								<li class="nav-item"><a href="d3_bars_basic.html" class="nav-link">Simple bars</a></li>
								<li class="nav-item"><a href="d3_bars_advanced.html" class="nav-link">Advanced bars</a></li>
								<li class="nav-item"><a href="d3_pies.html" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="d3_circle_diagrams.html" class="nav-link">Circle diagrams</a></li>
								<li class="nav-item"><a href="d3_tree.html" class="nav-link">Tree layout</a></li>
								<li class="nav-item"><a href="d3_other.html" class="nav-link">Other charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stats-dots"></i> <span>Dimple library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Dimple library">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Line charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_lines_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_lines_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Bar charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_bars_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_bars_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Area charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_area_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_area_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Step charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_step_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_step_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="dimple_pies.html" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="dimple_rings.html" class="nav-link">Ring charts</a></li>
								<li class="nav-item"><a href="dimple_scatter.html" class="nav-link">Scatter charts</a></li>
								<li class="nav-item"><a href="dimple_bubble.html" class="nav-link">Bubble charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stats-bars"></i> <span>C3 library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="C3 library">
								<li class="nav-item"><a href="c3_lines_areas.html" class="nav-link">Lines and areas</a></li>
								<li class="nav-item"><a href="c3_bars_pies.html" class="nav-link">Bars and pies</a></li>
								<li class="nav-item"><a href="c3_advanced.html" class="nav-link">Advanced examples</a></li>
								<li class="nav-item"><a href="c3_axis.html" class="nav-link">Chart axis</a></li>
								<li class="nav-item"><a href="c3_grid.html" class="nav-link">Grid options</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-google"></i> <span>Google charts</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Google charts">
								<li class="nav-item"><a href="google_lines.html" class="nav-link">Line charts</a></li>
								<li class="nav-item"><a href="google_bars.html" class="nav-link">Bar charts</a></li>
								<li class="nav-item"><a href="google_pies.html" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="google_scatter_bubble.html" class="nav-link">Bubble &amp; scatter charts</a></li>
								<li class="nav-item"><a href="google_other.html" class="nav-link">Other charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-map5"></i> <span>Maps integration</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Maps integration">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Google maps</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="maps_google_basic.html" class="nav-link">Basics</a></li>
										<li class="nav-item"><a href="maps_google_controls.html" class="nav-link">Controls</a></li>
										<li class="nav-item"><a href="maps_google_markers.html" class="nav-link">Markers</a></li>
										<li class="nav-item"><a href="maps_google_drawings.html" class="nav-link">Map drawings</a></li>
										<li class="nav-item"><a href="maps_google_layers.html" class="nav-link ">Layers</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="maps_vector.html" class="nav-link">Vector maps</a></li>
								<li class="nav-item"><a href="maps_echarts.html" class="nav-link disabled">ECharts maps <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<!-- /data visualization -->

						<!-- Extensions -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Extensions</div> <i class="icon-menu" title="Extensions"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-puzzle4"></i> <span>Extensions</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Extensions">
								<li class="nav-item"><a href="extension_image_cropper.html" class="nav-link">Image cropper</a></li>
								<li class="nav-item"><a href="extension_blockui.html" class="nav-link">Block UI</a></li>
								<li class="nav-item"><a href="extension_dnd.html" class="nav-link">Drag and drop</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-popout"></i> <span>JQuery UI</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="jQuery UI">
								<li class="nav-item"><a href="jqueryui_interactions.html" class="nav-link">Interactions</a></li>
								<li class="nav-item"><a href="jqueryui_forms.html" class="nav-link">Forms</a></li>
								<li class="nav-item"><a href="jqueryui_components.html" class="nav-link">Components</a></li>
								<li class="nav-item"><a href="jqueryui_sliders.html" class="nav-link">Sliders</a></li>
								<li class="nav-item"><a href="jqueryui_navigation.html" class="nav-link">Navigation</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-upload"></i> <span>File uploaders</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="File uploaders">
								<li class="nav-item"><a href="uploader_plupload.html" class="nav-link">Plupload</a></li>
								<li class="nav-item"><a href="uploader_bootstrap.html" class="nav-link">Bootstrap file uploader</a></li>
								<li class="nav-item"><a href="uploader_dropzone.html" class="nav-link">Dropzone</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-calendar3"></i> <span>Event calendars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Event calendars">
								<li class="nav-item"><a href="fullcalendar_views.html" class="nav-link">Basic views</a></li>
								<li class="nav-item"><a href="fullcalendar_styling.html" class="nav-link">Event styling</a></li>
								<li class="nav-item"><a href="fullcalendar_formats.html" class="nav-link">Language and time</a></li>
								<li class="nav-item"><a href="fullcalendar_advanced.html" class="nav-link">Advanced usage</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-sphere"></i> <span>Internationalization</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Internationalization">
								<li class="nav-item"><a href="internationalization_switch_direct.html" class="nav-link">Direct translation</a></li>
								<li class="nav-item"><a href="internationalization_switch_query.html" class="nav-link">Querystring parameter</a></li>
								<li class="nav-item"><a href="internationalization_fallback.html" class="nav-link">Language fallback</a></li>
								<li class="nav-item"><a href="internationalization_callbacks.html" class="nav-link">Callbacks</a></li>
							</ul>
						</li>
						<!-- /extensions -->

						<!-- Tables -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Tables</div> <i class="icon-menu" title="Tables"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-table2"></i> <span>Basic tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic tables">
								<li class="nav-item"><a href="table_basic.html" class="nav-link">Basic examples</a></li>
								<li class="nav-item"><a href="table_sizing.html" class="nav-link">Table sizing</a></li>
								<li class="nav-item"><a href="table_borders.html" class="nav-link">Table borders</a></li>
								<li class="nav-item"><a href="table_styling.html" class="nav-link">Table styling</a></li>
								<li class="nav-item"><a href="table_elements.html" class="nav-link">Table elements</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid7"></i> <span>Data tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Data tables">
								<li class="nav-item"><a href="datatable_basic.html" class="nav-link">Basic initialization</a></li>
								<li class="nav-item"><a href="datatable_styling.html" class="nav-link">Basic styling</a></li>
								<li class="nav-item"><a href="datatable_advanced.html" class="nav-link">Advanced examples</a></li>
								<li class="nav-item"><a href="datatable_sorting.html" class="nav-link">Sorting options</a></li>
								<li class="nav-item"><a href="datatable_api.html" class="nav-link">Using API</a></li>
								<li class="nav-item"><a href="datatable_data_sources.html" class="nav-link">Data sources</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-alignment-unalign"></i> <span>Data tables extensions</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Data tables extensions">
								<li class="nav-item"><a href="datatable_extension_reorder.html" class="nav-link">Columns reorder</a></li>
								<li class="nav-item"><a href="datatable_extension_row_reorder.html" class="nav-link">Row reorder</a></li>
								<li class="nav-item"><a href="datatable_extension_fixed_columns.html" class="nav-link">Fixed columns</a></li>
								<li class="nav-item"><a href="datatable_extension_fixed_header.html" class="nav-link">Fixed header</a></li>
								<li class="nav-item"><a href="datatable_extension_autofill.html" class="nav-link">Auto fill</a></li>
								<li class="nav-item"><a href="datatable_extension_key_table.html" class="nav-link">Key table</a></li>
								<li class="nav-item"><a href="datatable_extension_scroller.html" class="nav-link">Scroller</a></li>
								<li class="nav-item"><a href="datatable_extension_select.html" class="nav-link">Select</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Buttons</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="datatable_extension_buttons_init.html" class="nav-link">Initialization</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_flash.html" class="nav-link">Flash buttons</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_print.html" class="nav-link">Print buttons</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_html5.html" class="nav-link">HTML5 buttons</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="datatable_extension_colvis.html" class="nav-link">Columns visibility</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-file-spreadsheet"></i> <span>Handsontable</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Handsontable">
								<li class="nav-item"><a href="handsontable_basic.html" class="nav-link">Basic configuration</a></li>
								<li class="nav-item"><a href="handsontable_advanced.html" class="nav-link">Advanced setup</a></li>
								<li class="nav-item"><a href="handsontable_cols.html" class="nav-link">Column features</a></li>
								<li class="nav-item"><a href="handsontable_cells.html" class="nav-link">Cell features</a></li>
								<li class="nav-item"><a href="handsontable_types.html" class="nav-link">Basic cell types</a></li>
								<li class="nav-item"><a href="handsontable_custom_checks.html" class="nav-link">Custom &amp; checkboxes</a></li>
								<li class="nav-item"><a href="handsontable_ac_password.html" class="nav-link">Autocomplete &amp; password</a></li>
								<li class="nav-item"><a href="handsontable_search.html" class="nav-link">Search</a></li>
								<li class="nav-item"><a href="handsontable_context.html" class="nav-link">Context menu</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-versions"></i> <span>Responsive tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Responsive tables">
								<li class="nav-item"><a href="table_responsive.html" class="nav-link">Responsive basic tables</a></li>
								<li class="nav-item"><a href="datatable_responsive.html" class="nav-link">Responsive data tables</a></li>
							</ul>
						</li>
						<!-- /tables -->

						<!-- Page kits -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Page kits</div> <i class="icon-menu" title="Page kits"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid6"></i> <span>General pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="General pages">
								<li class="nav-item"><a href="general_feed.html" class="nav-link">Feed</a></li>
								<li class="nav-item"><a href="general_embeds.html" class="nav-link">Embeds</a></li>
								<li class="nav-item"><a href="general_faq.html" class="nav-link">FAQ page</a></li>
								<li class="nav-item"><a href="general_knowledgebase.html" class="nav-link">Knowledgebase</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Blog</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="blog_classic_v.html" class="nav-link">Classic vertical</a></li>
										<li class="nav-item"><a href="blog_classic_h.html" class="nav-link">Classic horizontal</a></li>
										<li class="nav-item"><a href="blog_grid.html" class="nav-link">Grid</a></li>
										<li class="nav-item"><a href="blog_single.html" class="nav-link">Single post</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="blog_sidebar_left.html" class="nav-link">Left sidebar</a></li>
										<li class="nav-item"><a href="blog_sidebar_right.html" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Timelines</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="timelines_left.html" class="nav-link">Left timeline</a></li>
										<li class="nav-item"><a href="timelines_right.html" class="nav-link">Right timeline</a></li>
										<li class="nav-item"><a href="timelines_center.html" class="nav-link">Centered timeline</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Gallery</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="gallery_grid.html" class="nav-link">Media grid</a></li>
										<li class="nav-item"><a href="gallery_titles.html" class="nav-link">Media with titles</a></li>
										<li class="nav-item"><a href="gallery_description.html" class="nav-link">Media with description</a></li>
										<li class="nav-item"><a href="gallery_library.html" class="nav-link">Media library</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-wrench3"></i> <span>Service pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Service pages">
								<li class="nav-item"><a href="service_sitemap.html" class="nav-link">Sitemap</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Invoicing</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="invoice_template.html" class="nav-link">Invoice template</a></li>
										<li class="nav-item"><a href="invoice_grid.html" class="nav-link">Invoice grid</a></li>
										<li class="nav-item"><a href="invoice_archive.html" class="nav-link">Invoice archive</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Authentication</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="login_simple.html" class="nav-link">Simple login</a></li>
										<li class="nav-item"><a href="login_advanced.html" class="nav-link">More login info</a></li>
										<li class="nav-item"><a href="login_registration.html" class="nav-link">Simple registration</a></li>
										<li class="nav-item"><a href="login_registration_advanced.html" class="nav-link">More registration info</a></li>
										<li class="nav-item"><a href="login_unlock.html" class="nav-link">Unlock user</a></li>
										<li class="nav-item"><a href="login_password_recover.html" class="nav-link">Reset password</a></li>
										<li class="nav-item"><a href="login_hide_navbar.html" class="nav-link">Hide navbar</a></li>
										<li class="nav-item"><a href="login_transparent.html" class="nav-link">Transparent box</a></li>
										<li class="nav-item"><a href="login_background.html" class="nav-link">Background option</a></li>
										<li class="nav-item"><a href="login_validation.html" class="nav-link">With validation</a></li>
										<li class="nav-item"><a href="login_tabbed.html" class="nav-link">Tabbed form</a></li>
										<li class="nav-item"><a href="login_modals.html" class="nav-link">Inside modals</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Error pages</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="error_403.html" class="nav-link">Error 403</a></li>
										<li class="nav-item"><a href="error_404.html" class="nav-link">Error 404</a></li>
										<li class="nav-item"><a href="error_405.html" class="nav-link">Error 405</a></li>
										<li class="nav-item"><a href="error_500.html" class="nav-link">Error 500</a></li>
										<li class="nav-item"><a href="error_503.html" class="nav-link">Error 503</a></li>
										<li class="nav-item"><a href="error_offline.html" class="nav-link">Offline page</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-people"></i> <span>User pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="User pages">
								<li class="nav-item"><a href="user_pages_list.html" class="nav-link">User list</a></li>
								<li class="nav-item"><a href="user_pages_cards.html" class="nav-link">User cards</a></li>
								<li class="nav-item"><a href="user_pages_profile.html" class="nav-link">Simple profile</a></li>
								<li class="nav-item"><a href="user_pages_profile_tabbed.html" class="nav-link">Tabbed profile</a></li>
								<li class="nav-item"><a href="user_pages_profile_cover.html" class="nav-link">Profile with cover</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-cube3"></i> <span>Application pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Application pages">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Task manager</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="task_manager_grid.html" class="nav-link">Task grid</a></li>
										<li class="nav-item"><a href="task_manager_list.html" class="nav-link">Task list</a></li>
										<li class="nav-item"><a href="task_manager_detailed.html" class="nav-link">Task detailed</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Inbox</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="mail_list.html" class="nav-link">Mail list</a></li>
										<li class="nav-item"><a href="mail_list_detached.html" class="nav-link">Mail list (detached)</a></li>
										<li class="nav-item"><a href="mail_read.html" class="nav-link">Read mail</a></li>
										<li class="nav-item"><a href="mail_write.html" class="nav-link">Write mail</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="chat_layouts.html" class="nav-link">Chat layouts</a></li>
										<li class="nav-item"><a href="chat_options.html" class="nav-link">Chat options</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Search</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="search_basic.html" class="nav-link">Basic search results</a></li>
										<li class="nav-item"><a href="search_users.html" class="nav-link">User search results</a></li>
										<li class="nav-item"><a href="search_images.html" class="nav-link">Image search results</a></li>
										<li class="nav-item"><a href="search_videos.html" class="nav-link">Video search results</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Job search</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="job_list_cards.html" class="nav-link">Cards view</a></li>
										<li class="nav-item"><a href="job_list_list.html" class="nav-link">List view</a></li>
										<li class="nav-item"><a href="job_detailed.html" class="nav-link">Job detailed</a></li>
										<li class="nav-item"><a href="job_apply.html" class="nav-link">Apply</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Learning</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="learning_list.html" class="nav-link">List view</a></li>
										<li class="nav-item"><a href="learning_grid.html" class="nav-link">Grid view</a></li>
										<li class="nav-item"><a href="learning_detailed.html" class="nav-link">Detailed course</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Ecommerce set</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="ecommerce_product_list.html" class="nav-link">Product list</a></li>
										<li class="nav-item"><a href="ecommerce_product_grid.html" class="nav-link">Product grid</a></li>
										<li class="nav-item"><a href="ecommerce_orders_history.html" class="nav-link">Orders history</a></li>
										<li class="nav-item"><a href="ecommerce_customers.html" class="nav-link">Customers</a></li>
										<li class="nav-item"><a href="ecommerce_pricing.html" class="nav-link">Pricing tables</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-atom2"></i> <span>Widgets</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Widgets">
								<li class="nav-item"><a href="widgets_content.html" class="nav-link">Content widgets</a></li>
								<li class="nav-item"><a href="widgets_stats.html" class="nav-link">Statistics widgets</a></li>
								<li class="nav-item"><a href="widgets_menu.html" class="nav-link disabled">Menu widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item"><a href="widgets_form.html" class="nav-link disabled">Form widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<!-- /page kits -->

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Icons</span> - Font Awesome Set</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="icons_fontawesome.html" class="breadcrumb-item">Icons</a>
							<span class="breadcrumb-item active">Font awesome set</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Support
							</a>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Icons preview -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Font Awesome icon set</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-4">Font Awesome is the internet's most popular icon toolkit. Font Awesome gives you scalable vector icons that can instantly be customized — size, color, drop shadow, and anything that can be done with the power of CSS. Free version of the newest library version includes 1400+ icons in 2 styles: regular and solid. Default icon size is 1rem, but you can change it to any other size in SCSS. They are vector based, this means every icon looks awesome at any size.</p>

						<div class="row no-gutters glyphs">
							<div class="col-md-3 col-sm-4">
								<div class="d-flex align-items-center">
									<i class="fab fa-500px mr-3 fa-2x"></i>
									<div>500px <div class="opacity-50">f26e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-accessible-icon mr-3 fa-2x"></i>
						 			<div>accessible-icon <div class="opacity-50">f368</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-accusoft mr-3 fa-2x"></i>
						 			<div>accusoft <div class="opacity-50">f369</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-acquisitions-incorporated mr-3 fa-2x"></i>
						 			<div>acquisitions-incorporated <div class="opacity-50">f6af</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-ad mr-3 fa-2x"></i>
						 			<div>ad <div class="opacity-50">f641</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-address-book mr-3 fa-2x"></i>
						 			<div>address-book <div class="opacity-50">f2b9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-address-book mr-3 fa-2x"></i>
						 			<div>address-book <div class="opacity-50">f2b9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-address-card mr-3 fa-2x"></i>
						 			<div>address-card <div class="opacity-50">f2bb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-address-card mr-3 fa-2x"></i>
						 			<div>address-card <div class="opacity-50">f2bb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-adjust mr-3 fa-2x"></i>
						 			<div>adjust <div class="opacity-50">f042</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-adn mr-3 fa-2x"></i>
						 			<div>adn <div class="opacity-50">f170</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-adversal mr-3 fa-2x"></i>
						 			<div>adversal <div class="opacity-50">f36a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-affiliatetheme mr-3 fa-2x"></i>
						 			<div>affiliatetheme <div class="opacity-50">f36b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-air-freshener mr-3 fa-2x"></i>
						 			<div>air-freshener <div class="opacity-50">f5d0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-algolia mr-3 fa-2x"></i>
						 			<div>algolia <div class="opacity-50">f36c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-align-center mr-3 fa-2x"></i>
						 			<div>align-center <div class="opacity-50">f037</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-align-justify mr-3 fa-2x"></i>
						 			<div>align-justify <div class="opacity-50">f039</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-align-left mr-3 fa-2x"></i>
						 			<div>align-left <div class="opacity-50">f036</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-align-right mr-3 fa-2x"></i>
						 			<div>align-right <div class="opacity-50">f038</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-alipay mr-3 fa-2x"></i>
						 			<div>alipay <div class="opacity-50">f642</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-allergies mr-3 fa-2x"></i>
						 			<div>allergies <div class="opacity-50">f461</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-amazon mr-3 fa-2x"></i>
						 			<div>amazon <div class="opacity-50">f270</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-amazon-pay mr-3 fa-2x"></i>
						 			<div>amazon-pay <div class="opacity-50">f42c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-ambulance mr-3 fa-2x"></i>
						 			<div>ambulance <div class="opacity-50">f0f9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-american-sign-language-interpreting mr-3 fa-2x"></i>
						 			<div>american-sign-language-interpreting <div class="opacity-50">f2a3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-amilia mr-3 fa-2x"></i>
						 			<div>amilia <div class="opacity-50">f36d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-anchor mr-3 fa-2x"></i>
						 			<div>anchor <div class="opacity-50">f13d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-android mr-3 fa-2x"></i>
						 			<div>android <div class="opacity-50">f17b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-angellist mr-3 fa-2x"></i>
						 			<div>angellist <div class="opacity-50">f209</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-angle-double-down mr-3 fa-2x"></i>
						 			<div>angle-double-down <div class="opacity-50">f103</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-angle-double-left mr-3 fa-2x"></i>
						 			<div>angle-double-left <div class="opacity-50">f100</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-angle-double-right mr-3 fa-2x"></i>
						 			<div>angle-double-right <div class="opacity-50">f101</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-angle-double-up mr-3 fa-2x"></i>
						 			<div>angle-double-up <div class="opacity-50">f102</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-angle-down mr-3 fa-2x"></i>
						 			<div>angle-down <div class="opacity-50">f107</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-angle-left mr-3 fa-2x"></i>
						 			<div>angle-left <div class="opacity-50">f104</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-angle-right mr-3 fa-2x"></i>
						 			<div>angle-right <div class="opacity-50">f105</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-angle-up mr-3 fa-2x"></i>
						 			<div>angle-up <div class="opacity-50">f106</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-angry mr-3 fa-2x"></i>
						 			<div>angry <div class="opacity-50">f556</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-angry mr-3 fa-2x"></i>
						 			<div>angry <div class="opacity-50">f556</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-angrycreative mr-3 fa-2x"></i>
						 			<div>angrycreative <div class="opacity-50">f36e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-angular mr-3 fa-2x"></i>
						 			<div>angular <div class="opacity-50">f420</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-ankh mr-3 fa-2x"></i>
						 			<div>ankh <div class="opacity-50">f644</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-app-store mr-3 fa-2x"></i>
						 			<div>app-store <div class="opacity-50">f36f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-app-store-ios mr-3 fa-2x"></i>
						 			<div>app-store-ios <div class="opacity-50">f370</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-apper mr-3 fa-2x"></i>
						 			<div>apper <div class="opacity-50">f371</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-apple mr-3 fa-2x"></i>
						 			<div>apple <div class="opacity-50">f179</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-apple-alt mr-3 fa-2x"></i>
						 			<div>apple-alt <div class="opacity-50">f5d1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-apple-pay mr-3 fa-2x"></i>
						 			<div>apple-pay <div class="opacity-50">f415</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-archive mr-3 fa-2x"></i>
						 			<div>archive <div class="opacity-50">f187</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-archway mr-3 fa-2x"></i>
						 			<div>archway <div class="opacity-50">f557</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-arrow-alt-circle-down mr-3 fa-2x"></i>
						 			<div>arrow-alt-circle-down <div class="opacity-50">f358</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-arrow-alt-circle-down mr-3 fa-2x"></i>
						 			<div>arrow-alt-circle-down <div class="opacity-50">f358</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-arrow-alt-circle-left mr-3 fa-2x"></i>
						 			<div>arrow-alt-circle-left <div class="opacity-50">f359</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-arrow-alt-circle-left mr-3 fa-2x"></i>
						 			<div>arrow-alt-circle-left <div class="opacity-50">f359</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-arrow-alt-circle-right mr-3 fa-2x"></i>
						 			<div>arrow-alt-circle-right <div class="opacity-50">f35a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-arrow-alt-circle-right mr-3 fa-2x"></i>
						 			<div>arrow-alt-circle-right <div class="opacity-50">f35a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-arrow-alt-circle-up mr-3 fa-2x"></i>
						 			<div>arrow-alt-circle-up <div class="opacity-50">f35b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-arrow-alt-circle-up mr-3 fa-2x"></i>
						 			<div>arrow-alt-circle-up <div class="opacity-50">f35b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-arrow-circle-down mr-3 fa-2x"></i>
						 			<div>arrow-circle-down <div class="opacity-50">f0ab</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-arrow-circle-left mr-3 fa-2x"></i>
						 			<div>arrow-circle-left <div class="opacity-50">f0a8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-arrow-circle-right mr-3 fa-2x"></i>
						 			<div>arrow-circle-right <div class="opacity-50">f0a9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-arrow-circle-up mr-3 fa-2x"></i>
						 			<div>arrow-circle-up <div class="opacity-50">f0aa</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-arrow-down mr-3 fa-2x"></i>
						 			<div>arrow-down <div class="opacity-50">f063</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-arrow-left mr-3 fa-2x"></i>
						 			<div>arrow-left <div class="opacity-50">f060</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-arrow-right mr-3 fa-2x"></i>
						 			<div>arrow-right <div class="opacity-50">f061</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-arrow-up mr-3 fa-2x"></i>
						 			<div>arrow-up <div class="opacity-50">f062</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-arrows-alt mr-3 fa-2x"></i>
						 			<div>arrows-alt <div class="opacity-50">f0b2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-arrows-alt-h mr-3 fa-2x"></i>
						 			<div>arrows-alt-h <div class="opacity-50">f337</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-arrows-alt-v mr-3 fa-2x"></i>
						 			<div>arrows-alt-v <div class="opacity-50">f338</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-assistive-listening-systems mr-3 fa-2x"></i>
						 			<div>assistive-listening-systems <div class="opacity-50">f2a2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-asterisk mr-3 fa-2x"></i>
						 			<div>asterisk <div class="opacity-50">f069</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-asymmetrik mr-3 fa-2x"></i>
						 			<div>asymmetrik <div class="opacity-50">f372</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-at mr-3 fa-2x"></i>
						 			<div>at <div class="opacity-50">f1fa</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-atlas mr-3 fa-2x"></i>
						 			<div>atlas <div class="opacity-50">f558</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-atom mr-3 fa-2x"></i>
						 			<div>atom <div class="opacity-50">f5d2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-audible mr-3 fa-2x"></i>
						 			<div>audible <div class="opacity-50">f373</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-audio-description mr-3 fa-2x"></i>
						 			<div>audio-description <div class="opacity-50">f29e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-autoprefixer mr-3 fa-2x"></i>
						 			<div>autoprefixer <div class="opacity-50">f41c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-avianex mr-3 fa-2x"></i>
						 			<div>avianex <div class="opacity-50">f374</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-aviato mr-3 fa-2x"></i>
						 			<div>aviato <div class="opacity-50">f421</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-award mr-3 fa-2x"></i>
						 			<div>award <div class="opacity-50">f559</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-aws mr-3 fa-2x"></i>
						 			<div>aws <div class="opacity-50">f375</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-backspace mr-3 fa-2x"></i>
						 			<div>backspace <div class="opacity-50">f55a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-backward mr-3 fa-2x"></i>
						 			<div>backward <div class="opacity-50">f04a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-balance-scale mr-3 fa-2x"></i>
						 			<div>balance-scale <div class="opacity-50">f24e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-ban mr-3 fa-2x"></i>
						 			<div>ban <div class="opacity-50">f05e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-band-aid mr-3 fa-2x"></i>
						 			<div>band-aid <div class="opacity-50">f462</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-bandcamp mr-3 fa-2x"></i>
						 			<div>bandcamp <div class="opacity-50">f2d5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-barcode mr-3 fa-2x"></i>
						 			<div>barcode <div class="opacity-50">f02a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bars mr-3 fa-2x"></i>
						 			<div>bars <div class="opacity-50">f0c9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-baseball-ball mr-3 fa-2x"></i>
						 			<div>baseball-ball <div class="opacity-50">f433</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-basketball-ball mr-3 fa-2x"></i>
						 			<div>basketball-ball <div class="opacity-50">f434</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bath mr-3 fa-2x"></i>
						 			<div>bath <div class="opacity-50">f2cd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-battery-empty mr-3 fa-2x"></i>
						 			<div>battery-empty <div class="opacity-50">f244</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-battery-full mr-3 fa-2x"></i>
						 			<div>battery-full <div class="opacity-50">f240</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-battery-half mr-3 fa-2x"></i>
						 			<div>battery-half <div class="opacity-50">f242</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-battery-quarter mr-3 fa-2x"></i>
						 			<div>battery-quarter <div class="opacity-50">f243</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-battery-three-quarters mr-3 fa-2x"></i>
						 			<div>battery-three-quarters <div class="opacity-50">f241</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bed mr-3 fa-2x"></i>
						 			<div>bed <div class="opacity-50">f236</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-beer mr-3 fa-2x"></i>
						 			<div>beer <div class="opacity-50">f0fc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-behance mr-3 fa-2x"></i>
						 			<div>behance <div class="opacity-50">f1b4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-behance-square mr-3 fa-2x"></i>
						 			<div>behance-square <div class="opacity-50">f1b5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bell mr-3 fa-2x"></i>
						 			<div>bell <div class="opacity-50">f0f3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-bell mr-3 fa-2x"></i>
						 			<div>bell <div class="opacity-50">f0f3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bell-slash mr-3 fa-2x"></i>
						 			<div>bell-slash <div class="opacity-50">f1f6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-bell-slash mr-3 fa-2x"></i>
						 			<div>bell-slash <div class="opacity-50">f1f6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bezier-curve mr-3 fa-2x"></i>
						 			<div>bezier-curve <div class="opacity-50">f55b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bible mr-3 fa-2x"></i>
						 			<div>bible <div class="opacity-50">f647</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bicycle mr-3 fa-2x"></i>
						 			<div>bicycle <div class="opacity-50">f206</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-bimobject mr-3 fa-2x"></i>
						 			<div>bimobject <div class="opacity-50">f378</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-binoculars mr-3 fa-2x"></i>
						 			<div>binoculars <div class="opacity-50">f1e5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-birthday-cake mr-3 fa-2x"></i>
						 			<div>birthday-cake <div class="opacity-50">f1fd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-bitbucket mr-3 fa-2x"></i>
						 			<div>bitbucket <div class="opacity-50">f171</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-bitcoin mr-3 fa-2x"></i>
						 			<div>bitcoin <div class="opacity-50">f379</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-bity mr-3 fa-2x"></i>
						 			<div>bity <div class="opacity-50">f37a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-black-tie mr-3 fa-2x"></i>
						 			<div>black-tie <div class="opacity-50">f27e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-blackberry mr-3 fa-2x"></i>
						 			<div>blackberry <div class="opacity-50">f37b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-blender mr-3 fa-2x"></i>
						 			<div>blender <div class="opacity-50">f517</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-blender-phone mr-3 fa-2x"></i>
						 			<div>blender-phone <div class="opacity-50">f6b6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-blind mr-3 fa-2x"></i>
						 			<div>blind <div class="opacity-50">f29d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-blogger mr-3 fa-2x"></i>
						 			<div>blogger <div class="opacity-50">f37c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-blogger-b mr-3 fa-2x"></i>
						 			<div>blogger-b <div class="opacity-50">f37d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-bluetooth mr-3 fa-2x"></i>
						 			<div>bluetooth <div class="opacity-50">f293</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-bluetooth-b mr-3 fa-2x"></i>
						 			<div>bluetooth-b <div class="opacity-50">f294</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bold mr-3 fa-2x"></i>
						 			<div>bold <div class="opacity-50">f032</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bolt mr-3 fa-2x"></i>
						 			<div>bolt <div class="opacity-50">f0e7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bomb mr-3 fa-2x"></i>
						 			<div>bomb <div class="opacity-50">f1e2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bone mr-3 fa-2x"></i>
						 			<div>bone <div class="opacity-50">f5d7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bong mr-3 fa-2x"></i>
						 			<div>bong <div class="opacity-50">f55c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-book mr-3 fa-2x"></i>
						 			<div>book <div class="opacity-50">f02d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-book-dead mr-3 fa-2x"></i>
						 			<div>book-dead <div class="opacity-50">f6b7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-book-open mr-3 fa-2x"></i>
						 			<div>book-open <div class="opacity-50">f518</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-book-reader mr-3 fa-2x"></i>
						 			<div>book-reader <div class="opacity-50">f5da</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bookmark mr-3 fa-2x"></i>
						 			<div>bookmark <div class="opacity-50">f02e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-bookmark mr-3 fa-2x"></i>
						 			<div>bookmark <div class="opacity-50">f02e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bowling-ball mr-3 fa-2x"></i>
						 			<div>bowling-ball <div class="opacity-50">f436</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-box mr-3 fa-2x"></i>
						 			<div>box <div class="opacity-50">f466</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-box-open mr-3 fa-2x"></i>
						 			<div>box-open <div class="opacity-50">f49e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-boxes mr-3 fa-2x"></i>
						 			<div>boxes <div class="opacity-50">f468</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-braille mr-3 fa-2x"></i>
						 			<div>braille <div class="opacity-50">f2a1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-brain mr-3 fa-2x"></i>
						 			<div>brain <div class="opacity-50">f5dc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-briefcase mr-3 fa-2x"></i>
						 			<div>briefcase <div class="opacity-50">f0b1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-briefcase-medical mr-3 fa-2x"></i>
						 			<div>briefcase-medical <div class="opacity-50">f469</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-broadcast-tower mr-3 fa-2x"></i>
						 			<div>broadcast-tower <div class="opacity-50">f519</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-broom mr-3 fa-2x"></i>
					 				<div>broom <div class="opacity-50">f51a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-brush mr-3 fa-2x"></i>
					 				<div>brush <div class="opacity-50">f55d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-btc mr-3 fa-2x"></i>
					 				<div>btc <div class="opacity-50">f15a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bug mr-3 fa-2x"></i>
					 				<div>bug <div class="opacity-50">f188</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-building mr-3 fa-2x"></i>
					 				<div>building <div class="opacity-50">f1ad</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-building mr-3 fa-2x"></i>
					 				<div>building <div class="opacity-50">f1ad</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bullhorn mr-3 fa-2x"></i>
					 				<div>bullhorn <div class="opacity-50">f0a1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bullseye mr-3 fa-2x"></i>
					 				<div>bullseye <div class="opacity-50">f140</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-burn mr-3 fa-2x"></i>
					 				<div>burn <div class="opacity-50">f46a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-buromobelexperte mr-3 fa-2x"></i>
					 				<div>buromobelexperte <div class="opacity-50">f37f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bus mr-3 fa-2x"></i>
					 				<div>bus <div class="opacity-50">f207</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-bus-alt mr-3 fa-2x"></i>
					 				<div>bus-alt <div class="opacity-50">f55e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-business-time mr-3 fa-2x"></i>
					 				<div>business-time <div class="opacity-50">f64a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-buysellads mr-3 fa-2x"></i>
					 				<div>buysellads <div class="opacity-50">f20d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-calculator mr-3 fa-2x"></i>
					 				<div>calculator <div class="opacity-50">f1ec</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-calendar mr-3 fa-2x"></i>
					 				<div>calendar <div class="opacity-50">f133</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-calendar mr-3 fa-2x"></i>
					 				<div>calendar <div class="opacity-50">f133</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-calendar-alt mr-3 fa-2x"></i>
					 				<div>calendar-alt <div class="opacity-50">f073</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-calendar-alt mr-3 fa-2x"></i>
					 				<div>calendar-alt <div class="opacity-50">f073</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-calendar-check mr-3 fa-2x"></i>
					 				<div>calendar-check <div class="opacity-50">f274</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-calendar-check mr-3 fa-2x"></i>
					 				<div>calendar-check <div class="opacity-50">f274</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-calendar-minus mr-3 fa-2x"></i>
					 				<div>calendar-minus <div class="opacity-50">f272</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-calendar-minus mr-3 fa-2x"></i>
					 				<div>calendar-minus <div class="opacity-50">f272</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-calendar-plus mr-3 fa-2x"></i>
					 				<div>calendar-plus <div class="opacity-50">f271</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-calendar-plus mr-3 fa-2x"></i>
					 				<div>calendar-plus <div class="opacity-50">f271</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-calendar-times mr-3 fa-2x"></i>
					 				<div>calendar-times <div class="opacity-50">f273</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-calendar-times mr-3 fa-2x"></i>
					 				<div>calendar-times <div class="opacity-50">f273</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-camera mr-3 fa-2x"></i>
					 				<div>camera <div class="opacity-50">f030</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-camera-retro mr-3 fa-2x"></i>
					 				<div>camera-retro <div class="opacity-50">f083</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-campground mr-3 fa-2x"></i>
					 				<div>campground <div class="opacity-50">f6bb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cannabis mr-3 fa-2x"></i>
					 				<div>cannabis <div class="opacity-50">f55f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-capsules mr-3 fa-2x"></i>
					 				<div>capsules <div class="opacity-50">f46b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-car mr-3 fa-2x"></i>
					 				<div>car <div class="opacity-50">f1b9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-car-alt mr-3 fa-2x"></i>
					 				<div>car-alt <div class="opacity-50">f5de</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-car-battery mr-3 fa-2x"></i>
					 				<div>car-battery <div class="opacity-50">f5df</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-car-crash mr-3 fa-2x"></i>
					 				<div>car-crash <div class="opacity-50">f5e1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-car-side mr-3 fa-2x"></i>
					 				<div>car-side <div class="opacity-50">f5e4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-caret-down mr-3 fa-2x"></i>
					 				<div>caret-down <div class="opacity-50">f0d7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-caret-left mr-3 fa-2x"></i>
					 				<div>caret-left <div class="opacity-50">f0d9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-caret-right mr-3 fa-2x"></i>
					 				<div>caret-right <div class="opacity-50">f0da</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-caret-square-down mr-3 fa-2x"></i>
					 				<div>caret-square-down <div class="opacity-50">f150</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-caret-square-down mr-3 fa-2x"></i>
					 				<div>caret-square-down <div class="opacity-50">f150</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-caret-square-left mr-3 fa-2x"></i>
					 				<div>caret-square-left <div class="opacity-50">f191</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-caret-square-left mr-3 fa-2x"></i>
					 				<div>caret-square-left <div class="opacity-50">f191</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-caret-square-right mr-3 fa-2x"></i>
					 				<div>caret-square-right <div class="opacity-50">f152</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-caret-square-right mr-3 fa-2x"></i>
					 				<div>caret-square-right <div class="opacity-50">f152</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-caret-square-up mr-3 fa-2x"></i>
					 				<div>caret-square-up <div class="opacity-50">f151</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-caret-square-up mr-3 fa-2x"></i>
					 				<div>caret-square-up <div class="opacity-50">f151</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-caret-up mr-3 fa-2x"></i>
					 				<div>caret-up <div class="opacity-50">f0d8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cart-arrow-down mr-3 fa-2x"></i>
					 				<div>cart-arrow-down <div class="opacity-50">f218</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cart-plus mr-3 fa-2x"></i>
					 				<div>cart-plus <div class="opacity-50">f217</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cat mr-3 fa-2x"></i>
					 				<div>cat <div class="opacity-50">f6be</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-cc-amazon-pay mr-3 fa-2x"></i>
					 				<div>cc-amazon-pay <div class="opacity-50">f42d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-cc-amex mr-3 fa-2x"></i>
					 				<div>cc-amex <div class="opacity-50">f1f3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-cc-apple-pay mr-3 fa-2x"></i>
					 				<div>cc-apple-pay <div class="opacity-50">f416</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-cc-diners-club mr-3 fa-2x"></i>
					 				<div>cc-diners-club <div class="opacity-50">f24c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-cc-discover mr-3 fa-2x"></i>
					 				<div>cc-discover <div class="opacity-50">f1f2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-cc-jcb mr-3 fa-2x"></i>
					 				<div>cc-jcb <div class="opacity-50">f24b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-cc-mastercard mr-3 fa-2x"></i>
					 				<div>cc-mastercard <div class="opacity-50">f1f1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-cc-paypal mr-3 fa-2x"></i>
					 				<div>cc-paypal <div class="opacity-50">f1f4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-cc-stripe mr-3 fa-2x"></i>
					 				<div>cc-stripe <div class="opacity-50">f1f5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-cc-visa mr-3 fa-2x"></i>
					 				<div>cc-visa <div class="opacity-50">f1f0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-centercode mr-3 fa-2x"></i>
					 				<div>centercode <div class="opacity-50">f380</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-certificate mr-3 fa-2x"></i>
					 				<div>certificate <div class="opacity-50">f0a3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chair mr-3 fa-2x"></i>
					 				<div>chair <div class="opacity-50">f6c0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chalkboard mr-3 fa-2x"></i>
					 				<div>chalkboard <div class="opacity-50">f51b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chalkboard-teacher mr-3 fa-2x"></i>
					 				<div>chalkboard-teacher <div class="opacity-50">f51c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-charging-station mr-3 fa-2x"></i>
					 				<div>charging-station <div class="opacity-50">f5e7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chart-area mr-3 fa-2x"></i>
					 				<div>chart-area <div class="opacity-50">f1fe</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chart-bar mr-3 fa-2x"></i>
					 				<div>chart-bar <div class="opacity-50">f080</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-chart-bar mr-3 fa-2x"></i>
					 				<div>chart-bar <div class="opacity-50">f080</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chart-line mr-3 fa-2x"></i>
					 				<div>chart-line <div class="opacity-50">f201</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chart-pie mr-3 fa-2x"></i>
					 				<div>chart-pie <div class="opacity-50">f200</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-check mr-3 fa-2x"></i>
					 				<div>check <div class="opacity-50">f00c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-check-circle mr-3 fa-2x"></i>
					 				<div>check-circle <div class="opacity-50">f058</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-check-circle mr-3 fa-2x"></i>
					 				<div>check-circle <div class="opacity-50">f058</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-check-double mr-3 fa-2x"></i>
					 				<div>check-double <div class="opacity-50">f560</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-check-square mr-3 fa-2x"></i>
					 				<div>check-square <div class="opacity-50">f14a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-check-square mr-3 fa-2x"></i>
					 				<div>check-square <div class="opacity-50">f14a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chess mr-3 fa-2x"></i>
					 				<div>chess <div class="opacity-50">f439</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chess-bishop mr-3 fa-2x"></i>
					 				<div>chess-bishop <div class="opacity-50">f43a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chess-board mr-3 fa-2x"></i>
					 				<div>chess-board <div class="opacity-50">f43c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chess-king mr-3 fa-2x"></i>
					 				<div>chess-king <div class="opacity-50">f43f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chess-knight mr-3 fa-2x"></i>
					 				<div>chess-knight <div class="opacity-50">f441</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chess-pawn mr-3 fa-2x"></i>
					 				<div>chess-pawn <div class="opacity-50">f443</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chess-queen mr-3 fa-2x"></i>
					 				<div>chess-queen <div class="opacity-50">f445</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chess-rook mr-3 fa-2x"></i>
					 				<div>chess-rook <div class="opacity-50">f447</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chevron-circle-down mr-3 fa-2x"></i>
					 				<div>chevron-circle-down <div class="opacity-50">f13a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chevron-circle-left mr-3 fa-2x"></i>
					 				<div>chevron-circle-left <div class="opacity-50">f137</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chevron-circle-right mr-3 fa-2x"></i>
					 				<div>chevron-circle-right <div class="opacity-50">f138</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chevron-circle-up mr-3 fa-2x"></i>
					 				<div>chevron-circle-up <div class="opacity-50">f139</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chevron-down mr-3 fa-2x"></i>
					 				<div>chevron-down <div class="opacity-50">f078</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chevron-left mr-3 fa-2x"></i>
					 				<div>chevron-left <div class="opacity-50">f053</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chevron-right mr-3 fa-2x"></i>
					 				<div>chevron-right <div class="opacity-50">f054</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-chevron-up mr-3 fa-2x"></i>
					 				<div>chevron-up <div class="opacity-50">f077</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-child mr-3 fa-2x"></i>
					 				<div>child <div class="opacity-50">f1ae</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-chrome mr-3 fa-2x"></i>
					 				<div>chrome <div class="opacity-50">f268</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-church mr-3 fa-2x"></i>
					 				<div>church <div class="opacity-50">f51d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-circle mr-3 fa-2x"></i>
					 				<div>circle <div class="opacity-50">f111</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-circle mr-3 fa-2x"></i>
					 				<div>circle <div class="opacity-50">f111</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-circle-notch mr-3 fa-2x"></i>
					 				<div>circle-notch <div class="opacity-50">f1ce</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-city mr-3 fa-2x"></i>
					 				<div>city <div class="opacity-50">f64f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-clipboard mr-3 fa-2x"></i>
					 				<div>clipboard <div class="opacity-50">f328</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-clipboard mr-3 fa-2x"></i>
					 				<div>clipboard <div class="opacity-50">f328</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-clipboard-check mr-3 fa-2x"></i>
					 				<div>clipboard-check <div class="opacity-50">f46c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-clipboard-list mr-3 fa-2x"></i>
					 				<div>clipboard-list <div class="opacity-50">f46d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-clock mr-3 fa-2x"></i>
					 				<div>clock <div class="opacity-50">f017</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-clock mr-3 fa-2x"></i>
					 				<div>clock <div class="opacity-50">f017</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-clone mr-3 fa-2x"></i>
					 				<div>clone <div class="opacity-50">f24d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-clone mr-3 fa-2x"></i>
					 				<div>clone <div class="opacity-50">f24d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-closed-captioning mr-3 fa-2x"></i>
					 				<div>closed-captioning <div class="opacity-50">f20a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-closed-captioning mr-3 fa-2x"></i>
					 				<div>closed-captioning <div class="opacity-50">f20a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cloud mr-3 fa-2x"></i>
					 				<div>cloud <div class="opacity-50">f0c2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cloud-download-alt mr-3 fa-2x"></i>
					 				<div>cloud-download-alt <div class="opacity-50">f381</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cloud-meatball mr-3 fa-2x"></i>
					 				<div>cloud-meatball <div class="opacity-50">f73b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cloud-moon mr-3 fa-2x"></i>
					 				<div>cloud-moon <div class="opacity-50">f6c3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cloud-moon-rain mr-3 fa-2x"></i>
					 				<div>cloud-moon-rain <div class="opacity-50">f73c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cloud-rain mr-3 fa-2x"></i>
					 				<div>cloud-rain <div class="opacity-50">f73d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cloud-showers-heavy mr-3 fa-2x"></i>
					 				<div>cloud-showers-heavy <div class="opacity-50">f740</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cloud-sun mr-3 fa-2x"></i>
					 				<div>cloud-sun <div class="opacity-50">f6c4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cloud-sun-rain mr-3 fa-2x"></i>
					 				<div>cloud-sun-rain <div class="opacity-50">f743</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cloud-upload-alt mr-3 fa-2x"></i>
					 				<div>cloud-upload-alt <div class="opacity-50">f382</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-cloudscale mr-3 fa-2x"></i>
					 				<div>cloudscale <div class="opacity-50">f383</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-cloudsmith mr-3 fa-2x"></i>
					 				<div>cloudsmith <div class="opacity-50">f384</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-cloudversify mr-3 fa-2x"></i>
					 				<div>cloudversify <div class="opacity-50">f385</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cocktail mr-3 fa-2x"></i>
					 				<div>cocktail <div class="opacity-50">f561</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-code mr-3 fa-2x"></i>
					 				<div>code <div class="opacity-50">f121</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-code-branch mr-3 fa-2x"></i>
					 				<div>code-branch <div class="opacity-50">f126</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-codepen mr-3 fa-2x"></i>
					 				<div>codepen <div class="opacity-50">f1cb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-codiepie mr-3 fa-2x"></i>
					 				<div>codiepie <div class="opacity-50">f284</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-coffee mr-3 fa-2x"></i>
					 				<div>coffee <div class="opacity-50">f0f4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cog mr-3 fa-2x"></i>
					 				<div>cog <div class="opacity-50">f013</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cogs mr-3 fa-2x"></i>
					 				<div>cogs <div class="opacity-50">f085</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-coins mr-3 fa-2x"></i>
					 				<div>coins <div class="opacity-50">f51e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-columns mr-3 fa-2x"></i>
					 				<div>columns <div class="opacity-50">f0db</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-comment mr-3 fa-2x"></i>
					 				<div>comment <div class="opacity-50">f075</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-comment mr-3 fa-2x"></i>
					 				<div>comment <div class="opacity-50">f075</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-comment-alt mr-3 fa-2x"></i>
					 				<div>comment-alt <div class="opacity-50">f27a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-comment-alt mr-3 fa-2x"></i>
					 				<div>comment-alt <div class="opacity-50">f27a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-comment-dollar mr-3 fa-2x"></i>
					 				<div>comment-dollar <div class="opacity-50">f651</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-comment-dots mr-3 fa-2x"></i>
					 				<div>comment-dots <div class="opacity-50">f4ad</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-comment-dots mr-3 fa-2x"></i>
					 				<div>comment-dots <div class="opacity-50">f4ad</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-comment-slash mr-3 fa-2x"></i>
					 				<div>comment-slash <div class="opacity-50">f4b3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-comments mr-3 fa-2x"></i>
					 				<div>comments <div class="opacity-50">f086</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-comments mr-3 fa-2x"></i>
					 				<div>comments <div class="opacity-50">f086</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-comments-dollar mr-3 fa-2x"></i>
					 				<div>comments-dollar <div class="opacity-50">f653</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-compact-disc mr-3 fa-2x"></i>
					 				<div>compact-disc <div class="opacity-50">f51f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-compass mr-3 fa-2x"></i>
					 				<div>compass <div class="opacity-50">f14e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-compass mr-3 fa-2x"></i>
					 				<div>compass <div class="opacity-50">f14e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-compress mr-3 fa-2x"></i>
					 				<div>compress <div class="opacity-50">f066</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-concierge-bell mr-3 fa-2x"></i>
					 				<div>concierge-bell <div class="opacity-50">f562</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-connectdevelop mr-3 fa-2x"></i>
					 				<div>connectdevelop <div class="opacity-50">f20e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-contao mr-3 fa-2x"></i>
					 				<div>contao <div class="opacity-50">f26d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cookie mr-3 fa-2x"></i>
					 				<div>cookie <div class="opacity-50">f563</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cookie-bite mr-3 fa-2x"></i>
					 				<div>cookie-bite <div class="opacity-50">f564</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-copy mr-3 fa-2x"></i>
					 				<div>copy <div class="opacity-50">f0c5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-copy mr-3 fa-2x"></i>
					 				<div>copy <div class="opacity-50">f0c5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-copyright mr-3 fa-2x"></i>
					 				<div>copyright <div class="opacity-50">f1f9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-copyright mr-3 fa-2x"></i>
					 				<div>copyright <div class="opacity-50">f1f9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-couch mr-3 fa-2x"></i>
					 				<div>couch <div class="opacity-50">f4b8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-cpanel mr-3 fa-2x"></i>
					 				<div>cpanel <div class="opacity-50">f388</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-creative-commons mr-3 fa-2x"></i>
					 				<div>creative-commons <div class="opacity-50">f25e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-creative-commons-by mr-3 fa-2x"></i>
					 				<div>creative-commons-by <div class="opacity-50">f4e7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-creative-commons-nc mr-3 fa-2x"></i>
					 				<div>creative-commons-nc <div class="opacity-50">f4e8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-creative-commons-nc-eu mr-3 fa-2x"></i>
					 				<div>creative-commons-nc-eu <div class="opacity-50">f4e9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-creative-commons-nc-jp mr-3 fa-2x"></i>
					 				<div>creative-commons-nc-jp <div class="opacity-50">f4ea</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-creative-commons-nd mr-3 fa-2x"></i>
					 				<div>creative-commons-nd <div class="opacity-50">f4eb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-creative-commons-pd mr-3 fa-2x"></i>
					 				<div>creative-commons-pd <div class="opacity-50">f4ec</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-creative-commons-pd-alt mr-3 fa-2x"></i>
					 				<div>creative-commons-pd-alt <div class="opacity-50">f4ed</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-creative-commons-remix mr-3 fa-2x"></i>
					 				<div>creative-commons-remix <div class="opacity-50">f4ee</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-creative-commons-sa mr-3 fa-2x"></i>
					 				<div>creative-commons-sa <div class="opacity-50">f4ef</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-creative-commons-sampling mr-3 fa-2x"></i>
					 				<div>creative-commons-sampling <div class="opacity-50">f4f0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-creative-commons-sampling-plus mr-3 fa-2x"></i>
					 				<div>creative-commons-sampling-plus <div class="opacity-50">f4f1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-creative-commons-share mr-3 fa-2x"></i>
					 				<div>creative-commons-share <div class="opacity-50">f4f2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-creative-commons-zero mr-3 fa-2x"></i>
					 				<div>creative-commons-zero <div class="opacity-50">f4f3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-credit-card mr-3 fa-2x"></i>
					 				<div>credit-card <div class="opacity-50">f09d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-credit-card mr-3 fa-2x"></i>
					 				<div>credit-card <div class="opacity-50">f09d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-critical-role mr-3 fa-2x"></i>
					 				<div>critical-role <div class="opacity-50">f6c9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-crop mr-3 fa-2x"></i>
					 				<div>crop <div class="opacity-50">f125</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-crop-alt mr-3 fa-2x"></i>
					 				<div>crop-alt <div class="opacity-50">f565</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cross mr-3 fa-2x"></i>
					 				<div>cross <div class="opacity-50">f654</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-crosshairs mr-3 fa-2x"></i>
					 				<div>crosshairs <div class="opacity-50">f05b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-crow mr-3 fa-2x"></i>
					 				<div>crow <div class="opacity-50">f520</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-crown mr-3 fa-2x"></i>
					 				<div>crown <div class="opacity-50">f521</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-css3 mr-3 fa-2x"></i>
					 				<div>css3 <div class="opacity-50">f13c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-css3-alt mr-3 fa-2x"></i>
					 				<div>css3-alt <div class="opacity-50">f38b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cube mr-3 fa-2x"></i>
					 				<div>cube <div class="opacity-50">f1b2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cubes mr-3 fa-2x"></i>
					 				<div>cubes <div class="opacity-50">f1b3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-cut mr-3 fa-2x"></i>
					 				<div>cut <div class="opacity-50">f0c4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-cuttlefish mr-3 fa-2x"></i>
					 				<div>cuttlefish <div class="opacity-50">f38c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-d-and-d mr-3 fa-2x"></i>
					 				<div>d-and-d <div class="opacity-50">f38d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-d-and-d-beyond mr-3 fa-2x"></i>
					 				<div>d-and-d-beyond <div class="opacity-50">f6ca</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-dashcube mr-3 fa-2x"></i>
					 				<div>dashcube <div class="opacity-50">f210</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-database mr-3 fa-2x"></i>
					 				<div>database <div class="opacity-50">f1c0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-deaf mr-3 fa-2x"></i>
					 				<div>deaf <div class="opacity-50">f2a4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-delicious mr-3 fa-2x"></i>
					 				<div>delicious <div class="opacity-50">f1a5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-democrat mr-3 fa-2x"></i>
					 				<div>democrat <div class="opacity-50">f747</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-deploydog mr-3 fa-2x"></i>
					 				<div>deploydog <div class="opacity-50">f38e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-deskpro mr-3 fa-2x"></i>
					 				<div>deskpro <div class="opacity-50">f38f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-desktop mr-3 fa-2x"></i>
					 				<div>desktop <div class="opacity-50">f108</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-dev mr-3 fa-2x"></i>
					 				<div>dev <div class="opacity-50">f6cc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-deviantart mr-3 fa-2x"></i>
					 				<div>deviantart <div class="opacity-50">f1bd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dharmachakra mr-3 fa-2x"></i>
					 				<div>dharmachakra <div class="opacity-50">f655</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-diagnoses mr-3 fa-2x"></i>
					 				<div>diagnoses <div class="opacity-50">f470</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dice mr-3 fa-2x"></i>
					 				<div>dice <div class="opacity-50">f522</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dice-d20 mr-3 fa-2x"></i>
					 				<div>dice-d20 <div class="opacity-50">f6cf</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dice-d6 mr-3 fa-2x"></i>
					 				<div>dice-d6 <div class="opacity-50">f6d1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dice-five mr-3 fa-2x"></i>
					 				<div>dice-five <div class="opacity-50">f523</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dice-four mr-3 fa-2x"></i>
					 				<div>dice-four <div class="opacity-50">f524</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dice-one mr-3 fa-2x"></i>
					 				<div>dice-one <div class="opacity-50">f525</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dice-six mr-3 fa-2x"></i>
					 				<div>dice-six <div class="opacity-50">f526</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dice-three mr-3 fa-2x"></i>
					 				<div>dice-three <div class="opacity-50">f527</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dice-two mr-3 fa-2x"></i>
					 				<div>dice-two <div class="opacity-50">f528</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-digg mr-3 fa-2x"></i>
					 				<div>digg <div class="opacity-50">f1a6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-digital-ocean mr-3 fa-2x"></i>
					 				<div>digital-ocean <div class="opacity-50">f391</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-digital-tachograph mr-3 fa-2x"></i>
					 				<div>digital-tachograph <div class="opacity-50">f566</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-directions mr-3 fa-2x"></i>
					 				<div>directions <div class="opacity-50">f5eb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-discord mr-3 fa-2x"></i>
					 				<div>discord <div class="opacity-50">f392</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-discourse mr-3 fa-2x"></i>
					 				<div>discourse <div class="opacity-50">f393</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-divide mr-3 fa-2x"></i>
					 				<div>divide <div class="opacity-50">f529</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dizzy mr-3 fa-2x"></i>
					 				<div>dizzy <div class="opacity-50">f567</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-dizzy mr-3 fa-2x"></i>
					 				<div>dizzy <div class="opacity-50">f567</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dna mr-3 fa-2x"></i>
					 				<div>dna <div class="opacity-50">f471</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-dochub mr-3 fa-2x"></i>
					 				<div>dochub <div class="opacity-50">f394</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-docker mr-3 fa-2x"></i>
					 				<div>docker <div class="opacity-50">f395</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dog mr-3 fa-2x"></i>
					 				<div>dog <div class="opacity-50">f6d3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dollar-sign mr-3 fa-2x"></i>
					 				<div>dollar-sign <div class="opacity-50">f155</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dolly mr-3 fa-2x"></i>
					 				<div>dolly <div class="opacity-50">f472</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dolly-flatbed mr-3 fa-2x"></i>
					 				<div>dolly-flatbed <div class="opacity-50">f474</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-donate mr-3 fa-2x"></i>
					 				<div>donate <div class="opacity-50">f4b9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-door-closed mr-3 fa-2x"></i>
					 				<div>door-closed <div class="opacity-50">f52a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-door-open mr-3 fa-2x"></i>
					 				<div>door-open <div class="opacity-50">f52b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dot-circle mr-3 fa-2x"></i>
					 				<div>dot-circle <div class="opacity-50">f192</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-dot-circle mr-3 fa-2x"></i>
					 				<div>dot-circle <div class="opacity-50">f192</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dove mr-3 fa-2x"></i>
					 				<div>dove <div class="opacity-50">f4ba</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-download mr-3 fa-2x"></i>
					 				<div>download <div class="opacity-50">f019</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-draft2digital mr-3 fa-2x"></i>
					 				<div>draft2digital <div class="opacity-50">f396</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-drafting-compass mr-3 fa-2x"></i>
					 				<div>drafting-compass <div class="opacity-50">f568</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dragon mr-3 fa-2x"></i>
					 				<div>dragon <div class="opacity-50">f6d5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-draw-polygon mr-3 fa-2x"></i>
					 				<div>draw-polygon <div class="opacity-50">f5ee</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-dribbble mr-3 fa-2x"></i>
					 				<div>dribbble <div class="opacity-50">f17d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-dribbble-square mr-3 fa-2x"></i>
					 				<div>dribbble-square <div class="opacity-50">f397</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-dropbox mr-3 fa-2x"></i>
					 				<div>dropbox <div class="opacity-50">f16b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-drum mr-3 fa-2x"></i>
					 				<div>drum <div class="opacity-50">f569</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-drum-steelpan mr-3 fa-2x"></i>
					 				<div>drum-steelpan <div class="opacity-50">f56a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-drumstick-bite mr-3 fa-2x"></i>
					 				<div>drumstick-bite <div class="opacity-50">f6d7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-drupal mr-3 fa-2x"></i>
					 				<div>drupal <div class="opacity-50">f1a9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dumbbell mr-3 fa-2x"></i>
					 				<div>dumbbell <div class="opacity-50">f44b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-dungeon mr-3 fa-2x"></i>
					 				<div>dungeon <div class="opacity-50">f6d9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-dyalog mr-3 fa-2x"></i>
					 				<div>dyalog <div class="opacity-50">f399</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-earlybirds mr-3 fa-2x"></i>
					 				<div>earlybirds <div class="opacity-50">f39a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-ebay mr-3 fa-2x"></i>
					 				<div>ebay <div class="opacity-50">f4f4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-edge mr-3 fa-2x"></i>
					 				<div>edge <div class="opacity-50">f282</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-edit mr-3 fa-2x"></i>
					 				<div>edit <div class="opacity-50">f044</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-edit mr-3 fa-2x"></i>
					 				<div>edit <div class="opacity-50">f044</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-eject mr-3 fa-2x"></i>
					 				<div>eject <div class="opacity-50">f052</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-elementor mr-3 fa-2x"></i>
					 				<div>elementor <div class="opacity-50">f430</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-ellipsis-h mr-3 fa-2x"></i>
					 				<div>ellipsis-h <div class="opacity-50">f141</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-ellipsis-v mr-3 fa-2x"></i>
					 				<div>ellipsis-v <div class="opacity-50">f142</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-ello mr-3 fa-2x"></i>
					 				<div>ello <div class="opacity-50">f5f1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-ember mr-3 fa-2x"></i>
					 				<div>ember <div class="opacity-50">f423</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-empire mr-3 fa-2x"></i>
					 				<div>empire <div class="opacity-50">f1d1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-envelope mr-3 fa-2x"></i>
					 				<div>envelope <div class="opacity-50">f0e0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-envelope mr-3 fa-2x"></i>
					 				<div>envelope <div class="opacity-50">f0e0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-envelope-open mr-3 fa-2x"></i>
					 				<div>envelope-open <div class="opacity-50">f2b6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-envelope-open mr-3 fa-2x"></i>
					 				<div>envelope-open <div class="opacity-50">f2b6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-envelope-open-text mr-3 fa-2x"></i>
					 				<div>envelope-open-text <div class="opacity-50">f658</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-envelope-square mr-3 fa-2x"></i>
					 				<div>envelope-square <div class="opacity-50">f199</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-envira mr-3 fa-2x"></i>
					 				<div>envira <div class="opacity-50">f299</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-equals mr-3 fa-2x"></i>
					 				<div>equals <div class="opacity-50">f52c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-eraser mr-3 fa-2x"></i>
					 				<div>eraser <div class="opacity-50">f12d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-erlang mr-3 fa-2x"></i>
					 				<div>erlang <div class="opacity-50">f39d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-ethereum mr-3 fa-2x"></i>
					 				<div>ethereum <div class="opacity-50">f42e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-etsy mr-3 fa-2x"></i>
					 				<div>etsy <div class="opacity-50">f2d7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-euro-sign mr-3 fa-2x"></i>
					 				<div>euro-sign <div class="opacity-50">f153</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-exchange-alt mr-3 fa-2x"></i>
					 				<div>exchange-alt <div class="opacity-50">f362</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-exclamation mr-3 fa-2x"></i>
					 				<div>exclamation <div class="opacity-50">f12a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-exclamation-circle mr-3 fa-2x"></i>
					 				<div>exclamation-circle <div class="opacity-50">f06a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-exclamation-triangle mr-3 fa-2x"></i>
					 				<div>exclamation-triangle <div class="opacity-50">f071</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-expand mr-3 fa-2x"></i>
					 				<div>expand <div class="opacity-50">f065</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-expand-arrows-alt mr-3 fa-2x"></i>
					 				<div>expand-arrows-alt <div class="opacity-50">f31e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-expeditedssl mr-3 fa-2x"></i>
					 				<div>expeditedssl <div class="opacity-50">f23e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-external-link-alt mr-3 fa-2x"></i>
					 				<div>external-link-alt <div class="opacity-50">f35d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-external-link-square-alt mr-3 fa-2x"></i>
					 				<div>external-link-square-alt <div class="opacity-50">f360</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-eye mr-3 fa-2x"></i>
					 				<div>eye <div class="opacity-50">f06e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-eye mr-3 fa-2x"></i>
					 				<div>eye <div class="opacity-50">f06e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-eye-dropper mr-3 fa-2x"></i>
					 				<div>eye-dropper <div class="opacity-50">f1fb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-eye-slash mr-3 fa-2x"></i>
					 				<div>eye-slash <div class="opacity-50">f070</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-eye-slash mr-3 fa-2x"></i>
					 				<div>eye-slash <div class="opacity-50">f070</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-facebook mr-3 fa-2x"></i>
					 				<div>facebook <div class="opacity-50">f09a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-facebook-f mr-3 fa-2x"></i>
					 				<div>facebook-f <div class="opacity-50">f39e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-facebook-messenger mr-3 fa-2x"></i>
					 				<div>facebook-messenger <div class="opacity-50">f39f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-facebook-square mr-3 fa-2x"></i>
					 				<div>facebook-square <div class="opacity-50">f082</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-fantasy-flight-games mr-3 fa-2x"></i>
					 				<div>fantasy-flight-games <div class="opacity-50">f6dc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-fast-backward mr-3 fa-2x"></i>
					 				<div>fast-backward <div class="opacity-50">f049</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-fast-forward mr-3 fa-2x"></i>
					 				<div>fast-forward <div class="opacity-50">f050</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-fax mr-3 fa-2x"></i>
					 				<div>fax <div class="opacity-50">f1ac</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-feather mr-3 fa-2x"></i>
					 				<div>feather <div class="opacity-50">f52d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-feather-alt mr-3 fa-2x"></i>
					 				<div>feather-alt <div class="opacity-50">f56b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-female mr-3 fa-2x"></i>
					 				<div>female <div class="opacity-50">f182</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-fighter-jet mr-3 fa-2x"></i>
					 				<div>fighter-jet <div class="opacity-50">f0fb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file mr-3 fa-2x"></i>
					 				<div>file <div class="opacity-50">f15b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-file mr-3 fa-2x"></i>
					 				<div>file <div class="opacity-50">f15b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-alt mr-3 fa-2x"></i>
					 				<div>file-alt <div class="opacity-50">f15c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-file-alt mr-3 fa-2x"></i>
					 				<div>file-alt <div class="opacity-50">f15c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-archive mr-3 fa-2x"></i>
					 				<div>file-archive <div class="opacity-50">f1c6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-file-archive mr-3 fa-2x"></i>
					 				<div>file-archive <div class="opacity-50">f1c6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-audio mr-3 fa-2x"></i>
					 				<div>file-audio <div class="opacity-50">f1c7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-file-audio mr-3 fa-2x"></i>
					 				<div>file-audio <div class="opacity-50">f1c7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-code mr-3 fa-2x"></i>
					 				<div>file-code <div class="opacity-50">f1c9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-file-code mr-3 fa-2x"></i>
					 				<div>file-code <div class="opacity-50">f1c9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-contract mr-3 fa-2x"></i>
					 				<div>file-contract <div class="opacity-50">f56c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-csv mr-3 fa-2x"></i>
					 				<div>file-csv <div class="opacity-50">f6dd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-download mr-3 fa-2x"></i>
					 				<div>file-download <div class="opacity-50">f56d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-excel mr-3 fa-2x"></i>
					 				<div>file-excel <div class="opacity-50">f1c3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-file-excel mr-3 fa-2x"></i>
					 				<div>file-excel <div class="opacity-50">f1c3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-export mr-3 fa-2x"></i>
					 				<div>file-export <div class="opacity-50">f56e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-image mr-3 fa-2x"></i>
					 				<div>file-image <div class="opacity-50">f1c5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-file-image mr-3 fa-2x"></i>
					 				<div>file-image <div class="opacity-50">f1c5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-import mr-3 fa-2x"></i>
					 				<div>file-import <div class="opacity-50">f56f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-invoice mr-3 fa-2x"></i>
					 				<div>file-invoice <div class="opacity-50">f570</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-invoice-dollar mr-3 fa-2x"></i>
					 				<div>file-invoice-dollar <div class="opacity-50">f571</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-medical mr-3 fa-2x"></i>
					 				<div>file-medical <div class="opacity-50">f477</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-medical-alt mr-3 fa-2x"></i>
					 				<div>file-medical-alt <div class="opacity-50">f478</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-pdf mr-3 fa-2x"></i>
					 				<div>file-pdf <div class="opacity-50">f1c1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-file-pdf mr-3 fa-2x"></i>
					 				<div>file-pdf <div class="opacity-50">f1c1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-powerpoint mr-3 fa-2x"></i>
					 				<div>file-powerpoint <div class="opacity-50">f1c4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-file-powerpoint mr-3 fa-2x"></i>
					 				<div>file-powerpoint <div class="opacity-50">f1c4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-prescription mr-3 fa-2x"></i>
					 				<div>file-prescription <div class="opacity-50">f572</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-signature mr-3 fa-2x"></i>
					 				<div>file-signature <div class="opacity-50">f573</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-upload mr-3 fa-2x"></i>
					 				<div>file-upload <div class="opacity-50">f574</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-video mr-3 fa-2x"></i>
					 				<div>file-video <div class="opacity-50">f1c8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-file-video mr-3 fa-2x"></i>
					 				<div>file-video <div class="opacity-50">f1c8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-file-word mr-3 fa-2x"></i>
					 				<div>file-word <div class="opacity-50">f1c2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-file-word mr-3 fa-2x"></i>
					 				<div>file-word <div class="opacity-50">f1c2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-fill mr-3 fa-2x"></i>
					 				<div>fill <div class="opacity-50">f575</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-fill-drip mr-3 fa-2x"></i>
					 				<div>fill-drip <div class="opacity-50">f576</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-film mr-3 fa-2x"></i>
					 				<div>film <div class="opacity-50">f008</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-filter mr-3 fa-2x"></i>
					 				<div>filter <div class="opacity-50">f0b0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-fingerprint mr-3 fa-2x"></i>
					 				<div>fingerprint <div class="opacity-50">f577</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-fire mr-3 fa-2x"></i>
					 				<div>fire <div class="opacity-50">f06d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-fire-extinguisher mr-3 fa-2x"></i>
					 				<div>fire-extinguisher <div class="opacity-50">f134</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-firefox mr-3 fa-2x"></i>
					 				<div>firefox <div class="opacity-50">f269</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-first-aid mr-3 fa-2x"></i>
					 				<div>first-aid <div class="opacity-50">f479</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-first-order mr-3 fa-2x"></i>
					 				<div>first-order <div class="opacity-50">f2b0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-first-order-alt mr-3 fa-2x"></i>
					 				<div>first-order-alt <div class="opacity-50">f50a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-firstdraft mr-3 fa-2x"></i>
					 				<div>firstdraft <div class="opacity-50">f3a1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-fish mr-3 fa-2x"></i>
					 				<div>fish <div class="opacity-50">f578</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-fist-raised mr-3 fa-2x"></i>
					 				<div>fist-raised <div class="opacity-50">f6de</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-flag mr-3 fa-2x"></i>
					 				<div>flag <div class="opacity-50">f024</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-flag mr-3 fa-2x"></i>
					 				<div>flag <div class="opacity-50">f024</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-flag-checkered mr-3 fa-2x"></i>
					 				<div>flag-checkered <div class="opacity-50">f11e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-flag-usa mr-3 fa-2x"></i>
					 				<div>flag-usa <div class="opacity-50">f74d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-flask mr-3 fa-2x"></i>
					 				<div>flask <div class="opacity-50">f0c3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-flickr mr-3 fa-2x"></i>
					 				<div>flickr <div class="opacity-50">f16e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-flipboard mr-3 fa-2x"></i>
					 				<div>flipboard <div class="opacity-50">f44d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-flushed mr-3 fa-2x"></i>
					 				<div>flushed <div class="opacity-50">f579</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-flushed mr-3 fa-2x"></i>
					 				<div>flushed <div class="opacity-50">f579</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-fly mr-3 fa-2x"></i>
					 				<div>fly <div class="opacity-50">f417</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-folder mr-3 fa-2x"></i>
					 				<div>folder <div class="opacity-50">f07b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-folder mr-3 fa-2x"></i>
					 				<div>folder <div class="opacity-50">f07b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-folder-minus mr-3 fa-2x"></i>
					 				<div>folder-minus <div class="opacity-50">f65d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-folder-open mr-3 fa-2x"></i>
					 				<div>folder-open <div class="opacity-50">f07c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-folder-open mr-3 fa-2x"></i>
					 				<div>folder-open <div class="opacity-50">f07c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-folder-plus mr-3 fa-2x"></i>
					 				<div>folder-plus <div class="opacity-50">f65e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-font mr-3 fa-2x"></i>
					 				<div>font <div class="opacity-50">f031</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-font-awesome mr-3 fa-2x"></i>
					 				<div>font-awesome <div class="opacity-50">f2b4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-font-awesome-alt mr-3 fa-2x"></i>
					 				<div>font-awesome-alt <div class="opacity-50">f35c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-font-awesome-flag mr-3 fa-2x"></i>
					 				<div>font-awesome-flag <div class="opacity-50">f425</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-fonticons mr-3 fa-2x"></i>
					 				<div>fonticons <div class="opacity-50">f280</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-fonticons-fi mr-3 fa-2x"></i>
					 				<div>fonticons-fi <div class="opacity-50">f3a2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-football-ball mr-3 fa-2x"></i>
					 				<div>football-ball <div class="opacity-50">f44e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-fort-awesome mr-3 fa-2x"></i>
					 				<div>fort-awesome <div class="opacity-50">f286</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-fort-awesome-alt mr-3 fa-2x"></i>
					 				<div>fort-awesome-alt <div class="opacity-50">f3a3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-forumbee mr-3 fa-2x"></i>
					 				<div>forumbee <div class="opacity-50">f211</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-forward mr-3 fa-2x"></i>
					 				<div>forward <div class="opacity-50">f04e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-foursquare mr-3 fa-2x"></i>
					 				<div>foursquare <div class="opacity-50">f180</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-free-code-camp mr-3 fa-2x"></i>
					 				<div>free-code-camp <div class="opacity-50">f2c5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-freebsd mr-3 fa-2x"></i>
					 				<div>freebsd <div class="opacity-50">f3a4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-frog mr-3 fa-2x"></i>
					 				<div>frog <div class="opacity-50">f52e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-frown mr-3 fa-2x"></i>
					 				<div>frown <div class="opacity-50">f119</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-frown mr-3 fa-2x"></i>
					 				<div>frown <div class="opacity-50">f119</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-frown-open mr-3 fa-2x"></i>
					 				<div>frown-open <div class="opacity-50">f57a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-frown-open mr-3 fa-2x"></i>
					 				<div>frown-open <div class="opacity-50">f57a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-fulcrum mr-3 fa-2x"></i>
					 				<div>fulcrum <div class="opacity-50">f50b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-funnel-dollar mr-3 fa-2x"></i>
					 				<div>funnel-dollar <div class="opacity-50">f662</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-futbol mr-3 fa-2x"></i>
					 				<div>futbol <div class="opacity-50">f1e3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-futbol mr-3 fa-2x"></i>
					 				<div>futbol <div class="opacity-50">f1e3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-galactic-republic mr-3 fa-2x"></i>
					 				<div>galactic-republic <div class="opacity-50">f50c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-galactic-senate mr-3 fa-2x"></i>
					 				<div>galactic-senate <div class="opacity-50">f50d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-gamepad mr-3 fa-2x"></i>
					 				<div>gamepad <div class="opacity-50">f11b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-gas-pump mr-3 fa-2x"></i>
					 				<div>gas-pump <div class="opacity-50">f52f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-gavel mr-3 fa-2x"></i>
					 				<div>gavel <div class="opacity-50">f0e3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-gem mr-3 fa-2x"></i>
					 				<div>gem <div class="opacity-50">f3a5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-gem mr-3 fa-2x"></i>
					 				<div>gem <div class="opacity-50">f3a5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-genderless mr-3 fa-2x"></i>
					 				<div>genderless <div class="opacity-50">f22d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-get-pocket mr-3 fa-2x"></i>
					 				<div>get-pocket <div class="opacity-50">f265</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-gg mr-3 fa-2x"></i>
					 				<div>gg <div class="opacity-50">f260</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-gg-circle mr-3 fa-2x"></i>
					 				<div>gg-circle <div class="opacity-50">f261</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-ghost mr-3 fa-2x"></i>
					 				<div>ghost <div class="opacity-50">f6e2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-gift mr-3 fa-2x"></i>
					 				<div>gift <div class="opacity-50">f06b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-git mr-3 fa-2x"></i>
					 				<div>git <div class="opacity-50">f1d3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-git-square mr-3 fa-2x"></i>
					 				<div>git-square <div class="opacity-50">f1d2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-github mr-3 fa-2x"></i>
					 				<div>github <div class="opacity-50">f09b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-github-alt mr-3 fa-2x"></i>
					 				<div>github-alt <div class="opacity-50">f113</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-github-square mr-3 fa-2x"></i>
					 				<div>github-square <div class="opacity-50">f092</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-gitkraken mr-3 fa-2x"></i>
					 				<div>gitkraken <div class="opacity-50">f3a6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-gitlab mr-3 fa-2x"></i>
					 				<div>gitlab <div class="opacity-50">f296</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-gitter mr-3 fa-2x"></i>
					 				<div>gitter <div class="opacity-50">f426</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-glass-martini mr-3 fa-2x"></i>
					 				<div>glass-martini <div class="opacity-50">f000</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-glass-martini-alt mr-3 fa-2x"></i>
					 				<div>glass-martini-alt <div class="opacity-50">f57b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-glasses mr-3 fa-2x"></i>
					 				<div>glasses <div class="opacity-50">f530</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-glide mr-3 fa-2x"></i>
					 				<div>glide <div class="opacity-50">f2a5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-glide-g mr-3 fa-2x"></i>
					 				<div>glide-g <div class="opacity-50">f2a6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-globe mr-3 fa-2x"></i>
					 				<div>globe <div class="opacity-50">f0ac</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-globe-africa mr-3 fa-2x"></i>
					 				<div>globe-africa <div class="opacity-50">f57c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-globe-americas mr-3 fa-2x"></i>
					 				<div>globe-americas <div class="opacity-50">f57d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-globe-asia mr-3 fa-2x"></i>
					 				<div>globe-asia <div class="opacity-50">f57e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-gofore mr-3 fa-2x"></i>
					 				<div>gofore <div class="opacity-50">f3a7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-golf-ball mr-3 fa-2x"></i>
					 				<div>golf-ball <div class="opacity-50">f450</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-goodreads mr-3 fa-2x"></i>
					 				<div>goodreads <div class="opacity-50">f3a8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-goodreads-g mr-3 fa-2x"></i>
					 				<div>goodreads-g <div class="opacity-50">f3a9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-google mr-3 fa-2x"></i>
					 				<div>google <div class="opacity-50">f1a0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-google-drive mr-3 fa-2x"></i>
					 				<div>google-drive <div class="opacity-50">f3aa</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-google-play mr-3 fa-2x"></i>
					 				<div>google-play <div class="opacity-50">f3ab</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-google-plus mr-3 fa-2x"></i>
					 				<div>google-plus <div class="opacity-50">f2b3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-google-plus-g mr-3 fa-2x"></i>
					 				<div>google-plus-g <div class="opacity-50">f0d5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-google-plus-square mr-3 fa-2x"></i>
					 				<div>google-plus-square <div class="opacity-50">f0d4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-google-wallet mr-3 fa-2x"></i>
					 				<div>google-wallet <div class="opacity-50">f1ee</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-gopuram mr-3 fa-2x"></i>
					 				<div>gopuram <div class="opacity-50">f664</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-graduation-cap mr-3 fa-2x"></i>
					 				<div>graduation-cap <div class="opacity-50">f19d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-gratipay mr-3 fa-2x"></i>
					 				<div>gratipay <div class="opacity-50">f184</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-grav mr-3 fa-2x"></i>
					 				<div>grav <div class="opacity-50">f2d6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-greater-than mr-3 fa-2x"></i>
					 				<div>greater-than <div class="opacity-50">f531</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-greater-than-equal mr-3 fa-2x"></i>
					 				<div>greater-than-equal <div class="opacity-50">f532</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-grimace mr-3 fa-2x"></i>
					 				<div>grimace <div class="opacity-50">f57f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-grimace mr-3 fa-2x"></i>
					 				<div>grimace <div class="opacity-50">f57f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-grin mr-3 fa-2x"></i>
					 				<div>grin <div class="opacity-50">f580</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-grin mr-3 fa-2x"></i>
					 				<div>grin <div class="opacity-50">f580</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-grin-alt mr-3 fa-2x"></i>
					 				<div>grin-alt <div class="opacity-50">f581</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-grin-alt mr-3 fa-2x"></i>
					 				<div>grin-alt <div class="opacity-50">f581</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-grin-beam mr-3 fa-2x"></i>
					 				<div>grin-beam <div class="opacity-50">f582</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-grin-beam mr-3 fa-2x"></i>
					 				<div>grin-beam <div class="opacity-50">f582</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-grin-beam-sweat mr-3 fa-2x"></i>
					 				<div>grin-beam-sweat <div class="opacity-50">f583</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-grin-beam-sweat mr-3 fa-2x"></i>
					 				<div>grin-beam-sweat <div class="opacity-50">f583</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-grin-hearts mr-3 fa-2x"></i>
					 				<div>grin-hearts <div class="opacity-50">f584</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-grin-hearts mr-3 fa-2x"></i>
					 				<div>grin-hearts <div class="opacity-50">f584</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-grin-squint mr-3 fa-2x"></i>
					 				<div>grin-squint <div class="opacity-50">f585</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-grin-squint mr-3 fa-2x"></i>
					 				<div>grin-squint <div class="opacity-50">f585</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-grin-squint-tears mr-3 fa-2x"></i>
					 				<div>grin-squint-tears <div class="opacity-50">f586</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-grin-squint-tears mr-3 fa-2x"></i>
					 				<div>grin-squint-tears <div class="opacity-50">f586</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-grin-stars mr-3 fa-2x"></i>
					 				<div>grin-stars <div class="opacity-50">f587</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-grin-stars mr-3 fa-2x"></i>
					 				<div>grin-stars <div class="opacity-50">f587</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-grin-tears mr-3 fa-2x"></i>
					 				<div>grin-tears <div class="opacity-50">f588</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-grin-tears mr-3 fa-2x"></i>
					 				<div>grin-tears <div class="opacity-50">f588</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-grin-tongue mr-3 fa-2x"></i>
					 				<div>grin-tongue <div class="opacity-50">f589</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-grin-tongue mr-3 fa-2x"></i>
					 				<div>grin-tongue <div class="opacity-50">f589</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-grin-tongue-squint mr-3 fa-2x"></i>
					 				<div>grin-tongue-squint <div class="opacity-50">f58a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-grin-tongue-squint mr-3 fa-2x"></i>
					 				<div>grin-tongue-squint <div class="opacity-50">f58a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-grin-tongue-wink mr-3 fa-2x"></i>
					 				<div>grin-tongue-wink <div class="opacity-50">f58b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-grin-tongue-wink mr-3 fa-2x"></i>
					 				<div>grin-tongue-wink <div class="opacity-50">f58b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-grin-wink mr-3 fa-2x"></i>
					 				<div>grin-wink <div class="opacity-50">f58c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-grin-wink mr-3 fa-2x"></i>
					 				<div>grin-wink <div class="opacity-50">f58c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-grip-horizontal mr-3 fa-2x"></i>
					 				<div>grip-horizontal <div class="opacity-50">f58d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-grip-vertical mr-3 fa-2x"></i>
					 				<div>grip-vertical <div class="opacity-50">f58e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-gripfire mr-3 fa-2x"></i>
					 				<div>gripfire <div class="opacity-50">f3ac</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-grunt mr-3 fa-2x"></i>
					 				<div>grunt <div class="opacity-50">f3ad</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-gulp mr-3 fa-2x"></i>
					 				<div>gulp <div class="opacity-50">f3ae</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-h-square mr-3 fa-2x"></i>
					 				<div>h-square <div class="opacity-50">f0fd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-hacker-news mr-3 fa-2x"></i>
					 				<div>hacker-news <div class="opacity-50">f1d4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-hacker-news-square mr-3 fa-2x"></i>
					 				<div>hacker-news-square <div class="opacity-50">f3af</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-hackerrank mr-3 fa-2x"></i>
					 				<div>hackerrank <div class="opacity-50">f5f7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hammer mr-3 fa-2x"></i>
					 				<div>hammer <div class="opacity-50">f6e3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hamsa mr-3 fa-2x"></i>
					 				<div>hamsa <div class="opacity-50">f665</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hand-holding mr-3 fa-2x"></i>
					 				<div>hand-holding <div class="opacity-50">f4bd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hand-holding-heart mr-3 fa-2x"></i>
					 				<div>hand-holding-heart <div class="opacity-50">f4be</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hand-holding-usd mr-3 fa-2x"></i>
					 				<div>hand-holding-usd <div class="opacity-50">f4c0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hand-lizard mr-3 fa-2x"></i>
					 				<div>hand-lizard <div class="opacity-50">f258</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-hand-lizard mr-3 fa-2x"></i>
					 				<div>hand-lizard <div class="opacity-50">f258</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hand-paper mr-3 fa-2x"></i>
					 				<div>hand-paper <div class="opacity-50">f256</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-hand-paper mr-3 fa-2x"></i>
					 				<div>hand-paper <div class="opacity-50">f256</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hand-peace mr-3 fa-2x"></i>
					 				<div>hand-peace <div class="opacity-50">f25b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-hand-peace mr-3 fa-2x"></i>
					 				<div>hand-peace <div class="opacity-50">f25b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hand-point-down mr-3 fa-2x"></i>
					 				<div>hand-point-down <div class="opacity-50">f0a7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-hand-point-down mr-3 fa-2x"></i>
					 				<div>hand-point-down <div class="opacity-50">f0a7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hand-point-left mr-3 fa-2x"></i>
					 				<div>hand-point-left <div class="opacity-50">f0a5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-hand-point-left mr-3 fa-2x"></i>
					 				<div>hand-point-left <div class="opacity-50">f0a5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hand-point-right mr-3 fa-2x"></i>
					 				<div>hand-point-right <div class="opacity-50">f0a4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-hand-point-right mr-3 fa-2x"></i>
					 				<div>hand-point-right <div class="opacity-50">f0a4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hand-point-up mr-3 fa-2x"></i>
					 				<div>hand-point-up <div class="opacity-50">f0a6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-hand-point-up mr-3 fa-2x"></i>
					 				<div>hand-point-up <div class="opacity-50">f0a6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hand-pointer mr-3 fa-2x"></i>
					 				<div>hand-pointer <div class="opacity-50">f25a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-hand-pointer mr-3 fa-2x"></i>
					 				<div>hand-pointer <div class="opacity-50">f25a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hand-rock mr-3 fa-2x"></i>
					 				<div>hand-rock <div class="opacity-50">f255</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-hand-rock mr-3 fa-2x"></i>
					 				<div>hand-rock <div class="opacity-50">f255</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hand-scissors mr-3 fa-2x"></i>
					 				<div>hand-scissors <div class="opacity-50">f257</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-hand-scissors mr-3 fa-2x"></i>
					 				<div>hand-scissors <div class="opacity-50">f257</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hand-spock mr-3 fa-2x"></i>
					 				<div>hand-spock <div class="opacity-50">f259</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-hand-spock mr-3 fa-2x"></i>
					 				<div>hand-spock <div class="opacity-50">f259</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hands mr-3 fa-2x"></i>
					 				<div>hands <div class="opacity-50">f4c2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hands-helping mr-3 fa-2x"></i>
					 				<div>hands-helping <div class="opacity-50">f4c4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-handshake mr-3 fa-2x"></i>
					 				<div>handshake <div class="opacity-50">f2b5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-handshake mr-3 fa-2x"></i>
					 				<div>handshake <div class="opacity-50">f2b5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hanukiah mr-3 fa-2x"></i>
					 				<div>hanukiah <div class="opacity-50">f6e6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hashtag mr-3 fa-2x"></i>
					 				<div>hashtag <div class="opacity-50">f292</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hat-wizard mr-3 fa-2x"></i>
					 				<div>hat-wizard <div class="opacity-50">f6e8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-haykal mr-3 fa-2x"></i>
					 				<div>haykal <div class="opacity-50">f666</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hdd mr-3 fa-2x"></i>
					 				<div>hdd <div class="opacity-50">f0a0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-hdd mr-3 fa-2x"></i>
					 				<div>hdd <div class="opacity-50">f0a0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-heading mr-3 fa-2x"></i>
					 				<div>heading <div class="opacity-50">f1dc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-headphones mr-3 fa-2x"></i>
					 				<div>headphones <div class="opacity-50">f025</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-headphones-alt mr-3 fa-2x"></i>
					 				<div>headphones-alt <div class="opacity-50">f58f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-headset mr-3 fa-2x"></i>
					 				<div>headset <div class="opacity-50">f590</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-heart mr-3 fa-2x"></i>
					 				<div>heart <div class="opacity-50">f004</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-heart mr-3 fa-2x"></i>
					 				<div>heart <div class="opacity-50">f004</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-heartbeat mr-3 fa-2x"></i>
					 				<div>heartbeat <div class="opacity-50">f21e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-helicopter mr-3 fa-2x"></i>
					 				<div>helicopter <div class="opacity-50">f533</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-highlighter mr-3 fa-2x"></i>
					 				<div>highlighter <div class="opacity-50">f591</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hiking mr-3 fa-2x"></i>
					 				<div>hiking <div class="opacity-50">f6ec</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hippo mr-3 fa-2x"></i>
					 				<div>hippo <div class="opacity-50">f6ed</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-hips mr-3 fa-2x"></i>
					 				<div>hips <div class="opacity-50">f452</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-hire-a-helper mr-3 fa-2x"></i>
					 				<div>hire-a-helper <div class="opacity-50">f3b0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-history mr-3 fa-2x"></i>
					 				<div>history <div class="opacity-50">f1da</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hockey-puck mr-3 fa-2x"></i>
					 				<div>hockey-puck <div class="opacity-50">f453</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-home mr-3 fa-2x"></i>
					 				<div>home <div class="opacity-50">f015</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-hooli mr-3 fa-2x"></i>
					 				<div>hooli <div class="opacity-50">f427</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-hornbill mr-3 fa-2x"></i>
					 				<div>hornbill <div class="opacity-50">f592</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-horse mr-3 fa-2x"></i>
					 				<div>horse <div class="opacity-50">f6f0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hospital mr-3 fa-2x"></i>
					 				<div>hospital <div class="opacity-50">f0f8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-hospital mr-3 fa-2x"></i>
					 				<div>hospital <div class="opacity-50">f0f8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hospital-alt mr-3 fa-2x"></i>
					 				<div>hospital-alt <div class="opacity-50">f47d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hospital-symbol mr-3 fa-2x"></i>
					 				<div>hospital-symbol <div class="opacity-50">f47e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hot-tub mr-3 fa-2x"></i>
					 				<div>hot-tub <div class="opacity-50">f593</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hotel mr-3 fa-2x"></i>
					 				<div>hotel <div class="opacity-50">f594</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-hotjar mr-3 fa-2x"></i>
					 				<div>hotjar <div class="opacity-50">f3b1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hourglass mr-3 fa-2x"></i>
					 				<div>hourglass <div class="opacity-50">f254</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-hourglass mr-3 fa-2x"></i>
					 				<div>hourglass <div class="opacity-50">f254</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hourglass-end mr-3 fa-2x"></i>
					 				<div>hourglass-end <div class="opacity-50">f253</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hourglass-half mr-3 fa-2x"></i>
					 				<div>hourglass-half <div class="opacity-50">f252</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hourglass-start mr-3 fa-2x"></i>
					 				<div>hourglass-start <div class="opacity-50">f251</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-house-damage mr-3 fa-2x"></i>
					 				<div>house-damage <div class="opacity-50">f6f1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-houzz mr-3 fa-2x"></i>
					 				<div>houzz <div class="opacity-50">f27c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-hryvnia mr-3 fa-2x"></i>
					 				<div>hryvnia <div class="opacity-50">f6f2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-html5 mr-3 fa-2x"></i>
					 				<div>html5 <div class="opacity-50">f13b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-hubspot mr-3 fa-2x"></i>
					 				<div>hubspot <div class="opacity-50">f3b2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-i-cursor mr-3 fa-2x"></i>
					 				<div>i-cursor <div class="opacity-50">f246</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-id-badge mr-3 fa-2x"></i>
					 				<div>id-badge <div class="opacity-50">f2c1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-id-badge mr-3 fa-2x"></i>
					 				<div>id-badge <div class="opacity-50">f2c1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-id-card mr-3 fa-2x"></i>
					 				<div>id-card <div class="opacity-50">f2c2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-id-card mr-3 fa-2x"></i>
					 				<div>id-card <div class="opacity-50">f2c2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-id-card-alt mr-3 fa-2x"></i>
					 				<div>id-card-alt <div class="opacity-50">f47f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-image mr-3 fa-2x"></i>
					 				<div>image <div class="opacity-50">f03e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-image mr-3 fa-2x"></i>
					 				<div>image <div class="opacity-50">f03e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-images mr-3 fa-2x"></i>
					 				<div>images <div class="opacity-50">f302</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-images mr-3 fa-2x"></i>
					 				<div>images <div class="opacity-50">f302</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-imdb mr-3 fa-2x"></i>
					 				<div>imdb <div class="opacity-50">f2d8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-inbox mr-3 fa-2x"></i>
					 				<div>inbox <div class="opacity-50">f01c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-indent mr-3 fa-2x"></i>
					 				<div>indent <div class="opacity-50">f03c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-industry mr-3 fa-2x"></i>
					 				<div>industry <div class="opacity-50">f275</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-infinity mr-3 fa-2x"></i>
					 				<div>infinity <div class="opacity-50">f534</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-info mr-3 fa-2x"></i>
					 				<div>info <div class="opacity-50">f129</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-info-circle mr-3 fa-2x"></i>
					 				<div>info-circle <div class="opacity-50">f05a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-instagram mr-3 fa-2x"></i>
					 				<div>instagram <div class="opacity-50">f16d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-internet-explorer mr-3 fa-2x"></i>
					 				<div>internet-explorer <div class="opacity-50">f26b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-ioxhost mr-3 fa-2x"></i>
					 				<div>ioxhost <div class="opacity-50">f208</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-italic mr-3 fa-2x"></i>
					 				<div>italic <div class="opacity-50">f033</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-itunes mr-3 fa-2x"></i>
					 				<div>itunes <div class="opacity-50">f3b4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-itunes-note mr-3 fa-2x"></i>
					 				<div>itunes-note <div class="opacity-50">f3b5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-java mr-3 fa-2x"></i>
					 				<div>java <div class="opacity-50">f4e4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-jedi mr-3 fa-2x"></i>
					 				<div>jedi <div class="opacity-50">f669</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-jedi-order mr-3 fa-2x"></i>
					 				<div>jedi-order <div class="opacity-50">f50e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-jenkins mr-3 fa-2x"></i>
					 				<div>jenkins <div class="opacity-50">f3b6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-joget mr-3 fa-2x"></i>
					 				<div>joget <div class="opacity-50">f3b7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-joint mr-3 fa-2x"></i>
					 				<div>joint <div class="opacity-50">f595</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-joomla mr-3 fa-2x"></i>
					 				<div>joomla <div class="opacity-50">f1aa</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-journal-whills mr-3 fa-2x"></i>
					 				<div>journal-whills <div class="opacity-50">f66a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-js mr-3 fa-2x"></i>
					 				<div>js <div class="opacity-50">f3b8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-js-square mr-3 fa-2x"></i>
					 				<div>js-square <div class="opacity-50">f3b9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-jsfiddle mr-3 fa-2x"></i>
					 				<div>jsfiddle <div class="opacity-50">f1cc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-kaaba mr-3 fa-2x"></i>
					 				<div>kaaba <div class="opacity-50">f66b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-kaggle mr-3 fa-2x"></i>
					 				<div>kaggle <div class="opacity-50">f5fa</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-key mr-3 fa-2x"></i>
					 				<div>key <div class="opacity-50">f084</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-keybase mr-3 fa-2x"></i>
					 				<div>keybase <div class="opacity-50">f4f5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-keyboard mr-3 fa-2x"></i>
					 				<div>keyboard <div class="opacity-50">f11c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-keyboard mr-3 fa-2x"></i>
					 				<div>keyboard <div class="opacity-50">f11c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-keycdn mr-3 fa-2x"></i>
					 				<div>keycdn <div class="opacity-50">f3ba</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-khanda mr-3 fa-2x"></i>
					 				<div>khanda <div class="opacity-50">f66d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-kickstarter mr-3 fa-2x"></i>
					 				<div>kickstarter <div class="opacity-50">f3bb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-kickstarter-k mr-3 fa-2x"></i>
					 				<div>kickstarter-k <div class="opacity-50">f3bc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-kiss mr-3 fa-2x"></i>
					 				<div>kiss <div class="opacity-50">f596</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-kiss mr-3 fa-2x"></i>
					 				<div>kiss <div class="opacity-50">f596</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-kiss-beam mr-3 fa-2x"></i>
					 				<div>kiss-beam <div class="opacity-50">f597</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-kiss-beam mr-3 fa-2x"></i>
					 				<div>kiss-beam <div class="opacity-50">f597</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-kiss-wink-heart mr-3 fa-2x"></i>
					 				<div>kiss-wink-heart <div class="opacity-50">f598</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-kiss-wink-heart mr-3 fa-2x"></i>
					 				<div>kiss-wink-heart <div class="opacity-50">f598</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-kiwi-bird mr-3 fa-2x"></i>
					 				<div>kiwi-bird <div class="opacity-50">f535</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-korvue mr-3 fa-2x"></i>
					 				<div>korvue <div class="opacity-50">f42f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-landmark mr-3 fa-2x"></i>
					 				<div>landmark <div class="opacity-50">f66f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-language mr-3 fa-2x"></i>
					 				<div>language <div class="opacity-50">f1ab</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-laptop mr-3 fa-2x"></i>
					 				<div>laptop <div class="opacity-50">f109</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-laptop-code mr-3 fa-2x"></i>
					 				<div>laptop-code <div class="opacity-50">f5fc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-laravel mr-3 fa-2x"></i>
					 				<div>laravel <div class="opacity-50">f3bd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-lastfm mr-3 fa-2x"></i>
					 				<div>lastfm <div class="opacity-50">f202</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-lastfm-square mr-3 fa-2x"></i>
					 				<div>lastfm-square <div class="opacity-50">f203</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-laugh mr-3 fa-2x"></i>
					 				<div>laugh <div class="opacity-50">f599</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-laugh mr-3 fa-2x"></i>
					 				<div>laugh <div class="opacity-50">f599</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-laugh-beam mr-3 fa-2x"></i>
					 				<div>laugh-beam <div class="opacity-50">f59a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-laugh-beam mr-3 fa-2x"></i>
					 				<div>laugh-beam <div class="opacity-50">f59a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-laugh-squint mr-3 fa-2x"></i>
					 				<div>laugh-squint <div class="opacity-50">f59b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-laugh-squint mr-3 fa-2x"></i>
					 				<div>laugh-squint <div class="opacity-50">f59b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-laugh-wink mr-3 fa-2x"></i>
					 				<div>laugh-wink <div class="opacity-50">f59c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-laugh-wink mr-3 fa-2x"></i>
					 				<div>laugh-wink <div class="opacity-50">f59c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-layer-group mr-3 fa-2x"></i>
					 				<div>layer-group <div class="opacity-50">f5fd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-leaf mr-3 fa-2x"></i>
					 				<div>leaf <div class="opacity-50">f06c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-leanpub mr-3 fa-2x"></i>
					 				<div>leanpub <div class="opacity-50">f212</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-lemon mr-3 fa-2x"></i>
					 				<div>lemon <div class="opacity-50">f094</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-lemon mr-3 fa-2x"></i>
					 				<div>lemon <div class="opacity-50">f094</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-less mr-3 fa-2x"></i>
					 				<div>less <div class="opacity-50">f41d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-less-than mr-3 fa-2x"></i>
					 				<div>less-than <div class="opacity-50">f536</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-less-than-equal mr-3 fa-2x"></i>
					 				<div>less-than-equal <div class="opacity-50">f537</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-level-down-alt mr-3 fa-2x"></i>
					 				<div>level-down-alt <div class="opacity-50">f3be</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-level-up-alt mr-3 fa-2x"></i>
					 				<div>level-up-alt <div class="opacity-50">f3bf</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-life-ring mr-3 fa-2x"></i>
					 				<div>life-ring <div class="opacity-50">f1cd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-life-ring mr-3 fa-2x"></i>
					 				<div>life-ring <div class="opacity-50">f1cd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-lightbulb mr-3 fa-2x"></i>
					 				<div>lightbulb <div class="opacity-50">f0eb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-lightbulb mr-3 fa-2x"></i>
					 				<div>lightbulb <div class="opacity-50">f0eb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-line mr-3 fa-2x"></i>
					 				<div>line <div class="opacity-50">f3c0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-link mr-3 fa-2x"></i>
					 				<div>link <div class="opacity-50">f0c1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-linkedin mr-3 fa-2x"></i>
					 				<div>linkedin <div class="opacity-50">f08c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-linkedin-in mr-3 fa-2x"></i>
					 				<div>linkedin-in <div class="opacity-50">f0e1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-linode mr-3 fa-2x"></i>
					 				<div>linode <div class="opacity-50">f2b8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-linux mr-3 fa-2x"></i>
					 				<div>linux <div class="opacity-50">f17c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-lira-sign mr-3 fa-2x"></i>
					 				<div>lira-sign <div class="opacity-50">f195</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-list mr-3 fa-2x"></i>
					 				<div>list <div class="opacity-50">f03a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-list-alt mr-3 fa-2x"></i>
					 				<div>list-alt <div class="opacity-50">f022</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-list-alt mr-3 fa-2x"></i>
					 				<div>list-alt <div class="opacity-50">f022</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-list-ol mr-3 fa-2x"></i>
					 				<div>list-ol <div class="opacity-50">f0cb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-list-ul mr-3 fa-2x"></i>
					 				<div>list-ul <div class="opacity-50">f0ca</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-location-arrow mr-3 fa-2x"></i>
					 				<div>location-arrow <div class="opacity-50">f124</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-lock mr-3 fa-2x"></i>
					 				<div>lock <div class="opacity-50">f023</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-lock-open mr-3 fa-2x"></i>
					 				<div>lock-open <div class="opacity-50">f3c1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-long-arrow-alt-down mr-3 fa-2x"></i>
					 				<div>long-arrow-alt-down <div class="opacity-50">f309</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-long-arrow-alt-left mr-3 fa-2x"></i>
					 				<div>long-arrow-alt-left <div class="opacity-50">f30a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-long-arrow-alt-right mr-3 fa-2x"></i>
					 				<div>long-arrow-alt-right <div class="opacity-50">f30b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-long-arrow-alt-up mr-3 fa-2x"></i>
					 				<div>long-arrow-alt-up <div class="opacity-50">f30c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-low-vision mr-3 fa-2x"></i>
					 				<div>low-vision <div class="opacity-50">f2a8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-luggage-cart mr-3 fa-2x"></i>
					 				<div>luggage-cart <div class="opacity-50">f59d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-lyft mr-3 fa-2x"></i>
					 				<div>lyft <div class="opacity-50">f3c3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-magento mr-3 fa-2x"></i>
					 				<div>magento <div class="opacity-50">f3c4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-magic mr-3 fa-2x"></i>
					 				<div>magic <div class="opacity-50">f0d0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-magnet mr-3 fa-2x"></i>
					 				<div>magnet <div class="opacity-50">f076</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-mail-bulk mr-3 fa-2x"></i>
					 				<div>mail-bulk <div class="opacity-50">f674</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-mailchimp mr-3 fa-2x"></i>
					 				<div>mailchimp <div class="opacity-50">f59e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-male mr-3 fa-2x"></i>
					 				<div>male <div class="opacity-50">f183</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-mandalorian mr-3 fa-2x"></i>
					 				<div>mandalorian <div class="opacity-50">f50f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-map mr-3 fa-2x"></i>
					 				<div>map <div class="opacity-50">f279</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-map mr-3 fa-2x"></i>
					 				<div>map <div class="opacity-50">f279</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-map-marked mr-3 fa-2x"></i>
					 				<div>map-marked <div class="opacity-50">f59f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-map-marked-alt mr-3 fa-2x"></i>
					 				<div>map-marked-alt <div class="opacity-50">f5a0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-map-marker mr-3 fa-2x"></i>
					 				<div>map-marker <div class="opacity-50">f041</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-map-marker-alt mr-3 fa-2x"></i>
					 				<div>map-marker-alt <div class="opacity-50">f3c5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-map-pin mr-3 fa-2x"></i>
					 				<div>map-pin <div class="opacity-50">f276</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-map-signs mr-3 fa-2x"></i>
					 				<div>map-signs <div class="opacity-50">f277</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-markdown mr-3 fa-2x"></i>
					 				<div>markdown <div class="opacity-50">f60f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-marker mr-3 fa-2x"></i>
					 				<div>marker <div class="opacity-50">f5a1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-mars mr-3 fa-2x"></i>
					 				<div>mars <div class="opacity-50">f222</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-mars-double mr-3 fa-2x"></i>
					 				<div>mars-double <div class="opacity-50">f227</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-mars-stroke mr-3 fa-2x"></i>
					 				<div>mars-stroke <div class="opacity-50">f229</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-mars-stroke-h mr-3 fa-2x"></i>
					 				<div>mars-stroke-h <div class="opacity-50">f22b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-mars-stroke-v mr-3 fa-2x"></i>
					 				<div>mars-stroke-v <div class="opacity-50">f22a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-mask mr-3 fa-2x"></i>
					 				<div>mask <div class="opacity-50">f6fa</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-mastodon mr-3 fa-2x"></i>
					 				<div>mastodon <div class="opacity-50">f4f6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-maxcdn mr-3 fa-2x"></i>
					 				<div>maxcdn <div class="opacity-50">f136</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-medal mr-3 fa-2x"></i>
					 				<div>medal <div class="opacity-50">f5a2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-medapps mr-3 fa-2x"></i>
					 				<div>medapps <div class="opacity-50">f3c6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-medium mr-3 fa-2x"></i>
					 				<div>medium <div class="opacity-50">f23a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-medium-m mr-3 fa-2x"></i>
					 				<div>medium-m <div class="opacity-50">f3c7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-medkit mr-3 fa-2x"></i>
					 				<div>medkit <div class="opacity-50">f0fa</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-medrt mr-3 fa-2x"></i>
					 				<div>medrt <div class="opacity-50">f3c8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-meetup mr-3 fa-2x"></i>
					 				<div>meetup <div class="opacity-50">f2e0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-megaport mr-3 fa-2x"></i>
					 				<div>megaport <div class="opacity-50">f5a3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-meh mr-3 fa-2x"></i>
					 				<div>meh <div class="opacity-50">f11a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-meh mr-3 fa-2x"></i>
					 				<div>meh <div class="opacity-50">f11a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-meh-blank mr-3 fa-2x"></i>
					 				<div>meh-blank <div class="opacity-50">f5a4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-meh-blank mr-3 fa-2x"></i>
					 				<div>meh-blank <div class="opacity-50">f5a4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-meh-rolling-eyes mr-3 fa-2x"></i>
					 				<div>meh-rolling-eyes <div class="opacity-50">f5a5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-meh-rolling-eyes mr-3 fa-2x"></i>
					 				<div>meh-rolling-eyes <div class="opacity-50">f5a5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-memory mr-3 fa-2x"></i>
					 				<div>memory <div class="opacity-50">f538</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-menorah mr-3 fa-2x"></i>
					 				<div>menorah <div class="opacity-50">f676</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-mercury mr-3 fa-2x"></i>
					 				<div>mercury <div class="opacity-50">f223</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-meteor mr-3 fa-2x"></i>
					 				<div>meteor <div class="opacity-50">f753</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-microchip mr-3 fa-2x"></i>
					 				<div>microchip <div class="opacity-50">f2db</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-microphone mr-3 fa-2x"></i>
					 				<div>microphone <div class="opacity-50">f130</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-microphone-alt mr-3 fa-2x"></i>
					 				<div>microphone-alt <div class="opacity-50">f3c9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-microphone-alt-slash mr-3 fa-2x"></i>
					 				<div>microphone-alt-slash <div class="opacity-50">f539</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-microphone-slash mr-3 fa-2x"></i>
					 				<div>microphone-slash <div class="opacity-50">f131</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-microscope mr-3 fa-2x"></i>
					 				<div>microscope <div class="opacity-50">f610</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-microsoft mr-3 fa-2x"></i>
					 				<div>microsoft <div class="opacity-50">f3ca</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-minus mr-3 fa-2x"></i>
					 				<div>minus <div class="opacity-50">f068</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-minus-circle mr-3 fa-2x"></i>
					 				<div>minus-circle <div class="opacity-50">f056</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-minus-square mr-3 fa-2x"></i>
					 				<div>minus-square <div class="opacity-50">f146</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-minus-square mr-3 fa-2x"></i>
					 				<div>minus-square <div class="opacity-50">f146</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-mix mr-3 fa-2x"></i>
					 				<div>mix <div class="opacity-50">f3cb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-mixcloud mr-3 fa-2x"></i>
					 				<div>mixcloud <div class="opacity-50">f289</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-mizuni mr-3 fa-2x"></i>
					 				<div>mizuni <div class="opacity-50">f3cc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-mobile mr-3 fa-2x"></i>
					 				<div>mobile <div class="opacity-50">f10b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-mobile-alt mr-3 fa-2x"></i>
					 				<div>mobile-alt <div class="opacity-50">f3cd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-modx mr-3 fa-2x"></i>
					 				<div>modx <div class="opacity-50">f285</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-monero mr-3 fa-2x"></i>
					 				<div>monero <div class="opacity-50">f3d0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-money-bill mr-3 fa-2x"></i>
					 				<div>money-bill <div class="opacity-50">f0d6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-money-bill-alt mr-3 fa-2x"></i>
					 				<div>money-bill-alt <div class="opacity-50">f3d1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-money-bill-alt mr-3 fa-2x"></i>
					 				<div>money-bill-alt <div class="opacity-50">f3d1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-money-bill-wave mr-3 fa-2x"></i>
					 				<div>money-bill-wave <div class="opacity-50">f53a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-money-bill-wave-alt mr-3 fa-2x"></i>
					 				<div>money-bill-wave-alt <div class="opacity-50">f53b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-money-check mr-3 fa-2x"></i>
					 				<div>money-check <div class="opacity-50">f53c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-money-check-alt mr-3 fa-2x"></i>
					 				<div>money-check-alt <div class="opacity-50">f53d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-monument mr-3 fa-2x"></i>
					 				<div>monument <div class="opacity-50">f5a6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-moon mr-3 fa-2x"></i>
					 				<div>moon <div class="opacity-50">f186</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-moon mr-3 fa-2x"></i>
					 				<div>moon <div class="opacity-50">f186</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-mortar-pestle mr-3 fa-2x"></i>
					 				<div>mortar-pestle <div class="opacity-50">f5a7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-mosque mr-3 fa-2x"></i>
					 				<div>mosque <div class="opacity-50">f678</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-motorcycle mr-3 fa-2x"></i>
					 				<div>motorcycle <div class="opacity-50">f21c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-mountain mr-3 fa-2x"></i>
					 				<div>mountain <div class="opacity-50">f6fc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-mouse-pointer mr-3 fa-2x"></i>
					 				<div>mouse-pointer <div class="opacity-50">f245</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-music mr-3 fa-2x"></i>
					 				<div>music <div class="opacity-50">f001</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-napster mr-3 fa-2x"></i>
					 				<div>napster <div class="opacity-50">f3d2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-neos mr-3 fa-2x"></i>
					 				<div>neos <div class="opacity-50">f612</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-network-wired mr-3 fa-2x"></i>
					 				<div>network-wired <div class="opacity-50">f6ff</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-neuter mr-3 fa-2x"></i>
					 				<div>neuter <div class="opacity-50">f22c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-newspaper mr-3 fa-2x"></i>
					 				<div>newspaper <div class="opacity-50">f1ea</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-newspaper mr-3 fa-2x"></i>
					 				<div>newspaper <div class="opacity-50">f1ea</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-nimblr mr-3 fa-2x"></i>
					 				<div>nimblr <div class="opacity-50">f5a8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-nintendo-switch mr-3 fa-2x"></i>
					 				<div>nintendo-switch <div class="opacity-50">f418</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-node mr-3 fa-2x"></i>
					 				<div>node <div class="opacity-50">f419</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-node-js mr-3 fa-2x"></i>
					 				<div>node-js <div class="opacity-50">f3d3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-not-equal mr-3 fa-2x"></i>
					 				<div>not-equal <div class="opacity-50">f53e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-notes-medical mr-3 fa-2x"></i>
					 				<div>notes-medical <div class="opacity-50">f481</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-npm mr-3 fa-2x"></i>
					 				<div>npm <div class="opacity-50">f3d4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-ns8 mr-3 fa-2x"></i>
					 				<div>ns8 <div class="opacity-50">f3d5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-nutritionix mr-3 fa-2x"></i>
					 				<div>nutritionix <div class="opacity-50">f3d6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-object-group mr-3 fa-2x"></i>
					 				<div>object-group <div class="opacity-50">f247</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-object-group mr-3 fa-2x"></i>
					 				<div>object-group <div class="opacity-50">f247</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-object-ungroup mr-3 fa-2x"></i>
					 				<div>object-ungroup <div class="opacity-50">f248</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-object-ungroup mr-3 fa-2x"></i>
					 				<div>object-ungroup <div class="opacity-50">f248</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-odnoklassniki mr-3 fa-2x"></i>
					 				<div>odnoklassniki <div class="opacity-50">f263</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-odnoklassniki-square mr-3 fa-2x"></i>
					 				<div>odnoklassniki-square <div class="opacity-50">f264</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-oil-can mr-3 fa-2x"></i>
					 				<div>oil-can <div class="opacity-50">f613</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-old-republic mr-3 fa-2x"></i>
					 				<div>old-republic <div class="opacity-50">f510</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-om mr-3 fa-2x"></i>
					 				<div>om <div class="opacity-50">f679</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-opencart mr-3 fa-2x"></i>
					 				<div>opencart <div class="opacity-50">f23d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-openid mr-3 fa-2x"></i>
					 				<div>openid <div class="opacity-50">f19b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-opera mr-3 fa-2x"></i>
					 				<div>opera <div class="opacity-50">f26a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-optin-monster mr-3 fa-2x"></i>
					 				<div>optin-monster <div class="opacity-50">f23c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-osi mr-3 fa-2x"></i>
					 				<div>osi <div class="opacity-50">f41a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-otter mr-3 fa-2x"></i>
					 				<div>otter <div class="opacity-50">f700</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-outdent mr-3 fa-2x"></i>
					 				<div>outdent <div class="opacity-50">f03b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-page4 mr-3 fa-2x"></i>
					 				<div>page4 <div class="opacity-50">f3d7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-pagelines mr-3 fa-2x"></i>
					 				<div>pagelines <div class="opacity-50">f18c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-paint-brush mr-3 fa-2x"></i>
					 				<div>paint-brush <div class="opacity-50">f1fc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-paint-roller mr-3 fa-2x"></i>
					 				<div>paint-roller <div class="opacity-50">f5aa</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-palette mr-3 fa-2x"></i>
					 				<div>palette <div class="opacity-50">f53f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-palfed mr-3 fa-2x"></i>
					 				<div>palfed <div class="opacity-50">f3d8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-pallet mr-3 fa-2x"></i>
					 				<div>pallet <div class="opacity-50">f482</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-paper-plane mr-3 fa-2x"></i>
					 				<div>paper-plane <div class="opacity-50">f1d8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-paper-plane mr-3 fa-2x"></i>
					 				<div>paper-plane <div class="opacity-50">f1d8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-paperclip mr-3 fa-2x"></i>
					 				<div>paperclip <div class="opacity-50">f0c6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-parachute-box mr-3 fa-2x"></i>
					 				<div>parachute-box <div class="opacity-50">f4cd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-paragraph mr-3 fa-2x"></i>
					 				<div>paragraph <div class="opacity-50">f1dd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-parking mr-3 fa-2x"></i>
					 				<div>parking <div class="opacity-50">f540</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-passport mr-3 fa-2x"></i>
					 				<div>passport <div class="opacity-50">f5ab</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-pastafarianism mr-3 fa-2x"></i>
					 				<div>pastafarianism <div class="opacity-50">f67b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-paste mr-3 fa-2x"></i>
					 				<div>paste <div class="opacity-50">f0ea</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-patreon mr-3 fa-2x"></i>
					 				<div>patreon <div class="opacity-50">f3d9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-pause mr-3 fa-2x"></i>
					 				<div>pause <div class="opacity-50">f04c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-pause-circle mr-3 fa-2x"></i>
					 				<div>pause-circle <div class="opacity-50">f28b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-pause-circle mr-3 fa-2x"></i>
					 				<div>pause-circle <div class="opacity-50">f28b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-paw mr-3 fa-2x"></i>
					 				<div>paw <div class="opacity-50">f1b0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-paypal mr-3 fa-2x"></i>
					 				<div>paypal <div class="opacity-50">f1ed</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-peace mr-3 fa-2x"></i>
					 				<div>peace <div class="opacity-50">f67c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-pen mr-3 fa-2x"></i>
					 				<div>pen <div class="opacity-50">f304</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-pen-alt mr-3 fa-2x"></i>
					 				<div>pen-alt <div class="opacity-50">f305</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-pen-fancy mr-3 fa-2x"></i>
					 				<div>pen-fancy <div class="opacity-50">f5ac</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-pen-nib mr-3 fa-2x"></i>
					 				<div>pen-nib <div class="opacity-50">f5ad</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-pen-square mr-3 fa-2x"></i>
					 				<div>pen-square <div class="opacity-50">f14b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-pencil-alt mr-3 fa-2x"></i>
					 				<div>pencil-alt <div class="opacity-50">f303</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-pencil-ruler mr-3 fa-2x"></i>
					 				<div>pencil-ruler <div class="opacity-50">f5ae</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-penny-arcade mr-3 fa-2x"></i>
					 				<div>penny-arcade <div class="opacity-50">f704</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-people-carry mr-3 fa-2x"></i>
					 				<div>people-carry <div class="opacity-50">f4ce</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-percent mr-3 fa-2x"></i>
					 				<div>percent <div class="opacity-50">f295</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-percentage mr-3 fa-2x"></i>
					 				<div>percentage <div class="opacity-50">f541</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-periscope mr-3 fa-2x"></i>
					 				<div>periscope <div class="opacity-50">f3da</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-person-booth mr-3 fa-2x"></i>
					 				<div>person-booth <div class="opacity-50">f756</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-phabricator mr-3 fa-2x"></i>
					 				<div>phabricator <div class="opacity-50">f3db</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-phoenix-framework mr-3 fa-2x"></i>
					 				<div>phoenix-framework <div class="opacity-50">f3dc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-phoenix-squadron mr-3 fa-2x"></i>
					 				<div>phoenix-squadron <div class="opacity-50">f511</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-phone mr-3 fa-2x"></i>
					 				<div>phone <div class="opacity-50">f095</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-phone-slash mr-3 fa-2x"></i>
					 				<div>phone-slash <div class="opacity-50">f3dd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-phone-square mr-3 fa-2x"></i>
					 				<div>phone-square <div class="opacity-50">f098</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-phone-volume mr-3 fa-2x"></i>
					 				<div>phone-volume <div class="opacity-50">f2a0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-php mr-3 fa-2x"></i>
					 				<div>php <div class="opacity-50">f457</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-pied-piper mr-3 fa-2x"></i>
					 				<div>pied-piper <div class="opacity-50">f2ae</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-pied-piper-alt mr-3 fa-2x"></i>
					 				<div>pied-piper-alt <div class="opacity-50">f1a8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-pied-piper-hat mr-3 fa-2x"></i>
					 				<div>pied-piper-hat <div class="opacity-50">f4e5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-pied-piper-pp mr-3 fa-2x"></i>
					 				<div>pied-piper-pp <div class="opacity-50">f1a7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-piggy-bank mr-3 fa-2x"></i>
					 				<div>piggy-bank <div class="opacity-50">f4d3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-pills mr-3 fa-2x"></i>
					 				<div>pills <div class="opacity-50">f484</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-pinterest mr-3 fa-2x"></i>
					 				<div>pinterest <div class="opacity-50">f0d2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-pinterest-p mr-3 fa-2x"></i>
					 				<div>pinterest-p <div class="opacity-50">f231</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-pinterest-square mr-3 fa-2x"></i>
					 				<div>pinterest-square <div class="opacity-50">f0d3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-place-of-worship mr-3 fa-2x"></i>
					 				<div>place-of-worship <div class="opacity-50">f67f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-plane mr-3 fa-2x"></i>
					 				<div>plane <div class="opacity-50">f072</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-plane-arrival mr-3 fa-2x"></i>
					 				<div>plane-arrival <div class="opacity-50">f5af</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-plane-departure mr-3 fa-2x"></i>
					 				<div>plane-departure <div class="opacity-50">f5b0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-play mr-3 fa-2x"></i>
					 				<div>play <div class="opacity-50">f04b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-play-circle mr-3 fa-2x"></i>
					 				<div>play-circle <div class="opacity-50">f144</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-play-circle mr-3 fa-2x"></i>
					 				<div>play-circle <div class="opacity-50">f144</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-playstation mr-3 fa-2x"></i>
					 				<div>playstation <div class="opacity-50">f3df</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-plug mr-3 fa-2x"></i>
					 				<div>plug <div class="opacity-50">f1e6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-plus mr-3 fa-2x"></i>
					 				<div>plus <div class="opacity-50">f067</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-plus-circle mr-3 fa-2x"></i>
					 				<div>plus-circle <div class="opacity-50">f055</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-plus-square mr-3 fa-2x"></i>
					 				<div>plus-square <div class="opacity-50">f0fe</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-plus-square mr-3 fa-2x"></i>
					 				<div>plus-square <div class="opacity-50">f0fe</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-podcast mr-3 fa-2x"></i>
					 				<div>podcast <div class="opacity-50">f2ce</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-poll mr-3 fa-2x"></i>
					 				<div>poll <div class="opacity-50">f681</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-poll-h mr-3 fa-2x"></i>
					 				<div>poll-h <div class="opacity-50">f682</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-poo mr-3 fa-2x"></i>
					 				<div>poo <div class="opacity-50">f2fe</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-poo-storm mr-3 fa-2x"></i>
					 				<div>poo-storm <div class="opacity-50">f75a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-poop mr-3 fa-2x"></i>
					 				<div>poop <div class="opacity-50">f619</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-portrait mr-3 fa-2x"></i>
					 				<div>portrait <div class="opacity-50">f3e0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-pound-sign mr-3 fa-2x"></i>
					 				<div>pound-sign <div class="opacity-50">f154</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-power-off mr-3 fa-2x"></i>
					 				<div>power-off <div class="opacity-50">f011</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-pray mr-3 fa-2x"></i>
					 				<div>pray <div class="opacity-50">f683</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-praying-hands mr-3 fa-2x"></i>
					 				<div>praying-hands <div class="opacity-50">f684</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-prescription mr-3 fa-2x"></i>
					 				<div>prescription <div class="opacity-50">f5b1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-prescription-bottle mr-3 fa-2x"></i>
					 				<div>prescription-bottle <div class="opacity-50">f485</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-prescription-bottle-alt mr-3 fa-2x"></i>
					 				<div>prescription-bottle-alt <div class="opacity-50">f486</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-print mr-3 fa-2x"></i>
					 				<div>print <div class="opacity-50">f02f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-procedures mr-3 fa-2x"></i>
					 				<div>procedures <div class="opacity-50">f487</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-product-hunt mr-3 fa-2x"></i>
					 				<div>product-hunt <div class="opacity-50">f288</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-project-diagram mr-3 fa-2x"></i>
					 				<div>project-diagram <div class="opacity-50">f542</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-pushed mr-3 fa-2x"></i>
					 				<div>pushed <div class="opacity-50">f3e1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-puzzle-piece mr-3 fa-2x"></i>
					 				<div>puzzle-piece <div class="opacity-50">f12e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-python mr-3 fa-2x"></i>
					 				<div>python <div class="opacity-50">f3e2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-qq mr-3 fa-2x"></i>
					 				<div>qq <div class="opacity-50">f1d6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-qrcode mr-3 fa-2x"></i>
					 				<div>qrcode <div class="opacity-50">f029</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-question mr-3 fa-2x"></i>
					 				<div>question <div class="opacity-50">f128</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-question-circle mr-3 fa-2x"></i>
					 				<div>question-circle <div class="opacity-50">f059</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-question-circle mr-3 fa-2x"></i>
					 				<div>question-circle <div class="opacity-50">f059</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-quidditch mr-3 fa-2x"></i>
					 				<div>quidditch <div class="opacity-50">f458</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-quinscape mr-3 fa-2x"></i>
					 				<div>quinscape <div class="opacity-50">f459</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-quora mr-3 fa-2x"></i>
					 				<div>quora <div class="opacity-50">f2c4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-quote-left mr-3 fa-2x"></i>
					 				<div>quote-left <div class="opacity-50">f10d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-quote-right mr-3 fa-2x"></i>
					 				<div>quote-right <div class="opacity-50">f10e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-quran mr-3 fa-2x"></i>
					 				<div>quran <div class="opacity-50">f687</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-r-project mr-3 fa-2x"></i>
					 				<div>r-project <div class="opacity-50">f4f7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-rainbow mr-3 fa-2x"></i>
					 				<div>rainbow <div class="opacity-50">f75b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-random mr-3 fa-2x"></i>
					 				<div>random <div class="opacity-50">f074</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-ravelry mr-3 fa-2x"></i>
					 				<div>ravelry <div class="opacity-50">f2d9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-react mr-3 fa-2x"></i>
					 				<div>react <div class="opacity-50">f41b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-reacteurope mr-3 fa-2x"></i>
					 				<div>reacteurope <div class="opacity-50">f75d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-readme mr-3 fa-2x"></i>
					 				<div>readme <div class="opacity-50">f4d5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-rebel mr-3 fa-2x"></i>
					 				<div>rebel <div class="opacity-50">f1d0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-receipt mr-3 fa-2x"></i>
					 				<div>receipt <div class="opacity-50">f543</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-recycle mr-3 fa-2x"></i>
					 				<div>recycle <div class="opacity-50">f1b8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-red-river mr-3 fa-2x"></i>
					 				<div>red-river <div class="opacity-50">f3e3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-reddit mr-3 fa-2x"></i>
					 				<div>reddit <div class="opacity-50">f1a1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-reddit-alien mr-3 fa-2x"></i>
					 				<div>reddit-alien <div class="opacity-50">f281</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-reddit-square mr-3 fa-2x"></i>
					 				<div>reddit-square <div class="opacity-50">f1a2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-redo mr-3 fa-2x"></i>
					 				<div>redo <div class="opacity-50">f01e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-redo-alt mr-3 fa-2x"></i>
					 				<div>redo-alt <div class="opacity-50">f2f9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-registered mr-3 fa-2x"></i>
					 				<div>registered <div class="opacity-50">f25d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-registered mr-3 fa-2x"></i>
					 				<div>registered <div class="opacity-50">f25d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-renren mr-3 fa-2x"></i>
					 				<div>renren <div class="opacity-50">f18b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-reply mr-3 fa-2x"></i>
					 				<div>reply <div class="opacity-50">f3e5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-reply-all mr-3 fa-2x"></i>
					 				<div>reply-all <div class="opacity-50">f122</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-replyd mr-3 fa-2x"></i>
					 				<div>replyd <div class="opacity-50">f3e6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-republican mr-3 fa-2x"></i>
					 				<div>republican <div class="opacity-50">f75e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-researchgate mr-3 fa-2x"></i>
					 				<div>researchgate <div class="opacity-50">f4f8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-resolving mr-3 fa-2x"></i>
					 				<div>resolving <div class="opacity-50">f3e7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-retweet mr-3 fa-2x"></i>
					 				<div>retweet <div class="opacity-50">f079</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-rev mr-3 fa-2x"></i>
					 				<div>rev <div class="opacity-50">f5b2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-ribbon mr-3 fa-2x"></i>
					 				<div>ribbon <div class="opacity-50">f4d6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-ring mr-3 fa-2x"></i>
					 				<div>ring <div class="opacity-50">f70b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-road mr-3 fa-2x"></i>
					 				<div>road <div class="opacity-50">f018</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-robot mr-3 fa-2x"></i>
					 				<div>robot <div class="opacity-50">f544</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-rocket mr-3 fa-2x"></i>
					 				<div>rocket <div class="opacity-50">f135</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-rocketchat mr-3 fa-2x"></i>
					 				<div>rocketchat <div class="opacity-50">f3e8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-rockrms mr-3 fa-2x"></i>
					 				<div>rockrms <div class="opacity-50">f3e9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-route mr-3 fa-2x"></i>
					 				<div>route <div class="opacity-50">f4d7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-rss mr-3 fa-2x"></i>
					 				<div>rss <div class="opacity-50">f09e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-rss-square mr-3 fa-2x"></i>
					 				<div>rss-square <div class="opacity-50">f143</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-ruble-sign mr-3 fa-2x"></i>
					 				<div>ruble-sign <div class="opacity-50">f158</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-ruler mr-3 fa-2x"></i>
					 				<div>ruler <div class="opacity-50">f545</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-ruler-combined mr-3 fa-2x"></i>
					 				<div>ruler-combined <div class="opacity-50">f546</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-ruler-horizontal mr-3 fa-2x"></i>
					 				<div>ruler-horizontal <div class="opacity-50">f547</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-ruler-vertical mr-3 fa-2x"></i>
					 				<div>ruler-vertical <div class="opacity-50">f548</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-running mr-3 fa-2x"></i>
					 				<div>running <div class="opacity-50">f70c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-rupee-sign mr-3 fa-2x"></i>
					 				<div>rupee-sign <div class="opacity-50">f156</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sad-cry mr-3 fa-2x"></i>
					 				<div>sad-cry <div class="opacity-50">f5b3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-sad-cry mr-3 fa-2x"></i>
					 				<div>sad-cry <div class="opacity-50">f5b3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sad-tear mr-3 fa-2x"></i>
					 				<div>sad-tear <div class="opacity-50">f5b4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-sad-tear mr-3 fa-2x"></i>
					 				<div>sad-tear <div class="opacity-50">f5b4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-safari mr-3 fa-2x"></i>
					 				<div>safari <div class="opacity-50">f267</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-sass mr-3 fa-2x"></i>
					 				<div>sass <div class="opacity-50">f41e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-save mr-3 fa-2x"></i>
					 				<div>save <div class="opacity-50">f0c7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-save mr-3 fa-2x"></i>
					 				<div>save <div class="opacity-50">f0c7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-schlix mr-3 fa-2x"></i>
					 				<div>schlix <div class="opacity-50">f3ea</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-school mr-3 fa-2x"></i>
					 				<div>school <div class="opacity-50">f549</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-screwdriver mr-3 fa-2x"></i>
					 				<div>screwdriver <div class="opacity-50">f54a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-scribd mr-3 fa-2x"></i>
					 				<div>scribd <div class="opacity-50">f28a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-scroll mr-3 fa-2x"></i>
					 				<div>scroll <div class="opacity-50">f70e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-search mr-3 fa-2x"></i>
					 				<div>search <div class="opacity-50">f002</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-search-dollar mr-3 fa-2x"></i>
					 				<div>search-dollar <div class="opacity-50">f688</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-search-location mr-3 fa-2x"></i>
					 				<div>search-location <div class="opacity-50">f689</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-search-minus mr-3 fa-2x"></i>
					 				<div>search-minus <div class="opacity-50">f010</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-search-plus mr-3 fa-2x"></i>
					 				<div>search-plus <div class="opacity-50">f00e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-searchengin mr-3 fa-2x"></i>
					 				<div>searchengin <div class="opacity-50">f3eb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-seedling mr-3 fa-2x"></i>
					 				<div>seedling <div class="opacity-50">f4d8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-sellcast mr-3 fa-2x"></i>
					 				<div>sellcast <div class="opacity-50">f2da</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-sellsy mr-3 fa-2x"></i>
					 				<div>sellsy <div class="opacity-50">f213</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-server mr-3 fa-2x"></i>
					 				<div>server <div class="opacity-50">f233</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-servicestack mr-3 fa-2x"></i>
					 				<div>servicestack <div class="opacity-50">f3ec</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-shapes mr-3 fa-2x"></i>
					 				<div>shapes <div class="opacity-50">f61f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-share mr-3 fa-2x"></i>
					 				<div>share <div class="opacity-50">f064</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-share-alt mr-3 fa-2x"></i>
					 				<div>share-alt <div class="opacity-50">f1e0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-share-alt-square mr-3 fa-2x"></i>
					 				<div>share-alt-square <div class="opacity-50">f1e1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-share-square mr-3 fa-2x"></i>
					 				<div>share-square <div class="opacity-50">f14d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-share-square mr-3 fa-2x"></i>
					 				<div>share-square <div class="opacity-50">f14d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-shekel-sign mr-3 fa-2x"></i>
					 				<div>shekel-sign <div class="opacity-50">f20b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-shield-alt mr-3 fa-2x"></i>
					 				<div>shield-alt <div class="opacity-50">f3ed</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-ship mr-3 fa-2x"></i>
					 				<div>ship <div class="opacity-50">f21a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-shipping-fast mr-3 fa-2x"></i>
					 				<div>shipping-fast <div class="opacity-50">f48b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-shirtsinbulk mr-3 fa-2x"></i>
					 				<div>shirtsinbulk <div class="opacity-50">f214</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-shoe-prints mr-3 fa-2x"></i>
					 				<div>shoe-prints <div class="opacity-50">f54b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-shopping-bag mr-3 fa-2x"></i>
					 				<div>shopping-bag <div class="opacity-50">f290</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-shopping-basket mr-3 fa-2x"></i>
					 				<div>shopping-basket <div class="opacity-50">f291</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-shopping-cart mr-3 fa-2x"></i>
					 				<div>shopping-cart <div class="opacity-50">f07a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-shopware mr-3 fa-2x"></i>
					 				<div>shopware <div class="opacity-50">f5b5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-shower mr-3 fa-2x"></i>
					 				<div>shower <div class="opacity-50">f2cc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-shuttle-van mr-3 fa-2x"></i>
					 				<div>shuttle-van <div class="opacity-50">f5b6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sign mr-3 fa-2x"></i>
					 				<div>sign <div class="opacity-50">f4d9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sign-in-alt mr-3 fa-2x"></i>
					 				<div>sign-in-alt <div class="opacity-50">f2f6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sign-language mr-3 fa-2x"></i>
					 				<div>sign-language <div class="opacity-50">f2a7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sign-out-alt mr-3 fa-2x"></i>
					 				<div>sign-out-alt <div class="opacity-50">f2f5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-signal mr-3 fa-2x"></i>
					 				<div>signal <div class="opacity-50">f012</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-signature mr-3 fa-2x"></i>
					 				<div>signature <div class="opacity-50">f5b7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-simplybuilt mr-3 fa-2x"></i>
					 				<div>simplybuilt <div class="opacity-50">f215</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-sistrix mr-3 fa-2x"></i>
					 				<div>sistrix <div class="opacity-50">f3ee</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sitemap mr-3 fa-2x"></i>
					 				<div>sitemap <div class="opacity-50">f0e8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-sith mr-3 fa-2x"></i>
					 				<div>sith <div class="opacity-50">f512</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-skull mr-3 fa-2x"></i>
					 				<div>skull <div class="opacity-50">f54c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-skull-crossbones mr-3 fa-2x"></i>
					 				<div>skull-crossbones <div class="opacity-50">f714</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-skyatlas mr-3 fa-2x"></i>
					 				<div>skyatlas <div class="opacity-50">f216</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-skype mr-3 fa-2x"></i>
					 				<div>skype <div class="opacity-50">f17e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-slack mr-3 fa-2x"></i>
					 				<div>slack <div class="opacity-50">f198</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-slack-hash mr-3 fa-2x"></i>
					 				<div>slack-hash <div class="opacity-50">f3ef</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-slash mr-3 fa-2x"></i>
					 				<div>slash <div class="opacity-50">f715</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sliders-h mr-3 fa-2x"></i>
					 				<div>sliders-h <div class="opacity-50">f1de</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-slideshare mr-3 fa-2x"></i>
					 				<div>slideshare <div class="opacity-50">f1e7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-smile mr-3 fa-2x"></i>
					 				<div>smile <div class="opacity-50">f118</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-smile mr-3 fa-2x"></i>
					 				<div>smile <div class="opacity-50">f118</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-smile-beam mr-3 fa-2x"></i>
					 				<div>smile-beam <div class="opacity-50">f5b8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-smile-beam mr-3 fa-2x"></i>
					 				<div>smile-beam <div class="opacity-50">f5b8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-smile-wink mr-3 fa-2x"></i>
					 				<div>smile-wink <div class="opacity-50">f4da</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-smile-wink mr-3 fa-2x"></i>
					 				<div>smile-wink <div class="opacity-50">f4da</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-smog mr-3 fa-2x"></i>
					 				<div>smog <div class="opacity-50">f75f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-smoking mr-3 fa-2x"></i>
					 				<div>smoking <div class="opacity-50">f48d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-smoking-ban mr-3 fa-2x"></i>
					 				<div>smoking-ban <div class="opacity-50">f54d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-snapchat mr-3 fa-2x"></i>
					 				<div>snapchat <div class="opacity-50">f2ab</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-snapchat-ghost mr-3 fa-2x"></i>
					 				<div>snapchat-ghost <div class="opacity-50">f2ac</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-snapchat-square mr-3 fa-2x"></i>
					 				<div>snapchat-square <div class="opacity-50">f2ad</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-snowflake mr-3 fa-2x"></i>
					 				<div>snowflake <div class="opacity-50">f2dc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-snowflake mr-3 fa-2x"></i>
					 				<div>snowflake <div class="opacity-50">f2dc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-socks mr-3 fa-2x"></i>
					 				<div>socks <div class="opacity-50">f696</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-solar-panel mr-3 fa-2x"></i>
					 				<div>solar-panel <div class="opacity-50">f5ba</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sort mr-3 fa-2x"></i>
					 				<div>sort <div class="opacity-50">f0dc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sort-alpha-down mr-3 fa-2x"></i>
					 				<div>sort-alpha-down <div class="opacity-50">f15d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sort-alpha-up mr-3 fa-2x"></i>
					 				<div>sort-alpha-up <div class="opacity-50">f15e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sort-amount-down mr-3 fa-2x"></i>
					 				<div>sort-amount-down <div class="opacity-50">f160</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sort-amount-up mr-3 fa-2x"></i>
					 				<div>sort-amount-up <div class="opacity-50">f161</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sort-down mr-3 fa-2x"></i>
					 				<div>sort-down <div class="opacity-50">f0dd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sort-numeric-down mr-3 fa-2x"></i>
					 				<div>sort-numeric-down <div class="opacity-50">f162</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sort-numeric-up mr-3 fa-2x"></i>
					 				<div>sort-numeric-up <div class="opacity-50">f163</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sort-up mr-3 fa-2x"></i>
					 				<div>sort-up <div class="opacity-50">f0de</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-soundcloud mr-3 fa-2x"></i>
					 				<div>soundcloud <div class="opacity-50">f1be</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-spa mr-3 fa-2x"></i>
					 				<div>spa <div class="opacity-50">f5bb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-space-shuttle mr-3 fa-2x"></i>
					 				<div>space-shuttle <div class="opacity-50">f197</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-speakap mr-3 fa-2x"></i>
					 				<div>speakap <div class="opacity-50">f3f3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-spider mr-3 fa-2x"></i>
					 				<div>spider <div class="opacity-50">f717</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-spinner mr-3 fa-2x"></i>
					 				<div>spinner <div class="opacity-50">f110</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-splotch mr-3 fa-2x"></i>
					 				<div>splotch <div class="opacity-50">f5bc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-spotify mr-3 fa-2x"></i>
					 				<div>spotify <div class="opacity-50">f1bc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-spray-can mr-3 fa-2x"></i>
					 				<div>spray-can <div class="opacity-50">f5bd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-square mr-3 fa-2x"></i>
					 				<div>square <div class="opacity-50">f0c8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-square mr-3 fa-2x"></i>
					 				<div>square <div class="opacity-50">f0c8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-square-full mr-3 fa-2x"></i>
					 				<div>square-full <div class="opacity-50">f45c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-square-root-alt mr-3 fa-2x"></i>
					 				<div>square-root-alt <div class="opacity-50">f698</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-squarespace mr-3 fa-2x"></i>
					 				<div>squarespace <div class="opacity-50">f5be</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-stack-exchange mr-3 fa-2x"></i>
					 				<div>stack-exchange <div class="opacity-50">f18d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-stack-overflow mr-3 fa-2x"></i>
					 				<div>stack-overflow <div class="opacity-50">f16c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-stamp mr-3 fa-2x"></i>
					 				<div>stamp <div class="opacity-50">f5bf</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-star mr-3 fa-2x"></i>
					 				<div>star <div class="opacity-50">f005</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-star mr-3 fa-2x"></i>
					 				<div>star <div class="opacity-50">f005</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-star-and-crescent mr-3 fa-2x"></i>
					 				<div>star-and-crescent <div class="opacity-50">f699</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-star-half mr-3 fa-2x"></i>
					 				<div>star-half <div class="opacity-50">f089</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-star-half mr-3 fa-2x"></i>
					 				<div>star-half <div class="opacity-50">f089</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-star-half-alt mr-3 fa-2x"></i>
					 				<div>star-half-alt <div class="opacity-50">f5c0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-star-of-david mr-3 fa-2x"></i>
					 				<div>star-of-david <div class="opacity-50">f69a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-star-of-life mr-3 fa-2x"></i>
					 				<div>star-of-life <div class="opacity-50">f621</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-staylinked mr-3 fa-2x"></i>
					 				<div>staylinked <div class="opacity-50">f3f5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-steam mr-3 fa-2x"></i>
					 				<div>steam <div class="opacity-50">f1b6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-steam-square mr-3 fa-2x"></i>
					 				<div>steam-square <div class="opacity-50">f1b7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-steam-symbol mr-3 fa-2x"></i>
					 				<div>steam-symbol <div class="opacity-50">f3f6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-step-backward mr-3 fa-2x"></i>
					 				<div>step-backward <div class="opacity-50">f048</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-step-forward mr-3 fa-2x"></i>
					 				<div>step-forward <div class="opacity-50">f051</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-stethoscope mr-3 fa-2x"></i>
					 				<div>stethoscope <div class="opacity-50">f0f1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-sticker-mule mr-3 fa-2x"></i>
					 				<div>sticker-mule <div class="opacity-50">f3f7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sticky-note mr-3 fa-2x"></i>
					 				<div>sticky-note <div class="opacity-50">f249</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-sticky-note mr-3 fa-2x"></i>
					 				<div>sticky-note <div class="opacity-50">f249</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-stop mr-3 fa-2x"></i>
					 				<div>stop <div class="opacity-50">f04d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-stop-circle mr-3 fa-2x"></i>
					 				<div>stop-circle <div class="opacity-50">f28d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-stop-circle mr-3 fa-2x"></i>
					 				<div>stop-circle <div class="opacity-50">f28d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-stopwatch mr-3 fa-2x"></i>
					 				<div>stopwatch <div class="opacity-50">f2f2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-store mr-3 fa-2x"></i>
					 				<div>store <div class="opacity-50">f54e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-store-alt mr-3 fa-2x"></i>
					 				<div>store-alt <div class="opacity-50">f54f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-strava mr-3 fa-2x"></i>
					 				<div>strava <div class="opacity-50">f428</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-stream mr-3 fa-2x"></i>
					 				<div>stream <div class="opacity-50">f550</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-street-view mr-3 fa-2x"></i>
					 				<div>street-view <div class="opacity-50">f21d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-strikethrough mr-3 fa-2x"></i>
					 				<div>strikethrough <div class="opacity-50">f0cc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-stripe mr-3 fa-2x"></i>
					 				<div>stripe <div class="opacity-50">f429</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-stripe-s mr-3 fa-2x"></i>
					 				<div>stripe-s <div class="opacity-50">f42a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-stroopwafel mr-3 fa-2x"></i>
					 				<div>stroopwafel <div class="opacity-50">f551</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-studiovinari mr-3 fa-2x"></i>
					 				<div>studiovinari <div class="opacity-50">f3f8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-stumbleupon mr-3 fa-2x"></i>
					 				<div>stumbleupon <div class="opacity-50">f1a4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-stumbleupon-circle mr-3 fa-2x"></i>
					 				<div>stumbleupon-circle <div class="opacity-50">f1a3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-subscript mr-3 fa-2x"></i>
					 				<div>subscript <div class="opacity-50">f12c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-subway mr-3 fa-2x"></i>
					 				<div>subway <div class="opacity-50">f239</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-suitcase mr-3 fa-2x"></i>
					 				<div>suitcase <div class="opacity-50">f0f2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-suitcase-rolling mr-3 fa-2x"></i>
					 				<div>suitcase-rolling <div class="opacity-50">f5c1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sun mr-3 fa-2x"></i>
					 				<div>sun <div class="opacity-50">f185</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-sun mr-3 fa-2x"></i>
					 				<div>sun <div class="opacity-50">f185</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-superpowers mr-3 fa-2x"></i>
					 				<div>superpowers <div class="opacity-50">f2dd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-superscript mr-3 fa-2x"></i>
					 				<div>superscript <div class="opacity-50">f12b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-supple mr-3 fa-2x"></i>
					 				<div>supple <div class="opacity-50">f3f9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-surprise mr-3 fa-2x"></i>
					 				<div>surprise <div class="opacity-50">f5c2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-surprise mr-3 fa-2x"></i>
					 				<div>surprise <div class="opacity-50">f5c2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-swatchbook mr-3 fa-2x"></i>
					 				<div>swatchbook <div class="opacity-50">f5c3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-swimmer mr-3 fa-2x"></i>
					 				<div>swimmer <div class="opacity-50">f5c4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-swimming-pool mr-3 fa-2x"></i>
					 				<div>swimming-pool <div class="opacity-50">f5c5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-synagogue mr-3 fa-2x"></i>
					 				<div>synagogue <div class="opacity-50">f69b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sync mr-3 fa-2x"></i>
					 				<div>sync <div class="opacity-50">f021</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-sync-alt mr-3 fa-2x"></i>
					 				<div>sync-alt <div class="opacity-50">f2f1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-syringe mr-3 fa-2x"></i>
					 				<div>syringe <div class="opacity-50">f48e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-table mr-3 fa-2x"></i>
					 				<div>table <div class="opacity-50">f0ce</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-table-tennis mr-3 fa-2x"></i>
					 				<div>table-tennis <div class="opacity-50">f45d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-tablet mr-3 fa-2x"></i>
					 				<div>tablet <div class="opacity-50">f10a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-tablet-alt mr-3 fa-2x"></i>
					 				<div>tablet-alt <div class="opacity-50">f3fa</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-tablets mr-3 fa-2x"></i>
					 				<div>tablets <div class="opacity-50">f490</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-tachometer-alt mr-3 fa-2x"></i>
					 				<div>tachometer-alt <div class="opacity-50">f3fd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-tag mr-3 fa-2x"></i>
					 				<div>tag <div class="opacity-50">f02b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-tags mr-3 fa-2x"></i>
					 				<div>tags <div class="opacity-50">f02c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-tape mr-3 fa-2x"></i>
					 				<div>tape <div class="opacity-50">f4db</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-tasks mr-3 fa-2x"></i>
					 				<div>tasks <div class="opacity-50">f0ae</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-taxi mr-3 fa-2x"></i>
					 				<div>taxi <div class="opacity-50">f1ba</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-teamspeak mr-3 fa-2x"></i>
					 				<div>teamspeak <div class="opacity-50">f4f9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-teeth mr-3 fa-2x"></i>
					 				<div>teeth <div class="opacity-50">f62e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-teeth-open mr-3 fa-2x"></i>
					 				<div>teeth-open <div class="opacity-50">f62f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-telegram mr-3 fa-2x"></i>
					 				<div>telegram <div class="opacity-50">f2c6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-telegram-plane mr-3 fa-2x"></i>
					 				<div>telegram-plane <div class="opacity-50">f3fe</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-temperature-high mr-3 fa-2x"></i>
					 				<div>temperature-high <div class="opacity-50">f769</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-temperature-low mr-3 fa-2x"></i>
					 				<div>temperature-low <div class="opacity-50">f76b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-tencent-weibo mr-3 fa-2x"></i>
					 				<div>tencent-weibo <div class="opacity-50">f1d5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-terminal mr-3 fa-2x"></i>
					 				<div>terminal <div class="opacity-50">f120</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-text-height mr-3 fa-2x"></i>
					 				<div>text-height <div class="opacity-50">f034</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-text-width mr-3 fa-2x"></i>
					 				<div>text-width <div class="opacity-50">f035</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-th mr-3 fa-2x"></i>
					 				<div>th <div class="opacity-50">f00a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-th-large mr-3 fa-2x"></i>
					 				<div>th-large <div class="opacity-50">f009</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-th-list mr-3 fa-2x"></i>
					 				<div>th-list <div class="opacity-50">f00b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-the-red-yeti mr-3 fa-2x"></i>
					 				<div>the-red-yeti <div class="opacity-50">f69d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-theater-masks mr-3 fa-2x"></i>
					 				<div>theater-masks <div class="opacity-50">f630</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-themeco mr-3 fa-2x"></i>
					 				<div>themeco <div class="opacity-50">f5c6</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-themeisle mr-3 fa-2x"></i>
					 				<div>themeisle <div class="opacity-50">f2b2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-thermometer mr-3 fa-2x"></i>
					 				<div>thermometer <div class="opacity-50">f491</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-thermometer-empty mr-3 fa-2x"></i>
					 				<div>thermometer-empty <div class="opacity-50">f2cb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-thermometer-full mr-3 fa-2x"></i>
					 				<div>thermometer-full <div class="opacity-50">f2c7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-thermometer-half mr-3 fa-2x"></i>
					 				<div>thermometer-half <div class="opacity-50">f2c9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-thermometer-quarter mr-3 fa-2x"></i>
					 				<div>thermometer-quarter <div class="opacity-50">f2ca</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-thermometer-three-quarters mr-3 fa-2x"></i>
					 				<div>thermometer-three-quarters <div class="opacity-50">f2c8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-think-peaks mr-3 fa-2x"></i>
					 				<div>think-peaks <div class="opacity-50">f731</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-thumbs-down mr-3 fa-2x"></i>
					 				<div>thumbs-down <div class="opacity-50">f165</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-thumbs-down mr-3 fa-2x"></i>
					 				<div>thumbs-down <div class="opacity-50">f165</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-thumbs-up mr-3 fa-2x"></i>
					 				<div>thumbs-up <div class="opacity-50">f164</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-thumbs-up mr-3 fa-2x"></i>
					 				<div>thumbs-up <div class="opacity-50">f164</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-thumbtack mr-3 fa-2x"></i>
					 				<div>thumbtack <div class="opacity-50">f08d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-ticket-alt mr-3 fa-2x"></i>
					 				<div>ticket-alt <div class="opacity-50">f3ff</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-times mr-3 fa-2x"></i>
					 				<div>times <div class="opacity-50">f00d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-times-circle mr-3 fa-2x"></i>
					 				<div>times-circle <div class="opacity-50">f057</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-times-circle mr-3 fa-2x"></i>
					 				<div>times-circle <div class="opacity-50">f057</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-tint mr-3 fa-2x"></i>
					 				<div>tint <div class="opacity-50">f043</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-tint-slash mr-3 fa-2x"></i>
					 				<div>tint-slash <div class="opacity-50">f5c7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-tired mr-3 fa-2x"></i>
					 				<div>tired <div class="opacity-50">f5c8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-tired mr-3 fa-2x"></i>
					 				<div>tired <div class="opacity-50">f5c8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-toggle-off mr-3 fa-2x"></i>
					 				<div>toggle-off <div class="opacity-50">f204</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-toggle-on mr-3 fa-2x"></i>
					 				<div>toggle-on <div class="opacity-50">f205</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-toilet-paper mr-3 fa-2x"></i>
					 				<div>toilet-paper <div class="opacity-50">f71e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-toolbox mr-3 fa-2x"></i>
					 				<div>toolbox <div class="opacity-50">f552</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-tooth mr-3 fa-2x"></i>
					 				<div>tooth <div class="opacity-50">f5c9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-torah mr-3 fa-2x"></i>
					 				<div>torah <div class="opacity-50">f6a0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-torii-gate mr-3 fa-2x"></i>
					 				<div>torii-gate <div class="opacity-50">f6a1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-tractor mr-3 fa-2x"></i>
					 				<div>tractor <div class="opacity-50">f722</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-trade-federation mr-3 fa-2x"></i>
					 				<div>trade-federation <div class="opacity-50">f513</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-trademark mr-3 fa-2x"></i>
					 				<div>trademark <div class="opacity-50">f25c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-traffic-light mr-3 fa-2x"></i>
					 				<div>traffic-light <div class="opacity-50">f637</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-train mr-3 fa-2x"></i>
					 				<div>train <div class="opacity-50">f238</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-transgender mr-3 fa-2x"></i>
					 				<div>transgender <div class="opacity-50">f224</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-transgender-alt mr-3 fa-2x"></i>
					 				<div>transgender-alt <div class="opacity-50">f225</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-trash mr-3 fa-2x"></i>
					 				<div>trash <div class="opacity-50">f1f8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-trash-alt mr-3 fa-2x"></i>
					 				<div>trash-alt <div class="opacity-50">f2ed</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-trash-alt mr-3 fa-2x"></i>
					 				<div>trash-alt <div class="opacity-50">f2ed</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-tree mr-3 fa-2x"></i>
					 				<div>tree <div class="opacity-50">f1bb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-trello mr-3 fa-2x"></i>
					 				<div>trello <div class="opacity-50">f181</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-tripadvisor mr-3 fa-2x"></i>
					 				<div>tripadvisor <div class="opacity-50">f262</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-trophy mr-3 fa-2x"></i>
					 				<div>trophy <div class="opacity-50">f091</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-truck mr-3 fa-2x"></i>
					 				<div>truck <div class="opacity-50">f0d1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-truck-loading mr-3 fa-2x"></i>
					 				<div>truck-loading <div class="opacity-50">f4de</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-truck-monster mr-3 fa-2x"></i>
					 				<div>truck-monster <div class="opacity-50">f63b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-truck-moving mr-3 fa-2x"></i>
					 				<div>truck-moving <div class="opacity-50">f4df</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-truck-pickup mr-3 fa-2x"></i>
					 				<div>truck-pickup <div class="opacity-50">f63c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-tshirt mr-3 fa-2x"></i>
					 				<div>tshirt <div class="opacity-50">f553</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-tty mr-3 fa-2x"></i>
					 				<div>tty <div class="opacity-50">f1e4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-tumblr mr-3 fa-2x"></i>
					 				<div>tumblr <div class="opacity-50">f173</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-tumblr-square mr-3 fa-2x"></i>
					 				<div>tumblr-square <div class="opacity-50">f174</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-tv mr-3 fa-2x"></i>
					 				<div>tv <div class="opacity-50">f26c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-twitch mr-3 fa-2x"></i>
					 				<div>twitch <div class="opacity-50">f1e8</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-twitter mr-3 fa-2x"></i>
					 				<div>twitter <div class="opacity-50">f099</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-twitter-square mr-3 fa-2x"></i>
					 				<div>twitter-square <div class="opacity-50">f081</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-typo3 mr-3 fa-2x"></i>
					 				<div>typo3 <div class="opacity-50">f42b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-uber mr-3 fa-2x"></i>
					 				<div>uber <div class="opacity-50">f402</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-uikit mr-3 fa-2x"></i>
					 				<div>uikit <div class="opacity-50">f403</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-umbrella mr-3 fa-2x"></i>
					 				<div>umbrella <div class="opacity-50">f0e9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-umbrella-beach mr-3 fa-2x"></i>
					 				<div>umbrella-beach <div class="opacity-50">f5ca</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-underline mr-3 fa-2x"></i>
					 				<div>underline <div class="opacity-50">f0cd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-undo mr-3 fa-2x"></i>
					 				<div>undo <div class="opacity-50">f0e2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-undo-alt mr-3 fa-2x"></i>
					 				<div>undo-alt <div class="opacity-50">f2ea</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-uniregistry mr-3 fa-2x"></i>
					 				<div>uniregistry <div class="opacity-50">f404</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-universal-access mr-3 fa-2x"></i>
					 				<div>universal-access <div class="opacity-50">f29a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-university mr-3 fa-2x"></i>
					 				<div>university <div class="opacity-50">f19c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-unlink mr-3 fa-2x"></i>
					 				<div>unlink <div class="opacity-50">f127</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-unlock mr-3 fa-2x"></i>
					 				<div>unlock <div class="opacity-50">f09c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-unlock-alt mr-3 fa-2x"></i>
					 				<div>unlock-alt <div class="opacity-50">f13e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-untappd mr-3 fa-2x"></i>
					 				<div>untappd <div class="opacity-50">f405</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-upload mr-3 fa-2x"></i>
					 				<div>upload <div class="opacity-50">f093</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-usb mr-3 fa-2x"></i>
					 				<div>usb <div class="opacity-50">f287</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user mr-3 fa-2x"></i>
					 				<div>user <div class="opacity-50">f007</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-user mr-3 fa-2x"></i>
					 				<div>user <div class="opacity-50">f007</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-alt mr-3 fa-2x"></i>
					 				<div>user-alt <div class="opacity-50">f406</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-alt-slash mr-3 fa-2x"></i>
					 				<div>user-alt-slash <div class="opacity-50">f4fa</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-astronaut mr-3 fa-2x"></i>
					 				<div>user-astronaut <div class="opacity-50">f4fb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-check mr-3 fa-2x"></i>
					 				<div>user-check <div class="opacity-50">f4fc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-circle mr-3 fa-2x"></i>
					 				<div>user-circle <div class="opacity-50">f2bd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-user-circle mr-3 fa-2x"></i>
					 				<div>user-circle <div class="opacity-50">f2bd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-clock mr-3 fa-2x"></i>
					 				<div>user-clock <div class="opacity-50">f4fd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-cog mr-3 fa-2x"></i>
					 				<div>user-cog <div class="opacity-50">f4fe</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-edit mr-3 fa-2x"></i>
					 				<div>user-edit <div class="opacity-50">f4ff</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-friends mr-3 fa-2x"></i>
					 				<div>user-friends <div class="opacity-50">f500</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-graduate mr-3 fa-2x"></i>
					 				<div>user-graduate <div class="opacity-50">f501</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-injured mr-3 fa-2x"></i>
					 				<div>user-injured <div class="opacity-50">f728</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-lock mr-3 fa-2x"></i>
					 				<div>user-lock <div class="opacity-50">f502</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-md mr-3 fa-2x"></i>
					 				<div>user-md <div class="opacity-50">f0f0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-minus mr-3 fa-2x"></i>
					 				<div>user-minus <div class="opacity-50">f503</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-ninja mr-3 fa-2x"></i>
					 				<div>user-ninja <div class="opacity-50">f504</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-plus mr-3 fa-2x"></i>
					 				<div>user-plus <div class="opacity-50">f234</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-secret mr-3 fa-2x"></i>
					 				<div>user-secret <div class="opacity-50">f21b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-shield mr-3 fa-2x"></i>
					 				<div>user-shield <div class="opacity-50">f505</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-slash mr-3 fa-2x"></i>
					 				<div>user-slash <div class="opacity-50">f506</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-tag mr-3 fa-2x"></i>
					 				<div>user-tag <div class="opacity-50">f507</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-tie mr-3 fa-2x"></i>
					 				<div>user-tie <div class="opacity-50">f508</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-user-times mr-3 fa-2x"></i>
					 				<div>user-times <div class="opacity-50">f235</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-users mr-3 fa-2x"></i>
					 				<div>users <div class="opacity-50">f0c0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-users-cog mr-3 fa-2x"></i>
					 				<div>users-cog <div class="opacity-50">f509</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-ussunnah mr-3 fa-2x"></i>
					 				<div>ussunnah <div class="opacity-50">f407</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-utensil-spoon mr-3 fa-2x"></i>
					 				<div>utensil-spoon <div class="opacity-50">f2e5</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-utensils mr-3 fa-2x"></i>
					 				<div>utensils <div class="opacity-50">f2e7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-vaadin mr-3 fa-2x"></i>
					 				<div>vaadin <div class="opacity-50">f408</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-vector-square mr-3 fa-2x"></i>
					 				<div>vector-square <div class="opacity-50">f5cb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-venus mr-3 fa-2x"></i>
					 				<div>venus <div class="opacity-50">f221</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-venus-double mr-3 fa-2x"></i>
					 				<div>venus-double <div class="opacity-50">f226</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-venus-mars mr-3 fa-2x"></i>
					 				<div>venus-mars <div class="opacity-50">f228</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-viacoin mr-3 fa-2x"></i>
					 				<div>viacoin <div class="opacity-50">f237</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-viadeo mr-3 fa-2x"></i>
					 				<div>viadeo <div class="opacity-50">f2a9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-viadeo-square mr-3 fa-2x"></i>
					 				<div>viadeo-square <div class="opacity-50">f2aa</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-vial mr-3 fa-2x"></i>
					 				<div>vial <div class="opacity-50">f492</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-vials mr-3 fa-2x"></i>
					 				<div>vials <div class="opacity-50">f493</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-viber mr-3 fa-2x"></i>
					 				<div>viber <div class="opacity-50">f409</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-video mr-3 fa-2x"></i>
					 				<div>video <div class="opacity-50">f03d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-video-slash mr-3 fa-2x"></i>
					 				<div>video-slash <div class="opacity-50">f4e2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-vihara mr-3 fa-2x"></i>
					 				<div>vihara <div class="opacity-50">f6a7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-vimeo mr-3 fa-2x"></i>
					 				<div>vimeo <div class="opacity-50">f40a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-vimeo-square mr-3 fa-2x"></i>
					 				<div>vimeo-square <div class="opacity-50">f194</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-vimeo-v mr-3 fa-2x"></i>
					 				<div>vimeo-v <div class="opacity-50">f27d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-vine mr-3 fa-2x"></i>
					 				<div>vine <div class="opacity-50">f1ca</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-vk mr-3 fa-2x"></i>
					 				<div>vk <div class="opacity-50">f189</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-vnv mr-3 fa-2x"></i>
					 				<div>vnv <div class="opacity-50">f40b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-volleyball-ball mr-3 fa-2x"></i>
					 				<div>volleyball-ball <div class="opacity-50">f45f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-volume-down mr-3 fa-2x"></i>
					 				<div>volume-down <div class="opacity-50">f027</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-volume-mute mr-3 fa-2x"></i>
					 				<div>volume-mute <div class="opacity-50">f6a9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-volume-off mr-3 fa-2x"></i>
					 				<div>volume-off <div class="opacity-50">f026</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-volume-up mr-3 fa-2x"></i>
					 				<div>volume-up <div class="opacity-50">f028</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-vote-yea mr-3 fa-2x"></i>
					 				<div>vote-yea <div class="opacity-50">f772</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-vr-cardboard mr-3 fa-2x"></i>
					 				<div>vr-cardboard <div class="opacity-50">f729</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-vuejs mr-3 fa-2x"></i>
					 				<div>vuejs <div class="opacity-50">f41f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-walking mr-3 fa-2x"></i>
					 				<div>walking <div class="opacity-50">f554</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-wallet mr-3 fa-2x"></i>
					 				<div>wallet <div class="opacity-50">f555</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-warehouse mr-3 fa-2x"></i>
					 				<div>warehouse <div class="opacity-50">f494</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-water mr-3 fa-2x"></i>
					 				<div>water <div class="opacity-50">f773</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-weebly mr-3 fa-2x"></i>
					 				<div>weebly <div class="opacity-50">f5cc</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-weibo mr-3 fa-2x"></i>
					 				<div>weibo <div class="opacity-50">f18a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-weight mr-3 fa-2x"></i>
					 				<div>weight <div class="opacity-50">f496</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-weight-hanging mr-3 fa-2x"></i>
					 				<div>weight-hanging <div class="opacity-50">f5cd</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-weixin mr-3 fa-2x"></i>
					 				<div>weixin <div class="opacity-50">f1d7</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-whatsapp mr-3 fa-2x"></i>
					 				<div>whatsapp <div class="opacity-50">f232</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-whatsapp-square mr-3 fa-2x"></i>
					 				<div>whatsapp-square <div class="opacity-50">f40c</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-wheelchair mr-3 fa-2x"></i>
					 				<div>wheelchair <div class="opacity-50">f193</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-whmcs mr-3 fa-2x"></i>
					 				<div>whmcs <div class="opacity-50">f40d</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-wifi mr-3 fa-2x"></i>
					 				<div>wifi <div class="opacity-50">f1eb</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-wikipedia-w mr-3 fa-2x"></i>
					 				<div>wikipedia-w <div class="opacity-50">f266</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-wind mr-3 fa-2x"></i>
					 				<div>wind <div class="opacity-50">f72e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-window-close mr-3 fa-2x"></i>
					 				<div>window-close <div class="opacity-50">f410</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-window-close mr-3 fa-2x"></i>
					 				<div>window-close <div class="opacity-50">f410</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-window-maximize mr-3 fa-2x"></i>
					 				<div>window-maximize <div class="opacity-50">f2d0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-window-maximize mr-3 fa-2x"></i>
					 				<div>window-maximize <div class="opacity-50">f2d0</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-window-minimize mr-3 fa-2x"></i>
					 				<div>window-minimize <div class="opacity-50">f2d1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-window-minimize mr-3 fa-2x"></i>
					 				<div>window-minimize <div class="opacity-50">f2d1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-window-restore mr-3 fa-2x"></i>
					 				<div>window-restore <div class="opacity-50">f2d2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="far fa-window-restore mr-3 fa-2x"></i>
					 				<div>window-restore <div class="opacity-50">f2d2</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-windows mr-3 fa-2x"></i>
					 				<div>windows <div class="opacity-50">f17a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-wine-bottle mr-3 fa-2x"></i>
					 				<div>wine-bottle <div class="opacity-50">f72f</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-wine-glass mr-3 fa-2x"></i>
					 				<div>wine-glass <div class="opacity-50">f4e3</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-wine-glass-alt mr-3 fa-2x"></i>
					 				<div>wine-glass-alt <div class="opacity-50">f5ce</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-wix mr-3 fa-2x"></i>
					 				<div>wix <div class="opacity-50">f5cf</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-wizards-of-the-coast mr-3 fa-2x"></i>
					 				<div>wizards-of-the-coast <div class="opacity-50">f730</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-wolf-pack-battalion mr-3 fa-2x"></i>
					 				<div>wolf-pack-battalion <div class="opacity-50">f514</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-won-sign mr-3 fa-2x"></i>
					 				<div>won-sign <div class="opacity-50">f159</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-wordpress mr-3 fa-2x"></i>
					 				<div>wordpress <div class="opacity-50">f19a</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-wordpress-simple mr-3 fa-2x"></i>
					 				<div>wordpress-simple <div class="opacity-50">f411</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-wpbeginner mr-3 fa-2x"></i>
					 				<div>wpbeginner <div class="opacity-50">f297</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-wpexplorer mr-3 fa-2x"></i>
					 				<div>wpexplorer <div class="opacity-50">f2de</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-wpforms mr-3 fa-2x"></i>
					 				<div>wpforms <div class="opacity-50">f298</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-wpressr mr-3 fa-2x"></i>
					 				<div>wpressr <div class="opacity-50">f3e4</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-wrench mr-3 fa-2x"></i>
					 				<div>wrench <div class="opacity-50">f0ad</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-x-ray mr-3 fa-2x"></i>
					 				<div>x-ray <div class="opacity-50">f497</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-xbox mr-3 fa-2x"></i>
					 				<div>xbox <div class="opacity-50">f412</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-xing mr-3 fa-2x"></i>
					 				<div>xing <div class="opacity-50">f168</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-xing-square mr-3 fa-2x"></i>
					 				<div>xing-square <div class="opacity-50">f169</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-y-combinator mr-3 fa-2x"></i>
					 				<div>y-combinator <div class="opacity-50">f23b</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-yahoo mr-3 fa-2x"></i>
					 				<div>yahoo <div class="opacity-50">f19e</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-yandex mr-3 fa-2x"></i>
					 				<div>yandex <div class="opacity-50">f413</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-yandex-international mr-3 fa-2x"></i>
					 				<div>yandex-international <div class="opacity-50">f414</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-yelp mr-3 fa-2x"></i>
					 				<div>yelp <div class="opacity-50">f1e9</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-yen-sign mr-3 fa-2x"></i>
					 				<div>yen-sign <div class="opacity-50">f157</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fas fa-yin-yang mr-3 fa-2x"></i>
					 				<div>yin-yang <div class="opacity-50">f6ad</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-yoast mr-3 fa-2x"></i>
					 				<div>yoast <div class="opacity-50">f2b1</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-youtube mr-3 fa-2x"></i>
					 				<div>youtube <div class="opacity-50">f167</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-youtube-square mr-3 fa-2x"></i>
					 				<div>youtube-square <div class="opacity-50">f431</div></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-4">
							 	<div class="d-flex align-items-center">
						 			<i class="fab fa-zhihu mr-3 fa-2x"></i>
					 				<div>zhihu <div class="opacity-50">f63f</div></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /icons preview -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>