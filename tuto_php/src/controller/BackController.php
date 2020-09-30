<?php

namespace App\src\controller;

use \App\config\Parameter;

class BackController extends Controller

{

    public function administration () 
    {
        return $this->view->render('administration');
    }

    public function addArticle (Parameter $post)
    {
        if ($post->get('submit'))
        {
            $errors = $this->validation->validate($post, 'Article');
            if (!$errors)
            {
                $this->articleDAO->addArticle($post, $this->session->get('id'));
                $this->session->set('add_article', 'Le nouvel article a bien été ajouté !');
                header('Location: ../public/index.php');
            }
            return $this->view->render('add_article', [
                'post' => $post,
                'errors' => $errors
            ]);
        }
        return $this->view->render('add_article');
    }

    public function editArticle (Parameter $post, $articleId)
    {
        $article = $this->articleDAO->getArticle($articleId);

        if ($post->get('submit'))
        {
            $errors = $this->validation->validate($post, 'Article');
            if (!$errors)
            {
                $this->articleDAO->editArticle($post, $articleId);
                $this->session->set('edit_article', 'L\'article a bien été modifié !');
                header('Location: ../public/index.php');
            }
            return $this->view->render('edit_article', [
                'article' => $article,
                'errors' => $errors
            ]);
        }

        $post->set('id', $article->get_id());
        $post->set('title', $article->get_title());
        $post->set('content', $article->get_content());
        $post->set('author', $article->get_author());

        return $this->view->render('edit_article', [
            'post' => $post
        ]);
    }

    public function deleteArticle ($articleId)
    {
        $this->articleDAO->deleteArticle($articleId);
        $this->session->set('delete_article', 'L\'article a bien été supprimé !');
        header('Location : ../public/index.php');
    }

    public function deleteComment ($commentId)
    {
        $this->commentDAO->deleteComment($commentId);
        $this->session->set('delete_comment', 'Le commentaire a bien été supprimé !');
        header('Location : ../public/index.php');
    }

    public function profile ()
    {
        return $this->view->render('profile');
    }

    public function updatePassword (Parameter $post)
    {
        if ($post->get('submit'))
        {
            $this->userDAO->updatePassword($post, $this->session->get('pseudo'));
            $this->session->set('update_password', 'Le mot de passe a bien été mis à jour');
            header('Location : ../public/index.php?route=profile');
        }
        return $this->view->render('update_password');
    }

    public function logout ()
    {
        $this->logout_or_delete('logout');
    }

    public function deleteAccount ()
    {
        $this->userDAO->deleteAccount($this->session->get('pseudo'));
        $this->logout_or_delete('delete_account');
    }

    private function logout_or_delete ($param)
    {
        $this->session->stop();
        $this->session->start();
        if ($param === 'logout')
        {
            $this->session->set($param, 'À bientôt');
        }
        else
        {
            $this->session->set($param, 'Votre compte a bien été supprimé');
        }
        header('Location : ../public/index.php');
    }
}