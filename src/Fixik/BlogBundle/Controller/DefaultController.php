<?php

namespace Fixik\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FixikBlogBundle:Default:index.html.twig');
    }
}
