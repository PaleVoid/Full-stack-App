<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Hello! Click the Picture to go to Home Page </title>
        <link rel="stylesheet" href="bootstrap-5.2.1-dist/css/bootstrap.css">

    </head>

    <body>
        <header>
            <div class="d-flex justify-content-center">
                <a href="home_page.html"> <img src="media/image/logo.png" title="Lord Gabe" alt="Logo" width="300" height="250"> </a>

            </div>
            
            <div class="d-flex justify-content-center">
                <h1> BUY! SELL! COME! YOU! </h1>

            </div>

            <hr>

            <form method="post" action="data manager/hello.php" enctype="application/x-www-form-urlencoded">
                <label for="username"> Username </label>

                <br>

                <input type="text" id="username" name="username" value="username">

                <br>

                <label for="password"> Password </label>

                <br>

                <input type="password" id="password" name="password" value="password">

                <br>

                <input type="submit" value="Login">

            </form>

            <hr>

        </header>

        <div class="d-flex justify-content-center">
            <main>
                <a href="home_page.html"> Please Click Me or the Gif to continue to Home Page! <br> <img src="media/gif/index_gif.gif" title="Sale Ahead" alt="Welcome" width="1024" height="1024" class="img-fluid"> </a>

            </main>

        </div>

        <footer>
            <div>
                <ul>
                    <li> <a href="footer/about.html"> About Us </a> </li>
                    <li> <a href="footer/copyright.html"> Copyright </a> </li>
                    <li> <a href="footer/privacy.html"> Privacy </a> </li>
                    <li> <a href="footer/help.html"> Help </a> </li>

                </ul>

            </div>
    
        </footer>

    </body>

</html>