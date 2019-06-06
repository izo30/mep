<?php

session_start();

include_once('../includes/connection.php');
include_once('../includes/article.php');

$article = new Article; 

if (isset($_SESSION['logged_in'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = $pdo->prepare('DELETE FROM articles WHERE article_id = ?');
        $query->bindValue(1, $id);
        $query->execute();

        header('Location: delete.php');
    }

    $articles = $article->fetch_all();

    ?> 
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>CMS Tutorial</title>
            <link rel="stylesheet" href="../assets/style.css" />
        </head>
        <body>
            <div class="container">
                <a href="index.php" id="logo">CMS</a>

                <br> 
                
                <h4>Select an article to delete</h4>

                <form action="delete.php" method="get">

                    <select name="id" onchange="this.form.submit();">
                        <?php foreach ($articles as $article) { ?>
                            <option value="<?php echo $article['article_id']; ?>">
                                <?php echo $article['article_title']; ?>
                            </option>
                        <?php } ?>
                    </select>

                </form>
                
            </div>
        </body>
    </html>
    <?php
} else {
    header('Location: index.php');
}

?>