<!DOCTYPE html>
<html lang="ina">
<head>

<!-- Meta information -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

<!-- Title-->
 <title>{{ $page_title or "7 POS" }}</title>

<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset("/core/assets/ico/apple-touch-icon-144-precomposed.png") }}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset("/core/assets/ico/apple-touch-icon-114-precomposed.png") }}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset("/core/assets/ico/apple-touch-icon-72-precomposed.png") }}">
<link rel="apple-touch-icon-precomposed" href="{{ asset("/core/assets/ico/apple-touch-icon-57-precomposed.png") }}">
<link rel="shortcut icon" href="assets/ico/favicon.ico">

<!-- CSS Stylesheet-->
<link type="text/css" rel="stylesheet" href="{{ asset("/core/assets/css/bootstrap/bootstrap.min.css") }}" />
<link type="text/css" rel="stylesheet" href="{{ asset("/core/assets/css/bootstrap/bootstrap-themes.css") }}" />
<link type="text/css" rel="stylesheet" href="{{ asset("/core/assets/css/style.css") }}"  />

<!-- Styleswitch if  you don't chang theme , you can delete -->
<link type="text/css" rel="alternate stylesheet" media="screen" title="style1" href="{{ asset("/core/assets/css/styleTheme1.css") }}" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style2" href="{{ asset("/core/assets/css/styleTheme2.css") }}" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style3" href="{{ asset("/core/assets/css/styleTheme3.css") }}" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style4" href="{{ asset("/core/assets/css/styleTheme4.css") }}" />

