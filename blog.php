<?php

include_once('includes/connection.php');
include_once('includes/article.php');

$article = new Article;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if ($id == "") {
        $data = $article->fetch_latest_article();
    } else {
        $data = $article->fetch_data($id);
    }
} else {
    $data = $article->fetch_latest_article();
}

$all_articles = $article->fetch_all();
$recent_articles = $article->fetch_recent_articles();

$previous_article = $article->fetch_previous_id($data['article_id']);
$next_article = $article->fetch_next_id($data['article_id']);

?>

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
                    <li><a href="services.php" >products and services</a></li>
                    <li><a href="" class="active">blog</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <div class="blog-container">
        <article class="article-container">
            <h1>
                <?php echo $data['article_title']; ?>
            </h1>
            <ul>
                <li>By Lauren Page,</li>
                <li>Posted on <?php echo date('jS M Y', $data['article_timestamp']); ?></li>
            </ul>
            <p>
                <?php echo $data['article_content']; ?>
            </p>
            <ul>
                <li><a href="blog.php?id=<?php echo $previous_article['article_id'] ?>"><img src="images/back-button.svg" alt="back"></a></li>
                <li><a href="blog.php?id=<?php echo $next_article['article_id'] ?>"><img src="images/next-button.svg" alt="next"></a></li>
            </ul>
        </article>

        <div class="aside-content">

            <aside class="top-aside">
                <h2>
                    Recent Articles
                </h2>
                <?php foreach ($recent_articles as $article) { ?>
                    <ul>
                        <li><a href="blog.php?id=<?php echo $article['article_id']; ?>"><?php echo $article['article_title']; ?></a></li>
                    </ul>
                <?php } ?>
            </aside>
    
            <aside class="bottom-aside">
                <h2>
                    All Articles
                </h2>
                <?php foreach ($all_articles as $article) { ?>
                    <ul>
                        <li><a href="blog.php?id=<?php echo $article['article_id']; ?>"><?php echo $article['article_title']; ?></a></li>
                    </ul>
                <?php } ?>
            </aside>

        </div>

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
