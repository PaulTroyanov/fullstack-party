<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class IssueController
 * @package AppBundle\Controller
 *
 * This controller handles basic actions of our application
 * I decided not to split actions to different controllers because
 * our app it small
 */
class IssueController extends AbstractController
{
    /**
     * This is our main action where all issues are displayed
     *
     * @Route("/", name="issues")
     */
    public function listAction(Request $request, EntityManagerInterface $em)
    {
        $repository = $em->getRepository('AppBundle:Issue');
        $issues = $repository->findAll();

        $openIssues = $repository->findBy(['status' => 1]);
        $closedIssues = $repository->findBy(['status' => 2]);

        $issueTypes = [];

        /**
         *  Here we are finding all types of specific issue
         */
        foreach ($issues as $issue) {
            $issueType = $em->getRepository('AppBundle:IssueType')->findBy(['issue' => $issue->getId()]);
            foreach ($issueType as $type) {
                if ($type->getType()) {
                    $issueTypes[$issue->getId()][] = $type->getType()->getName();
                }
            }
        }

        return $this->render('issue/list.html.twig', [
            'issues' => $issues,
            'openIssues' => $openIssues,
            'closedIssues' => $closedIssues,
            'issueTypes' => $issueTypes
        ]);
    }

    /**
     * Here we show specific issue with comments to it
     *
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
