<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/reset.css" type="text/css">
        <link rel="stylesheet" href="css/projects.css" type="text/css"  media="(min-width:769px)">
        <link rel="stylesheet" href="css/projectMobile.css" type="text/css" media="screen and (max-width:768px)">
        <title>Projects</title>
    </head>

    <body class="colour1">
        <?php include "header.php" ?>

        <div class="container">
            <section id="projects">
                <h2>Projects</h2>
                <div class="projects-container">

                    <div id="ProjectSpotifyAPI">
                        <div class="image">
                            <figure id="SpotifyAPI-img">
                                <img src="images/spotifyAPI.png" alt="SpotifyAPI">
                            </figure>
                        </div>
                        <div class="title">
                            <h3>SpotifyAPI Web Application</h3>
                            <p>A web application that allows users to view their top tracks using Spotify API <a href="https://github.com/ed-w-ds/SpotifyAPI-Project">(Git)</a></p>
                        </div>
                    </div>

                    <div id="Project-CS50-finance">
                        <div class="image">
                            <figure id="CS50-finance-img">
                                <img src="images/cs50finance.png" alt="CS50 finance">
                            </figure>
                        </div>
                        <div class="title">
                            <h3>C$50 Finance (part of CS50x)</h3>
                            <p>A web application created using IEX API to "buy" and "sell" stocks, and storing user info using SQL.</p>
                        </div>
                    </div>

                    <div id="project-donut">
                        <div class="image">
                            <figure id="donut-main">
                                <img src="images/donut1.png" alt="Blender Donut">
                            </figure>
                        </div>
                        <div class="title">
                            <h3>Donut (Blender)</h3>
                            <p>A delectable donut made in Blender following Andrew Price's famous tutorial!</p>
                        </div>
                    </div>

                    <div id="Project-coming-soon">
                        <div class="image">
                            <figure id="question-mark">
                                <img src="images/nextup.png" alt="question mark">
                            </figure>
                        </div>
                        <div class="title">
                            <h3>Next Up...</h3>
                        </div>
                    </div>
                </div>
            </section>


            <footer id="copyright" class="colour1">
                <p>&#169; Eduards Lisovskis 2023</p>
            </footer>

        </div>

    </body>

</html>