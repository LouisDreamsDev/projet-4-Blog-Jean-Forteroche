<?php

namespace App\src\DAO;

use \App\config\Parameter;

use App\src\model\Article;

class ArticleDAO extends DAO

{

    private function buildObject ($row)
    {
        $article = new Article();
        $article->set_id($row['id']);
        $article->set_title($row['title']);
        $article->set_content($row['content']);
        $article->set_author($row['pseudo']);
        $article->set_created_at($row['created_at']);
        return $article;
    }

    public function getArticles () 
    {
        $sql = 'SELECT article.id, article.title, article.content, article.pseudo, article.created_at FROM article INNER JOIN user ON article.user_id = user_id ORDER BY article.id DESC';
        $result = $this->createQuery($sql);
        $articles = [];
        foreach($result as $row) 
        {
            $articleId = $row['id'];
            $articles[$articleId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $articles;
    }

    public function getArticle($articleId) 
    {

        $sql = 'SELECT article.id, article.title, article.content, article.pseudo, article.created_at FROM article INNER JOIN user ON article.role_id WHERE id = ?';
        $result = $this->createQuery($sql, [$articleId]);
        $article = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($article);
    }

    public function addArticle (Parameter $post, $userId)
    {
        $sql= 'INSERT INTO article (title, content, created_at, user_id) VALUES (?, ?, ?, NOW(), ?)';
        $this->createQuery($sql, [$post->get('title'), $post->get('content'), $userId]);
    }

    public function editArticle (Parameter $post, $articleId)
    {
        $sql = 'UPDATE article SET title=:title, content=:content, author=:author WHERE id=:articleId';
        $this->createQuery($sql, [
            'title' => $post->get('title'),
            'content' => $post->get('content'),
            'author' => $post->get('author'),
            'articleId' => $articleId
        ]);
    }

    public function deleteArticle ($articleId)
    {
        $sql = 'DELETE FROM comment WHERE article_id = ?';
        $this->createQuery($sql, [$articleId]);
        $sql = 'DELETE FROM article WHERE id = ?';
        $this->createQuery($sql, [$articleId]);
    }

}