<style>

body {
	background: #f2f2f2;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	font-size: 16px;
	transition: all 0.4s;
	box-shadow: none;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {
	border-radius: 50px;
	outline: none !important;
}
.signup-form {
	width: 480px;
	margin: 80px auto;
	padding: 30px 0;
}
.signup-form form {
	border-radius: 5px;
	margin-bottom: 20px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 40px;
}
.signup-form a {
	color: #5cb85c;
}    
.signup-form h2 {
	text-align: center;
	font-size: 34px;
	margin: 10px 0 15px;
}
.signup-form .hint-text {
	color: #999;
	text-align: center;
	margin-bottom: 20px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form .btn {        
	font-size: 18px;
	line-height: 26px;
	font-weight: bold;
	text-align: center;
}
.signup-btn {
	text-align: center;
	border-color: #5cb85c;
	transition: all 0.4s;
}
.signup-btn:hover {
	background: #5cb85c;
	opacity: 0.8;
}
.or-seperator {
	margin: 50px 0 15px;
	text-align: center;
	border-top: 1px solid #e0e0e0;
}
.or-seperator b {
	padding: 0 10px;
	width: 40px;
	height: 40px;
	font-size: 16px;
	text-align: center;
	line-height: 40px;
	background: #fff;
	display: inline-block;
	border: 1px solid #e0e0e0;
	border-radius: 50%;
	position: relative;
	top: -22px;
	z-index: 1;
}
.social-btn .btn {
	color: #fff;
	margin: 10px 0 0 15px;
	font-size: 15px;
	border-radius: 50px;
	font-weight: normal;
	border: none;
	transition: all 0.4s;
}	
.social-btn .btn:first-child {
	margin-left: 0;
}
.social-btn .btn:hover {
	opacity: 0.8;
}
.social-btn .btn-primary {
	background: #507cc0;
}
.social-btn .btn-info {
	background: #64ccf1;
}
.social-btn .btn-danger {
	background: #df4930;
}
.social-btn .btn i {
	float: left;
	margin: 3px 10px;
	font-size: 20px;
}
    
</style>



<div class="signup-form">
    <form action="registration.php" method="post">
		<h2>Create an Account</h2>
		<p class="hint-text">Sign up with your email address below</p>
		<div class="or-seperator"><b>or</b></div>
        <div class="form-group">
        	<input type="text" class="form-control input-lg" name="username" placeholder="Username" required="required">
        </div>
		<div class="form-group">
        	<input type="email" class="form-control input-lg" name="email" placeholder="Email Address" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control input-lg" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>  
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block signup-btn">Sign Up</button>
        </div>
    </form>
    <div class="text-center">Already have an account? <a href="#">Login here</a></div>
</div>