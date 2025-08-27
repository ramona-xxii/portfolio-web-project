<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ramona | Portfolio</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <main>

            <!-- navigation --> 
            <nav class="topnav">
                <!-- brand -->
                <a class="brand" href="#">RAMONA</a>
                <!-- nav items -->
                 <div class="nav-items">
                    <a href="#about-sctn" class="nav-link">ABOUT ME</a>
                    <a href="#projects-sctn" class="nav-link">PROJECTS</a>
                    <a href="#contact-sctn" class="nav-link">CONTACT</a>
                 </div>
            </nav>
            
            <!-- content -->
            <div class="site-content">

                <!-- landing section -->
                <section id="landing-sctn">

                    <div id="landing-text">
                        <h1>Hi, I'm Ramona!</h1>
                        <h2>Computer Science Student. Aspiring Web Developer. Welcome to my site, stay & explore!</h2>
                    </div>
                    <div id="landing-icon-group">
                        <a href="https://github.com/ramona-xxii" target="_blank">
                            <i class="bi bi-github icon"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/ramona-mcbrearty-468a76202/" target="_blank">
                            <i class="bi bi-linkedin icon"></i>
                        </a>
                    </div>
                </section> <!-- end of landing section -->

                <!-- about section -->
                <section id="about-sctn" class="section">

                    <h1 class="section-heading"> A little bit about me...</h1>
                    <div id="about-content" class="section-content">

                        <!-- left side column -->
                        <div id="left-abt-col" class="abt-group">
                            <div id="profile-card">
                                <img src="/images/profile_pic.png" alt="photo of ramona" class="about-photo">
                                <h2 id="name-tag">Ramona</h2>
                            </div>
                            <div id="education-container">
                                <h5 class="edu">BCS Computer Science</h5>
                                <p class="edu">Thompson Rivers University</p>
                            </div>
                        </div>

                        <!-- right side column -->
                        <div id="right-abt-col" class="abt-group">
                            <div id="personal-description">
                                <p class="about-paragraph">Hi, I'm Ramona! I'm a Computer Science student at Thompson Rivers 
                                    University, studying remotely from my hometown of Toronto, ON. For the past half decade, 
                                    I've worked in the fitness and wellness industry while completing my studies. This 
                                    chapter of my life taught me that success comes from drive, consistency, and the ability 
                                    to grow under pressure—all qualities I now bring to programming. 
                                </p><br>
                                <p class="about-paragraph">While fitness will always be a big part of who I am, I'm excited 
                                    to dive into programming full time. I've been especially drawn to fullstack web 
                                    development, which is why I built this website! I'm eager to contribute to projects that 
                                    push me to keep learning and building. So if you're looking for a programmer with 
                                    discipline, creativity, and killer abs - you've found me!
                                </p>
                            </div> <!-- end of personal description div -->
                        </div> <!-- end of right side column div -->

                    </div> <!-- end of about content div -->
                    
                </section> <!-- end of about section -->

                <!-- banner section -->
                <section id="banner-sctn" class="section">

                <h1 class="section-heading">Skills</h1>
                <div class="section-content">

                    <div class="skills-pair">
                        <h5 class="skills-label">Web Development:</h5>
                            <ul class="skills-list">
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Bootstrap</li>
                                <li>AJAX</li>
                                <li>PHP</li>
                                <li>JavaScript</li>
                                <li>MySQL</li>
                            </ul>
                    </div>

                    <div class="skills-pair">
                        <h5 class="skills-label">Programming Languages:</h5>
                             <ul class="skills-list">
                                <li>Java</li>
                                <li>Python</li>
                                <li>C/C++</li>
                                <li>SQL</li>
                            </ul>
                    </div>

                    <div class="skills-pair">
                        <h5 class="skills-label">Databases:</h5>
                            <ul class="skills-list">
                                <li>MySQL</li>
                            </ul>
                    </div>

                    <div class="skills-pair">
                        <h5 class="skills-label">Version Control:</h5>
                            <ul class="skills-list">
                                <li>Git</li>
                                <li>GitHub</li>
                            </ul>
                    </div>

                </div> <!-- end of section content div -->
                
                </section> <!-- end of banner section -->

                <!-- projects section -->
                <section id="projects-sctn" class="section">
                    <h1>Projects</h1>
                </section> <!-- end of projects section -->

                <!-- contact section -->
                <section id="contact-sctn" class="section">
                    
                    <!-- contact form -->
                        <form action="contact.php" method="post" class="contact-form">
                            <h1 id="contact-heading">Get In Touch!</h1>
                            <p id="contact-subtitle">Please fill out the form below and I'll get back to you ASAP</p>
                            <!-- name input -->
                            <div class="input-group">
                                <i class="bi bi-person form-icon"></i>
                                <input type="text" name="name" placeholder="name*" required>
                            </div>
                            <!-- email input -->
                            <div class="input-group">
                                <i class="bi bi-envelope-at form-icon"></i>
                                <input type="text" name="email" placeholder="email*" required>
                            </div>
                            <!-- phone # input -->
                            <div class="input-group">
                                <i class="bi bi-telephone form-icon"></i>
                                <input type="text" id="phonenumber" name="phonenumber" placeholder="phone number (optional)">
                            </div>
                            <!-- message input -->
                            <div class="input-group textarea-group">
                                <i class="bi bi-chat-right form-icon mssg-icon"></i>
                                <textarea name="message" placeholder="message*" required></textarea>
                            </div>
                            <!-- send button -->
                            <div id="form-btn-container">
                                <button id="send-btn" type="submit"><i class="bi bi-send send-icon"></i> Send</button>
                            </div>
                            
                        </form>
                    
                </section> <!-- end of contact section -->

            </div> <!-- end of content div -->

            <!-- footer -->
            <footer>
                <div class="footer-content">
                    <div id="footer-left">
                        <h2>Ramona</h2>
                        <p>Computer Scientist</p>
                        <div class="footer-icon-group">
                            <a href="https://github.com/ramona-xxii">
                                <i class="bi bi-github footer-icon icon"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/ramona-mcbrearty-468a76202/">
                                <i class="bi bi-linkedin footer-icon icon"></i>
                            </a>
                        </div>
                    </div>
                    <div id="footer-right">
                        <!-- footer navigation list -->
                        <ul id="footer-nav-list">
                            <li><a href="#" class="footer-nav-link">HOME</a></li>
                            <li><a href="#about-sctn" class="footer-nav-link">ABOUT ME</a></li>
                            <li><a href="#projects-sctn" class="footer-nav-link">PROJECTS</a></li>
                            <li><a href="#contact-sctn" class="footer-nav-link">CONTACT</a></li>
                        </ul>
                    </div>
                </div>
                <div id="footer-bottom">
                    <p> &copy; <span id="year"></span> Ramona McBrearty</p>
                </div>
            </footer>
            
        </main>

        <!-- javascript file linking -->
        <script src="js/contact.js"></script>
        <script src="js/footer.js"></script>
    </body>
    
</html>