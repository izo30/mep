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
            <h1>We provide the best business and accounting services for your small business.</h1>
        </section>

    </div>

    <img src="images/scroll.svg" alt="scroll down" class="scroll hide-mobile show-desktop">

    <div class="gray-container-services">
        <div class="container">
            <ul>
                <li>
                    <figure>
                        <img src="images/consultation.svg" alt="user testimonial picture">
                        <h3>Business and Accounting Consultancy</h3>
                        <p>We help you analyse financial information to enable better decision making for your business. we guide you through the process of choosing a reliable accounting software that is best suited for your business needs and provide you with support to enable you use the software efficiently.</p>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="images/social-media.svg" alt="user testimonial picture">
                        <h3>Social Media Strategy and Management</h3>
                        <p>We lay the groundwork for building a healthy relationship between your business and your customers. We provide compelling visuals and engaging messgaes that attract more customers to your business and provide a better understanding of your business products and services easily. We beleive that every business should take advantage of social media for marketing and we are here to help in every way.</p>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="images/software.svg" alt="user testimonial picture">
                        <h3>Application and Web Design</h3>
                        <p>We provide quality application development and wesite development. In the modern era, every business should have a website or an application to help support its day to day operations or even expand them. We are here to guide you through the best solution for your businesss and provide quality development services.</p>
                    </figure>
                </li>
            </ul>
        </div>
    </div> 

    <div class="container">
        <h4>Request for our services now!</h4>
        <a href="consult.php" class="cta">Get Started</a>
    </div>

    <footer>
        <div class="footer-container">
            <div class="container">
                <a href="#">
                    <img src="images/light-logo.svg" alt="logo" class="logo">
                </a>
                <br><br>
                <a href="http://instagram.com/kabbie_Wangethi">
                    <img src="images/instagram.svg" alt="instagram" class="social-media">
                </a>
                <a href="https://twitter.com/KabiWangethi">
                    <img src="images/twitter.svg" alt="twitter">
                </a>
                <a href="https://www.linkedin.com/in/kabi-wangethi">
                    <img src="images/linkedin.svg" alt="linkedin">
                </a>
                <a href="https://www.pinterest.com/KabiWangethi">
                    <img src="images/pinterest.svg" alt="pinterest">
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