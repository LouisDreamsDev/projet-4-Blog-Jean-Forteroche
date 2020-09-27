<?php

namespace App\src\model;

class Comment

{

    private $id;
    private $pseudo;
    private $content;
    private $created_at;
    private $flag;

    public function get_id()
    {
        return $this->id;
    }
    public function set_id($id)
    {
        $this->id = $id;
    }

    public function get_pseudo()
    {
        return $this->pseudo;
    }
    public function set_pseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function get_content()
    {
        return $this->content;
    }
    public function set_content($content)
    {
        $this->content = $content;
    }

    public function get_created_at()
    {
        return $this->created_at;
    }
    public function set_created_at($created_at)
    {
        $this->created_at = $created_at;
    }

    public function is_flag()
    {
        return $this->flag;
    }
    public function set_flag($flag)
    {
        $this->flag = $flag;
    }

}