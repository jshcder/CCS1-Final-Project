<!DOCTYPE html>
<html>
    <head>
        <title>Sage Francis Belcina</title>
        <link rel="stylesheet" href="sagedevpage.css">
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
            <img src = "sagepic.png" class = "sagepic">
            <p class = "data_details">
                Name: <b>Sage Francis B. Belciña</b><br/>
                Facebook: <b>@Sage Belciña</b><br/>
                Instagram: <b>@Sooyaaabeancurd</b><br/>
                Email: <b>sagefrancisbbelcina@su.edu.ph</b><br/>
                <br/>
                Good day! My name is Sage Francis B. Belciña. A freshman student in the program Bachelor of Science in Information Technology. Im from Poblacion, Dalaguete, Cebu but currently residing in Daro, Dumaguete City, Negros Oriental. Due to the fact that i am studying at Silliman University.
                <br/>
                <br/>
                Why I chose this course:
                As aspiring IT expert, i have always been interested in hardware and software technology. The sound of the keyboard when I code, and the satisfaction I feel in making projects.
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