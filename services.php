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
                    <li><a href="index.php">home</a></li>
                    <li><a href="" class="active">products and services</a></li>
                    <li><a href="blog.php">blog</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <div class="hero-section-services">

        <section>
            <h1>We provide the best accounting services for your business.</h1>
        </section>

    </div>

    <img src="images/scroll.svg" alt="scroll down" class="scroll hide-mobile show-desktop">

    <div class="gray-container-services">
        <div class="container">
            <ul>
                <li>
                    <figure>
                        <img src="images/consultation.svg" alt="user testimonial picture">
                        <h3>Accounting Consultancy</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreundefined</p>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="images/accounting-software.svg" alt="user testimonial picture">
                        <h3>Accounting Software</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreundefined</p>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="images/social-media.svg" alt="user testimonial picture">
                        <h3>Social Media Strategy and Management</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreundefined</p>
                    </figure>
                </li>
            </ul>
        </div>
    </div> 

    <div class="container">
        <h4>Request for our services now!</h4>
        <a href="#" class="cta">Get Started</a>
    </div>

    <footer>
        <div class="footer-container">
            <div class="container">
                <a href="#">
                    <img src="images/light-logo.svg" alt="logo" class="logo">
                </a>
                <p class="address">Nairobi CBD, 98210<br>Kenya</p>
                <ul class="footer-links">
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
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