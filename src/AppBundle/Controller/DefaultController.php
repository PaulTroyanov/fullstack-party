<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request, EntityManagerInterface $em)
    {
        $issues = [];
        $issues = $em->getRepository('AppBundle:Issue')->findAll();
        foreach ($issues as $issue) {
            echo "Issue text:" . $issue->getText();
            $user = $em->getRepository('AppBundle:User')->find($issue->getId());
            echo "User leaves the comment:" . $user->getName();
        }
//        //$entityManager = $this->getEntityManager();
//        try {
//            $this->getDoctrine()->getConnection()->connect();
//            $cnx = $this->getDoctrine()->getManager();
//
//        } catch (\Exception $e) {
//            echo "fail";
//        }
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', []);
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
        return $this->render('issue/issue.html.twig', ['issue' => $issue]);
    }
}
