<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MEP</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <div class="container">
        <header>
            <img src="images/dark-logo.svg" alt="mep logo" class="logo">

            <nav>
                <a href="#" class="hide-desktop">
                    <img src="images/menu.svg" alt="toggle menu" class="menu" id="menu">
                </a>

                <ul class="show-desktop hide-mobile" id="nav">
                    <li id="exit" class="exit-btn hide-desktop"><img src="images/exit.svg" alt="exit menu"></li>
                    <li><a href="" class="active">Home</a></li>
                    <li class="dropdown">
                        <a href="services.php" class="dropbtn">Products and Services</a>
                        <div class="dropdown-content">
                            <a href="services.php#accounting">Book Keeping Services</a>
                            <a href="services.php#consulting">Business Consulting</a>
                            <a href="services.php#analysis">Financial Statement Analysis</a>
                            <a href="services.php#software">Application and Website Development</a>
                            <a href="services.php#socialmedia">Social Media Management</a>
                        </div>
                    </li>
                    <li><a href="blog.php">Blog</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <div class="hero-section">

        <section>
            <h1>MEP Book Keeping and accounting services</h1>
        </section>

        <div class="subsection-container">
            <div class="container">
                <h2>Accounting for your small businness</h2>
                <p>At My Every Penny we are passionate about the growth of small business.That's why we provide
                     perfect combination of services to your business. We provide book keeping services, financial
                      statements preparation & analysis, Business consultations, app and website development, and
                       social management. All the support and advice you need to scale your business to new heights</p>
            </div>
        </div>

    </div>

    <img src="images/scroll.svg" alt="scroll down" class="scroll hide-mobile show-desktop">

    <div class="peach-container">
        <div class="container">
            <div class="peach-container-content">
                <h3>About MEP</h3>
                <p>MEP provides the perfect combination of book keeping services, business consultations, app and 
                    web design coupled with social media management. We guide you on how to grow your small business
                     ,and manage your family finances for a smooth ride through life. Our dedicated team of experts
                      will partner with you to grow your brand.</p>
            </div>
        </div>
    </div>

    <div class="gray-container">
        <div class="container">
            <ul>
                <li>
                    <figure>
                        <img src="images/user1.png" alt="user testimonial picture">
                        <blockquote>“Working with MEP is a privilege, they’re so talented. The consultation for our
                            accounting software turned great. We have adopted the recommended software from MEP which
                            has been awesome.” </blockquote>
                        <figcaption>- Jane Doe, Client</figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="images/user2.png" alt="user testimonial picture">
                        <blockquote>“The software we outsourced to MEP has been great. The user interface design is
                            beautiful and it performs all the functionality we required perfectly. The project
                            development was organized and the software was delevered on time. Looking forward to work
                            with MEP again.”</blockquote>
                        <figcaption>- John Doe, Client</figcaption>
                    </figure>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <h4>We take the stress out and let you focus on running the business.</h4>
        <a href="consult.php" class="cta">Get in touch</a>
    </div>

    <footer>
        <div class="footer-container">
            <div class="container">
                <a href="#">
                    <img src="images/light-logo.svg" alt="logo" class="logo">
                </a>
                <br><br>
                <a href="#">
                    <img src="images/instagram.svg" alt="instagram" class="social-media">
                </a>
                <a href="#">
                    <img src="images/twitter.svg" alt="twitter">
                </a>
                <a href="#">
                    <img src="images/facebook.svg" alt="facebook">
                </a>
            </div>
        </div>
    </footer>

    <script>

        var menu = document.getElementById('menu');
        var nav = document.getElementById('nav');
        var exit = document.getElementById('exit');

        menu.addEventListener('click', function(e) {
            nav.classList.toggle('hide-mobile');
            e.preventDefault();
        });

        exit.addEventListener('click', function(e) {
            nav.classList.add('hide-mobile');
            e.preventDefault();
        });

    </script>

</body>
</html>
