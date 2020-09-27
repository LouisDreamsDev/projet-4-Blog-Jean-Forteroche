<?php 

namespace App\src\DAO;

use App\config\Parameter;

use App\src\model\Comment;


class CommentDAO extends DAO

{

    private function buildObject ($row)
    {
        $comment = new Comment();
        $comment->set_id($row['id']);
        $comment->set_pseudo($row['pseudo']);
        $comment->set_content($row['content']);
        $comment->set_created_at($row['created_at']);
        $comment->set_flag($row['flag']);
        return $comment;
    }

    public function getCommentFromArticle ($articleId) 
    {

        $sql = 'SELECT id, pseudo, content, flag, created_at FROM comment WHERE article_id = ? ORDER BY created_at DESC';
        
        $result = $this->createQuery($sql, [$articleId]);

        $comments = [];
        foreach($result as $row)
        {
            $commentId = $row['id'];
            $comments[$commentId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $comments;
    }

    public function addComment (Parameter $post, $articleId)
    {
        $sql = 'INSERT INTO comment (pseudo, content, created_at, flag, article_id) VALUES (?, ?, NOW(), ?, ?)';
        $this->createQuery($sql, [$post->get('pseudo'), $post->get('content'), 0, $articleId]);
    }

    public function flagComment($commentId)
    {
        $sql = 'UPDATE comment SET flag = ? WHERE id = ?';
        $this->createQuery($sql, [1, $commentId]);
    }

    public function deleteComment($commentId)
    {
        $sql = 'DELETE FROM comment WHERE id = ?';
        $this->createQuery($sql, [$commentId]);
    }
}