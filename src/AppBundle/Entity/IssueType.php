<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * This entity represents table with ManyToMany connection
 * of issues and its types
 *
 * @ORM\Entity
 * @ORM\Table(name="issue_type")
 */
class IssueType
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Type")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="Issue")
     * @ORM\JoinColumn(name="issue_id", referencedColumnName="id")
     */
    private $issue;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param \AppBundle\Entity\Type $type
     *
     * @return IssueType
     */
    public function setType(\AppBundle\Entity\Type $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set issue
     *
     * @param \AppBundle\Entity\Issue $issue
     *
     * @return IssueType
     */
    public function setIssue(\AppBundle\Entity\Issue $issue = null)
    {
        $this->issue = $issue;

        return $this;
    }

    /**
     * Get issue
     *
     * @return \AppBundle\Entity\Issue
     */
    public function getIssue()
    {
        return $this->issue;
    }
}
