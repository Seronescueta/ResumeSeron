<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Resume</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #121212;
            color: #ffffff;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        h1, h2, h5 {
            color: #e91e63;
        }

        p, li {
            color: #cfcfcf;
        }

        a {
            color: #e91e63;
            text-decoration: none;
        }

        /* Header Section */
        .header {
            position: relative;
            overflow: hidden;
            height: 500px;
            color: #fff;
        }

        .carousel-inner img {
            height: 100%;
            object-fit: cover;
            opacity: 0.8; /* Slightly dimmed for text readability */
        }

        .profile-info {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5); /* Add a semi-transparent background for better text visibility */
            padding: 20px;
            border-radius: 10px;
        }

        .profile-pic {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 4px solid #e91e63;
            margin-bottom: 10px;
        }

        /* Section Titles */
        .section-title {
            font-weight: bold;
            font-size: 24px;
            text-transform: uppercase;
            margin: 20px 0;
            text-align: center;
        }

        /* Grid Layout */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 40px 20px;
        }

        /* Card Styles */
        .card {
            background-color: #1e1e1e;
            border: none;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: transform 0.3s, background-color 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            background-color: #252525;
        }

        /* Skill Bars */
        .skills-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }

        .skill-bar {
            background: #444;
            border-radius: 5px;
            overflow: hidden;
            position: relative;
        }

        .skill-bar span {
            display: block;
            height: 12px;
            background: #e91e63;
        }

        .skill-label {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            color: #fff;
        }

        /* Footer */
        .footer {
            text-align: center;
            background-color: #1e1e1e;
            padding: 20px;
            font-size: 14px;
            margin-top: 20px;
            color: #bbb;
            border-top: 2px solid #e91e63;
        }

        /* Portfolio Section */
        .portfolio-grid img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .portfolio-grid img:hover {
            transform: scale(1.1);
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .header {
                padding: 20px 10px;
            }

            .section-title {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="header">
        <!-- Carousel -->
        <div id="projectsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Replace these images with paths to your illustration projects -->
                <div class="carousel-item active">
                    <img src="image/2.jpg" class="d-block w-100" alt="Project 1">
                </div>
                <div class="carousel-item">
                    <img src="image/4.jpg" class="d-block w-100" alt="Project 2">
                </div>
                <div class="carousel-item">
                    <img src="image/5.jpg" class="d-block w-100" alt="Project 3">
                </div>
                <div class="carousel-item">
                    <img src="image/6.jpg" class="d-block w-100" alt="Project 4">
                </div>
                <div class="carousel-item">
                    <img src="image/7.jpg" class="d-block w-100" alt="Project 5">
                </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#projectsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#projectsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Profile Info -->
        <div class="profile-info text-center">
            <img src="image/profile.jpg" alt="Profile Picture" class="profile-pic">
            <h1>Jhon Seron D. Escueta</h1>
            <p>Animator | Illustrator</p>
        </div>
    </div>

    <!-- About Me Section -->
    <h2 class="section-title">About Me</h2>
    <div class="grid-container">
        <div>
            <p>Hi, I’m Jhon Seron D. Escueta, a passionate animator and illustrator dedicated to bringing ideas to life through the magic of art and animation. With a deep love for storytelling and visual creativity, I specialize in crafting dynamic characters, immersive environments, and captivating animations that resonate with audiences.

As an aspiring professional, I aim to create unique works that inspire and evoke emotions. My journey in the creative industry is driven by my commitment to continuous growth, exploration of innovative techniques, and delivering quality results. I believe that every illustration and animation has the power to tell a story, and I’m here to make those stories unforgettable.

Whether I’m illustrating detailed concepts or animating characters with life-like expressions, my goal is always to create impactful visuals that leave a lasting impression.</p>
        </div>
        <div>
            <h2 class="section-title">Contact</h2>
            <p><i class="fa fa-phone"></i> 09457513252</p>
            <p><i class="fa fa-envelope"></i> seronnium@gmail.com</p>
            <p><i class="fa fa-map-marker"></i> Gubat, Sorsogon</p>
        </div>
    </div>

    <!-- Experience and Education Section -->
    <h2 class="section-title">Experience & Education</h2>
    <div class="grid-container">
        <!-- Experience -->
        <div>
            <h5>Experience</h5>
            <div class="card" onclick="alert('Worked as a staff at Servay Hypermarket right after secondary school.')">
                <h5>Freelance Illustrator</h5>
                <p>2016</p>
            </div>
            <div class="card" onclick="alert('Internship at Syt Top Decor focusing on construction and design works.')">
                <h5>Animation Head/Solana Crypto</h5>
                <p>2016 - Internship</p>
            </div>
        </div>
        <!-- Education -->
        <div>
            <h5>Education</h5>
            <div class="card" onclick="alert('Diploma in Landscape Architecture, blending creativity with technical precision.')">
                <h5>Gubat National High School</h5>
                <p>2014-2019</p>
            </div>
            <div class="card" onclick="alert('Pursuing a Bachelor\'s Degree in Landscape Architecture.')">
                <h5>Bicol University Polangui</h5>
                <p>2021-Present</p>
            </div>
        </div>
    </div>

    <!-- Skills Section -->
    <h2 class="section-title">Skills</h2>
    <div class="grid-container">
        <div>
            <h5>Animation Skills</h5>
            <div class="skills-container">
                <div class="skill-label">
                    <span>2D Animation</span>
                    <span>90%</span>
                </div>
                <div class="skill-bar">
                    <span style="width: 90%;"></span>
                </div>
                <div class="skill-label">
                    <span>3D Animation</span>
                    <span>80%</span>
                </div>
                <div class="skill-bar">
                    <span style="width: 80%;"></span>
                </div>
            </div>
        </div>
        <div>
            <h5>Software Skills</h5>
            <div class="skills-container">
                <div class="skill-label">
                    <span>Photoshop</span>
                    <span>85%</span>
                </div>
                <div class="skill-bar">
                    <span style="width: 85%;"></span>
                </div>
                <div class="skill-label">
                    <span>After Effects</span>
                    <span>75%</span>
                </div>
                <div class="skill-bar">
                    <span style="width: 75%;"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>&copy; 2024 Jhon Seron D. Escueta. All rights reserved. | <a href="#">Contact Me</a></p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
