<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the user is already logged in, if yes, redirect to register
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: register.php");
    exit;
}

$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "sportsclub";

$conn = new mysqli($servername, $db_username, $db_password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement for members
        $sql_member = "SELECT member_id, username, password FROM members WHERE username = ?";
        
        if($stmt_member = $conn->prepare($sql_member)){
            // Bind variables to the prepared statement as parameters
            $stmt_member->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if($stmt_member->execute()){
                // Store result
                $stmt_member->store_result();
                
                // Check if username exists in members table, if yes then verify password
                if($stmt_member->num_rows > 0){
                    // Bind result variables
                    $stmt_member->bind_result($member_id, $db_username, $db_password);
                    if($stmt_member->fetch()){
                        if($password == $db_password){
                            // Password is correct, so start a new session
                            $_SESSION["loggedin"] = true;
                            $_SESSION["username"] = $db_username;
                            $_SESSION["role"] = "member"; // Set user role as member
                            $_SESSION["member_id"] = $member_id; // Set member ID in session
                            // Return success message
                            echo json_encode(array("status" => "success", "message" => "Member Login successful"));
                            exit();
                        } else{
                            // Return error message if password is not valid
                            echo json_encode(array("status" => "error", "message" => "Invalid password"));
                            exit();
                        }
                    }
                }
            }
        }

        // Prepare a select statement for admins
        $sql_admin = "SELECT admin_id, username, password FROM admins WHERE username = ?";
        
        if($stmt_admin = $conn->prepare($sql_admin)){
            // Bind variables to the prepared statement as parameters
            $stmt_admin->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if($stmt_admin->execute()){
                // Store result
                $stmt_admin->store_result();
                
                // Check if username exists in admins table, if yes then verify password
                if($stmt_admin->num_rows > 0){
                    // Bind result variables
                    $stmt_admin->bind_result($admin_id, $db_username, $db_password);
                    if($stmt_admin->fetch()){
                        if($password == $db_password){
                            // Password is correct, so start a new session
                            $_SESSION["loggedin"] = true;
                            $_SESSION["username"] = $db_username;
                            $_SESSION["role"] = "admin"; // Set user role as admin
                            $_SESSION["admin_id"] = $admin_id; // Set admin ID in session
                            // Return success message
                            echo json_encode(array("status" => "success", "message" => "Admin Login successful"));
                            exit();
                        } else{
                            // Return error message if password is not valid
                            echo json_encode(array("status" => "error", "message" => "Invalid password"));
                            exit();
                        }
                    }
                }
            }
        }

        // Return error message if username doesn't exist in both databases
        echo json_encode(array("status" => "error", "message" => "Username not found"));
        exit();
    }
    
    // Close connection
    $conn->close();
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Member Login</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Room Booking Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //custom-theme -->
    <!-- js -->
    <script src="js/jquery.min.js"></script>
    <!-- //js --> 
    <!-- font-awesome-icons -->
    <link href="css/font-awesome-register.css" rel="stylesheet"> 
    <!-- //font-awesome-icons -->
    <link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
    <link href="http://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <!-- Include Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">


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
            <form id="loginForm" class="agile_form" method="post">
                <fieldset>
                    <h3>Member/Admin Login</h3>
                    <div class="form-group agileits_w3layouts_form w3_agileits_margin">
                        <div class="wthree_input">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input id="Name" type="text" name="username" class="form-control" placeholder="Username" required />
                        </div>
                    </div>
                    <div class="form-group agileits_w3layouts_form w3_agileits_margin">
                        <div class="wthree_input">
                            <i class="fa fa-key" aria-hidden="true"></i>
                            <input id="Password" type="password" name="password" class="form-control" placeholder="Password" required />
                        </div>
                    </div>
                    <div class="clear"></div>
                </fieldset>
                <p>
                    <button id="SaveAccount" class="btn btn-primary agileinfo_primary submit">Submit form</button>
                </p>
                <p style="margin-top: 10px;">Don't Have an Account? <a href="register.php" style="color: green; text-decoration: none; font-weight: bold;">Register</a></p>
            </form>
        </div>
    </div>
    <!-- Include Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
$(document).ready(function(){
    // Handle form submission
    $("#loginForm").submit(function(event) {
        event.preventDefault(); // Prevent the default form submission
        
        // AJAX form submission
        $.ajax({
            type: "POST",
            url: "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>",
            data: $(this).serialize(),
            dataType: "json", // Expect JSON response
            success: function(response) {
                if (response.status === "success") {
                    // Show Toastr message upon successful login
                    toastr.success(response.message);
                    // Redirect to index page after 3 seconds
                    setTimeout(function(){
                        window.location.href = "index.php";
                    }, 2000);
                } else {
                    // Show error message if login fails
                    toastr.error(response.message);
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
