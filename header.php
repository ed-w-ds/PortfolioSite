<header id="navigation-header" class="colour1">
    <nav>
    <div class="dropdown">
        <button class="dropbtn">Menu</button>
        <div class="dropdown-content">
            <ul style="text-align: center;" class="dropdown-toptions">
                <li><a href="home.php">Home</a></li>
                <li><a href="home.php#skills">Skills</a></li>
                <li><a href="home.php#education">Education</a></li>
                <li><a href="home.php#experience">Experience</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="viewBlog.php">Blog</a></li>
                <li><a href="home.php#contact">Contact</a></li>
                <?php 
                    if (session_id() === '') {
                        session_start();
                    }
                    if (isset($_SESSION['UserID'])) {
                        echo "<li><a href=\"addpost.php\">Add Post</a></li>";
                        echo "<li><a href=\"logout.php\">(log out)</a></li>";
                    }
                ?>
            </ul>
        </div>
    </div>
    </nav>
</header>