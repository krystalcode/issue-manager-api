<?php

namespace IssueManager\IssueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IssueManagerIssueBundle:Default:index.html.twig', array('name' => $name));
    }
}
