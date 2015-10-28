@extends('layout.master')

<!-- Title-->
@section('title', '7 POS - Admin')

<!--css-->
@section('topcss')
	@include('/layout/admin/topcss')
@endsection

<!--style-->
@section('topstyle')
	@include('/layout/admin/topstyle ')
@endsection

<!--script-->
@section('topscript')
	@include('/layout/admin/topscript')
@endsection

 
<!--div id="wrapper"-->
		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     HEADER  CONTENT     ///////////////
		//////////////////////////////////////////////////////////////////////
		-->
	<!-- Header -->
	@section('header')
    	@include('/layout/admin/header')
    @endsection
		<!-- //header-->
		
		
		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     SLIDE LEFT CONTENT     //////////
		//////////////////////////////////////////////////////////////////////
		-->
		@section('sidenav')
	    	@include('/layout/admin/sidenav')
	    @endsection
		<!-- //nav-->
		
		
		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     TOP SEARCH CONTENT     ///////
		//////////////////////////////////////////////////////////////////////
		-->
		@section('topsearch')
			@include('/layout/admin/topsearch')
		@endsection
		<!-- //widget-top-search-->
		
		
		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     MAIN SHOW CONTENT     //////////
		//////////////////////////////////////////////////////////////////////
		-->
				
	@section('content')
			@parent

            <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Data</li>
            </ol>

			<div class="content">
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
																			<td><img src="{{ asset("/core/assets/img/avatar.png") }}" alt="" class="img-circle avatar-mini"></td>
																			<td> Mark Nilson </td>
																			<td> makr124 </td>
																			<td><span class="label label-sm bg-theme-inverse"> Approved </span></td>
																			<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																	</tr>
																	<tr>
																			<td><img src="{{ asset("/core/assets/img/avatar2.png") }}" alt="" class="img-circle avatar-mini"></td>
																			<td> Filip Rolton </td>
																			<td> jac123 </td>
																			<td><span class="label label-sm bg-darkorange"> Pending </span></td>
																			<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																	</tr>
																	<tr>
																			<td><img src="{{ asset("/core/assets/img/avatar3.png") }}" alt="" class="img-circle avatar-mini"></td>
																			<td> Colin Fox </td>
																			<td> col </td>
																			<td><span class="label label-sm bg-theme"> Blocked </span</td>
																			<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																	</tr>
																	<tr>
																			<td><img src="{{ asset("/core/assets/img/avatar.png") }}" alt="" class="img-circle avatar-mini"></td>
																			<td> Nick Stone </td>
																			<td> sanlim </td>
																			<td><span class="label label-sm bg-theme-inverse"> Approved </span></td>
																			<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																	</tr>
																	<tr>
																			<td><img src="{{ asset("/core/assets/img/avatar5.png") }}" alt="" class="img-circle avatar-mini"></td>
																			<td> Edward Cook </td>
																			<td> sanlim </td>
																			<td><span class="label label-sm bg-theme"> Blocked </span</td>
																			<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																	</tr>
																	<tr>
																			<td><img src="{{ asset("/core/assets/img/avatar.png") }}" alt="" class="img-circle avatar-mini"></td>
																			<td> Nick Stone </td>
																			<td> sanlim </td>
																			<td><span class="label label-sm bg-theme"> Blocked </span></td>
																			<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																	</tr>
																	<tr>
																			<td><img src="{{ asset("/core/assets/img/avatar6.png") }}" alt="" class="img-circle avatar-mini"></td>
																			<td> Elis Lim </td>
																			<td> makr124 </td>
																			<td><span class="label label-sm bg-theme-inverse"> Approved </span></td>
																			<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																	</tr>
																	<tr>
																			<td><img src="{{ asset("/core/assets/img/avatar2.png") }}" alt="" class="img-circle avatar-mini"></td>
																			<td> King Paul </td>
																			<td> king123 </td>
																			<td><span class="label label-sm bg-info"> Pending </span></td>
																			<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																	</tr>
																	<tr>
																			<td><img src="{{ asset("/core/assets/img/avatar3.png") }}" alt="" class="img-circle avatar-mini"></td>
																			<td> Filip Larson </td>
																			<td> fil </td>
																			<td><span class="label label-sm bg-theme-inverse"> Approved </span></td>
																			<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																	</tr>
																	<tr>
																			<td><img src="{{ asset("/core/assets/img/avatar4.png") }}" alt="" class="img-circle avatar-mini"></td>
																			<td> Martin Larson </td>
																			<td> larson12 </td>
																			<td><span class="label label-sm bg-theme"> Blocked </span></td>
																			<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																	</tr>
																	<tr>
																			<td><img src="{{ asset("/core/assets/img/avatar5.png") }}" alt="" class="img-circle avatar-mini"></td>
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
													<li class="online" title="zicdemo"><img alt="" src="{{ asset("/core/assets/img/avatar.png") }}"></li>
													<li class="online"><img alt="" src="{{ asset("/core/assets/img/avatar2.png") }}"></li>
													<li><img alt="" src="{{ asset("/core/assets/img/avatar3.png") }}"></li>
													<li class="online"><img alt="" src="{{ asset("/core/assets/img/avatar4.png") }}"></li>
													<li ><img alt="" src="{{ asset("/core/assets/img/avatar5.png") }}"></li>
													<li class="busy"><img alt="" src="{{ asset("/core/assets/img/avatar6.png") }}"></li>
													<li class="online"><img alt="" src="{{ asset("/core/assets/photos_preview/50/people/1.jpg") }}"></li>
													<li class="online"><img alt="" src="{{ asset("/core/assets/photos_preview/50/people/2.jpg") }}"></li>
													<li><a href="#"><i class="fa fa-plus"></i></a></li>
											</ul>
									</div>
									<footer class="panel-footer align-lg-right">
										<a href="#" >+ 542 more</a>
									</footer>
							</section>
							
							<section class="panel bg-inverse">
										<div id="owl-demo" class="owl-carousel carousel-white overflow">
												<div><img src="{{ asset("/core/assets/photos_preview/thumbs/video.jpg") }}" class="img-responsive"  alt=" "></div>
												<div><img src="{{ asset("/core/assets/photos_preview/thumbs/3.jpg") }}" class="img-responsive" alt=" "></div>
												<div><img src="{{ asset("/core/assets/photos_preview/thumbs/1.jpg") }}" class="img-responsive" alt=" "></div>
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
	@endsection
				<!-- //content-->
								
		<!-- //main-->
		
		
		
		<!--
		///////////////////////////////////////////////////////////////////
		//////////     MODAL MESSAGES     //////////
		///////////////////////////////////////////////////////////////
		-->
		@section('append')
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
															<div class="im-thumbnail"><img alt="" src="{{ asset("/core/assets/img/avatar2.png") }}" /></div>
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
															<div class="im-thumbnail"><img alt="" src="{{ asset("/core/assets/img/avatar.png") }}" /></div>
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
		@endsection
		
		
		<!--
		//////////////////////////////////////////////////////////////
		//////////     LEFT NAV MENU     //////////
		///////////////////////////////////////////////////////////
		-->
		@section('menuleft')
			@include('/layout/admin/menuleft')
		@endsection
		<!-- //nav left menu-->
		
		
				<!--
		/////////////////////////////////////////////////////////////////
		//////////     RIGHT NAV MENU     //////////
		/////////////////////////////////////////////////////////////
		-->
		@section('menuright')
			@include('/layout/admin/menuright')
		@endsection
		<!-- //nav right menu-->

<!-- //wrapper-->


<!--
////////////////////////////////////////////////////////////////////////
//////////     JAVASCRIPT  LIBRARY     //////////
/////////////////////////////////////////////////////////////////////
-->
@section('anotherscript')

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
	            /*$('table[data-provide="data-table"]').dataTable({
	                "iDisplayLength": 5
	            });*/
	        });
	    </script>
@endsection
