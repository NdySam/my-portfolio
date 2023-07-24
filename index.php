<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <title>portfolio</title>

    <!-- swiper css  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


    <link rel="stylesheet" href="style.css">


    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <a href="#"  class="logo">Portfolio.</a>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class='bx bx-moon' id="darkMode-icon"></div>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <!-- home section design -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, I am</h3>
            <h1>Ndifreke Sampson</h1>
            <p>Full-Stack engineer developing awesome softwares that is efficient and scalable</p>

            <div class="social-media">
                <a href="https://www.facebook.com/ndifreke.effiong.39948"><i class='bx bxl-facebook'></i></a>
                <a href="https://twitter.com/Ndy_techqueen?t=pJw6gm_sMesuOFfnEE4Jw&s=09"><i class='bx bxl-twitter'></i></a>
                <a href="https://github.com/NdySam"><i class='bx bxl-github' ></i></a>
                <a href="#"><i class='bx bxl-linkedin' ></i></a>
            </div>

            <a href="#" class="btn">Download CV</a>
        </div>

        <div class="profession-container">
            <div class="profession-box">
                <div class="profession" style="--i:0;">
                    <i class='bx bx-code-alt'></i>
                    <h3>Web Developer</h3>
                </div>
                <div class="profession" style="--i:1;">
                    <i class='bx bx-palette' ></i>
                    <h3>Web Designer</h3>
                </div>
                <div class="profession" style="--i:2;">
                    <i class='bx bxs-camera-plus' ></i>
                    <h3>Photo Editor</h3>
                </div>
                <div class="profession" style="--i:3;">
                    <i class='bx bxs-camera-plus' ></i>
                    <h3>Video Editor</h3>
                </div>
                <div class="circle"></div>
            </div>

            <div class="overlay"></div>
        </div>
        <div class="home-img">
            <!-- <img src="/pictures/WhatsApp_Image_2023-06-24_at_22.39.19-removebg-preview.png" alt=""> -->
        </div>
    </section>

    <!-- about section design -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="pictures/WhatsApp_Image_2023-06-24_at_22.39.19-removebg-preview.png" >
        </div>

        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Hi, I'm Here To Help You on Your Next Project</h3>
            <p>Experience in Software engineering, developing software using agile and Waterfall Methodologies.</p>
            <a href="readmore.php" class="btn">Read More</a>
        </div>
    </section>

    <!-- services section design  -->
    <section class="services" id="services">
        <h2 class="heading">My <span>Services</span></h2>

        <div class="services-container">
            <div class="services-box">
                <i class="bx bx-code-alt"></i>
                <h3>Web Development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde iure porro consequatur dolore suscipit corrupti, esse obcaecati a veritatis molestiae.</p>
                
            </div>
            <div class="services-box">
                <i class="bx bx-bar-chart-alt"></i>
                <h3>IT Support Specialist</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde iure porro consequatur dolore suscipit corrupti, esse obcaecati a veritatis molestiae.</p>
               
            </div>
           
        </div>
    </section>

    <!-- portfolio section design -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading">Latest <span>Projects</span></h2>
        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="pictures/coding-courses-768x431.png"  alt="">

                <div class="portfolio-layer">
                    <h4>Web Development</h4>
                    <a href="https://github.com/NdySam"><i class="bx bx-link-external"></i></a>

                </div>
            </div>
            <div class="portfolio-box">
                <img src="pictures/Screenshot (2).png"  alt="">
                <div class="portfolio-layer">
                    <h4>Web Development</h4>
                    <a href="https://github.com/NdySam"><i class="bx bx-link-external"></i></a>

                </div>
            </div>
            <div class="portfolio-box">
                <img src="pictures/images (2).jpeg"  alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <a href="https://github.com/NdySam"><i class="bx bx-link-external"></i></a>

                </div>
            </div>
            <div class="portfolio-box">
                <img src="pictures/Screenshot (4).png"  alt="">

                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <a href="https://github.com/NdySam"><i class="bx bx-link-external"></i></a>

                </div>
            </div>
        </div>
    </section>

    <!-- testimonial design -->

    <div class="testimonial-container">
        <h2 class="heading">Valuable <span>Testimonial</span></h2>

        <div class="testimonial-wrapper">
            <div class="testimonial-box mySwiper">
                <div class="testimonial-content swiper-wrapper">
                    <div class="testimonial-slide swiper-slide">
                        <img src="pictures/tony.jpg" alt="">
                        <h3>Tony Onuk</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque nulla quasi facere praesentium accusantium blanditiis consectetur repudiandae beatae voluptate odit Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, quo! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, excepturi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro ipsam iure culpa quos excepturi fuga</p>
                    </div>
                    <div class="testimonial-slide swiper-slide">
                        <img src="pictures/ub.jpg" alt="">
                        <h3>Ubong Pendusky</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque nulla quasi facere praesentium accusantium blanditiis consectetur repudiandae beatae voluptate odit Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, quo! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, excepturi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro ipsam iure culpa quos excepturi fuga</p>
                    </div>
                    <div class="testimonial-slide swiper-slide">
                        <img src="pictures/dan.jpg" alt="">
                        <h3>Daniel Afiakurue</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque nulla quasi facere praesentium accusantium blanditiis consectetur repudiandae beatae voluptate odit Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, quo! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, excepturi. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro ipsam iure culpa quos excepturi fuga</p>
                    </div>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </div>

    <!-- contact address section -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form method="post" action="action.php">
            <div class="input-box">
                <input type="text" placeholder="Full Name" name="name" required>
                <input type="email" placeholder="Email Address" name="email" required>
            </div>
            <div class="input-box2">
                <input type="text" placeholder="Subject" name="subject" required>
            </div>
            <textarea name="message"  cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="Submit" value="Send Message" class="btn" name="contact" >
        </form>
    </section>

<!-- footer design -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 by Ndy | All Rights Reserved</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

         <!-- swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js -->
    <script src="script.js"></script>
</body>
</html>