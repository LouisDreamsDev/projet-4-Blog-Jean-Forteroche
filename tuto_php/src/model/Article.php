<?php

namespace App\src\model;

use App\DAO\ArticleDAO;

class Article

{

    private $id;
    private $title;
    private $content;
    private $author;
    private $created_at;

    public function get_id() 
    {
        return $this->id;
    }

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function get_title() 
    {
        return $this->title;
    }

    public function set_title($title)
    {
        $this->title = $title;
    }

    public function get_content() 
    {
        return $this->content;
    }

    public function set_content($content)
    {
        $this->content = $content;
    }

    public function get_author() 
    {
        return $this->author;
    }

    public function set_author($author)
    {
        $this->author = $author;
    }

    public function get_created_at() 
    {
        return $this->created_at;
    }

    public function set_created_at($created_at)
    {
        $this->created_at = $created_at;
    }

}

