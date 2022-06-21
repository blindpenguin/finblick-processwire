<?php

namespace Wireframe\Controller;

class HomeController extends \Wireframe\Controller
{
    public function render()
    {
        $this->view->placeholders->hello = "Hello World";
    }
}
