<!DOCTYPE html>
<html>
    <head>
        <!-- Page Title -->
        <title>Welcome to Home Page!</title>
        <link rel="stylesheet" href="homestyle.css">

        <!-- Script to Retrieve Username from POST Data -->
        <script>
            var username = "<?php echo $_POST['username']; ?>"; // Fetch username from PHP POST
        </script>
    </head>

    <body>
        <!-- Main Container for Caption and Logo -->
        <div class="container_caption1">
            <!-- College Logo -->
            <img class="ccs_logo" src="ccs_logo.png">

            <!-- College Caption -->
            <h1 class="caption1">COLLEGE OF COMPUTER STUDIES</h1>

            <!-- Welcome Message -->
            <p class="welcome_user">
                WELCOME <?php echo $_POST['username']; ?> !
            </p>

            <!-- Logout Link -->
            <p class="logout">
                <a href="login.php" class="logout">LOGOUT</a>
            </p>

            <p class="subcaption1">
                UNLOCKING THE POWER OF TECHNOLOGY
            </p>
        </div>

        <!-- Horizontal Line -->
        <hr style="border: 2px solid #1B4D3E;">

        <!-- Section Title: Meet the Developers -->
        <p class="meet_the_devs_duplicate">MEET THE DEVELOPERS!</p>
        <p class="meet_the_devs">MEET THE DEVELOPERS!</p>

        <!-- Container for Developer Profile Pictures -->
        <div class="container_profilepics">
            <img class="sage_pic" src="sagepic.png">
            <img class="joshua_pic" src="joshuapic.jpg">
            <img class="akir_pic" src="akirpic.jpg">
            <img class="jav_pic" src="javpic.jpg">
        </div>

        <!-- Forms to View Developer Profiles -->
        <div>
            <!-- Sage Developer Profile -->
            <form action="sagedevpage.php" method="POST" class="sage_form">
                <input type="hidden" id="username" name="username" value="<?php echo $_POST['username']; ?>">
                <button type="submit" class="view_button1">VIEW PROFILE</button>
            </form>

            <!-- Joshua Developer Profile -->
            <form action="joshuadevpage.php" method="POST" class="joshua_form">
                <input type="hidden" id="username" name="username" value="<?php echo $_POST['username']; ?>">
                <button class="view_button2">VIEW PROFILE</button>
            </form>

            <!-- Akir Developer Profile -->
            <form action="akirdevpage.php" method="POST" class="akir_form">
                <input type="hidden" id="username" name="username" value="<?php echo $_POST['username']; ?>">
                <button class="view_button3">VIEW PROFILE</button>
            </form>

            <!-- Jav Developer Profile -->
            <form action="javdevpage.php" method="POST" class="jav_form">
                <input type="hidden" id="username" name="username" value="<?php echo $_POST['username']; ?>">
                <button class="view_button4">VIEW PROFILE</button>
            </form>
        </div>

        <!-- Footer and Copyright -->
        <p class="home_page_label">HOME PAGE</p>
        <p class="copyright">&copy; Copyright 2024</p>

        <!-- Disclaimer Marquee -->
        <marquee>
            Disclaimer: This website embedded with a local server is programmed entirely for educational purposes. This is in fulfillment of the project from course CCS 1.
        </marquee>

        <!-- Hidden Return Home Link -->
        <a id="return_homepage_link" href="#" style="display:none;">Return to Home Page</a>
    </body>
</html>
