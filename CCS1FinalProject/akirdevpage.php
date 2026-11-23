<!DOCTYPE html>
<html>
    <head>
        <title>Aldrich Akir P. Ting</title>
        <link rel="stylesheet" href="akirdevpage.css">
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
            <img src = "akirpic.jpg" class = "sagepic">
            <p class = "data_details">
                Name: <b>Aldrich Akir P. Ting</b><br/>
                Facebook: <b>@aldrichakir</b><br/>
                Instagram: <b>@aldrichakir</b><br/>
                Email: <b>aldrichpting@su.edu.ph</b><br/>
                <br/>
                    Hello to anyone who is reading this! My name is Aldrich Akir P. Ting, a 1st year college student at Silliman University currently taking the program Bachelor of Science in Computer Science. I am 18 years old Filipino citizen living in Dumaguete, Negros Oriental
                <br/>
                <br/>
                    Why I chose this course:
                    As a person who has grown up with technology, it is easy for me to understand how technologies work. Since I can undertstand programming easily. I want to use this skill to help make technologies or software that can help people in their everyday lives, making me a great asset in the field of technology.
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