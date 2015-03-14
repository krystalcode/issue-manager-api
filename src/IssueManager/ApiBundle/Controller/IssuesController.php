<?php

namespace IssueManager\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class IssuesController extends FOSRestController
{
    public function getIssuesAction()
    {
        $issues = $this->get('doctrine_mongodb')
            ->getRepository('IssueManagerIssueBundle:Issue')
            ->findAll()
        ;

        return $this->handleView($this->view($issues, 200));
    }

    public function getIssueAction($id)
    {
        $issue = $this->get('doctrine_mongodb')
            ->getRepository('IssueManagerIssueBundle:Issue')
            ->find($id)
        ;

        return $this->handleView($this->view($issue, 200));
    }
}
