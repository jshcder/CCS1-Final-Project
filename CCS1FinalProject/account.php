<!DOCTYPE html>
<html>
<head>
    <title>Create Account</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style= "background-image: url(forestpic.jpg);">
    <div class="container">
        <h2>Create New Account</h2>
        <!-- Form for creating a new account -->
        <form id="forma" action="login.php" method="POST">

            <!-- Input for First Name -->
            <label for="name">First Name:</label>
            <input type="text" id="firstname" name="firstname" required>
            
            <!-- Input for Last Name -->
            <label for="name">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required>

            <!-- Dropdown menu for Gender selection -->
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select><br/><br/>
            
            <!-- Input for Date of Birth -->
            <label for="dob">Date of Birth <i>(dd/mm/yy)</i>:</label>
            <input type="date" id="dob" name="dob" required>
            
            <!-- Input for Email -->
            <label for="email">Email Address:</label>
            <input type="text" id="email" name="email" required>
            
            <!-- Input for Mobile Number -->
            <label for="mobile">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile" required>

            <!-- Input for Username -->
            <label for="username">Username <i>(8 characters)</i>:</label>
            <input type="text" id="username" name="username" required>
            
            <!-- Input for Password -->
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <!-- Input for Confirm Password -->
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
            
            <!-- Dropdown menu for Security Questions -->
            <label for="securityQuestion">Security Question:</label>
            <select id="securityQuestion" name="securityQuestion" required>
                <option value="">Select Security Question</option>
                <option value="Pet">What is your pet's name?</option>
                <option value="School">What is the name of your first school?</option>
                <option value="Birthplace">Where is your birthplace?</option>
            </select><br/><br/>
            
            <!-- Input for Security Answer -->
            <label for="securityAnswer">Security Answer:</label>
            <input type="text" id="securityAnswer" name="securityAnswer" required>
            
            <!-- Sign Up Button -->
            <button type="button" onclick="validate()" id="signup">Sign Up</button>

            <!-- Confirm/Cancel Button -->
            <button type="submit" onclick="confirm()"id="button2" style="display: none"> Confirm </button><br><br>
            <button type="button" onclick="cancel()" id="button3" style="display: none"> Cancel </button>

            <!-- Error message will be displayed here -->
            <p class="error-message" id="error"></p>
        </form>
    </div>

    <script>
        function validate() {
            var form = document.getElementById("createAccountForm");
            var username = forma.username.value; // Extract or get username 
            var password = forma.password.value; // Extract or get password
            var confirmPassword = forma.confirmPassword.value; // Extract or get confirm password input
            var email = forma.email.value; // Extract or get email

            var upper = 0;  // Count uppercase letters
            var number = 0; // Count numbers
            var numerical = "0123456789";
            var alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            var atSymbol = 0; // Check for '@' in email

            // Validate username length
            if (username.length < 8 || password.length < 8) {
                document.getElementById("error").innerHTML = "Username and Password must be at least 8 characters long!";
                return;
            }

            // Validate password and confirm password match
            if (password !== confirmPassword) {
                document.getElementById("error").innerHTML = "Password and Confirm Password do not match!";
                return;
            }

            // Check for at least one uppercase letter in the password
            for (var i = 0; i < password.length; i++) {
                for (var j = 0; j < alphabet.length; j++) {
                    if (password[i] == alphabet[j]) {
                        upper++;
                        break;
                    }
                }
            }

            // Check for at least one number or numeric character in the password
            for (var k = 0; k < password.length; k++) {
                for (var l = 0; l < numerical.length; l++) {
                    if (password[k] == numerical[l]) {
                        number++;
                        break;
                    }
                }
            }

            // Check if email contains '@' symbol
            for (var x = 0; x < email.length; x++) {
                if (email[x] == '@') {
                    atSymbol++;
                    break;
                }
            }

            // Validate email. Shows error if email is invalid
            if (atSymbol < 1) {
                document.getElementById("error").innerHTML = "Please enter a valid email address!";

            }

            // Validate password strength. Shows error if password is not strong enough
            if (upper < 1 || number < 1 || password.length < 8) {
                document.getElementById("error").innerHTML = "Password must contain at least 1 uppercase letter, 1 number, and be at least 8 characters long!";

            }

            // Check if certain conditions are met for account creation
            if (upper >= 1 && number >= 1 && username.length >= 8 && password.length >= 8 && password == confirmPassword && atSymbol >= 1) {
                document.getElementById("error").innerHTML = "Please confirm the credentials entered above!";
                document.getElementById("signup").style.display = "none";
                document.getElementById("button2").style.display = "inline";
                document.getElementById("button3").style.display = "inline";
                document.getElementById("firstname").disabled = true;
                document.getElementById("lastname").disabled = true;
                document.getElementById("dob").disabled = true;
                document.getElementById("gender").disabled = true;
                document.getElementById("email").disabled = true;
                document.getElementById("mobile").disabled = true;
                document.getElementById("securityQuestion").disabled = true;
                document.getElementById("securityAnswer").disabled = true;
                document.getElementById("username").disabled = true;
                document.getElementById("password").disabled = true;
                document.getElementById("confirmPassword").disabled = true;
            }
            // Alert the user to confirm their information
            alert("Please confirm your information before proceeding.");
        }

            // Function to confirm the account creation process
            function confirm() {
                alert("You have successfully created an account!");
                document.getElementById("signup").style.display = "none"; // Hide the signup button and display confirmation buttons
                document.getElementById("button2").style.display = "inline";
                document.getElementById("button3").style.display = "inline";
                document.getElementById("firstname").disabled = false; // Re-enable all input fields for further changes
                document.getElementById("lastname").disabled = false;
                document.getElementById("dob").disabled = false;
                document.getElementById("gender").disabled = false;
                document.getElementById("email").disabled = false;
                document.getElementById("mobile").disabled = false;
                document.getElementById("securityQuestion").disabled = false;
                document.getElementById("securityAnswer").disabled = false;
                document.getElementById("username").disabled = false;
                document.getElementById("password").disabled = false;
                document.getElementById("confirmPassword").disabled = false;
            }

            // Function to cancel the confirmation process
            function cancel() {
                document.getElementById("signup").style.display = "inline"; // Restore the signup button and hide the confirmation buttons
                document.getElementById("button2").style.display = "none";
                document.getElementById("button3").style.display = "none"; 
                document.getElementById("firstname").disabled = false; // Re-enable all input fields to allow further editing
                document.getElementById("lastname").disabled = false;
                document.getElementById("dob").disabled = false;
                document.getElementById("gender").disabled = false;
                document.getElementById("email").disabled = false;
                document.getElementById("mobile").disabled = false;
                document.getElementById("securityQuestion").disabled = false;
                document.getElementById("securityAnswer").disabled = false;
                document.getElementById("username").disabled = false;
                document.getElementById("password").disabled = false;
                document.getElementById("confirmPassword").disabled = false;
                document.getElementById("error").innerHTML = "";        
            }
    </script>
</body>
</html>
