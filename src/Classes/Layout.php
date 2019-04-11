<?php

namespace Aristides\Classes;

class Layout
{
    private $view;

    public function add($view)
    {
        $this->view = $view;
    }

    public function load()
    {
        return "../src/Views/{$this->view}.php";
    }

    public function master($master)
    {
        return "../src/Views/{$master}.php";
    }
}