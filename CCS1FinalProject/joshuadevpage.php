<!DOCTYPE html>
<html>
    <head>
        <title>Joshua Guianne Porpio</title>
        <link rel="stylesheet" href="joshuadevpage.css">
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
            <img src = "joshuapic.jpg" class = "sagepic">
            <p class = "data_details">
                Name: <b>Joshua Guianne J. Porpio </b><br/>
                Facebook: <b>@Joshua Guianne Porpio</b><br/>
                Instagram: <b>@onlyporpsmen</b><br/>
                Email: <b> joshuaguiannejporpio@su.edu.ph </b><br/>
                <br/>
                    Hello there, dear reader. My name is Joshua Guianne J. Porpio, an 18-year old Filipino citizen studying Bachelor of Science in Computer Science at Silliman University. I am an aspiring Computer Scientist, Data Analyst, Software Engineer, and Cybersecurity Specialist. Now, as overambitious as it may seem, I envision myself in the pursuit of a position beyond the local market, hence the varying professions.
                <br/>
                <br/>
                    Why I chose this course:
                    I took up Computer Science, not because of my hobbies that would apparently align with the said course, but of my interest towards programming and cybersecurity. So far, there have been numerous obstacles that have tried to shake and doubt my capabilities, despite that I have never made it a hindrance to my efforts and I am determined by any means to achieve my ultimate goal - pursuing my profession.
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