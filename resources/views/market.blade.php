@extends('layouts.master')

@section('main-content')

<section class="login-section ptb">
	<div class="container">
		<div class="login_wrap">
			<h2 class="h2">Market</h2>
			<p class="position-relative">
				<i class="fas fa-search"></i>
				<input type="text" name="text" placeholder="Search">

			</p>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
			<div class="entry-wrap">

				<div class="entry-content">
					<h4 class="h4">Enter details</h4>
					<form method="post" action="{{route('market-submit')}}" id="market_form">
						@csrf
						<div class="username">
							<label>Name </label>
							<input type="text" name="name">
						</div>
                        <div class="username">
							<label>description </label>
							<input type="text" name="description">
						</div>
                        <div class="username">
							<label>address </label>
							<input type="text" name="address">
						</div>
                        <div class="username">
							<label>plus_code </label>
							<input type="text" name="plus_code">
						</div>
                        <div class="username">
							<label>latitude </label>
							<input type="text" name="latitude">
						</div>
                        <div class="username">
							<label>longitude </label>
							<input type="text" name="longitude">
						</div>
                        <div class="username">
							<label>map_zoom </label>
							<input type="text" name="map_zoom">
						</div>
                        <div class="username">
							<label>phone </label>
							<input type="text" name="phone">
						</div>
                        <div class="username">
							<label>mobile </label>
							<input type="text" name="mobile">
						</div>
                        <div class="username">
							<label>information </label>
							<input type="text" name="information">
						</div>
                        <div class="username">
							<label>delivery_fee </label>
							<input type="text" name="delivery_fee">
						</div>
                        <div class="username">
							<label>delivery_range </label>
							<input type="text" name="delivery_range">
						</div>
                        <div class="username">
							<label>default_tax </label>
							<input type="text" name="default_tax">
						</div>
                        <div class="username">
							<label>closed </label>
							<input type="text" name="closed">
						</div>
                        <div class="username">
							<label>available_for_delivery </label>
							<input type="text" name="available_for_delivery">
						</div>
                        <div class="username">
							<label>timing </label>
							<input type="text" name="timing[]">
						</div>

                        <div class="form-btn-style1 my-4">
							<input type="hidden" name="method" value="post">
							<a href="#" onclick="myFunction()">Submit</a>
						</div>
					</form>
<br>
<br>
<br>


                    <form method="get" action="{{route('market-getdata')}}" id="getdata_form">
						@csrf
                    <div class="form-btn-style1 my-4">
							<input type="hidden" name="getdata" value="Fetdata">
							<a href="#" onclick="myFunction()">Get Data</a>
						</div>
</form>

					<script type="text/javascript">
						function myFunction() {
	               			 document.getElementById("getdata_form").submit();
	            		}
					</script>
				</div>
				<!-- <div class="rgtr-content">
					<h4>Register New Account</h4>
					<form action="{{route('register-submit')}}" method="post" id="register_form">
						@csrf
						<div class="username">
							<label>Username</label>
							<input type="text" name="username">
						</div>
						<div class="phone">
							<label>Mobile No</label>
							<input type="number" name="phone">
						</div>
						<div class="e_name">
							<label>Email</label>
							<input type="email" name="email">
						</div>
						<div class="pass_name">
							<label>Password</label>
							<input type="password" name="password">
						</div>
						<div class="c_pass">
							<label>Confirm Password</label>
							<input type="password" name="confirm_password">
						</div>
						<input type="hidden" name="user_role" value="manager">

						<div class="g-recaptcha" data-sitekey="6LcL7f4UAAAAAIztNGOnvmv8F1avxtOgRAzYFDZj" style="clear:both;padding:10px 0;"><div style="width: 304px; height: 78px;">
							<div>
								<iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=2&amp;k=6LcL7f4UAAAAAIztNGOnvmv8F1avxtOgRAzYFDZj&amp;co=aHR0cHM6Ly93d3cucHJvZGVzaWducy5jb206NDQz&amp;hl=en&amp;v=nEGwmCAyCoKVn9PSwAGnQWhY&amp;size=normal&amp;cb=147e6ecjwi1r" width="304" height="78" role="presentation" name="a-1fb3o0sbnvsu" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;">
								</iframe>
						</div>

						<div class="form-btn-style1 my-4">
							<input type="hidden" name="method" value="post">
							<a href="#" onclick="myFunction()">Register</a>
						</div>
					</form>
					<script type="text/javascript">
						function myFunction() {
	               			 document.getElementById("register_form").submit();
	            		}
					</script>
				</div> -->
			</div>
			</div>

                <!-- <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="recent-post">
                        <h4>Enter Details</h4>
                        <ul>
                            <li>
                                <a href="#">10+ Best Free WordPress eCommerce Themes</a>
                            </li>
                            <li>
                                <a href="#">5+ Best WordPress Social Content Locker Plugins</a>
                            </li>
                            <li>
                                <a href="#">15+ Best Free Responsive WordPress Business Themes</a>
                            </li>
                            <li>
                                <a href="#">Free WordPress Themes for Construction Companies, Builders and Contractors</a>
                            </li>
                            <li>
                                <a href="#">Free One Page WordPress Themes</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nltr-post position-relative">
                        <h4>Newsletter</h4>
                        <input class="nltr1 position-relative" type="email" name="EMAIL" placeholder="Your email address" required="">
                        <input class="nltr2" type="submit" value="Sign up">
                    </div>
                    <div class="search_form form-btn-style1">
                        <h4>Search Forms</h4>
                        <input type="text" name="EMAIL">
                        <a href="#" class="s-btn">Search</a>
                    </div>
                    <div class="upr_block">
                        <div class="user_form">
                            <label>Username:</label>
                            <input type="text" name="text">
                        </div>
                        <div class="pass_form">
                            <label>Password:</label>
                            <input type="password" name="text">
                        </div>
                        <div class="r-checkbox mb-4">
                            <input type="checkbox" name="rememberme">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="log_btn1 mb-4 text-center">
                            <a href="#">Log In</a>
                        </div>
                    </div>
                </div> -->
		</div>
	</div>
</section>

@endsection
