<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class IssueController extends AbstractController
{
    public function loginAction()
    {

    }

    /**
     * @Route("/issues", name="issues")
     */
    public function listAction(Request $request, EntityManagerInterface $em)
    {
        $issues = $em->getRepository('AppBundle:Issue')->findAll();

        return $this->render('issue/list.html.twig', ['issues' => $issues]);
    }

    /**
     * @Route("/issue/{issueId}", name="homepage")
     *
     * @param $issueId
     * @param EntityManagerInterface $em
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showIssueAction($issueId, EntityManagerInterface $em)
    {
        $issue = $em->getRepository('AppBundle:Issue')->find($issueId);
        $comments = $em->getRepository('AppBundle:Comment')->findBy(['issue' => $issue->getId()]);

        return $this->render('issue/issue.html.twig', ['issue' => $issue, 'comments' => $comments]);
    }
}