</head>
<body class="leftMenu nav-collapse">
<div id="wrapper">
		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     HEADER  CONTENT     ///////////////
		//////////////////////////////////////////////////////////////////////
		-->
	<!-- Header -->
    @include('/layout/admin/header')

		<!-- //header-->
		
		
		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     SLIDE LEFT CONTENT     //////////
		//////////////////////////////////////////////////////////////////////
		-->
		<div id="nav">
				<div id="nav-title">
					<h3><strong>Hi</strong>, Nutprawee</h3>
				</div>
				<!-- //nav-title-->
				<div id="nav-scroll">
						<div class="avatar-slide">
						
								<span class="easy-chart avatar-chart" data-color="theme-inverse" data-percent="69" data-track-color="rgba(255,255,255,0.1)" data-line-width="5" data-size="118">
										<span class="percent"></span>
										<img alt="" src="assets/img/avatar.png" class="circle">
								</span>
								<!-- //avatar-chart-->
								
								<div class="avatar-detail">
										<p><button class="btn btn-inverse btn-sm"><i class="fa fa-pencil"></i> Edit Profile</button></p>
										<p><a href="#">@ Chaing Mai , TH</a></p>
										<span>12,110 Sales</span>
										<span>106 Follower</span>
								</div>
								<!-- //avatar-detail-->
								
								<div class="avatar-link btn-group btn-group-justified">
										<a class="btn" href="profile.html"  title="Portfolio"><i class="fa fa-briefcase"></i></a>
										<a class="btn"  data-toggle="modal" href="#md-notification" title="Notification">
												<i class="fa fa-bell-o"></i><em class="green"></em>
										</a>
										<a class="btn"  data-toggle="modal" href="#md-messages"  title="Messages">
												<i class="fa fa-envelope-o"></i><em class="active"></em>
										</a>
										<a class="btn" href="#menu-right" title="Contact List"><i class="fa fa-book"></i></a>
								</div>
								<!-- //avatar-link-->
								
						</div>
						<!-- //avatar-slide-->
						
						
						<div class="widget-collapse dark">
								<header>
										<a data-toggle="collapse" href="#collapseSummary"><i class="collapse-caret fa fa-angle-up"></i> Summary Order </a>
								</header>
								<section class="collapse in" id="collapseSummary">
										<div class="collapse-boby" style="padding:0">
										
												<div class="widget-mini-chart align-xs-left">
														<div class="pull-right" >
																<div class="sparkline mini-chart" data-type="bar" data-color="warning" data-bar-width="10" data-height="35">2,3,4,5,7,4,5</div>
														</div>
														<p>This week's balance</p>
														<h4>$12,788</h4>
												</div>
												<!-- //widget-mini-chart -->
												
												<div class="widget-mini-chart align-xs-right">
														<div class="pull-left">
																<div class="sparkline mini-chart" data-type="bar" data-color="theme" data-bar-width="10" data-height="45">2,3,7,5,4,6,6,3</div>
														</div>
														<p>This week sales</p>
														<h4>1,325 item</h4>
												</div>
												<!-- //widget-mini-chart -->
												
										</div>
										<!-- //collapse-boby-->
										
								</section>
								<!-- //collapse-->
						</div>
						<!-- //widget-collapse-->
						
						
						
						<div class="widget-collapse dark">
								<header>
										<a data-toggle="collapse" href="#collapseTasks"><i class="collapse-caret fa fa-angle-down"></i> (2) Tasks processing </a>
								</header>
								<section class="collapse" id="collapseTasks">
								
										<div class="collapse-boby">
										
												<div class="widget-slider">
														<p>Upload status</p>
														<div class="progress progress-dark progress-xs tooltip-in">
																<div class="progress-bar bg-darkorange" aria-valuetransitiongoal="75"></div>
														</div>
														<label class="progress-label">Master.zip 4 / 5 </label>
														<!-- //progress-->
														
														<div class="progress progress-dark progress-xs">
																<div class="progress-bar bg-theme-inverse" aria-valuetransitiongoal="45"></div>
														</div>
														<label class="progress-label lasted">Profile 2 / 5 </label>
														<!-- //progress-->
														
												</div>
												<!-- //widget-slider-->
												
										</div>
										<!-- //collapse-boby-->
										
								</section>
								<!-- //collapse-->
						</div>
						<!-- //widget-collapse-->
						
						
						
						<div class="widget-collapse dark">
								<header>
										<a data-toggle="collapse" href="#collapseSetting"><i class="collapse-caret fa fa-angle-up"></i> Setting Option </a>
								</header>
								<section class="collapse in" id="collapseSetting">
										<div class="collapse-boby" style="padding:0">
										
												<ul class="widget-slide-setting">
														<li>
																<div class="ios-switch theme pull-right">
																		<div class="switch"><input type="checkbox" name="option"></div>
																</div>
																<label>Switch <span>OFF</span></label>
																<small>Lorem ipsum dolor sit amet</small>
														</li>
														<li>
																<div class="ios-switch theme-inverse pull-right">
																		<div class="switch"><input type="checkbox" name="option_1" checked></div>
																</div>
																<label>Switch <span>ON</span></label>
																<small>Lorem ipsum dolor sit amet</small>
														</li>
												</ul>
												<!-- //widget-slide-setting-->
												
										</div>
										<!-- //collapse-boby-->
										
								</section>
								<!-- //collapse-->
						</div>
						<!-- //widget-collapse-->
						
						
				</div>
				<!-- //nav-scroller-->
		</div>
		<!-- //nav-->
		
		
		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     TOP SEARCH CONTENT     ///////
		//////////////////////////////////////////////////////////////////////
		-->
		<div class="widget-top-search">
			<span class="icon"><a href="#" class="close-header-search"><i class="fa fa-times"></i></a></span>
			<form id="top-search">
					<h2><strong>Quick</strong> Search</h2>
					<div class="input-group">
							<input  type="text" name="q" placeholder="Find something..." class="form-control" />
							<span class="input-group-btn">
							<button class="btn" type="button" title="With Sound"><i class="fa fa-microphone"></i></button>
							<button class="btn" type="button" title="Visual Keyboard"><i class="fa fa-keyboard-o"></i></button>
							<button class="btn" type="button" title="Advance Search"><i class="fa fa-th"></i></button>
							</span>
					</div>
			</form>
		</div>
		<!-- //widget-top-search-->
		
		
		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     MAIN SHOW CONTENT     //////////
		//////////////////////////////////////////////////////////////////////
		-->
		<div id="main">

				<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Library</a></li>
						<li class="active">Data</li>
				</ol>
				<!-- //breadcrumb-->

				<div id="content">

						<div class="row">
								<div class="col-md-8">
									<section class="panel">
										<header class="panel-heading no-borders  bg-purple-darken">
												<h2><strong>Vector</strong> map</h2><br>
										</header>
										<div id="vmap"></div>
										<div class="panel-body">
											<div class="row">
												<div class="col-md-7">
														<h3><strong>Customer </strong> Returning</h3>
														<br>
														<div class="progress progress-sm">
																<div class="progress-bar bg-purple" aria-valuetransitiongoal="45"></div>
														</div>
														<label class="progress-label">United States 45%</label>
														<!-- //progress-->
														<div class="progress progress-sm">
																<div class="progress-bar bg-danger" aria-valuetransitiongoal="62"></div>
														</div>
														<label class="progress-label">France 62%</label>
														<!-- //progress-->
														<div class="progress progress-shine progress-sm">
																<div class="progress-bar bg-inverse" aria-valuetransitiongoal="57"></div>
														</div>
														<label class="progress-label">Australia 57%</label>
														<!-- //progress-->
														<div class="progress progress-sm">
																<div class="progress-bar bg-theme-inverse" aria-valuetransitiongoal="33"></div>
														</div>
														<label class="progress-label">Brazil 33%</label>
														<!-- //progress-->
														<div class="progress progress-sm">
																<div class="progress-bar bg-info" aria-valuetransitiongoal="24"></div>
														</div>
														<label class="progress-label">Thailand 24%</label>
														<!-- //progress-->
												</div>
												<div class="col-md-5">
														<h3><strong>Country</strong> Visits</h3>
														<br>
														<ol class="rectangle-list">
																<li><a href="#">Canada <span class="pull-right">17,485</span></a></li>
																<li><a href="#">Brazil <span class="pull-right">11,452</span></a></li>		
																<li><a href="#">France <span class="pull-right">9,875</span></a></li>
																<li><a href="#">Thailand <span class="pull-right">9,214</span></a></li>	
														</ol>
												</div>
											</div>
										</div>
									</section>
									
										<section class="panel bg-inverse">
												<div class="tabbable">
														<ul class="nav nav-tabs chart-change">
																<li><a href="javascript:void(0)" data-change-type="bars" data-for-id="#stack-chart"><i class="fa fa-bar-chart-o"></i> &nbsp; Bars Chart</a></li>
																<li class="active"><a href="javascript:void(0)" data-change-type="lines" data-for-id="#stack-chart"><i class="fa fa-qrcode"></i> &nbsp; Lines Chart</a></li>
														</ul>
														<div class="tab-content">
															   <div class="tab-pane fade in active">
																	<div class="widget-chart chart-dark">
																			<table id="stack-chart" data-stack="true" class="flot-chart" data-type="lines"  data-yaxis-max="3000" data-tool-tip="show" data-width="100%" data-height="300px"  data-bar-width="0.5" data-tick-color="rgba(0,0,0,0.05)">
																					<thead>
																							<tr>
																									<th></th>
																									<th style="color : #3db9af;">Test</th>
																									<th style="color : #d9dfe3 ;">Page View</th>
																							</tr>
																					</thead>
																					<tbody>
																							<tr>
																									<th>JAN</th>
																									<td>250</td>
																									<td>295</td>
																							</tr>
																							<tr>
																									<th>FEB</th>
																									<td>145</td>
																									<td>425</td>
																							</tr>
																							<tr>
																									<th>MAR</th>
																									<td>758</td>
																									<td>986</td>
																							</tr>
																							<tr>
																									<th>APR</th>
																									<td>475</td>
																									<td>548</td>
																							</tr>
																							<tr>
																									<th>MAY</th>
																									<td>452</td>
																									<td>441</td>
																							</tr>
																							<tr>
																									<th>JUN</th>
																									<td>112</td>
																									<td>257</td>
																							</tr>
																							<tr>
																									<th>JUL</th>
																									<td>857</td>
																									<td>546</td>
																							</tr>
																							<tr>
																									<th>AUG</th>
																									<td>200</td>
																									<td>125</td>
																							</tr>
																							<tr>
																									<th>SEP</th>
																									<td>55</td>
																									<td>147</td>
																							</tr>
																							<tr>
																									<th>OCT</th>
																									<td>1900</td>
																									<td>315</td>
																							</tr>
																							<tr>
																									<th>NOV</th>
																									<td>578</td>
																									<td>425</td>
																							</tr>
																							<tr>
																									<th>DEC</th>
																									<td>1900</td>
																									<td>865</td>
																							</tr>
																					</tbody>
																			</table>
																	</div>
															   </div>
														</div>
												</div>
										</section>
										
										<section class="panel">
												<div class="panel-body">
														<div class="table-responsive">
																<table class="table table-striped table-hover" data-provide="data-table">
																		<thead>
																				<tr>
																						<th> Photo </th>
																						<th> Fullname </th>
																						<th> Username </th>
																						<th> Status </th>
																						<th>  View</th>
																				</tr>
																		</thead>
																		<tbody align="center">
																				<tr >
																						<td><img src="assets/img/avatar.png" alt="" class="img-circle avatar-mini"></td>
																						<td> Mark Nilson </td>
																						<td> makr124 </td>
																						<td><span class="label label-sm bg-theme-inverse"> Approved </span></td>
																						<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																				</tr>
																				<tr>
																						<td><img src="assets/img/avatar2.png" alt="" class="img-circle avatar-mini"></td>
																						<td> Filip Rolton </td>
																						<td> jac123 </td>
																						<td><span class="label label-sm bg-darkorange"> Pending </span></td>
																						<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																				</tr>
																				<tr>
																						<td><img src="assets/img/avatar3.png" alt="" class="img-circle avatar-mini"></td>
																						<td> Colin Fox </td>
																						<td> col </td>
																						<td><span class="label label-sm bg-theme"> Blocked </span</td>
																						<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																				</tr>
																				<tr>
																						<td><img src="assets/img/avatar.png" alt="" class="img-circle avatar-mini"></td>
																						<td> Nick Stone </td>
																						<td> sanlim </td>
																						<td><span class="label label-sm bg-theme-inverse"> Approved </span></td>
																						<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																				</tr>
																				<tr>
																						<td><img src="assets/img/avatar5.png" alt="" class="img-circle avatar-mini"></td>
																						<td> Edward Cook </td>
																						<td> sanlim </td>
																						<td><span class="label label-sm bg-theme"> Blocked </span</td>
																						<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																				</tr>
																				<tr>
																						<td><img src="assets/img/avatar.png" alt="" class="img-circle avatar-mini"></td>
																						<td> Nick Stone </td>
																						<td> sanlim </td>
																						<td><span class="label label-sm bg-theme"> Blocked </span></td>
																						<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																				</tr>
																				<tr>
																						<td><img src="assets/img/avatar6.png" alt="" class="img-circle avatar-mini"></td>
																						<td> Elis Lim </td>
																						<td> makr124 </td>
																						<td><span class="label label-sm bg-theme-inverse"> Approved </span></td>
																						<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																				</tr>
																				<tr>
																						<td><img src="assets/img/avatar2.png" alt="" class="img-circle avatar-mini"></td>
																						<td> King Paul </td>
																						<td> king123 </td>
																						<td><span class="label label-sm bg-info"> Pending </span></td>
																						<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																				</tr>
																				<tr>
																						<td><img src="assets/img/avatar3.png" alt="" class="img-circle avatar-mini"></td>
																						<td> Filip Larson </td>
																						<td> fil </td>
																						<td><span class="label label-sm bg-theme-inverse"> Approved </span></td>
																						<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																				</tr>
																				<tr>
																						<td><img src="assets/img/avatar4.png" alt="" class="img-circle avatar-mini"></td>
																						<td> Martin Larson </td>
																						<td> larson12 </td>
																						<td><span class="label label-sm bg-theme"> Blocked </span></td>
																						<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																				</tr>
																				<tr>
																						<td><img src="assets/img/avatar5.png" alt="" class="img-circle avatar-mini"></td>
																						<td> King Paul </td>
																						<td> sanlim </td>
																						<td><span class="label label-sm bg-theme"> Blocked </span></td>
																						<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																				</tr>
																		</tbody>
																</table>
														</div>
												</div>
										</section>
								</div>
								<div class="col-md-4">
								
										<div class="well bg-theme-inverse">
												<div class="widget-tile">
													<section>
															<h5><strong>PAGES</strong> VIEWER </h5>
															<h2>97,584</h2>
															<div class="progress progress-xs progress-white progress-over-tile">
																	<div class="progress-bar  progress-bar-white" aria-valuetransitiongoal="97584" aria-valuemax="300000"></div>
															</div>
															<label class="progress-label label-white">32.53% of  viewer target</label>
													</section>
													<div class="hold-icon"><i class="fa fa-laptop"></i></div>
												</div>
										</div>
										
										<div class="well bg-theme">
												<div class="widget-tile">
													<section>
															<h5><strong>REGISTERED</strong> USERS </h5>
															<h2>8,590</h2>
															<div class="progress progress-xs progress-white progress-over-tile">
																	<div class="progress-bar  progress-bar-white" aria-valuetransitiongoal="8590" aria-valuemax="10000"></div>
															</div>
															<label class="progress-label label-white"> Just 1410 member to limit , <a href="#">Upgrade Now</a> </label>
													</section>
													<div class="hold-icon"><i class="fa fa-bar-chart-o"></i></div>
												</div>
										</div>
										
										<section class="panel">
												<header class="panel-heading no-borders">
														<label class="color">Custom <strong>Label and Title </strong></label>
												</header>												
														<div class="widget-chart">
																<div class="label-flot-custom-title"><span>Analysis title</span></div>
																<table id="example_pieDonut" class="flot-chart" data-type="pie" data-inner-radius="0.7" data-pie-style="shadow" data-tool-tip="show" data-width="100%" data-height="220px" >
																		<thead>
																				<tr>
																						<th></th>
																						<th style="color : #3db9af;">Other</th>
																						<th style="color : #DC4D79;">Webboard</th>
																						<th style="color : #BD3B47;">Article</th>
																						<th style="color : #DD4444;">Other</th>
																						<th style="color : #FD9C35;">Product Review</th>
																						<th style="color : #FEC42C;">Webboard</th>
																						<th style="color : #D4DF5A;">Article</th>
																						<th style="color : #575757;">Product Review</th>
																				</tr>
																		</thead>
																		<tbody>
																				<tr>
																						<th></th>
																						<td>44</td>
																						<td>8</td>
																						<td>8</td>
																						<td>8</td>
																						<td>8</td>
																						<td>8</td>
																						<td>8</td>
																						<td>8</td>
																				</tr>
																		</tbody>
																</table>
														</div><!-- // widget-chart -->
												
														<div class="panel-group" id="accordion">
																  <div class="panel panel-shadow">
																	    <header class="panel-heading bg-inverse" style="padding:0 10px; margin:20px">
																			<a class=" color-white" data-toggle="collapse" data-parent="#accordion" href="#accordionOne">
																				<i class="collapse-caret fa fa-angle-up"></i> Analysis  Chart
																			</a>
																	    </header>
																	    <div id="accordionOne" class="panel-collapse collapse">
																			 <div class="panel-body text-center">
																				<div class="label-flot-custom" data-flot-id="#example_pieDonut"></div>
																			 </div>
																				 <!-- //panel-body -->
																		    </div>
																		    <!-- //panel-collapse -->
																  </div>
																  <!-- //panel -->
														</div>
														<!-- //panel-group -->

										</section>	
										
										<section class="panel">
												<div class="widget-friend clearfix">
														<ul class="circle clearfix">
																<li>548 Follower Friends</li>
																<li class="online" title="zicdemo"><img alt="" src="assets/img/avatar.png"></li>
																<li class="online"><img alt="" src="assets/img/avatar2.png"></li>
																<li><img alt="" src="assets/img/avatar3.png"></li>
																<li class="online"><img alt="" src="assets/img/avatar4.png"></li>
																<li ><img alt="" src="assets/img/avatar5.png"></li>
																<li class="busy"><img alt="" src="assets/img/avatar6.png"></li>
																<li class="online"><img alt="" src="assets/photos_preview/50/people/1.jpg"></li>
																<li class="online"><img alt="" src="assets/photos_preview/50/people/2.jpg"></li>
																<li><a href="#"><i class="fa fa-plus"></i></a></li>
														</ul>
												</div>
												<footer class="panel-footer align-lg-right">
													<a href="#" >+ 542 more</a>
												</footer>
										</section>
										
										<section class="panel bg-inverse">
													<div id="owl-demo" class="owl-carousel carousel-white overflow">
															<div><img src="assets/photos_preview/thumbs/video.jpg" class="img-responsive"  alt=" "></div>
															<div><img src="assets/photos_preview/thumbs/3.jpg" class="img-responsive" alt=" "></div>
															<div><img src="assets/photos_preview/thumbs/1.jpg" class="img-responsive" alt=" "></div>
													</div>
										</section>	
										
										<section class="panel">
												<div class="widget-plan">
														<header>
																<h3>Premium</h3>
																<p class="color-theme">$59 / year</p>
														</header>
														<section>
																<i class="fa fa-dashboard"></i>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
														</section>
														<footer>
																<button type="button" class="btn btn-theme">Choose</button>
														</footer>
												</div>
										</section>
										

										
								</div>
						</div>
						<!-- //content > row-->
						
				</div>
				<!-- //content-->
								
		</div>
		<!-- //main-->
		
		
		
		<!--
		///////////////////////////////////////////////////////////////////
		//////////     MODAL MESSAGES     //////////
		///////////////////////////////////////////////////////////////
		-->
		<div id="md-messages" class="modal fade md-slideUp bg-theme-inverse" tabindex="-1" data-width="450">
				<div class="modal-header bd-theme-inverse-darken">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
						<h4 class="modal-title"><i class="fa fa-inbox"></i> Inbox messages</h4>
				</div>
				<!-- //modal-header-->
				<div class="modal-body" style="padding:0">
						<div class="widget-im">
								<ul>
										<li>
												<section  class="thumbnail-in">
														<div class="widget-im-tools tooltip-area pull-right">
																<span>
																		<i class="fa fa-paperclip"></i>
																</span>
																<span>
																		<i class="fa fa-reply-all"></i>
																</span>
																<span>
																		<a href="javascript:void(0)" class="im-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
																</span>
																<span>
																		<time datetime="2013-11-16">1 : 52 am</time>
																</span>
														</div>
														<h4><a href="javascript:void(0)">Edlado Holder</a>
														</h4>
														<div class="im-thumbnail"><img alt="" src="assets/img/avatar2.png" /></div>
														<label></label>
														<div class="pre-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
												</section>
												<div class="im-confirm-group">
														<div class=" btn-group btn-group-justified">
																<a class="btn btn-inverse im-confirm" href="javascript:void(0)" data-confirm="yes">YES.</a>
																<a class="btn btn-theme im-confirm" href="javascript:void(0)" data-confirm="no">NO.</a>
														</div>
												</div>
										</li>
										<li>
												<section  class="thumbnail-in">
														<div class="widget-im-tools tooltip-area pull-right">
																<span>
																		<i class="fa fa-paperclip"></i>
																</span>
																<span>
																		<a href="javascript:void(0)" class="im-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
																</span>
																<span>
																		<time datetime="2013-11-16">12 : 00 pm</time>
																</span>
														</div>
														<h4><a href="javascript:void(0)">Laine Franchi</a>
														</h4>
														<div class="im-thumbnail"><i class="glyphicon glyphicon-user"></i></div>
														<div class="pre-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
												</section>
												<div class="im-confirm-group">
														<div class=" btn-group btn-group-justified">
																<a class="btn btn-inverse im-confirm" href="javascript:void(0)" data-confirm="yes">YES.</a>
																<a class="btn btn-theme im-confirm" href="javascript:void(0)" data-confirm="no">NO.</a>
														</div>
												</div>
										</li>
										<li>
												<section class="thumbnail-in">
														<div class="widget-im-tools tooltip-area pull-right">
																<span>
																		<a href="javascript:void(0)" class="im-delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
																</span>
																<span>
																		<time datetime="2013-11-16">4 : 45 pm</time>
																</span>
														</div>
														<h4><a href="javascript:void(0)">Cinda Collar</a>
														</h4>
														<div class="im-thumbnail"><img alt="" src="assets/img/avatar.png" /></div>
														<label data-color="theme"></label>
														<div class="pre-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
												</section>
												<div class="im-confirm-group">
														<div class=" btn-group btn-group-justified">
																<a class="btn btn-inverse im-confirm" href="javascript:void(0)" data-confirm="yes">YES.</a>
																<a class="btn btn-theme im-confirm" href="javascript:void(0)" data-confirm="no">NO.</a>
														</div>
												</div>
										</li>
								</ul>
								<button class="btn btn-inverse btn-block btn-lg" title="See More"><i class="fa fa-plus"></i></button>
						</div>
						<!-- //widget-im-->
				</div>
				<!-- //modal-body-->
		</div>
		<!-- //modal-->
		
		
		
		<!--
		//////////////////////////////////////////////////////////////////////////
		//////////     MODAL NOTIFICATION     //////////
		//////////////////////////////////////////////////////////////////////
		-->
		<div id="md-notification" class="modal fade md-stickTop bg-danger" tabindex="-1" data-width="500">
				<div class="modal-header bd-danger-darken">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
						<h4 class="modal-title"><i class="fa fa-bell-o"></i> Notification</h4>
				</div>
				<!-- //modal-header-->
				<div class="modal-body" style="padding:0">
						<div class="widget-im notification">
								<ul>
										<li>
												<section class="thumbnail-in">
														<div class="widget-im-tools tooltip-area pull-right">
																<span>
																		<time class="timeago lasted" datetime="2014">when you opened the page</time>
																</span>
																<span>
																		<a href="javascript:void(0)" class="im-action" data-toggle="tooltip" data-placement="left" title="Action"><i class="fa fa-keyboard-o"></i></a>
																</span>
														</div>
														<h4>Your request approved</h4>
														<div class="im-thumbnail bg-theme-inverse"><i class="fa fa-check"></i></div>
														<div class="pre-text">One Button (click to remove this)</div>
												</section>
												<div class="im-confirm-group">
														<div class=" btn-group btn-group-justified">
																<a class="btn btn-inverse im-confirm" href="javascript:void(0)" data-confirm="accept">Accept.</a>
														</div>
												</div>
										</li>
										<li>
												<section class="thumbnail-in">
														<div class="widget-im-tools tooltip-area pull-right">
																<span>
																		<time class="timeago" datetime="2013-11-17T14:24:17Z">timeago</time>
																</span>
																<span>
																		<a href="javascript:void(0)" class="im-action" data-toggle="tooltip" data-placement="left" title="Action"><i class="fa fa-keyboard-o"></i></a>
																</span>
														</div>
														<h4>Dashboard new design!! you want to see now ? </h4>
														<div class="im-thumbnail bg-theme"><i class="fa fa-bell-o"></i></div>
														<div class="pre-text">Two Button (with link and click to close this) Lorem ipsum dolor sit amet, consectetur adipisicing elit, </div>
												</section>
												<div class="im-confirm-group">
														<div class=" btn-group btn-group-justified">
																<a class="btn btn-inverse" href="dashboard.html">Go Now.</a>
																<a class="btn btn-theme im-confirm" href="javascript:void(0)" data-confirm="no">Later.</a>
														</div>
												</div>
										</li>
										<li>
												<section class="thumbnail-in">
														<div class="widget-im-tools tooltip-area pull-right">
																<span>
																		<time class="timeago" datetime="2013-11-17T01:24:17Z">timeago</time>
																</span>
																<span>
																		<a href="javascript:void(0)" class="im-action" data-toggle="tooltip" data-placement="left" title="Action"><i class="fa fa-keyboard-o"></i></a>
																</span>
														</div>
														<h4>Error 404 <small>( File not  found )</small></h4>
														<div class="im-thumbnail bg-warning"><i class="fa fa-exclamation-triangle"></i></div>
														<div class="pre-text">Two Button (click to  action and remove) </div>
												</section>
												<div class="im-confirm-group">
														<div class=" btn-group btn-group-justified">
																<a class="btn btn-inverse im-confirm" href="javascript:void(0)" data-confirm="accept">Accept.</a>
																<a class="btn btn-theme im-confirm" href="javascript:void(0)" data-confirm="actionNow">Fixed now.</a>
														</div>
												</div>
										</li>
										<li>
												<section class="thumbnail-in">
														<div class="widget-im-tools tooltip-area pull-right">
																<span>
																		<time class="timeago" datetime="2013-09-17T09:24:17Z">timeago</time>
																</span>
																<span>
																		<a href="javascript:void(0)" class="im-action" data-toggle="tooltip" data-placement="left" title="Action"><i class="fa fa-keyboard-o"></i></a>
																</span>
														</div>
														<h4>Upgrade Premium ?</h4>
														<div class="im-thumbnail bg-inverse">
																<i class="fa fa-cogs"></i></div>
														<div class="pre-text"> Three button (test action) </div>
												</section>
												<div class="im-confirm-group">
														<div class=" btn-group btn-group-justified">
																<a class="btn btn-inverse im-confirm" href="javascript:void(0)" data-confirm="actionNow">Now.</a>
																<a class="btn btn-theme im-confirm" href="javascript:void(0)" data-confirm="no">Later.</a>
																<a class="btn btn-danger im-confirm" href="javascript:void(0)" data-confirm="yes">Delete.</a>
														</div>
												</div>
										</li>
								</ul>
						</div>
						<!-- //widget-im-->
				</div>
				<!-- //modal-body-->
		</div>
		<!-- //modal-->
		
		
		
		<!--
		//////////////////////////////////////////////////////////////
		//////////     LEFT NAV MENU     //////////
		///////////////////////////////////////////////////////////
		-->
		<nav id="menu" data-search="close">
				<ul>
						<li><span><i class="icon  fa fa-laptop"></i> Dashboard</span>
								<ul>
										<li><a href="dashboard.html"><i class="icon  fa fa-rocket"></i> First Design </a></li>
										<li><a href="dashboard2.html"><i class="icon  fa fa-th"></i> Dashboard New </a></li>
								</ul>
						</li>
						<li><a href="front/index.html"><i class="icon  fa fa-rocket"></i> Front End </a></li>
						<li><span><i class="icon  fa fa-th-list"></i> Layout</span>
								<ul>
										<li class="Label label-lg">Main Layout</li>
										<li><a href="alwayMenu.html"> Alway Left  Menu </a></li>
										<li><a href="hideUserPanel.html"> Hide User Panel </a></li>
										<li><a href="hideUserPanelIn.html"> Show & Hide</a></li>
										<li class="Label label-lg">Other Layout</li>
										<li><a href="topMenu.html"> Top Menu</a></li>
										<li><a href="footerShow.html"> Footer Show</a></li>
										<li><a href="footerMenu.html"> Footer with menu</a></li>
								</ul>
						</li>
						<li><a href="mailBox.html"><i class="icon  fa fa-inbox"></i> Mail</a></li>
						<li><span><i class="icon  fa fa-briefcase"></i> UI Element</span>
								<ul>
										<li><a href="ui.html"> UI </a></li>
										<li><a href="ui_button.html"> Button </a></li>
										<li><a href="ui_icon.html"> Fonts Icon</a></li>
										<li><a href="ui_slide.html"> Slide</a></li>
										<li><a href="ui_modal.html"> Modal</a></li>
										<li><a href="ui_panel.html"> Panel</a></li>
										<li><a href="ui_alert.html"> Alert</a></li>
										<li><a href="ui_typography.html"> Typography</a></li>
										<li><a href="ui_nestable.html"> Nestable</a></li>
								</ul>
						</li>
						<li><span><i class="icon  fa fa-bar-chart-o"></i> Chart </span>
								<ul>
										<li><a href="chartFlot.html"> Flot Chart</a></li>
										<li><a href="chartMorris.html"> Morris Chart</a></li>
										<li><a href="chartOther.html"> Other Chart</a></li>
								</ul>
						</li>
						<li><a href="calendar.html"><i class="icon  fa fa-calendar-o"></i> Calendar </a></li>
						<li><span><i class="icon  fa fa-align-right"></i>Off  Canvas  Menu</span>
								<ul>
										<li><a href="menu.html"> Position </a></li>
										<li><a href="menuOpen.html"> Touch to open</a></li>
										<li><a href="menuVertical.html"> Vertical Level</a></li>
										<li><span> Unlimited Level </span>
												<ul>
														<li><a href="#"> Level 3 </a></li>
														<li><a href="#"> Level 3 </a></li>
														<li><span> Level 4</span>
																<ul>
																		<li><a href="#"> Level 4 </a></li>
																		<li><a href="#"> Level 4 </a></li>
																</ul>
														</li>
												</ul>
										</li>
								</ul>
						</li>
						<li><span><i class="icon  fa fa-clipboard"></i> From</span>
								<ul>
										<li><a href="form.html">Form Basic</a></li>
										<li><a href="formComponents.html">Form Components</a></li>
										<li><a href="formValidate.html">Form Validate</a></li>
										<li><a href="formWizard.html">Form Wizard</a></li>
										<li><a href="formMutiselect.html">Form Mutiseletion</a></li>
										<li><a href="form_x_edit.html">Form x-edit</a></li>
										<li><a href="drop_upload.html">Drop Upload</a></li>
								</ul>
						</li>
						<li><a href="fileManager.html"><i class="icon  fa fa-file-text"></i> File Manager </a></li>
						<li><span><i class="icon  fa fa-fire"></i> Table</span>
								<ul>
										<li><a href="table.html">Table Basic</a></li>
										<li><a href="tableResponsive.html">Table Responsive</a></li>
										<li><a href="tableDynamic.html">Data Table</a></li>
								</ul>
						</li>
						<li><span><i class="icon  fa fa-folder-open-o"></i> Other Page</span>
								<ul>
										<li><a href="login.html"> login </a></li>
										<li><a href="lockscreen.html"> Lockscreen </a></li>
										<li><a href="images_manager.html"> Images Manager</a></li>
										<li><a href="gallery.html"> Gallery</a></li>
										<li><a href="timeline.html"> Timeline</a></li>
										<li><a href="profile.html"> Profile</a></li>
										<li><a href="blankPage.html"> Blank Page</a></li>
										<li><a href="page_invoice.html"> Invoice</a></li>
										<li><a href="page_search.html"> Search result</a></li>
										<li><a href="pages_pricing.html"> Pricing Table</a></li>
										<li><a href="register.html"> Register</a></li>
										<li><a href="page_chat.html"> Full Chat</a></li>
								</ul>
						</li>
						<li><a href="map.html"><i class="icon  fa fa-map-marker"></i> Maps</a></li>
						<li><a href="404.html"><i class="icon  fa fa-exclamation-triangle"></i> Error Pages</a></li>
						<li><a href="siteMap.html"><i class="icon  fa fa-sitemap"></i>Site Map</a></li>
				</ul>
		</nav>
		<!-- //nav left menu-->
		
		
				<!--
		/////////////////////////////////////////////////////////////////
		//////////     RIGHT NAV MENU     //////////
		/////////////////////////////////////////////////////////////
		-->
		<nav id="menu-right">
				<ul>
						<li class="Label label-lg">Theme color</li>
						<li>
							<span class="text-center">
								<div id="style1" class="color-themes col1"></div>
								<div id="style2" class="color-themes col2" ></div>
								<div id="style3" class="color-themes col3" ></div>
								<div id="style4" class="color-themes col4" ></div>
								<div id="none" class="color-themes col5" ></div>
							</span>
						</li>
						<li class="Label label-lg">Contact Group</li>
						<li data-counter-color="theme">
								<span><i class="icon fa fa-smile-o"></i> Friends</span>
								<ul>
										<li class="Label">A</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/1.jpg" /> Alexa 
														<small>Johnson</small>
												</a>
										</li>
										<li class="img">
												<a href="#" class="busy">
														<img alt="" src="assets/photos_preview/50/people/2.jpg" /> Alexander 
														<small>Brown</small>
												</a>
										</li>
										<li class="Label">F</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/3.jpg" /> Fred
														<small>Smith</small>
												</a>
										</li>
										<li class="Label">J</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/4.jpg" /> James
														<small>Miller</small>
												</a>
										</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/5.jpg" /> Jefferson
														<small>Jackson</small>
												</a>
										</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/6.jpg" /> Jordan
														<small>Lee</small>
												</a>
										</li>
										<li class="Label">K</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/7.jpg" /> Kim
														<small>Adams</small>
												</a>
										</li>
										<li class="Label">M</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/8.jpg" /> Meagan
														<small>Miller</small>
												</a>
										</li>
										<li class="img">
												<a href="#" class="busy">
														<img alt="" src="assets/photos_preview/50/people/9.jpg" /> Melissa
														<small>Johnson</small>
												</a>
										</li>
										<li class="Label">N</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/10.jpg" /> Nicole
														<small>Smith</small>
												</a>
										</li>
										<li class="Label">S</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/1.jpg" /> Samantha
														<small>Harris</small>
												</a>
										</li>
										<li class="img">
												<a href="#" class="block">
														<img alt="" src="assets/photos_preview/50/people/2.jpg" /> Scott
														<small>Thompson</small>
												</a>
										</li>
								</ul>
						</li>
						<li>
								<span><i class="icon  fa fa-home"></i> Family</span>
								<ul>
										<li class="Label">A</li>
										<li class="img">
												<a href="#" class="busy">
														<img alt="" src="assets/photos_preview/50/people/3.jpg" /> Adam
														<small>White</small>
												</a>
										</li>
										<li class="Label">B</li>
										<li class="img">
												<a href="#" class="busy">
														<img alt="" src="assets/photos_preview/50/people/4.jpg" /> Ben
														<small>Robinson</small>
												</a>
										</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/5.jpg" /> Bruce
														<small>Lee</small>
												</a>
										</li>
										<li class="Label">E</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/6.jpg" /> Eddie
														<small>Williams</small>
												</a>
										</li>
										<li class="Label">J</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/7.jpg" /> Jack
														<small>Johnson</small>
												</a>
										</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/8.jpg" /> John
														<small>Jackman</small>
												</a>
										</li>
										<li class="Label">M</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/9.jpg" /> Martina
														<small>Thompson</small>
												</a>
										</li>
										<li class="img">
												<a href="#" class="busy">
														<img alt="" src="assets/photos_preview/50/people/10.jpg" /> Matthew
														<small>Watson</small>
												</a>
										</li>
										<li class="Label">O</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/1.jpg" /> Olivia
														<small>Taylor</small>
												</a>
										</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/2.jpg" /> Owen
														<small>Wilson</small>
												</a>
										</li>
								</ul>
						</li>
						<li data-counter-color="theme-inverse">
								<span><i class="icon  fa fa-briefcase"></i> Work colleagues</span>
								<ul>
										<li class="Label">D</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/3.jpg" /> David
														<small>Harris</small>
												</a>
										</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/4.jpg" /> Dennis
														<small>King</small>
												</a>
										</li>
										<li class="Label">E</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/5.jpg" /> Eliza
														<small>Walker</small>
												</a>
										</li>
										<li class="Label">L</li>
										<li class="img">
												<a href="#" class="busy">
														<img alt="" src="assets/photos_preview/50/people/6.jpg" /> Larry
														<small>Turner</small>
												</a>
										</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/7.jpg" /> Lisa<br />
														<small>Wilson</small>
												</a>
										</li>
										<li class="Label">M</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/8.jpg" /> Michael
														<small>Jordan</small>
												</a>
										</li>
										<li class="Label">R</li>
										<li class="img">
												<a href="#">
														<img alt="" src="assets/photos_preview/50/people/9.jpg" /> Rachelle
														<small>Cooper</small>
												</a>
										</li>
										<li class="img">
												<a href="#" class="online">
														<img alt="" src="assets/photos_preview/50/people/10.jpg" /> Rick
														<small>James</small>
												</a>
										</li>
								</ul>
						</li>
						<li class="Label label-lg">Total week Earnings</li>
						<li>
								<span><i class="icon  fa fa-bar-chart-o"></i> See This week</span>
								<ul>
										<li class="Label">themeforest</li>
										<li><span><i class="label label-warning pull-right">HTML</i> Earnings $395 </span></li>
										<li><span> Earnings $485 </span></li>
										<li><span><i class="label label-info pull-right">Wordpress</i> Earnings $1,589 </span></li>
										<li class="Label">codecanyon </li>
										<li><span><i class="label label-danger pull-right">Item 6537086</i> Earnings $897</span></li>
										<li><span>Sunday Earnings $395</span></li>
										<li class="Label">Other</li>
										<li><span><i class="label label-success  pull-right">up 35%</i> Total Earnings $5,025</span></li>
								</ul>
						</li>
						<li>
								<span>
									<div class="widget-mini-chart align-xs-right">
											<div class="pull-left">
													<div class="sparkline mini-chart" data-type="bar" data-color="warning" data-bar-width="10" data-height="45">2,3,7,5,4,6,6,3</div>
											</div>
											<p>This week Earnings</p>
											<h4>$11,987</h4>
								</div>
									<!-- //widget-mini-chart -->			
								</span>
						</li>	
						<li>
								<span>
									<div class="widget-collapse dark">
											<header>
													<a data-toggle="collapse" href="#collapseRightMenu"><i class="collapse-caret fa fa-angle-down"></i>Collaps Header </a>
											</header>
											<section class="collapse" id="collapseRightMenu">
													<div class="collapse-boby">
															<div class="widget-slider">
																	<p>Upload status</p>
																	<div class="progress progress-dark progress-xs tooltip-in">
																			<div class="progress-bar bg-darkorange" aria-valuetransitiongoal="75"></div>
																	</div>
																	<label class="progress-label">Master.zip 4 / 5 </label>
																	<!-- //progress-->
																	<div class="progress progress-dark progress-xs">
																			<div class="progress-bar bg-theme-inverse" aria-valuetransitiongoal="45"></div>
																	</div>
																	<label class="progress-label lasted">Profile 2 / 5 </label>
																	<!-- //progress-->
															</div>
															<!-- //widget-slider-->
													</div>
													<!-- //collapse-boby-->
											</section>
											<!-- //collapse-->
								</div>
									<!-- //widget-collapse-->
								</span>
						</li>	
						<li class="Label label-lg">Processing </li>
						<li>
								<span>								
						<p>Server Processing</p>
									<div class="progress progress-dark progress-stripes progress-xs">
											<div class="progress-bar bg-danger" aria-valuetransitiongoal="37"></div>
									</div>
									<label class="progress-label">Today , CPU 37%</label>
									<!-- //progress-->
									<div class="progress progress-dark progress-xs">
											<div class="progress-bar bg-warning" aria-valuetransitiongoal="23"></div>
									</div>
									<label class="progress-label lasted">Today , Server load  22.85%</label>
									<!-- //progress-->
								</span>
						</li>
						<li class="Label label-lg">Quick Friends Chat </li>
						<li class="img">
								<a href="#" class="online">
										<img alt="" src="assets/photos_preview/50/people/1.jpg" /> Olivia
										<small>Taylor</small>
								</a>
						</li>
						<li class="img">
								<a href="#" class="online">
										<img alt="" src="assets/photos_preview/50/people/2.jpg" /> Owen
										<small>Wilson</small>
								</a>
						</li>
						<li class="img">
								<a href="#">
										<img alt="" src="assets/photos_preview/50/people/8.jpg" /> Meagan
										<small>Miller</small>
								</a>
						</li>
						<li class="img">
								<a href="#" class="busy">
										<img alt="" src="assets/photos_preview/50/people/9.jpg" /> Melissa
										<small>Johnson</small>
								</a>
						</li>
						<li class="img">
								<a href="#" class="online">
										<img alt="" src="assets/photos_preview/50/people/5.jpg" /> Samantha
										<small>Harris</small>
								</a>
						</li>
						<li class="Label label-lg">visitors Real Time</li>
						<li>
								<span>
									<div class="widget-chart">
											<div id="realtimeChart" class="demo-placeholder" style="height:150px"></div>
											<div id="realtimeChartCount" class="align-lg-center"><span>0</span> visitors on site </div>
								</div><!-- // widget-chart -->
								</span>
						</li>	
				</ul>
		</nav>
		<!-- //nav right menu-->
		
		
