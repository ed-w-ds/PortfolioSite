<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/reset.css" type="text/css">
        <link rel="stylesheet" href="css/home.css" type="text/css"  media="(min-width:769px)">
        <link rel="stylesheet" href="css/homeMobile.css" type="text/css" media="screen and (max-width:768px)">
        <title>Home</title>
    </head>

    <body>
        <?php include "header.php" ?>

        <div class="container">
            <section id="aboutme" class="colour2 grid-box">
                <div class="heading-text">
                    <h1>
                        <b>
                        Hello, I'm 
                        <br>
                        <span class="colour-heading">Eduards Lisovskis</span></b>
                    </h1>
                    <p id="myself-text">A Creative Computing student at
                        <br>
                        <a href="http://www.eecs.qmul.ac.uk/">Queen Mary University of London</a>.
                        <br>
                        I aim to expand my knowledge and 
                        <br>
                        broaden my understanding in various 
                        <br>
                        areas of technology and product 
                        <br>
                        development.
                    </p>
                </div>
                <article>
                    <!-- <figure id="myself-image">
                        <img src="images/me.png" alt="Eduards Lisovskis">
                    </figure> -->
                </article>
            </section>
            

            <section id="skills">
                <h2>Skills and Achievements</h2>
                    <h3>Programming Languages</h3>
                    <ul>
                        <li>C</li>
                        <li>PHP</li>
                        <li>Python</li>
                        <li>SQL</li>
                        <li>Java</li>
                        <li>JavaScript</li>
                    </ul>
                    <h3>Other</h3>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>Flask</li>
                    </ul>
                    <h3>Languages</h3>
                    <ul>
                        <li>English</li>
                        <li>Latvian</li>
                    </ul>
                    <h3>Achievements</h3>
                    <ul>
                        <li><b>Year 13 A-level Business and Mathematics Awards:</b> Awarded by the academic staff for exemplary performance in Business Studies and Mathematics during the 2021-2022 academic year.</li>
                    </ul>
            </section>
        

            <section id="education" class="container-flex">
                <h2>Education and Qualifications</h2>
                <aside>2022 - 2025 (Expected Graduation)</aside>
                <p>Queen Mary University of London, Bachelor of Science, Creative Computing
                    <br>
                    <b>Modules Include:</b> Arts Application Programming, Bridging Arts and Technology, Computer Systems and Networks, Fundamentals of Web Technology, Introduction to Multimedia, Professional and Research Practice.
                </p>
                <aside>2023</aside>
                <p>CS50x: Introduction to Computer Science</p>
                <aside>2020-2022</aside>
                <p>A Level: Mathematics, Business, Design and Technology: Product Design</p>
            </section>

            <section id="experience">
                <h2>Projects & Experience</h2>
                <article>
                    <div style="text-align: center;">
                        <h4>Check out the projects I've done so far</h4>
                        <a href="projects.php">
                            <button>projects</button>
                        </a>
                    </div>
                    <hgroup>
                        <h3>Experience</h3>
                        <h4>Anglian Water Pipeline Project</h4>
                    </hgroup>
                    <ul>
                        <li>Worked in a team of four to analyse the costs, disruption, time, the interest and power of stakeholders, and the environmental impacts that would involve implementing a pipeline in a populated area to find the most efficient and methodical route as well as the timeline for a real-world engineering project.</li>
                        <li>Presented the ideas for the event organisers through ZOOM as a PowerPoint presentation.</li>
                    </ul>
                    <h4>Callisto Moon Base Project</h4>
                    <ul>
                        <li>Operated in a team of three to find the best strategic landing location, crew, payload, and the communication system while scheduling and organising meetings to monitor progress and setting and delegating tasks to stay productive and not miss any deadlines.</li>
                        <li>Presented our project in front of academic staff in a professional setting and received feedback afterwards.</li>
                    </ul>
                </article>
            </section>
            
            <section id="contact">
                <article>
                    <h2 style="padding-top: 1em; text-align: left;">Get in Touch</h2>
                    <ul>
                        <figure class="grid-box-contact">
                            <div class="grib-box-links">
                                <li>
                                    <img src="images/email.png" alt="email" id="email-id"/> <a href="mailto:lisovskis.eduards@gmail.com">lisovskis.eduards@gmail.com</a>
                                </li>
                                <li>
                                    <img src="images/linkedin-bnw.png" alt="linkedin" id="linkedin-id"/> <a href="https://linkedin.com/in/eduards-lisovskis/">in/eduards-lisovskis/</a>
                                </li>
                                <li>
                                    <img src="images/github.png" alt="github" id="github-id"/><a href="https://github.com/ed-w-ds">github.com/ed-w-ds</a>
                                </li>
                            </div>
                            <p style="font-size: 1.3em;">I would be happy to talk and share more about my experience with you. Please feel free to reach out to me via email or LinkedIn! :&#41</p>
                        </ul>
                        </figure>
                </article>
            </section>
            
            <footer id="copyright" class="colour1">
                <p>&#169; Eduards Lisovskis 2023</p>
            </footer>
            
        </div>

    </body>

</html>