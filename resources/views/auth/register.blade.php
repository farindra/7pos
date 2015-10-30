@extends('layout.master',['class_body'=> 'full-lg'])

<!-- Title-->
@section('title')
   {{ $page_title or "7 POS" }}
@endsection

@section('meta')
   <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

<!--css-->
@section('topcss')
	@include('/layout/admin/topcss')
@endsection

<!--style-->
@section('topstyle')
	@include('/layout/admin/topstyle ')


	<style>
	#validate-wizard{
		width:330px;
		margin:auto;
		}
	</style>
@endsection

@section('topscript')
	@include('/layout/admin/topscript')
@endsection

@section('first')
	<div id="loading-top">
			<div id="canvas_loading"></div>
			<span>Checking...</span>
	</div>
@endsection

@section('content')
		<div class="real-border">
				<div class="row">
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
				</div>
		</div>
		<div class="container">
				<div class="row">
						<div class="col-lg-12">
						
								<div class="account-wall">
										<section class="align-lg-center">
										<div class="site-logo"></div>
										<h1 class="login-title"><span>sign</span>up <small> {{ $app->title or '7 POS Ver. 1.0'}} </small></h1>
										<br>
										</section>

										@if (count($errors) > 0)
										    <div class="alert alert-danger">
										        <ul>
										            @foreach ($errors->all() as $error)
										                <li></li>
										            @endforeach
										        </ul>
										    </div>
										@endif
										
										<form id="validate-wizard" class="wizard-step shadow">
												<ul class="align-lg-center" style="display:none">
														<li><a href="#step1" data-toggle="tab">1</a></li>
														<li><a href="#step2" data-toggle="tab">2</a></li>
														<li><a href="#step3" data-toggle="tab">3</a></li>
												</ul>
												<div class="progress progress-stripes progress-sm" style="margin:0">
														<div class="progress-bar" data-color="theme"></div>
												</div>
												<div class="tab-content">
														<div class="tab-pane fade" id="step1" parsley-validate parsley-bind> 
																<div class="form-group">
																		<label class="control-label">Email Address</label>
																		<input type="text" name="email" id="email" class="form-control" parsley-type="email" parsley-required="true" placeholder="contoh@contoh.com">
																        <input type="hidden" name="field" id="field" class="form-control">
																        <input type="hidden" name="values" id="values" class="form-control"> 
																    
																        <label class="control-label" id="notif_email">matamu</label>
																</div>
																<div class="form-group">
																		<label class="control-label">User name</label>
																		<input type="text" name="username" id="username" class="form-control"  parsley-rangelength="[6,15]"  parsley-required="true" parsley-trigger="keyup" placeholder="8-15 Karakter">
																</div>
														</div>
														<div class="tab-pane fade" id="step2" parsley-validate parsley-bind>
																<h3>Personal Info</h3><br>
																<div class="form-group row">
																		<div class="col-md-6">
																		<label class="control-label">Full Name</label>
																		<input type="text" class="form-control" name="full_name" id="fullname" parsley-required="true" placeholder="Your full name">
																		</div>
																		<div class="col-md-6">
																		<label class="control-label">Last Name</label>
																		<input type="text" name="last_name"  class="form-control"  placeholder="Your last name">
																		</div>
																</div>
																<div class="form-group">
																		<label class="control-label">Password</label>
																		<input type="password" class="form-control" name="password" id="pword"  parsley-trigger="keyup"  parsley-rangelength="[4,8]"  parsley-required="true" placeholder="4-8 Characters">
																</div>
																<div class="form-group">
																		<label class="control-label">Confirm Password</label>
																		<input type="password" class="form-control"  parsley-trigger="keyup"  parsley-equalto="#pword" placeholder="Confirm Password" parsley-error-message="Password don't match" >
																</div>
														</div>
														<div class="tab-pane fade align-lg-center" id="step3">
																<br><h3>Thank You <span></span> .....</h3><br>
														</div>
														
														<footer class="row">
															<div class="col-sm-12">
																	<section class="wizard">
																			<button type="button"  class="btn  btn-default previous pull-left"> <i class="fa fa-chevron-left"></i></button>
																			<button type="button"  class="btn btn-theme next pull-right">Next </button>
																	</section>
															</div>
														</footer>
												</div>
										</form>
										<section class="clearfix align-lg-center">
												<i class="fa fa-sign-in"></i> Return to <a href="login">Login</a>
										</section>	

								</div>	
								<!-- //account-wall-->
								
						</div>
						<!-- //col-sm-6 col-md-4 col-md-offset-4-->
				</div>
				<!-- //row-->
		</div>
		<!-- //container-->
		
