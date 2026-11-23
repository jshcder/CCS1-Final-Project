<!DOCTYPE html>
<html>
    <head>
        <title>Javin Gabriel Bucol</title>
        <link rel="stylesheet" href="javdevpage.css">
        <script>
            var username = "<?php echo $_POST['username']; ?>";
        </script>
    </head>
    <body>
        <form action="homepage.php" method="POST">
            <input type="hidden" id="username" name="username" value="<?php echo $_POST['username']; ?>">
            <button type="submit" class="return_homepage" id="return_homepage_link">RETURN TO HOME PAGE</button>
        </form>

        <p class="welcome_user">
            WELCOME <?php echo $_POST['username']; ?> !
        </p>
        <p class="logout">
            <a href="login.php" class="logout">LOGOUT</a>
        </p>

        <hr>
        <div class = "container_profile">
            <img src = "javpic.jpg" class = "sagepic">
            <p class = "data_details">
                Name: <b>Javin Gabriel Bucol</b><br/>
                Facebook: <b>@JavBucol</b><br/>
                Instagram: <b>@javinbucol</b><br/>
                Email: <b>javinbucol@su.edu.ph</b><br/>
                <br/>
                 Hii I am Javin Gabriel Bucol,       
                 and currently studying in Silliman University and taking the course BSIT.				 
                <br/>
                <br/>
                also I am 19 years old and just living here in Dumaguete.
				also for the course that i am pursuing
				It allows me to combine design, functionality, and also interactivity, which is a creative platform for me.
				building a website isn’t just about technical execution it’s about creativity,
                communication, and impact. The blend of design, functionality, 
                and its reach makes it an exciting and rewarding endeavor for me.
            </p>
            <p class = "copyright">
                &copy Copyright 2024
            </p>
            <p class = "dev-page-label">
                DEVELOPER PAGE
            </p>
        </div>
    </body>
</html>