</div>
<!-- //wrapper-->


<!--
////////////////////////////////////////////////////////////////////////
//////////     JAVASCRIPT  LIBRARY     //////////
/////////////////////////////////////////////////////////////////////
-->
		
<!-- Jquery Library -->
<script type="text/javascript" src="{{ asset("/core/assets/js/jquery.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("/core/assets/js/jquery.ui.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("/core/assets/plugins/bootstrap/bootstrap.min.js") }}"></script>
<!-- Modernizr Library For HTML5 And CSS3 -->
<script type="text/javascript" src="{{ asset("/core/assets/js/modernizr/modernizr.js") }}"></script>
<script type="text/javascript" src="{{ asset("/core/assets/plugins/mmenu/jquery.mmenu.js") }}"></script>
<script type="text/javascript" src="{{ asset("/core/assets/js/styleswitch.js") }}"></script>
<!-- Library 10+ Form plugins-->
<script type="text/javascript" src="{{ asset("/core/assets/plugins/form/form.js") }}"></script>
<!-- Datetime plugins -->
<script type="text/javascript" src="{{ asset("/core/assets/plugins/datetime/datetime.js") }}"></script>
<!-- Library Chart-->
<script type="text/javascript" src="{{ asset("/core/assets/plugins/chart/chart.js") }}"></script>
<!-- Library  5+ plugins for bootstrap -->
<script type="text/javascript" src="{{ asset("/core/assets/plugins/pluginsForBS/pluginsForBS.js") }}"></script>
<!-- Library 10+ miscellaneous plugins -->
<script type="text/javascript" src="{{ asset("/core/assets/plugins/miscellaneous/miscellaneous.js") }}"></script>
<!-- Library Themes Customize-->
<script type="text/javascript" src="{{ asset("/core/assets/js/caplet.custom.js") }}"></script>
<!-- Library jqvmap -->
<script src="{{ asset("/core/assets/plugins/vmap/jquery.vmap.js") }}" type="text/javascript"></script>
<script src="{{ asset("/core/assets/plugins/vmap/maps/jquery.vmap.world.js") }}" type="text/javascript"></script>
<script src="{{ asset("/core/assets/plugins/vmap/data/jquery.vmap.sampledata.js") }}" type="text/javascript"></script>
<!-- Library Owl Carousel  -->
<script type="text/javascript" src="{{ asset("/core/assets/plugins/owl-carousel/owl.carousel.js") }}"></script>
<link href="{{ asset("/core/assets/plugins/owl-carousel/owl.carousel.css") }}" rel="stylesheet">
<link href="{{ asset("/core/assets/plugins/owl-carousel/owl.theme.css") }}" rel="stylesheet">
<link href="{{ asset("/core/assets/plugins/owl-carousel/owl.transitions.css") }}" rel="stylesheet">
<!-- Library datable -->
<script type="text/javascript" src="{{ asset("/core/assets/plugins/datable/jquery.dataTables.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("/core/assets/plugins/datable/dataTables.bootstrap.js") }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#vmap').vectorMap({
			map: 'world_en',
			backgroundColor: '#736086',
			color: '#ffffff',
			hoverOpacity: 0.7,
			selectedColor: '#666666',
			enableZoom: true,
			showTooltip: true,
			values: sample_data,
			scaleColors: ["#0aa699", "#0bbeaf"],
			normalizeFunction: 'polynomial'
		});
		$("#owl-demo").owlCarousel({
			autoPlay : 5000,
			stopOnHover : true,
			paginationSpeed : 5000,
			goToFirstSpeed : 3000,
			singleItem : true,
			autoHeight : true,
			transitionStyle:"fade"
		});
		$('table[data-provide="data-table"]').dataTable({
			"iDisplayLength": 5
		});
	});
</script>
</body>
</html>
