<?php

class Article {
    public function fetch_all() {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM articles");
        $query->execute();

        return $query->fetchAll();
    }

    public function fetch_data($article_id) {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM articles WHERE article_id = ?");
        $query->bindValue(1, $article_id);
        $query->execute();

        return $query->fetch();
    }

    public function fetch_latest_article() {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM articles ORDER BY article_id DESC LIMIT 1");
        $query->execute();

        return $query->fetch();
    }

    public function fetch_recent_articles() {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM articles ORDER BY article_id DESC LIMIT 5");
        $query->execute();

        return $query->fetchAll();
    }

    public function fetch_previous_id($article_id) {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM articles WHERE article_id < ? ORDER BY article_id DESC LIMIT 1");
        $query->bindValue(1, $article_id);
        $query->execute();

        return $query->fetch();
    }

    public function fetch_next_id($article_id) {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM articles WHERE article_id > ? ORDER BY article_id LIMIT 1");
        $query->bindValue(1, $article_id);
        $query->execute();

        return $query->fetch();
    }
}

?>