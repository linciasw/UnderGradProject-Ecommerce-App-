<style>


    /* body { */
        /* color: #566787; */
        /* background: #f5f5f5; */
        /* font-family: "Open Sans", sans-serif; */
    /* } */


    .contact-form {
        padding: 50px;
        margin: 30px 0;
    }
    .contact-form h1 {
        text-transform: uppercase;
        margin: 0 0 15px;
    }
    .contact-form .form-control, .contact-form .btn  {
        min-height: 38px;
        border-radius: 2px;
    }
    .contact-form .btn-primary {
        min-width: 150px;
        background: #299be4;
        border: none;
    }
    .contact-form .btn-primary:hover {
        background: #1c8cd7; 
    }
    .contact-form label {
        opacity: 0.9;
    }
    .contact-form textarea {
        resize: vertical;
    }
    .hint-text {
        font-size: 15px;
        padding-bottom: 15px;
        opacity: 0.8;
    }
    .bs-example {
        margin: 20px;
    }
</style>


  
<div class="container-xl">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="contact-form">
				<h1>Contact Us</h1>
				<p class="hint-text">We'd love to hear from you, please drop us a line if you have a query.</p>
				<form action="/examples/actions/confirmation.php" method="post">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputFirstName">First Name</label>
								<input type="text" class="form-control" id="inputFirstName" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputLastName">Last Name</label>
								<input type="text" class="form-control" id="inputLastName" required>
							</div>
						</div>
					</div>            
					<div class="form-group">
						<label for="inputEmail">Email Address</label>
						<input type="email" class="form-control" id="inputEmail" required>
					</div>
					<div class="form-group">
						<label for="inputMessage">Message</label>
						<textarea class="form-control" id="inputMessage" rows="5" required></textarea>
					</div>
					<input type="submit" class="btn btn-primary" value="Submit">
				</form>
			</div>
		</div>
	</div>
</div>