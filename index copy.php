<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Welcome to My Portfolio</h1>
            <p>I'm Nilmar Yape, an aspiring web developer creating amazing digital experiences.</p>
            <a href="#contact" class="cta-button">Get in Touch</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <h2>About Me</h2>
        <div class="about-content">
            <div class="about-text">
                <p>I am a 3rd year college student pursuing a Bachelor of Science in Computer Science (BSCS) with a passion for web development. As an aspiring web developer, I combine my academic knowledge with practical skills to create innovative digital solutions.</p>
                <p>My journey in web development has equipped me with a strong foundation in both front-end and back-end technologies. I enjoy the creative process of building user-friendly interfaces while ensuring robust functionality behind the scenes.</p>
                <p>Currently, I'm focusing on mastering modern web technologies and best practices to create responsive, efficient, and user-centric applications. I'm particularly interested in full-stack development and creating seamless user experiences.</p>
            </div>
            <div class="skills">
                <h3>Skills</h3>
                <ul>
                    <li>Front-end Development
                        <ul>
                            <li>HTML5, CSS3, JavaScript</li>
                            <li>Responsive Web Design</li>
                            <li>Modern CSS Frameworks</li>
                        </ul>
                    </li>
                    <li>Back-end Development
                        <ul>
                            <li>PHP</li>
                            <li>Python</li>
                            <li>Database Management</li>
                        </ul>
                    </li>
                    <li>Tools & Technologies
                        <ul>
                            <li>Git Version Control</li>
                            <li>Web Development Tools</li>
                            <li>Problem Solving</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <h2>My Projects</h2>
        <div class="project-grid">
            <div class="project-card">
                <h3>Attendance System</h3>
                <p>A comprehensive attendance management system for Saint Louise Anne College, built with Python and Django. Features include student tracking, attendance reports, and administrative controls.</p>
                <div class="project-links">
                    <a href="https://attendancesystem.pythonanywhere.com/" class="demo-link" title="Live Demo" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            <div class="project-card">
                <h3>Civil Registry System</h3>
                <p>A modern civil registry management system for Mandaluyong City, developed with Laravel. Includes appointment scheduling, document verification, and user management features.</p>
                <div class="project-links">
                    <a href="https://civil-registry-master-bamxf8.laravel.cloud/" class="demo-link" title="Live Demo" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            <div class="project-card">
                <h3>Student Management System</h3>
                <p>A comprehensive student management platform for Saint Louis Anne Colleges, featuring student information management, academic records, and administrative tools.</p>
                <div class="project-links">
                    <a href="https://psyiantist.pythonanywhere.com/" class="demo-link" title="Live Demo" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            <div class="project-card">
                <h3>Nilt AI Chatbot</h3>
                <p>An AI chatbot that can detect images and has access to multiple models is a powerful and versatile tool, especially in fields where both visual understanding and natural language interaction are essential. This kind of chatbot can analyze, interpret, and respond to both text and image inputs, making it far more adaptable than traditional chatbots. </p>
                <div class="project-links">
                    <a href="https://psyiantist.pythonanywhere.com/" class="demo-link" title="Live Demo" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            <div class="project-card">
                <h3>Nilmar Bot</h3>
                <p>An AI chatbot throught Facebook Messenger that can answer questions and provide information about the user also havee a lot commands to use</p>
                <div class="project-links">
                    <a href="https://psyiantist.pythonanywhere.com/" class="demo-link" title="Live Demo" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            <div class="project-card">
                <h3>No Surprises Lyrics Web</h3>
                <p>A lyrics website for the song "No Surprises" by Radiohead. (Pang Relapse :> )</p>
                <div class="project-links">
                    <a href="http://nilt.atwebpages.com/" class="demo-link" title="Live Demo" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <h2>Contact Me</h2>
        <div class="contact-content">
            <form id="contact-form">
                <input type="text" placeholder="Name" required>
                <input type="email" placeholder="Email" required>
                <textarea placeholder="Message" required></textarea>
                <button type="submit" class="submit-button">Send Message</button>
            </form>
            <div class="social-links">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 My Portfolio. All rights reserved.</p>
    </footer>

    <script src="js/main.js"></script>
</body>
</html> 