<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ramona | Portfolio</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
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
            <div class="content">
                <!-- landing section -->
                <section id="landing-sctn" class="section">
                    <p>Hi there, I'm</p>
                    <h1>Ramona!</h1>
                    <h2>CS student. Freelance developer. Got an idea?</h2>
                    <div id="landing-btn-container">
                        <button id ="landing-cta-btn" type="button">Let's Build It!</button>
                    </div>
                </section>

                <!-- about section -->
                <section id="about-sctn" class="section">
                    <h1>About Me</h1>
                    <h2>Technical Skills</h2>
                    <p>- HTML</p>
                    <p>- CSS</p>
                    <p>- PHP</p>
                    <p>- JavaScript</p>
                    <p>- Python</p>
                    <p>- Java</p>
                </section>

                <!-- projects section -->
                <section id="projects-sctn" class="section">
                    <h1>Projects</h1>
                </section>

                <!-- contact section -->
                <section id="contact-sctn" class="section">
                    <h1>Get In Touch!</h1>
                    <!-- contact form -->
                        <form action="." method="post" class="contact-form">
                            <!-- name input -->
                            <div class="input-group">
                                <i class="bi bi-person form-icon"></i>
                                <input type="text" name="name" placeholder="name" required>
                            </div>
                            <!-- email input -->
                            <div class="input-group">
                                <i class="bi bi-envelope-at form-icon"></i>
                                <input type="text" name="email" placeholder="email" required>
                            </div>
                            <!-- phone # input -->
                            <div class="input-group">
                                <i class="bi bi-telephone form-icon"></i>
                                <input type="text" id="phonenumber" name="phonenumber" placeholder="phone number">
                            </div>
                            <!-- message input -->
                            <div class="input-group textarea-group">
                                <i class="bi bi-chat-right form-icon mssg-icon"></i>
                                <textarea name="message" placeholder="message" required></textarea>
                            </div>
                            <button id="send-btn" type="submit">Send <i class="bi bi-send send-icon"></i></button>
                        </form>
                    
                </section>
            </div>

            <!-- footer -->
            <footer>
                <div class="footer-content">
                    <div id="footer-left">
                        <h2>RM_Dev</h2>
                        <p>Freelance Fullstack Development</p>
                        <div class="footer-icon-group">
                            <i class="bi bi-github footer-icon"></i>
                            <i class="bi bi-linkedin footer-icon"></i>
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
        <script src="js/footer.js"></script>
        <script src="js/contact.js"></script>
    </body>
    
</html>