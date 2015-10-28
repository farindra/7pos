
@extends('layout.master',['class_body'=> 'full-lg'])

<!-- Title-->
@section('title')
   {{ $page_title or "7 POS" }}
@endsection

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

<!--
<body class="full-lg">
<div id="wrapper">
-->
@section('first')
	<div id="loading-top">
			<div id="canvas_loading"></div>
			<span>Checking...</span>
	</div>

	@if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	
@endsection
@section('content')
		<div class="container">
				<div class="row">
						<div class="col-lg-12">
						
								<div class="account-wall">
										<section class="align-lg-center">
										<div class="site-logo"></div>
										<h1 class="login-title"><span>wel</span>come <small> CAPLET   Admin HTML Themes Version 1.1.3</small></h1>
										</section>
										<form id="form-signin" class="form-signin" method="POST" action="/login">
											{!! csrf_field() !!}
												<section>
														<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-user"></i></div>
																<input  type="text" class="form-control" name="email" placeholder="email" value="{{ old('email') }}">
														</div>
														<div class="input-group">
																<div class="input-group-addon"><i class="fa fa-key"></i></div>
																<input type="password" class="form-control"  name="password" id="password" placeholder="Password">
														</div>
														<button class="btn btn-lg btn-theme-inverse btn-block" type="submit" id="sign-in">Sign in</button>
												</section>
												<section class="clearfix">
														<div class="iCheck pull-left"  data-color="red">
														<input type="checkbox" name="remember" checked>
														<label>Remember</label>
														</div>
														<a href="#" class="pull-right help">Forget Password? </a>
												</section>		
												<span class="or" data-text="Or"></span>
												<button class="btn btn-lg  btn-inverse btn-block" type="button"> New account </button>
										</form>
										<a href="#" class="footer-link">&copy; 2014 ziceinclude &trade; </a>
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

<!--
////////////////////////////////////////////////////////////////////////
//////////     JAVASCRIPT  LIBRARY     //////////
/////////////////////////////////////////////////////////////////////
-->
@section('anotherscript')	
<script type="text/javascript">
	$(function() {
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
					toCenter();
					var toResize;
					$(window).resize(function(e) {
						clearTimeout(toResize);
						toResize = setTimeout(toCenter(), 500);
					});
					
				//Canvas Loading
				  var throbber = new Throbber({  size: 32, padding: 17,  strokewidth: 2.8,  lines: 12, rotationspeed: 0, fps: 15 });
				  throbber.appendTo(document.getElementById('canvas_loading'));
				  throbber.start();
				  
				//Set note alert
				setTimeout(function () { 
					$.notific8('Hi Guest , you can use Username : <strong>demo</strong> and Password: <strong>demo</strong> to  access account.',{ sticky:true, horizontalEdge:"top", theme:"inverse" ,heading:"LOGIN DEMO"}) 
					}, 1000);
		
				
				$("#form-signin").submit(function(event){
						event.preventDefault();
						var main=$("#main");
						//scroll to top
						main.animate({
							scrollTop: 0
						}, 500);
						main.addClass("slideDown");		
						
						// send username and password to php check login
						$.ajax({
							url: "login", data: $(this).serialize(), type: "POST", dataType: 'json',
							success: function (e) {
									setTimeout(function () { main.removeClass("slideDown") }, !e.status ? 500:3000);
									 if (!e.status) { 
										 $.notific8('Check Username or Password again !! ',{ life:5000,horizontalEdge:"bottom", theme:"danger" ,heading:" ERROR :); "});
										return false;
									 }
									 setTimeout(function () { $("#loading-top span").text("Yes, account is access...") }, 500);
									 setTimeout(function () { $("#loading-top span").text("Redirect to account page...")  }, 1500);
									 setTimeout( "window.location.href='dashboard.html'", 3100 );
							}
						});	
				
				});
		});
</script>
@endsection