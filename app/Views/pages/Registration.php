<style>
	body {
		color: #fff;
		/*background: #3598dc;*/
		background: #f2f2f2;
	}
	.form-control {
		min-height: 41px;
		background: #f2f2f2;
		box-shadow: none !important;
		border: transparent;
	}
	.form-control:focus {
		background: #e2e2e2;
	}
	.form-control, .btn {        
		border-radius: 2px;
	}
	.registration-form {
		width: 350px;
		margin: 80px auto;
		text-align: center;
	}
	.registration-form h2 {
		margin: 10px 0 25px;
	}
	.registration-form form {
		color: #7a7a7a;
		border-radius: 3px;
		margin-bottom: 15px;
		background: #fff;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		padding: 30px;
	}
	.registration-form .btn {        
		font-size: 16px;
		font-weight: bold;
		background: #3598dc;
		border: none;
		outline: none !important;
	}
	.registration-form .btn:hover, .registration-form .btn:focus {
		background: #2389cd;
	}
	.registration-form a {
		color: #fff;
		text-decoration: underline;

	}
	.registration-form a:hover {
		text-decoration: none;
	}
	.registration-form form a {
		color: #7a7a7a;
		text-decoration: none;
	}
	.registration-form form a:hover {
		text-decoration: underline;
	}

</style>


<div class="registration-form">
    <form action="registration" method="post">
        <h2 class="text-center">Registration</h2>   
        <div class="form-group has-error">
        	<input type="text" class="form-control" name="first_name" placeholder="First Name" required="required">
        </div>
		<div class="form-group has-error">
        	<input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email Address" required="required">
        </div>        
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>    
        <div class="form-group">
            <button type="submit" name="registration" class="btn btn-primary btn-lg btn-block">Register</name=button>
        </div>


    </form>


</div>


                    
