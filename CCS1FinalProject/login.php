<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style= "background-image: url(forestpic.jpg);">
    <div class="container">
        <h2>Login</h2>
        <!-- Login form -->
        <form id="loginForm" action="homepage.php" method="POST">
            <!-- Input for Username -->
            <label for="usernameType">Username:</label>
            <input type="text" id="usernameType" name="usernameType" required>
            
            <!-- Input for Password -->
            <label for="passwordType">Password:</label>
            <input type="password" id="passwordType" name="passwordType" required>
            
            <!-- Login button -->
            <button type="button" id="loginBtn" onclick="login()">Login</button>

            <!-- Error message -->
            <p class="error-message" id="errorMessage"></p>

            <!-- Link to the sign-up or create account page -->
            <a href="account.php">Don't have an account? Sign Up Now!</a>
        </form>

        <!-- Hidden form to pass data securely -->
        <form id="hiddenForm" action="homepage.php" method="POST">
            <!-- Hidden input fields for username and password -->
            <input type="hidden" id="username" name="username" value="">
            <input type="hidden" id="password" name="password" value="">
        </form> 
    </div>

    <script>
        var loginForm = document.getElementById('loginForm');
        var username = "<?php echo $_POST['username']; ?>"; // Get the username sent from the previous page (using PHP)
        var password = "<?php echo $_POST['password']; ?>"; // Get the password sent from the previous page (using PHP)
        var loginBtn = document.getElementById('loginBtn');
        var loginAttempts = 0; // Track login attempts

        function login() {
            // Get the username and password entered by the user
            var usernameType = loginForm.usernameType.value;
            var passwordType = loginForm.passwordType.value;
            
            // Check if username or password is incorrect
            if (username != usernameType || password != passwordType) {
                loginAttempts++;
                document.getElementById('errorMessage').innerHTML = "Invalid username or password. Please try again. You have made " + loginAttempts + " attempt/s.";
            }

            // Check if the username and password are correct
            if (username === usernameType && password === passwordType) {
                alert("Login successful!");

                // Put the username and password into the hidden form
                document.getElementById("username").value = username;
                document.getElementById("password").value = password;

                document.getElementById("loginForm").submit();  // Send the login form to check the user's input
                document.getElementById("hiddenForm").submit(); // Send the hidden form to pass the username and password safely
            } 

             // Disable inputs and button after 3 failed attempts
                if (loginAttempts > 2) {
                    document.getElementById('usernameType').disabled = true;
                    document.getElementById('passwordType').disabled = true;
                    loginBtn.disabled = true;
                    errorMessage.innerHTML = "Too many failed attempts. Please refresh the page to try again.";
                }
        }
    </script>
</body>
</html>
