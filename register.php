<!DOCTYPE html>
<html>
<head>
    <title>Member Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/font-awesome-register.css" rel="stylesheet"> 
    <link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="w3_agile_main_grids">
		<form id="SignupForm" class="agile_form" method="post">
                <fieldset>
                    <h3>Member Registration</h3>
                    <div class="form-group agileits_w3layouts_form w3_agileits_margin">
                        <div class="wthree_input">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input id="Name" type="text" name="username" class="form-control" placeholder="Username" required />
                        </div>
                    </div>
                    <div class="form-group agileits_w3layouts_form">
                        <div class="wthree_input">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input id="Email" type="email" name="email" class="form-control" placeholder="Email" required />
                        </div>
                    </div>
                    <div class="form-group agileits_w3layouts_form w3_agileits_margin">
                        <div class="wthree_input">
                            <i class="fa fa-file-text" aria-hidden="true"></i>
                            <input id="Subject" type="text" name="preferred_sports" class="form-control" placeholder="Preferred Sports" required />
                        </div>
                    </div>
                    <div class="form-group agileits_w3layouts_form w3_agileits_margin">
                        <div class="wthree_input">
                            <i class="fa fa-key" aria-hidden="true"></i>
                            <input id="Password" type="password" name="password" class="form-control" placeholder="Password" required />
                        </div>
                    </div>
                    <div class="form-group agileits_w3layouts_form w3_agileits_margin">
                        <div class="wthree_input">
                            <i class="fa fa-key" aria-hidden="true"></i>
                            <input id="ConfirmPassword" type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required />
                        </div>
                    </div>
                    <div class="form-group agileits_w3layouts_form w3_agileits_margin">
                        <div class="wthree_input">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <input id="skill_level" type="text" name="skill_level" class="form-control" placeholder="Skill Level" required />
                        </div>
                    </div>
                    <div class="clear"></div>
                </fieldset>
                <p>
                    <button id="SaveAccount" class="btn btn-primary agileinfo_primary submit">Submit form</button>
                </p>
                <p style="margin-top: 10px;">Already registered? <a href="login.php" style="color: green; text-decoration: none; font-weight: bold;">Login</a></p>

            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function(){
    // Handle form submission
    $("#SignupForm").submit(function(event) {
        event.preventDefault(); // Prevent the default form submission
        
        // AJAX form submission
        $.ajax({
            type: "POST",
            url: "insert_data.php",
            data: $(this).serialize(),
            success: function(response) {
				console.log("response.trim() : ",response.trim());
                if (response.trim() === "success") {
                    // Show Toastr message upon successful registration
                    toastr.success("Registration successful!");
                    // Redirect to login page after 3 seconds
                    setTimeout(function(){
                        window.location.href = "login.php";
                    }, 2000);
                } else if (response.trim() === "password_mismatch") {
                    toastr.error("Passwords do not match.");
                } else if (response.trim() === "username_exists") {
                    toastr.error("Username already exists.");
                } else if (response.trim() === "email_exists") {
                    toastr.error("Email already exists.");
                } else {
                    // Show error message if something else goes wrong
                    toastr.error("Something went wrong. Please try again later.");
                }
            },
            error: function() {
                // Show error message if AJAX request fails
                toastr.error("Something went wrong. Please try again later.");
            }
        });
    });
});

    </script>
</body>
</html>
