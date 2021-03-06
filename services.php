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
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a class="dropbtn">Products and Services</a>
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
                    <a name="consulting">
                        <img src="images/consultation.svg" alt="user testimonial picture">
                        <h3>Business Consulting</h3>
                        <p>We help you analyse financial information to enable better decision making for 
                            your business. we guide you through the process of choosing a reliable accounting 
                            software that is best suited for your business needs and provide you with support 
                            to enable you use the software efficiently.</p>
                    </a>
                </li>
                <li>
                    <a name="socialmedia">
                        <img src="images/social-media.svg" alt="user testimonial picture">
                        <h3>Social Media Management</h3>
                        <p>We lay the groundwork for building a healthy relationship between your business and 
                            your customers. We provide compelling visuals and engaging messgaes that attract 
                            more customers to your business and provide a better understanding of your business
                             products and services easily. We beleive that every business should take advantage
                              of social media for marketing and we are here to help in every way.</p>
                    </a>
                </li>
                <li>
                    <a name="accounting">
                        <img src="images/accounting.svg" alt="user testimonial picture">
                        <h3>Book Keeping Services</h3>
                        <p>Outsourcing your bookkeeping and accounting services to MEP frees you to focus on what
                             you do best marketing and growing your business. MEP Bookkeeping takes care of all
                              your accounting and bookkeeping tasks, tax returns and payroll processing helping 
                              you to record transactions, analyze trends and track progress towards your financial
                               goals. We come in handy to do your postings and take care of your fincancial 
                               accounting & bookkeeping services ensuring you get peace of mind knowing your books
                                are accurate and up-to-date at all times.</p>
                    </a>
                </li>
                <li>
                    <a name="analysis">
                        <img src="images/financial-analysis.svg" alt="user testimonial picture">
                        <h3>Financial Statement Analysis</h3>
                        <p>MEP is an experienced finance & accounting outsourcing company which can provide 
                            high-quality and cost-effective financial analysis services of compliant with 
                            international standards. We are a preferred outsourcing partner when it comes to 
                            financial analysis services to clients across the globe, as outsourcing financial 
                            analysis services to FWS ensures better quality, lower cost and easier management.</p>
                    </a>
                </li>
                <li>
                    <a name="software">
                        <img src="images/software.svg" alt="user testimonial picture">
                        <h3>Application and Web Design</h3>
                        <p>We provide mobile application and website development services to suit your requirements. We believe that in the modern era, every business should have a website or mobile application to support its operations. We are here to guide you through the best software solution for your business and provide quality software development services. Some of the services we offer under software development include:</p>
                        <ul class="software-services-list">
                            <li>Web development</li>
                            <li>IOS/Android development</li>
                            <li>Application prototype design</li>
                            <li>Software development consultancy</li>
                        </ul>
                    </a>
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