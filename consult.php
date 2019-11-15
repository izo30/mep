<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MEP</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.validate.js"></script>
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

    <div class="consult-container">
        <form action="includes/sendEmail.php" method="post">
            <label for="company">Company</label>
            <input type="text" id="company" name="company" placeholder="Your name or company name.." minlength="2" required><br><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email.." required><br><br>

            <label for="service">Service</label>
            <select id="service" name="service">
                <option value="consult">Business and Accounting Consultancy</option>
                <option value="social">Social Media Strategy and Management</option>
                <option value="software">Application and Web Design</option>
                <option value="other">Other</option>
            </select><br><br>

            <input type="submit" value="Submit">
        </form>
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
        $("#commentForm").validate();
    </script>

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