@endsection
<!-- //main-->

@section('anotherscript')
	<script type="text/javascript">
		$(document).ready(function() {
				   //Login animation to center 
					function toCenter(){
							var mainH=$("#main").outerHeight();
							var accountH=$(".account-wall").outerHeight();
							var marginT=(mainH-accountH)/2;
								   if(marginT>30){
									   $(".account-wall").css("margin-top",marginT-15);
									}else{
										$(".account-wall").css("margin-top",30);
									}
						}
						var toResize;
						$(window).resize(function(e) {
							clearTimeout(toResize);
							toResize = setTimeout(toCenter(), 500);
						});
						
					//Canvas Loading
					  var throbber = new Throbber({  size: 32, padding: 17,  strokewidth: 2.8,  lines: 12, rotationspeed: 0, fps: 15 });
					  throbber.appendTo(document.getElementById('canvas_loading'));
					  throbber.start();
					  	
					$('#validate-wizard').bootstrapWizard({
							tabClass:"nav-wizard",
							onNext: function(tab, navigation, index) {
											var content=$('#step'+index);
											//console.log(content.selector);										
											if(typeof  content.attr("parsley-validate") != 'undefined'){
															var $valid = content.parsley( 'validate' );
															if(!$valid){
																			return false;
															}else{
																if(content.selector=='#step1'){
																	console.log('tab : ' + content.selector);
																	console.log('email : '+$("#email").val());
																	console.log('username : '+$("#username").val());



																	$.ajax({
																		url: "api/existuser?field=email&values="+$('#email').val(), type: "GET", dataType: 'json',
																		success: function (e) {
																				
																				 console.log('email : ' + e.exist);

																				 if (e.exist) { 
																					 $.notific8('email sudah terdaftar !! ',{ life:5000,horizontalEdge:"bottom", theme:"danger" ,heading:" ERROR :); "});
																					return false;
																				 }
																				 //setTimeout(function () { $("#loading-top span").text("Yes, account is access...") }, 500);
																				 //setTimeout(function () { $("#loading-top span").text("Redirect to account page...")  }, 1500);
																				 //setTimeout( "window.location.href='/admin'", 3100 );
																			}
																			
																		});
																		
																	$.ajax({
																		url: "api/existuser?field=username&values="+$('#username').val(), type: "GET", dataType: 'json',
																		success: function (e) {
																		//setTimeout(function () { main.removeClass("slideDown") }, !e.status ? 500:3000);
																		 console.log('username : ' + e.exist);

																				 if (e.exist) { 
																					 $.notific8('username sudah terdaftar !! ',{ life:5000,horizontalEdge:"bottom", theme:"danger" ,heading:" ERROR :); "});
																					return false;
																				 }
																		}
																	});

																	

																	return false;
																}
															}
											};
											
							// Set the name for the next tab
							$('#step3 h3').find("span").html($('#fullname').val());
							},
							onTabClick: function(tab, navigation, index) {
											$.notific8('Please click <strong>next button</strong> to wizard next step!! ',{ life:5000, theme:"danger" ,heading:" Wizard Tip :); "});
											return false;
							},
							onTabShow: function(tab, navigation, index) {
											tab.prevAll().addClass('completed');
											tab.nextAll().removeClass('completed');
											if(tab.hasClass("active")){
															tab.removeClass('completed');
											}
											var $total = navigation.find('li').length;
											var $current = index+1;
											var $percent = ($current/$total) * 100;
											$('#validate-wizard').find('.progress-bar').css({width:$percent+'%'});
											$('#validate-wizard').find('.wizard-status span').html($current+" / "+$total);
											
											toCenter();
											
											var main=$("#main");
											//scroll to top
											main.animate({
												scrollTop: 0
											}, 500);
											if($percent==100){
												setTimeout(function () { main.addClass("slideDown") }, 100);
												setTimeout(function () { main.removeClass("slideDown") }, 3000);
												setTimeout( "window.location.href='register'", 3500 );
											}
											
							}
					});


		});
	</script>
@endsection